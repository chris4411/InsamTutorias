<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Compte;
use App\Models\Facture;
use App\Models\ItemPanier;

class Commande extends Model
{
    use HasFactory;
    public $guarded = [];

    /**
     * retrouvele compte client assoie
     */
    public function compte()
    {
        return $this->belongsTo(Compte::class);
    }

    /**
     * Recuperer la facture associe.
     */
    public function facture()
    {
        return $this->hasOne(Facture::class);
    }
    /**
     * La liste des items d'une commande.
     */
    public function itempaniers()
    {
        return $this->hasMany(ItemPanier::class);
    }
}
