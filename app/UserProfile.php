<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table="user_profiles";
    protected $fillable = ['name', 'email', 'type', 'status', 'phone' ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    
         public function user()
 {

     return $this->belongsTo('App\User', 'user_id', 'id');

 }

   
         public function country()
 {

     return $this->belongsTo('App\Country');

 }
         public function city()
 {

     return $this->belongsTo('App\City');

 }

         public function fac()
 {

     return $this->belongsTo('App\Fac');

 }

         public function uni()
 {

     return $this->belongsTo('App\Uni');

 }

    protected $hidden = [
        'password', 'remember_token',
    ];



}
