<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\User;
use App\Mail\WelcomeMail;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class SuperAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users =  User::role([
            'Super Admin'
            ])->get();
        return view('dashboard.Pages.Config.SuperAdmin.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.Pages.Config.SuperAdmin.create', );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $user = auth()->user();

        $this->validate($request, [
            'name'     => 'required|string|max:80',
            'phone'         => 'required|unique:users,phone|min:8|max:8',
            'email'         => 'required|email|unique:users,email|max:70',
            'genre'         => 'required|string',
        ]);
        $password = '00000000';
        $token = Str::random(64);

        $phone=str_replace(' ','',$request->phone);
        $user= User::create([
            'name'     => $request->name,
            'phone'         => $phone,
            'email'         => $request->email,
            'genre'         => $request->genre,
            'password'         => Hash::make($password),

        ]);
        $user->assignRole("Super Admin");
        Mail::to($user->email)->send(new WelcomeMail($user));


        return redirect()->route('manage-superadmin.index')->with('success', 'L\' utilisateur a été ajouté avec succès !');




    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $user=User::findOrFail($id);
        return view('dashboard.Pages.Config.SuperAdmin.edit',compact('user'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $user=User::findOrFail($id);
        $user->update($request->all());
        return redirect()->route('manage-superadmin.index')->with('success', 'L\' utilisateur a été modifier avec succès !');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        //
        $user=User::findOrFail($id);
        $user->delete($request->all());
        return redirect()->route('manage-superadmin.index')->with('success', 'L\' utilisateur a été suprimé avec succès !');

    }
}
