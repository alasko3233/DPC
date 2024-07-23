<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Document;
use Illuminate\Http\Request;

class DocumentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $documents=Document::all();
        return view('dashboard.Pages.Config.Documents.index',compact('documents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.Pages.Config.Documents.create');
        
    }

    public function saveIMG(Request $request, $name){
        if($request->hasFile($name)){
            $image = $request->file($name);

            $file_extension = $image->getClientOriginalExtension();
            $file_name = uniqid();
            $name='document';
            $image_name = $name.'_'.$file_name.'.'.$file_extension;
            $path = public_path() . "/assets/omafes/img/Doc/";
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
            'date'     => 'required',
            'image'         => 'required',


        ]);
$img=$this->saveIMG($request, 'image');
        $document=Document::create([
            'name'=>    $request->name,
            'date'=>   $request->date,
            'contenu'=>   $img,
    
        ]);
        return redirect()->route('manage-document.index')->with('success', 'document ajouté avec succès !');



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
        
        $document=Document::findOrFail($id);
        return view('dashboard.Pages.Config.Documents.edit',compact('document'));

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
        $document=Document::findOrFail($id);
        $imgr=$this->saveIMG($request, 'image');

        $document->update([
            'name'=>    $request->name,
            'date'=>   $request->date,
            'contenu'=>       $request->image,
            ]);
        return redirect()->route('manage-document.edit')->with('success', 'Le document a été modifier avec succès !');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        $document=Document::findOrFail($id);
        $document->delete($request->all());
        return redirect()->route('manage-document.index')->with('success', 'Le document à été suprimé avec succès !');

    }
}