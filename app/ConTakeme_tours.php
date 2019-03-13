<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ConTakeme_tours extends Model
{
   protected $connection = 'mysql_second';
   protected $table='tbl_tours';

       public function contakeme_provence(){

    	return $this->belongsTo(Contakeme_provence::class);

    }

  public static function getourstakeme($getc,$getweb){
    $db_ext = \DB::connection('mysql_second');
 	return $db_ext
 	->table('tbl_tours as t')
 	->select('*',\DB::Raw('web.id as w_id,t.id as id,prov.id as p_id,t.slug as slug'))
 	->join('tour_web as web', 'web.tour_id', '=', 't.id')
 	->join('province as prov', 't.province_id', '=', 'prov.id')
 	->where(['t.country_id'=>$getc,'t.status'=>1,'web.web_id'=>$getweb])
 	->get();
 }
}
