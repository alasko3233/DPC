<?php

namespace App\Models;

use App\Models\Stock;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TypeProduit extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom_type', 'img','prix','prix_v','prix_f','prix_c'
    ];
    public function stock(){
        return $this->hasOne(Stock::class, 'type_id') ;
    }
    // public function imgUrl()
    // {
    //     return Storage::disk('public')->url($this->img);   
    //  }
    public function imgUrl()
{
    // Assurez-vous que $this->img contient le chemin relatif à public/
    $relativePath = $this->img; // Par exemple : 'images/type_66a4f198221c8.jpg'
    
    // Utilisez asset() pour générer l'URL complète à partir du chemin relatif
    return asset($relativePath);
}
}
