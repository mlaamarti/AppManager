<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class application extends Model
{

    // table name Db
    public $table = "applications";

    // column
    protected $fillable = ['id','packageName','title','icon','developerName','type','category','installs','review','id_account','currentVersion','description','status','ad_status','created_at', 'updated_at'];
}
