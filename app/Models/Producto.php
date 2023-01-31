<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'productos';

    protected $fillable = [
        'id',
        'url_imagen',
        'nombre',
        'cantidad',
        'precio',
    ];
}
