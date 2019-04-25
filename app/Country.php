<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Country extends Model
{
   
    protected $table = 'country';

    public function tour(){
        return self::hasMany(Tour::class);
    }
    
    public function province (){
        return $this->hasMany(Province::class);
    }

    public static function getgolf_c(){
             $data = DB::table('tbl_tours as tour')
    ->select(DB::Raw('tour.country_id as c_id ,ct.country_name ,ct.id , count(country_id) as total '))->
    groupBy(DB::raw('(c_id),(ct.country_name),(ct.id)'))
    ->orderby('c_id', 'asc')
    ->join('country as ct', 'tour.country_id', '=', 'ct.id')
    ->where(['tour.type'=>2,'tour.status'=>1])
    ->get();

       return $data;
  
    }
    public static function getgolf_t(){
                $data = DB::table('tbl_tours as tour')
    ->select(DB::Raw('tour.country_id as c_id ,ct.country_name ,ct.id , count(country_id) as total '))->
    groupBy(DB::raw('(c_id),(ct.country_name),(ct.id)'))
    ->orderby('c_id', 'asc')
    ->join('country as ct', 'tour.country_id', '=', 'ct.id')
    ->where(['tour.type'=>1,'tour.status'=>1])
    ->get();

       return $data;
  
    }

    public static function getgolf_r(){
             $data = DB::table('tbl_tours as tour')
    ->select(DB::Raw('tour.country_id as c_id ,ct.country_name ,ct.id , count(country_id) as total '))->
    groupBy(DB::raw('(c_id),(ct.country_name),(ct.id)'))
    ->orderby('c_id', 'asc')
    ->join('country as ct', 'tour.country_id', '=', 'ct.id')
    ->where(['tour.type'=>3,'tour.status'=>1])
    ->get();

       return $data;
  
    }

    public static function getdes_all(){
    return    $data = DB::table('tbl_tours')
    ->join('country', 'tbl_tours.country_id', '=', 'country.id')
    ->where(['tbl_tours.status'=>1])
    ->select("country.*")
    ->groupBy('tbl_tours.country_id')
    ->get();
       
  
    }
}
