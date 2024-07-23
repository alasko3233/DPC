<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Domaine;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DomaineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $domaines=Domaine::all();
        return view('dashboard.Pages.Config.Domaine.index',compact('domaines'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.Pages.Config.Domaine.create');
        
    }

    public function saveIMG(Request $request, $name){
        if($request->hasFile($name)){
            $image = $request->file($name);

            $file_extension = $image->getClientOriginalExtension();
            $file_name = uniqid();
            $name='domaine';
            $image_name = $name.'_'.$file_name.'.'.$file_extension;
            $path = public_path() . "/assets/geocom/img/domaine/";
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
            'section'     => 'required',

            'contenu'         => 'required',
            'image'         => 'required',


        ]);
$img=$this->saveIMG($request, 'image');
        $projet=Domaine::create([
            'name'=>    $request->name,
            'section'=>    $request->section,
            'contenu'=>       $request->contenu,
            'image_p'=>      $img,
    
        ]);
        return redirect()->route('manage-domaine.index')->with('success', 'Le domaine a été ajouté avec succès !');



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
        
        $domaine=Domaine::findOrFail($id);
        return view('dashboard.Pages.Config.Domaine.edit',compact('domaine'));

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
        $domaine=Domaine::findOrFail($id);


        $domaine->update([
            'name'=>    $request->name,
            'section'=>    $request->section,
            'contenu'=>       $request->contenu,
        ]);
        if ($request->image) {
            $imgr=$this->saveIMG($request, 'image');
            $domaine->update([
                'image_p'=>      $imgr,
            ]);
        }


        return redirect()->route('manage-domaine.index')->with('success', 'Le domaine a été modifier avec succès !');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        $domaine=Domaine::findOrFail($id);
        $domaine->delete($request->all());
        return redirect()->route('manage-domaine.index')->with('success', 'Le domaine a été suprimé avec succès !');

    }
}
