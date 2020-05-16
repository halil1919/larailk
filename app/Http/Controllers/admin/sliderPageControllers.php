<?php

namespace App\Http\Controllers\admin;

use App\backend\sliderModel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class sliderPageControllers extends Controller
{
    function show(){
        return view('backend.slider.sliderindex');
    }

    function sliderEklemeForm(){
        return view('backend.slider.sliderekle');
    }

    function sliderEkledata(Request $request){

        $messages = [
            'required' => 'bu alan :attribute çok zorunlu'
        ];

        $valid = $request->validate([
             "slider_isim" => "required",
             "slider_resim" => "required"
        ],$messages);

        $resim = Storage::disk('uploads')->putFile("/slider",$request->file('slider_resim'));

        $slideEkle = new sliderModel();
        $slideEkle->slider_isim = $request->slider_isim;
        $slideEkle->slider_icerik = $request->slider_icerik;
        $slideEkle->slider_resim = $resim;
        $kayit = $slideEkle->save();

        if($kayit){
          return  redirect(route('admin.slider.slideranasayfa'));
        }
    }

    function sliderupdateform($id){

        echo $id;
    }


}


