<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class screen extends Model
{
protected $table = 'screens';

    protected $fillable = [
    	'id',
    	'cl_id',
        'cn_id',
    	'sn_mac',
        'sn_estado_de_activacion',
    	'created_at',
    	'updated_at'
    ];

    // SUS PADRES
    public function cliente(){
        return $this->belongsTo('app\client','cl_id','id');
    }
    public function canale(){
        return $this->belongsTo('app\channel','cn_id','id');
    }
}
