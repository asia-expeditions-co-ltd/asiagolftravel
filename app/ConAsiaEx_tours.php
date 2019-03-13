<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ConAsiaEx_tours extends Model
{
    //
    protected $connection = 'mysql_third';
   protected $table='tours';


 public static function getoursAsiaEx($getc){
$db_ext = \DB::connection('mysql_third');
 	return $db_ext
 	->table('tours as t')
 	->select('*',\DB::Raw('t.id, t.tour_name as title, prov.province_name, t.country_id, t.tour_price, t.slug,t.tour_type as type, t.tour_photo, t.web'))
 	->join('province as prov', 'prov.id', '=', 't.province_id')
 	->where(['t.country_id'=>$getc,'t.tour_status'=>1])
 	->get();
 }
}
