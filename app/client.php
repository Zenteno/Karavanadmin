<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class client extends Model
{
protected $table = 'clients';

    protected $fillable = [
    	'id',
    	'cl_nombres',
    	'cl_apellido_p',
    	'cl_apellido_m',
        'cl_estado_de_activacion',
    	'created_at',
    	'updated_at'
    ];

    // SUS HIJOS

    public function pantallas(){
        return $this->hasMany('App\screen','cl_id','id');
    }
    
    public function canales(){
        return $this->hasMany('App\channelClient','cl_id','id');
    }
}
