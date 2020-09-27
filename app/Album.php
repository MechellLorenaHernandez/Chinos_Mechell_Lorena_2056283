<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $table = "albums";
    protected $primaryKey = "AlbumId";
    public $timestamp = false;

    //Extender modelo: artista tiene muchos Albumes

    public function canciones(){
        return $this->hasMany('App\Cancion' , 'AlbumId');
    }
}