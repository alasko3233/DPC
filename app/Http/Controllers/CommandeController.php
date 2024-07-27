<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Stock;
use App\Models\Produit;
use App\Models\Commande;
use App\Models\TypeProduit;
use Illuminate\Http\Request;

class CommandeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $auth = auth()->user();
        //  dd($request->all());
         if (empty($request->all())) {
        $recherche=0;
            
         }else{
        $recherche=1;

         }
        //  dd($recherche);
          if($request->dated )
        {
          $this->validate($request, [
            'dated'     => 'date_format:Y-m-d\TH:i',
        ]);      }
        if($request->datef)
        {
          $this->validate($request, [
            'datef'         => 'date_format:Y-m-d\TH:i',
        ]);      }
  
        $auth=auth()->user();

        // $partenaire=auth()->user()->id;
        $request->session()->flashInput($request->input());   
        

      $fournisseurs=User::role(['producteur'])->orderby('lastname','asc')->get();
      $types=TypeProduit::all();

    //   $categories=Categorie::whereNotIn('id',[6,2])->get();
        //    dd($agents);
  
       $query = Commande::query();
    //    $query->where('is_paid', 1);
  
  
    //    if ($request->filled('peage')) {
    //     if($request->peage !== 'tous'){
  
    //        $query->where('peage_id', $request->peage);
    //        $directions=Direction::where('peage_id', $request->peage)->get();
    //        $agents=User::role(['Caisse'])->where('peage_id',$request->peage)->orderby('lastname','asc')->get();
    //     }
    //    }
   
    //    if ($request->filled('direction')) {
    //     if($request->direction !== 'tous'){
    //        $query->where('direction_id', $request->direction);
    //     }
    //    }
       if ($request->filled('type')) {
        if($request->type !== 'tous'){
  
         $query->where('type_id', $request->type);
        }
     }
     if ($request->filled('agent')) {
      if($request->agent !== 'tous'){
        $query->where('agent', 'like', '%'.$request->agent.'%');
      }
  }


  if ($request->filled('dated') && $request->filled('datef')) {
    $start_date = Carbon::createFromFormat('Y-m-d\TH:i', $request->input('dated'));
    $end_date = Carbon::createFromFormat('Y-m-d\TH:i', $request->input('datef'));
     $query->where([['date_payement', '>=',$start_date],['date_payement', '<=',$end_date]]);
   }
   if ($request->filled('dated') && $request->filled('datef')) {
    $start_date = Carbon::createFromFormat('Y-m-d\TH:i', $request->input('dated'));
    $end_date = Carbon::createFromFormat('Y-m-d\TH:i', $request->input('datef'));

    // Utiliser les dates fournies dans la requête
    $query->where([['date_payement', '>=', $start_date], ['date_payement', '<=', $end_date]]);
}


          switch (true) {
            case $auth->hasRole(['Super Admin']):
              $data = $request->all();
              $paymentss = $query->orderby('date_payement', 'desc')->with('type')->get();
              $paymentss = $paymentss->map(function ($commande) {
                 $commande->prix_f = $commande->type->prix_f ?? 0; // Remplacez 'montant' par le nom du champ dans la table `type`
                 $commande->prix_c = $commande->type->prix_c ?? 0; // Remplacez 'montant' par le nom du champ dans la table `type`
                 $commande->prix_v = $commande->type->prix_v ?? 0; // Remplacez 'montant' par le nom du champ dans la table `type`
                 return $commande;
             });
             // dd($paymentss->sum('qte'));
              $payments = $query->orderby('date_payement', 'desc')->with('type')->paginate(1000);
                break;
  
      case $auth->hasRole('syndicat'):
         break;

      case $auth->hasRole('producteur'):
        $query->where('fournisseur_id', $auth->id);
        $data = $request->all();
        $paymentss = $query->orderby('date_payement', 'desc')->with('type')->get();
        $paymentss = $paymentss->map(function ($commande) {
           $commande->prix_f = $commande->type->prix_f ?? 0; // Remplacez 'montant' par le nom du champ dans la table `type`
           $commande->prix_c = $commande->type->prix_f ?? 0; // Remplacez 'montant' par le nom du champ dans la table `type`
           $commande->prix_v = $commande->type->prix_v ?? 0; // Remplacez 'montant' par le nom du champ dans la table `type`
           return $commande;
       });
       // dd($paymentss->sum('qte'));
        $payments = $query->orderby('date_payement', 'desc')->with('type')->paginate(1000);
         break;

      case $auth->hasRole('client'):
        $query->where('user_id', $auth->id);
        $data = $request->all();
        $paymentss = $query->orderby('date_payement', 'desc')->with('type')->get();
        $paymentss = $paymentss->map(function ($commande) {
           $commande->prix_f = $commande->type->prix_f ?? 0; // Remplacez 'montant' par le nom du champ dans la table `type`
           $commande->prix_c = $commande->type->prix_c ?? 0; // Remplacez 'montant' par le nom du champ dans la table `type`
           $commande->prix_v = $commande->type->prix_v ?? 0; // Remplacez 'montant' par le nom du champ dans la table `type`
           return $commande;
       });
       // dd($paymentss->sum('qte'));
        $payments = $query->orderby('date_payement', 'desc')->with('type')->paginate(1000);
         break;

      case $auth->hasRole('revendeur'):
        $query->where('fournisseur_id', $auth->id)->orwhere('user_id', $auth->id);
        $data = $request->all();
        $paymentss = $query->orderby('date_payement', 'desc')->with('type')->get();
        $paymentss = $paymentss->map(function ($commande) {
           $commande->prix_f = $commande->type->prix_f ?? 0; // Remplacez 'montant' par le nom du champ dans la table `type`
           $commande->prix_c = $commande->type->prix_v ?? 0; // Remplacez 'montant' par le nom du champ dans la table `type`
           $commande->prix_v = $commande->type->prix_v ?? 0; // Remplacez 'montant' par le nom du champ dans la table `type`
           return $commande;
       });
       // dd($paymentss->sum('qte'));
        $payments = $query->orderby('date_payement', 'desc')->with('type')->paginate(1000);
        break;
         

             
         }

           return view('pages.commande.index',compact('recherche','payments','paymentss','fournisseurs','types'));
  
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $item=Commande::findOrFail($id);


            if( auth()->user()->hasRole('Super Admin'))
            {
            }elseif( auth()->user()->hasRole('producteur'))
            {
                $stock = Produit::where([['type_id',$item->type_id],['user_id',auth()->user()->id]])->exists();
                // dd($stock);
                if($stock){
                $stock = Produit::where([['type_id',$item->type_id],['user_id',auth()->user()->id]])->first();

                    $stock->qte = $stock->qte - $item->qte;
                    $stockR = Stock::where([['type_id',$item->type_id],['user_id',$item->user_id]])->exists();
                    // dd($stockR);
                    if(!$stockR){
                        $save= Stock::create([
                            'qte' => $item->qte,
                            'user_id' => $item->user_id,
                            'type_id' => $item->type_id,
                        ]);
                        $item->update([
                            'validate' => 1,
                            'is_delivery' => 1

                        ]);
            
                        return redirect()->route('commande.index')->with('success', 'la Commande est Validée !');
                    }else{
                        $stockR = Stock::where([['type_id',$item->type_id],['user_id',$item->user_id]])->first();
                        $stockR->qte = $stockR->qte + $item->qte;
                        $stockR->update();
                        $item->update([
                            'validate' => 1,
                            'is_delivery' => 1
                        ]);
            
                        return redirect()->route('commande.index')->with('success', 'la Commande est Validée !');
                    }
              
                }else{
                    return redirect()->route('commande.index')->with('error', 'Vous navez de stock pour ce produit !');
                }


           }elseif( auth()->user()->hasRole('revendeur')){
            $stock = Stock::where([['type_id',$item->type_id],['user_id',auth()->user()->id]])->exists();
            if($stock){
            $stock = Stock::where([['type_id',$item->type_id],['user_id',auth()->user()->id]])->first();

              $stock->qte = $stock->qte - $item->qte;
              $stock->update();
              $item->update([
                'validate' => 1,
                'is_delivery' => 1

            ]);

            return redirect()->route('commande.index')->with('success', 'la Commande est Validée !');
            }else{
                return redirect()->route('commande.index')->with('error', 'Vous navez pas de stock pour ce produit !');

            }
    
            }else{

            }


     
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
 
        $item=Commande::findOrFail($id);
        $user=User::findOrFail($item->user_id);
        switch (true) {
            case $user->hasRole(['Super Admin']):
                break;
  
      case $user->hasRole('syndicat'):
         break;

      case $user->hasRole('producteur'):
        $fournisseurs=User::role(['producteur'])->orderby('lastname','asc')->get();

         break;

      case $user->hasRole('client'):
        $fournisseurs=User::role(['revendeur'])->orderby('lastname','asc')->get();

         break;

      case $user->hasRole('revendeur'):
        $fournisseurs=User::role(['producteur'])->orderby('lastname','asc')->get();

        break;
         

             
         }
        //  $fournisseurs=User::role(['revendeur'])->orderby('lastname','asc')->get();

        return view('pages.commande.edit',compact('item','fournisseurs'));    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $fournisseur=Commande::findOrFail($id);


        $fournisseur->fournisseur_id = $request->fournisseur;
 
        $fournisseur->update();
        return redirect()->route('commande.index')->with('success', 'Fournisseur Attribuer avec succès!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
