<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    
    protected $fillable = ['name', 'email', 'type', 'status', 'phone' ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

     public function profile()
 {

return $this->hasOne('App\UserProfile','user_id');
    
 }
    public function singleInfo()
 {

$user=$this;
$user['country'] = $this->profile->country['name'];
$user['city'] = $this->profile->city['name'];
$user['uni'] = $this->profile->uni['name'];
$user['fac'] = $this->profile->fac['name'];
return $user;
}

public static function allInfo(){
    $users = User::all();
    foreach ($users as $i =>$user) {
        $users[$i] = $user->singleInfo();
            //unset($users[$i]['profile']);


    }
    return $users;
}

}
