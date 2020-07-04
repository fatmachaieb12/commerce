<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Typecontact extends Model
{
  protected $table='typecontacts';
  
     public $timestamps=false;
    protected $fillable=['type',];
}
