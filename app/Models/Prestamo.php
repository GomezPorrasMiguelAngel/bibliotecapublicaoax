<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Prestamo extends Model
{
    protected $table = 'prestamol';
    protected $primarykey = 'id';
    public $timestamps =  false;
    protected $fillable = ['id','libro','usuarioLibro','fechaPrestamo','fechaDev','fechaEntrega','observaciones'];
}
?>