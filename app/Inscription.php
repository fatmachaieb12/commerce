<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inscription extends Model
{
    protected $table='inscriptions';
    public $timestamps=false;
    protected $fillable=['nom','adresse','email','telp'];
}
