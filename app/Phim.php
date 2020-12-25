<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phim extends Model
{
    protected $table='film';
    protected $primaryKey ='id';
	protected $fillabel = ['id','p_name','p_serie','p_link','p_image','p_director','p_nation','p_released_year','p_sumary'];
    public $timestamp = true;
    public function Phim(){

    }

	public function phim_type()
    {
        return $this->hasMany('App\phim_type','p_id','id');
    }
    public function comment()
    {
        return $this->hasMany('App\comment','id','p_id');
    }
    public function getactor()
    {
        return $this->hasMany('App\film_actor','p_id','id');
    }
    public function wishlist()
    {
        return $this->hasMany('App\like','p_id','id');
    }
}
