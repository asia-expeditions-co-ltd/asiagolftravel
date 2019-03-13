<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Web;
use Validator;
use  App\Country;

use Illuminate\Support\Facades\Mail;
use \App\Mail\RequestTeeTime;
use \App\Mail\ContactUs;
use \App\Mail\Mailing;
use \App\Tour;
use \App\Subscribe;
use \App\Mailed;
use \App\ConTakeme;
use \App\ConTakeme_tours;
use \App\Contakeme_web;
use \App\ConAsiaEx;
use \App\ConAsiaEx_tours;
use \App\Contakeme_provence;

class MailingController extends Controller
{

  public function getmailing(Request $req){
  
    // return $req->all();
    
      // $getemail_asiaex=ConTakeme_tours::where(['status'=>1])->get();
      
      $getcont=Country::where('id', $req->myselect)->first();
      $getwebname=$req->selectweb;
    if ($req->selectweb=='takemetoburma'){

      $webs =ConTakeme_tours::getourstakeme($req->myselect,1);
    }
    elseif($req->selectweb=='asiagolftravel'){

         $webs = Tour::where(['country_id'=>$req->myselect,'status'=>1])->get();

    }
    elseif($req->selectweb=='asia_expeditions'){
          
         $webs =ConAsiaEx_tours::getoursAsiaEx($req->myselect);
    
    }
    elseif($req->selectweb=='cyclingburma'){
          
         $webs =ConTakeme_tours::getourstakeme($req->myselect,2);
    }
    elseif($req->selectweb=='golftravelmyanmar'){
          
         $webs =ConTakeme_tours::getourstakeme($req->myselect,3);
    }
     return view('admin.mailing.mail_tem', compact('webs','getcont','getwebname'));
  }


  public function mailing_con(Request $re){}

  public function mail_send(Request $req){

    $data1 = $req->getwebname;
    if ($req->checkall) {

        $datame=$req->checkall;
        
   
    if ($req->noname) {
      foreach ($req->noname as $val){
            $dataname[]=$val; 
          // for insert to table
          $dataset            = new Mailed;
          $dataset->email     = $val;
          $dataset->tours_id  = implode(',', $datame); //convert array to string
          $dataset->save();
      }    
    if ($req->getwebname    == 'takemetoburma'){

        $data =ConTakeme_tours::where(['status'=>1])->whereIn('id',$datame)->get();
        $sermail='info@takemetoburma.com';
    }
    elseif ($req->getwebname    == 'cyclingburma'){

        $data =ConTakeme_tours::where(['status'=>1])->whereIn('id',$datame)->get();
        $sermail='info@cyclingburma.com';  
    }
    elseif ($req->getwebname    == 'golftravelmyanmar'){

        $data =ConTakeme_tours::where(['status'=>1])->whereIn('id',$datame)->get();
        $sermail='info@golftravelmyanmar.com';    
    }
    elseif($req->getwebname == 'asiagolftravel'){
        $data = Tour::where(['status'=>1])->whereIn('id',$datame)->get();
        $sermail='info@asiagolftravel.com';
    }
    elseif($req->getwebname == 'asia_expeditions'){
          
         $data =ConAsiaEx_tours::where(['tour_status'=>1,'web'=>1])->whereIn('id',$datame)->get();
         $sermail='inquiry@asia-expeditions.com';
    }
      Mail::bcc($dataname)->send(new Mailing($data , $data1, $sermail));

           return back()->with(['message' => 'Your send to email success ','mclear'=>'my clear in storage']); 
    }
      return back()->with(['message' => 'please input email!!']);
  }
  else{ 
       return back()->with(['message' => 'please select item!!!']);
  } 
}
          
  public function search(Request $request){ 

    $get_check= $request->check;


 // return $request->check;
    $output="";
    $db_ext = \DB::connection('mysql_second');

    if (isset($request->getemail)) {
      $products=\DB::table('tbl_subcribe')->select(\DB::Raw('count(*) as total, subscribeEmail'))->groupBy(\DB::raw('(subscribeEmail)'))->where('subscribeEmail','LIKE','%'.$request->search."%")->whereNotIn('subscribeEmail',$request->getemail)->get();


       $getemail_takeme=$db_ext->table('tbl_subcribe')->select(\DB::Raw('count(*) as total, subscribeEmail'))->groupBy(\DB::raw('(subscribeEmail)'))->where('subscribeEmail','LIKE','%'.$request->search."%")->whereNotIn('subscribeEmail',$request->getemail)->get();

       $getemail_asiaex=ConAsiaEx::where('email','LIKE','%'.$request->search."%")->get();    
      
    }
    else{   
        $products=\DB::table('tbl_subcribe')->select(\DB::Raw('count(*) as total, subscribeEmail'))->groupBy(\DB::raw('(subscribeEmail)'))->where('subscribeEmail','LIKE','%'.$request->search."%")->get();


         $getemail_takeme=$db_ext->table('tbl_subcribe')->select(\DB::Raw('count(*) as total, subscribeEmail'))->groupBy(\DB::raw('(subscribeEmail)'))->where('subscribeEmail','LIKE','%'.$request->search."%")->get();

         $getemail_asiaex=ConAsiaEx::where('email','LIKE','%'.$request->search."%")->get();
    }

    // return $get_check;

       
        if ($get_check=='asiagolftravel') {
          foreach ($products as  $product) {
            $output.='<a  class="addemail" data-id="'.$product->subscribeEmail.'"><input type="hidden" >'.$product->subscribeEmail.'</a>';
          }
        }
        if ($get_check=='takemetoburma') {
             foreach ($getemail_takeme as  $product) {
            $output.='<a  class="addemail" data-id="'.$product->subscribeEmail.'"><input type="hidden" >'.$product->subscribeEmail.'</a>';
          }
        }
        if ($get_check=='asia_expeditions') {
             foreach ($getemail_asiaex as  $product) {
            $output.='<a  class="addemail" data-id="'.$product->email.'"><input type="hidden" >'.$product->email.'</a>';
          } 
        }
        if ($get_check=='cyclingburma') {
             foreach ($getemail_takeme as  $product) {
            $output.='<a  class="addemail" data-id="'.$product->subscribeEmail.'"><input type="hidden" >'.$product->subscribeEmail.'</a>';
          }
        }
         if ($get_check=='golftravelmyanmar') {
             foreach ($getemail_takeme as  $product) {
            $output.='<a  class="addemail" data-id="'.$product->subscribeEmail.'"><input type="hidden" >'.$product->subscribeEmail.'</a>';
          }
        } 
        if ($get_check=='') {
          foreach ($products as  $product) {
            $output.='<a  class="addemail" data-id="'.$product->subscribeEmail.'"><input type="hidden" >'.$product->subscribeEmail.'</a>';
          }
        }  
          // return $products;
          return Response($output); 
         
  }

  public function getmailed(){
       $data = Mailed::orderby('id','desc')->get();
       return view('admin.mailing.mailed', compact('data'));
       
   
  }

}
