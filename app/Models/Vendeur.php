<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;
use App\Models\Boutique;

class Vendeur extends Model
{
    use HasFactory;
    public $guarded = [];

    /**
     * Retrouver le user associe.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    /**
     * recupere les boutiques d'un vendeur
     */
    public function boutiques()
    {
        return $this->hasMany(Boutique::class);
    }
}
