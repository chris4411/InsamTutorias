<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Compte;

class AddressePaiment extends Model
{
    use HasFactory;
    public $guarded = [];

    /**
     * Retrouver le client associe.
     */
    public function client()
    {
        return $this->belongsTo(Compte::class);
    }
}
