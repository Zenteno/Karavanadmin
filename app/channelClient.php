<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class channelClient extends Model
{
    protected $table = 'channel_client';

       protected $fillable = [
    	'cn_id',
    	'cl_id'
    ];
}
