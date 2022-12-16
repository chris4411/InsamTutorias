<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

use App\Models\ItemPanier;

class ProduitBoutique extends Pivot
{
    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    use HasFactory;
    public $guarded = [];
    public $incrementing = true;

    /**
     * Recuperer l'item du panier associe.
     */
    public function itempanier()
    {
        return $this->hasOne(ItemPanier::class);
    }
}
