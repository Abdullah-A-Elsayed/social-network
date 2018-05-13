<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class GroupPost extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table="group_post";
    protected $fillable = ['group_id', 'user_id' ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */




}
