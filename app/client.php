<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class client extends Model
{
protected $table = 'clients';

    protected $fillable = [
    	'id',
    	'nombres',
    	'apellido_p',
    	'apellido_m',
    	'created_at',
    	'updated_at'
    ];

    // SUS HIJOS

    public function pantallas(){
        return $this->hasMany('app\screen');
    }

}
