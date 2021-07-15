<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceDBmodel extends Model
{
    // 20210621
    protected $table = 'dtb_service';
    protected $dates =  ['created_at', 'updated_at'];
    protected $fillable = ['id', 'service_name', 'api_key_post', 'api_key_get'];
}
