<?php
namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Estante extends Model
{

    protected $table = 'estante';

    protected $primarykey = 'idEstante';

    public $timestamps = false;
    protected $fillable = [
        'nombre'
    ];
}
