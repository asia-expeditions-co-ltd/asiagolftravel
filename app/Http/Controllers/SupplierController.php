<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Supplier;
use Validator;
use App\Tag;
use Intervention\Image\ImageManagerStatic as Image;

class SupplierController extends Controller
{
    public function index(){
    	  $supp = Supplier::where('status', 1)->orderBy('id', 'DESC')->get();
        if (isset($req->sort)) {
            $supp = Supplier::where('status', 0)->orderBy('id', 'DESC')->get();
        }

    	return view('admin.supplier.supplier_list', compact('supp'));
    }

    public function getsupp(){
    	return view('admin.supplier.supplier_form');

    }

    public function create(Request $req){

    	 if ( $req->hasFile('image') ) {
          $image = $req->file('image');
          $filename  = time().'-'.$image->getClientOriginalName();
          $img = Image::make($image->getRealPath())->fit(400, 270);
          $img->save(public_path('photos/share/thumbs/'.$filename));
        $image->move(public_path('photos/share/'), $filename);
      }else{
          $filename = '';
      }
    	$addsSup                  = new Supplier;
    	$addsSup->supplier_name   = $req->sup_name;
    	$addsSup->country_id      = $req->country;
    	$addsSup->province_id     = $req->province;
        $addsSup->supplier_photo  = $filename;
        $addsSup->description     = $req->intro;
    	$addsSup->status          = 1;
    	$addsSup->save();
    	return back()->with('message', 'Published Success');
    }


      public function edit($id)
    {
        $webid ='';
        $categoryid ='';
        $supp = Supplier::find($id);
     
        return view('admin.supplier.supplier_edit', compact('supp'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req)
    {
        try{
            if (isset($req->btnPublish)) {
                $status = 1;
                $action ='Update Successfully';
            }else{
                $status = 0;
                $action ='Saved To Trash';
            }
            $picture = '';
            $photo = $req->old_photo;
            
    
            if ( $req->hasFile('image') ) {
                $image = $req->file('image');
                $photo = time().'-'.$image->getClientOriginalName();
                $img = Image::make($image->getRealPath())->fit(400, 270);
                $img->save(public_path('photos/share/thumbs/'.$photo));
                $image->move(public_path('photos/share/'), $photo);
            }

            $add = Supplier::find($req->id);   

            $add->supplier_photo = $photo;
            $add->country_id = $req->country;
            $add->province_id = $req->province;
            $add->description = $req->intro;      
            $add->status = $status;
            $add->save();

            \Session::flash('message', $action);
            return redirect()->route('suppList');
        }catch (Exception $e) {
            return back()->with('message', 'Something went wrong please try again ');
        }
    }
}
