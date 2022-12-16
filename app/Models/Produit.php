<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\ProduitBoutique;
use App\Models\Boutique;

class Produit extends Model
{
    use HasFactory;
    public $guarded = [];

    /**
     * Recupere la liste des boutique ou un produit apparait.
     */
    public function boutiques()
    {
        return $this->belongsToMany(Boutique::class)
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

}





