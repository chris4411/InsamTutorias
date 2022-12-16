<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Commande;

class Facture extends Model
{
    use HasFactory;
    public $guarded = [];

    /**
     * retrouvele compte client assoie
     */
    public function commande()
    {
        return $this->belongsTo(Commande::class);
    }
}
