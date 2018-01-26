<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class screen extends Model
{
protected $table = 'screens';

    protected $fillable = [
    	'id',
    	'cl_id',
    	'mac',
    	'created_at',
    	'updated_at'
    ];

    // SUS PADRES

    public function cliente(){
        return $this->belongsTo('app\client','cl_id','id');
    }

}
