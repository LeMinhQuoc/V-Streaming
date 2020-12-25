<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class actor extends Model
{
    protected $table='actor';
    protected $primaryKey ='id';
	protected $fillabel = ['id','name','avt','country', 'dob'];
    public $timestamp = true;

	public function film_actor()
    {
        return $this->hasMany('App\film_actor','id','ac_id');
    }
    
}
