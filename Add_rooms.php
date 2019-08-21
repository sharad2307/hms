<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Add_rooms extends Model
{
    protected $fillable = [ 'year' , 'from' , 'to' , 'category' , 'hostel'];
}
