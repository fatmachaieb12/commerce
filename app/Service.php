<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
     protected $table='Services';
    public $timestamps=false;
    protected $fillable=['nom','prix','description','domicile'];
}
