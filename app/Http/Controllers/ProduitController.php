<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Produit;
use App\Models\Commande;
use App\Models\TypeProduit;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produits=Produit::all();
        $auth=auth()->user();
        switch (true) {

            case $auth->hasRole(['Super Admin']):
                      break;
        
            case $auth->hasRole('syndicat'):
               break;

            case $auth->hasRole('producteur'):
                $produits=Produit::where('user_id',$auth->id)->get();

               break;

            case $auth->hasRole('client'):
                $produits=TypeProduit::with('stock')->get();
                // dd($produits);
               break;

            case $auth->hasRole('revendeur'):
                // dd('true');
                $produits=TypeProduit::with('stock')->get();
                // dd($produits);
                                break;
        

            
        }
        // dd($produits);
        return view('pages.produit.index',compact('produits'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $types=TypeProduit::all();

        return view('pages.produit.create',compact('types'));
        
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
            'type'     => 'required',
            'qte'     => 'required',


        ]);
        $types=TypeProduit::findOrFail($request->type);
        //  dd($request->qte);
        $projet=Produit::create([
            'nom_produit'=>    $types->nom_type,
            'prix_f'=>    $types->prix_f,
            'prix_v'=>    $types->prix_v,
            'prix_c'=>    $types->prix_c,
            'qte'=>      $request->qte,
            'img'=>      $types->img,
            'type_id'=>      $types->id,
            'user_id'=>      auth()->user()->id,
    
        ]);
        return redirect()->route('produits.index')->with('success', 'Le projet a été ajouté avec succès !');



    }
    public function acheter(Request $request,$id)
    {

        $this->validate($request, [
            'phone'     => 'required',
            'qte'     => 'required',


        ]);
        $types=TypeProduit::findOrFail($id);
        // dd($types);
        $date_payement=Carbon::now() ;
        $commande=Commande::create([
            // 'prix'=>    $types->nom_type,
            'produit_id'=>    $types->id,
            'user_id'=>    auth()->user()->id,
            // 'marche_id'=>    $types->prix_c,
            'type_id'=>      $types->id,
            'qte'=>      $request->qte,
            'date_payement'     => $date_payement,

            // 'montant'=>      $types->id,
            'is_paid'=>      1,
            'validate'=>      0,
            'is_delivery'=>      0,
            'phone'=>      $request->phone,
            // 'fournisseur_id'=>      $types->id,
            // 'for_client'=>      auth()->user()->id,
    
        ]);
        return redirect()->route('produits.index')->with('success', 'Achat effectue avec succès! vous serez appelé');



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $type=TypeProduit::findOrFail($id);

        return view('pages.produit.show',compact('type'));
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
