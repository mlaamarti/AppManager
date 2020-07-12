<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class adsmanager extends Model
{

    // table name Db
    public $table = "adsmanagers";

    // column
    protected $fillable = ['id','id_application','id_admob','ads_text_admob','banner_admob','interstitial_admob','native_admob','reward_admob','banner_facebook','interstitial_facebook','native_facebook','native_banner_facebook','medium_rectangle_facebook','id_admob_acc','id_facebook_acc','fillrate','type','status','created_at', 'updated_at'];

}
