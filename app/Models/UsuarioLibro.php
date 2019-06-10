<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UsuarioLibro extends Model
{
    protected $table = 'usuariolibro';
    protected $primarykey = 'id';
    public $timestamps =  false;
    protected $fillable = ['id','nombre','apePat','apeMat','domicilio','telefono'];
}
?>