<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class channelClient extends Model
{
    protected $table = 'channel_client';

       protected $fillable = [
    	'id',
    	'cn_id',
    	'cl_id',
    	'created_at',
    	'updated_at'
    ];
}
