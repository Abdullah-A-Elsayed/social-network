<?php

namespace App;
use Auth;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
	    protected $table="posts";

    protected $fillable = ['body', 'user_id' ,'type'];

        public function user()
    {
        return $this->belongsTo('App\User','user_id');
    }
        public function comments()
    {
        return $this->hasMany('App\Comment','post_id');
    }

            public function likes()
    {
        return $this->hasMany('App\Like','post_id');
    }

               public function isLiked()
    {
        return $this->hasMany('App\Like','post_id')->where('user_id',Auth::user()->id);
    }

               public function group()
    {
        return $this->belongsTo('App\Group','type');
    }


}
