<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Panier;
use App\Models\Client;
use App\Models\Commande;
use App\Models\AddressePaiment;

class Compte extends Model
{
    use HasFactory;
    public $guarded = [];


    /**
     * Retrouver le client associe.
     */
    public function client()
    {
        return $this->belongsTo(Client::class);
    }
    /*
    *
    * Recuperer le panier associe.
    */
   public function panier()
   {
       return $this->hasOne(Panier::class);
   }

   /**
     * La liste des commandes d'un compte.
     */
    public function commandes()
    {
        return $this->hasMany(Commande::class);
    }
    /**
     * La liste des addresse de paiment d'un compte.
     */
    public function addressepaiments()
    {
        return $this->hasMany(AddressePaiment::class);
    }
}
