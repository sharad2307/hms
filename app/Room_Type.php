<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room_Type extends Model
{
     protected $fillable = [ 'room_type',
        
        
    ];
    
    public function room_type()
    {
        return $this->belongsTo('App\Room');

    }
}
