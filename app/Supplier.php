<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    //
     protected $table = 'tbl_supplier';

    public function tour(){
    	return self::hasMany(Tour::class, 'id');
    }

    public function event(){
    	return self::hasMany(Events::class);
    }
        public function web(){
        return $this->belongsToMany(Web::class);
    }

    public function category(){
        return $this->belongsToMany(Category::class);
    }
    public function province(){
    	return self::belongsTo(Province::class);
    }

    public function country(){
    	return $this->belongsTo(Country::class);
    }

}
