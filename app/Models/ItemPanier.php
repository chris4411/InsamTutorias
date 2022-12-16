<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Commande;
use App\Models\Panier;
use App\Models\ProduitBoutique;

class ItemPanier extends Model
{
    use HasFactory;
    public $guarded = [];

    /**
     * retrouve la commande assoie
     */
    public function commande()
    {
        return $this->belongsTo(Commande::class);
    }
    /**
     * retrouve le panier  assoie
     */
    public function panier()
    {
        return $this->belongsTo(Panier::class);
    }
    /**
     * retrouve le produit d'une boutique assoie
     */
    public function produitboutique()
    {
        return $this->belongsTo(ProduitBoutique::class);
    }
}
