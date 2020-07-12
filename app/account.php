<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class account extends Model
{

    // table name Db
    public $table = "accounts";

    // column
    protected $fillable = ['id','email','ip','type','country','status','created_at', 'updated_at'];

}
