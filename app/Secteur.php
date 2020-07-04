<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Secteur extends Model
{
	public $timestamps=false;
    protected $fillable=['title'];
    public function users()
    {
    	return $this->hasMany('App\User');
    }
    
}
