<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $fillable = [
       'image_url',
        'titre',
        'description',
        // $table->foreignId('id_categorie')->constrained('categorie',
        // $table->foreignId('id_user')->constrained('users'); 
        'email_user',
        'tel_user',
        'price',
    ];
}
