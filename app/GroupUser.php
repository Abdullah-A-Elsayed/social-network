<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class GroupUser extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table="group_user";
    protected $fillable = ['group_id', 'user_id' ,'status'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */



    public function group()
    {
        return $this->belongsTo('App\Group','group_id');
    }

    public function groupusers()
    {
        return $this->belongsTo('App\Users','user_id');
    }

//->belongsTo('App\Posts','type')->hasMany('App\GroupPost','group_id')->belongsTo('App\Posts','type');


}
