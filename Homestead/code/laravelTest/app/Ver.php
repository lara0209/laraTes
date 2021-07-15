<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ver extends Model
{
    //20210618
    protected $table = 'ver';
    protected $dates =  ['created_at', 'updated_at'];
    protected $fillable = ['id', 'version', 'min_version'];
}
