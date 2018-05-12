<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fac extends Model
{

    protected $table="facs";

    protected $fillable = ['name','uni_id'];

}
