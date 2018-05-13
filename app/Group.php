<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table="groups";
    protected $fillable = ['name','image','description', 'user_id' ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
public function users(){



    return $this->hasMany("App\GroupUser",'group_id');
}



}
