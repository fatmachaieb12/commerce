<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
     protected $table='contacts';
     public $timestamps=false;
    protected $fillable=['nom','entreprise_id','typecontact_id'];

    public function typecontact(){
    	return  $this->belongsTo('App\Typecontact');
    }
    public function entreprise(){
    	return  $this->belongsTo('App\Entreprise');
    }

}
