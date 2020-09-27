<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cancion extends Model
{
    protected $table = "tracks";
    protected $primaryKey = "TrackId";
    public $timestamp = false;
}
