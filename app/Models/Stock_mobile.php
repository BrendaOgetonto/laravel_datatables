<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Stock_mobile extends Model
{
    //
    protected $dates = ['deleted_at'];

    protected $guarded = ['id'];

    protected $table="stock_mobiles";
}
