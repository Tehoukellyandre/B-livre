<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\belongsTo;

class Livre extends Model
{
    use HasFactory;

    protected $fillable=[
        'title','auteur','date_pub','genre'
    ];


    public function utilisateur(){

            return $this->belongsTo(Utilisateur::class, 'utilisateur_id');

    }
}

