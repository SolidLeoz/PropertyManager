<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable=[
        // il db non accetta di essere vuoto ed è protetto dal fillable che richiede questi dati
        'title',
        'description',
        'check',
        'file'

    ];
}
