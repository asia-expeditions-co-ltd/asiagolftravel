<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contakeme_web extends Model
{
    //
   protected $connection = 'mysql_second';
   protected $table='tbl_website';

      public function conTakeme_tours(){

    	return $this->belongsTo(ConTakeme_tours::class);

    }
}
