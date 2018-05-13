<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Collection;
use Auth;
class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    
    protected $fillable = ['name','password','interests', 'email', 'type', 'status', 'phone', 'country', 'city', 'image' ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function posts()
    {
        return $this->hasMany('App\Posts','user_id')->where('type',0);
    }


    public function groups()
    {
        //return $this->hasMany('App\GroupUser','user_id');
        return $this->belongsToMany('App\Group', 'group_user', 'user_id', 'group_id')->where('groups.user_id','!=',Auth::user()->id);
    }



    public function usergroup()
    {
        //return $this->hasMany('App\GroupUser','user_id');
        return $this->hasMany('App\Group','user_id');
    }


 public function myFriends(){

               return $this->belongsToMany('App\User','user_user','user1_id','user2_id')->where('user_user.status',1); 

    }

        public function myFriends2(){

                
                return $this->belongsToMany('App\User','user_user','user2_id','user1_id')->where('user_user.status',1); 
    }
        public function friends(){


         return $this->myFriends2->merge($this->myFriends);
    }

public function friendsPosts(){


    $friends = $this->friends();

     $related = new Collection();

    foreach ($friends as $value) 
    {
        $related = $related->merge($value->posts);
    }   
    return $related->sortByDesc('id');
}




public function country(){


    return $this->belongsTo('App\Country','country');
}
public function city(){


    return $this->belongsTo('App\City','city');
}


 public function friendRequests(){

               
     $related = new Collection();
$x=$this->belongsToMany('App\User','user_user','user2_id','user1_id')->where('user_user.status',0)->get();

        $related = $related->merge($x);
     return   $related ;  

    }



 public function mynotsuggestedfriends(){

               return $this->belongsToMany('App\User','user_user','user1_id','user2_id'); 

    }

        public function mynotsuggestedfriends2(){

                
                return $this->belongsToMany('App\User','user_user','user2_id','user1_id'); 
    }
        public function notsuggestedfriends(){


         return $this->mynotsuggestedfriends2->merge($this->mynotsuggestedfriends);
    }


public static function mutual($friends){

           $x=array();
        foreach (Auth::user()->friends() as &$value) {
            array_push($x, $value['id']);
        }



        $y=array();
                foreach ($friends as $w => &$value) {
$count =0;
        foreach ($value->friends() as $i => &$value2) {

            $y[$w][$i]= $value2['id'];

$count++;
        }
            if ($count) {

$collection = collect($y[$w]);    
      $y[$w] = $collection->intersect($x)  ;
      }else
      {$y[$w]=array();
    $y[$w] =  collect($y[$w]);   ;
}
  
        }

        foreach ($friends as $i => &$value) {

           $value['mutual']=$y[$i]->count();
        }
        return $friends;
}
    

}
