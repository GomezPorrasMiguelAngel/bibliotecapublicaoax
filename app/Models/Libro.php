<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{

    protected $table = 'libro';

    protected $primarykey = 'idLibro';

    public $timestamps = false;
    protected $fillable = [
        'titulo', 'genero', 'editorial', 'anio', 'nuPaginas', 'autor', 'lugar'
    ];
}
