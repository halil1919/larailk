<?php

namespace App\backend;

use Illuminate\Database\Eloquent\Model;

class sliderModel extends Model
{
    protected $table = "sliders";
    public $timestamps = false;
    protected $fillable = ["slider_baslik","slider_icerik","slider_resim"];
}
