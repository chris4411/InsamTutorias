<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\WebUser;
use App\Models\Compte;
use App\Models\ItemPanier;

class Panier extends Model
{
    use HasFactory;
    public $guarded = [];

    /**
     * Retrouver le web user associe.
     */
    public function webuser()
    {
        return $this->belongsTo(WebUser::class);
    }
    /**
     * Retrouver le compte associe.
     */
    public function compte()
    {
        return $this->belongsTo(Compte::class);
    }

    /**
     * Recuperer l'item du panier associe.
     */
    public function itempanier()
    {
        return $this->hasOne(ItemPanier::class);
    }
}
