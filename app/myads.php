<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class myads extends Model
{
    // table name Db
    public $table = "myads";

    // column
    protected $fillable = ['id','type','id_application','list_apps','status','created_at', 'updated_at'];
}
