<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\ProduitBoutique;
use App\Models\Produit;
use App\Models\Vendeur;

class Boutique extends Model
{
    use HasFactory;
    public $guarded = [];

    /**
     * Recupere la liste des produits venant de cette boutique
     */
    public function produits()
    {
        return $this->belongsToMany(Produit::class)
        ->using(ProduitBoutique::class)
        ->withPivot([
            'id',
            'prix',
            'qte_stock',
            'note',
            'status',
        ])
        ->withTimestamps();
    }
    /*
    * Retrouver le vendeur associe.
    */
   public function vendeur()
   {
       return $this->belongsTo(Vendeur::class);
   }
}
