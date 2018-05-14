<?php

namespace App;

use App\Posts;
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


    return $this->belongsToMany('App\User', 'group_user', 'group_id' ,'user_id')/*->where('groups.user_id','!=',Auth::user()->id)*/;
    //return $this->hasMany("App\GroupUser",'group_id');
}

public function posts(){
    $posts = Posts::where('type',$this->id)->get();
    return $posts;
}



}
