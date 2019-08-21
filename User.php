<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
        'roll_number' ,'admission_number',
        'mobile_number','year','utr_number' ,'gender' ,'room_id', 'is_hosteler'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    const ADMIN_TYPE = 'admin';
    const DEFAULT_TYPE = 'default';
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array

     */

    public function isAdmin()    {        
        return $this->type === self::ADMIN_TYPE;    
    }
    public function request()
    {
        return $this->hasMany('App\Request');
    }
    public function addclick()  {

  
      $this->book_room = '1' ;
      $this->save();

}

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
