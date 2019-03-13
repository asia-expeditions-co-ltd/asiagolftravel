<?php



namespace App;



use Illuminate\Database\Eloquent\Model;



class Subscribe extends Model

{

    //



    protected $table = 'tbl_subcribe';



     public static function Email($email,$type){

        return self::where(['subscribeEmail'=>$email, 'type'=>$type])->first();

    }



     public static function Type($type){

        return self::where('type', $type)->first();

    }

}

