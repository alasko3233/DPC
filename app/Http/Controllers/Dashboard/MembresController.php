<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Team;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MembresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $membres=Team::all();
        return view('dashboard.Pages.Config.Membres.index',compact('membres'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.Pages.Config.Membres.create');
        
    }

    public function saveIMG(Request $request, $name){
        if($request->hasFile($name)){
            $image = $request->file($name);

            $file_extension = $image->getClientOriginalExtension();
            $file_name = uniqid();
            $name='membre';
            $image_name = $name.'_'.$file_name.'.'.$file_extension;
            $path = public_path() . "/assets/omafes/img/membres/";
            $image->move($path, $image_name);

            return $image_name;
        }

        return null;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'prenom'     => 'required',
            'nom'     => 'required',
            'phone'         => 'required',
            'email'         => 'required',
            'genre'         => 'required',
            'poste'     => 'required',
            'image'         => 'required',


        ]);
$img=$this->saveIMG($request, 'image');
        $membre=Membre::create([
            'civilite'=>    $request->genre,
            'firstname'=>   $request->nom,
            'lastname'=>    $request->prenom,
            'phone'=>       $request->phone,
            'email'=>       $request->email,
            'poste'=>       $request->poste,
            'image_m' =>    $img,
    
        ]);
        return redirect()->route('manage-membre.index')->with('success', 'La personne a été ajouté avec succès !');



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
        
        $membre=Membre::findOrFail($id);
        return view('dashboard.Pages.Config.Membres.edit',compact('membre'));

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
        $membre=Membre::findOrFail($id);
        $imgr=$this->saveIMG($request, 'image');

        $membre->update([
            'civilite'=>    $request->genre,
            'firstname'=>   $request->nom,
            'lastname'=>    $request->prenom,
            'phone'=>       $request->phone,
            'email'=>       $request->email,
            'poste'=>       $request->poste,
            'image_m' =>    $imgr,
        ]);
        return redirect()->route('manage-membre.index')->with('success', 'L\' utilisateur a été modifier avec succès !');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        $membre=Membre::findOrFail($id);
        $membre->delete($request->all());
        return redirect()->route('manage-membre.index')->with('success', 'L\' utilisateur a été suprimé avec succès !');

    }
}
