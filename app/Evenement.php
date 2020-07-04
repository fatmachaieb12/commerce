<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evenement extends Model
{
    protected $table='Evenements';
    public $timestamps=false;
    protected $fillable=['nom','description','affiche','lieu','date debut','date fin','nombre','prix'];
}
