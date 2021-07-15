<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JsonDBmodel extends Model
{
    // 20210621
    protected $table = 'dtb_json';
    protected $dates =  ['created_at', 'updated_at'];
    protected $fillable = ['id', 'service_id', 'api_id', 'endpoint', 'api_json'];

}
