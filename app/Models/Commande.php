<?php

namespace App\Models;

use App\Models\User;
use App\Models\TypeProduit;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Commande extends Model
{
    use HasFactory;
    protected $dates = [
        'created_at',
        'updated_at',
        'date_payement',
    ];
    protected $fillable = [
        'prix', 'produit_id','user_id','marche_id','type_id',
        'qte',
        'montant',
        'is_paid',
        'validate',
        'is_delivery',
        'phone',
        'fournisseur_id',
        'for_client',
        'date_payement'
    ];
    public function client(){
        return $this->belongsTo(User::class , 'user_id'); 
    }
    public function fournisseur(){
        return $this->belongsTo(User::class , 'fournisseur_id'); 
    }
    public function type(){
        return $this->belongsTo(TypeProduit::class , 'type_id'); 
    }
}
