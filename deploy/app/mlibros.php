<?php

namespace app;

use Illuminate\Database\Eloquent\Model;

class mlibros extends Model
{
    protected $table = 'libros';
    protected $fillable = ['id_libros','nombre','cant_libros','precio','autor','fecha_publi'];
}

