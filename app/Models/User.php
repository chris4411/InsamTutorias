<?php

namespace App\Models;


use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

use Laravel\Passport\HasApiTokens;
use Laratrust\Traits\LaratrustUserTrait;

use App\Models\Client;
use App\Models\Livreur;
use App\Models\Vendeur;


class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, LaratrustUserTrait;
    public $timestamps = false;

    protected $guarded = [];
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token', 'activation_token'
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    /**
     * Recuperer le client associe.
     */
    public function client()
    {
        return $this->hasOne(Client::class);
    }

    /**
     * Recuperer le vendeur associe.
     */
    public function vendeur()
    {
        return $this->hasOne(Vendeur::class);
    }

    /**
     * Recuperer le livreur associe.
     */
    public function livreur()
    {
        return $this->hasOne(Livreur::class);
    }



}
