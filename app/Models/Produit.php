<?php

namespace App\Models;

use App\Models\User;
use App\Models\Stock;
use App\Models\TypeProduit;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Produit extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom_produit', 'img','prix','prix_v','prix_f','prix_c','type_id','qte','user_id','type_id'
    ];
    public function stock(){
        return $this->hasOne(Stock::class, 'type_id') ;
    }
    public function user(){
        return $this->belongsTo(User::class , 'user_id'); 
    }
    public function type(){
        return $this->belongsTo(TypeProduit::class , 'type_id'); 
    }
}
