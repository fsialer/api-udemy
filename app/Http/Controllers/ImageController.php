<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function upload_file(Request $request){

        $file=$request->file('uploads');
        foreach($file as $image){
            $name='p_'.time().rand().'.'.$image->getClientOriginalExtension();
            $image->storeAs('products',"{$name}",'asset');       
        }
        return \Response::Json(['status' => 'success',
                            'error'   => false,
                            'filename'    => $name],200);
        
      
        
    }

    public function image($name){
        return public_path.'/images/products'.$name;
    }   
}
