<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
     protected $fillable = [ 'user_1_id' , 'user_2_id' ,'user_3_id' ,
        ];
        
        
    ];
    public function users()
    {
        return $this->hasMany('App\User');
    }
    //
    public function request()
    {
        return $this->hasOne('App\Request');
    }
}
