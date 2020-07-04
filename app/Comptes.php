<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comptes extends Model
{
   protected $table='Comptes';
    public $timestamps=false;
    protected $fillable=['nom','email','adresse'];
}
