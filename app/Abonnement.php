<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Abonnement extends Model
{
    //
    protected $table='Abonnements';
    public $timestamps=false;
    protected $fillable=['dated','montant'];
}
