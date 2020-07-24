<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdProtector extends Model
{
     public $table = "adsense_protector";

     protected $fillable = ['id','id_application','ip','status','created_at', 'updated_at'];
}
