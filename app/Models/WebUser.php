<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Client;
use App\Models\Panier;

class WebUser extends Model
{
    use HasFactory;
    public $guarded = [];

    /**
     * Recuperer le client associe.
     */
    public function client()
    {
        return $this->hasOne(Client::class);
    }
    /**
     * Recuperer le panier associe.
     */
    public function panier()
    {
        return $this->hasOne(Panier::class);
    }
}
