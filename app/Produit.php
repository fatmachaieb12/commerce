<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
     protected $table='Produits';
    public $timestamps=false;
    protected $fillable=['nom','prix','image','livrable'];
}
