<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;
use App\Models\WebUser;
use App\Models\Compte;


class Client extends Model
{
    use HasFactory;
    public $timestamps = false;

    public $guarded = [];

    /**
     * Recuperer le compte d'un client.
     */
    public function compte()
    {
        return $this->hasOne(Compte::class);
    }

    /**
     * Retrouver le user associe.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Retrouver le web user associe.
     */
    public function webuser()
    {
        return $this->belongsTo(WebUser::class);
    }
}
