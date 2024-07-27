<?php

namespace App\Http\Controllers;

use App\Models\TypeProduit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TypeProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produits=TypeProduit::all();
        return view('pages.typeproduit.index',compact('produits'));

  
    }
    public function saveIMG(Request $request, $name){
        if($request->hasFile($name)){
            $image = $request->file($name);

            $file_extension = $image->getClientOriginalExtension();
            $file_name = uniqid();
            $image_name = 'type_'.$file_name.'.'.$file_extension;
            $storage_path = "TypeProduit/";
            if ($image !== null && !$image->getError()) {
            // $storage= $file->store($storage_path,'public');
            $storage = Storage::disk('public')->putFileAs($storage_path, $image,$image_name);
      
                
            }


            return $storage;
        }

        return null;
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.typeproduit.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        $img=$this->saveIMG($request, 'image',);

        $projet=TypeProduit::create([
            'nom_type'=>    $request->name,
            'prix_f'=>    $request->prix_f,
            'prix_v'=>    $request->prix_v,
            'prix_c'=>    $request->prix_c,
            'img'=>      $img,
    
        ]);
        return redirect()->route('type_produit.index')->with('success', 'Le Type Produit a été ajouté avec succès !');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $item=TypeProduit::findOrFail($id);
        return view('pages.typeproduit.edit',compact('item'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $projet=TypeProduit::findOrFail($id);


        if ($request->hasFile('image')) {
            // dd('true');
            if ($projet->img) {
                Storage::disk('public')->delete($projet->img);
            }
            $imgr=$this->saveIMG($request, 'image');
            $projet->img = $imgr;
        }
        $projet->nom_type = $request->name;
        $projet->prix_f = $request->prix_f;
        $projet->prix_v = $request->prix_v;
        $projet->prix_c = $request->prix_c;
 
        $projet->update();

        return redirect()->route('type_produit.index')->with('success', 'Le Type Produit a été modifié avec succès !');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
