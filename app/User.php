<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table='user';
	protected $fillabel = ['id','name','phonenumber','password'];
    public $timestamp = true;

    
    public function comment()
    {
        return $this->hasMany('App\comment', 'id','u_id');
    }
    public function reply()
    {
        return $this->hasMany('App\reply', 'id','u_id');
    }
     public function wishlist()
    {
        return $this->hasMany('App\like','p_id','id');
    }
}