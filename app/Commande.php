<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
   
    public $timestamps=false;
    protected $fillable=['date_achat'];
    public function user()
    {
    	return $this->belongsTo('App\User');
    }
    public function produit()
    {
    	return $this->belongsTo('App\Produit');
    }
}
