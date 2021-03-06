<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class channel extends Model
{
protected $table = 'channels';

    protected $fillable = [
    	'cn_nombre',
    	'cn_descripcion',
    	'cn_url',
        'cn_estado_de_activacion'
    ];

    //PADRES
 
    //HIJOS
    public function pantallas(){
        return $this->hasMany('App\screen');
    }
    //MUCHOSAMUCHOS
        public function clientes(){
        return $this->belongsToMany('App\client');
    }
}
