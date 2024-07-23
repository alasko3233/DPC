<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Projet;
use Illuminate\Http\Request;

class ProjetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projets=Projet::all();
        return view('dashboard.Pages.Config.Projet.index',compact('projets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.Pages.Config.Projet.create');
        
    }

    public function saveIMG(Request $request, $name){
        if($request->hasFile($name)){
            $image = $request->file($name);

            $file_extension = $image->getClientOriginalExtension();
            $file_name = uniqid();
            $name='projet';
            $image_name = $name.'_'.$file_name.'.'.$file_extension;
            $path = public_path() . "/assets/geocom/img/projet/";
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
            'name'     => 'required',
            'status'     => 'required',
            'dated'         => 'required',
            'datef'         => 'required',
            'contenu'         => 'required',
            'image'         => 'required',


        ]);
$img=$this->saveIMG($request, 'image');
        $projet=Projet::create([
            'name'=>    $request->name,
            'status'=>   $request->status,
            'date_d'=>    $request->dated,
            'date_f'=>       $request->datef,
            'contenu'=>       $request->contenu,
            'image_p'=>      $img,
    
        ]);
        return redirect()->route('manage-projet.index')->with('success', 'Le projet a été ajouté avec succès !');



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
        
        $projet=Projet::findOrFail($id);
        return view('dashboard.Pages.Config.Projet.edit',compact('projet'));

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
        $projet=Projet::findOrFail($id);

        $projet->update([
            'name'=>    $request->name,
            'status'=>   $request->status,
            'date_d'=>    $request->dated,
            'date_f'=>       $request->datef,
            'contenu'=>       $request->contenu,
        ]);
        if ($request->image) {
            // dd('true');
            $imgr=$this->saveIMG($request, 'image');
            $projet->update([
                'image_p'=>      $imgr,
            ]);
        }

        return redirect()->route('manage-projet.index')->with('success', 'Le projet a été modifier avec succès !');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        $projet=Projet::findOrFail($id);
        $projet->delete($request->all());
        return redirect()->route('manage-projet.index')->with('success', 'Le projet a été suprimé avec succès !');

    }
}
