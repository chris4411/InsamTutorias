<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;

class Livreur extends Model
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
}
