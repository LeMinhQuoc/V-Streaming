<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class type extends Model
{
    protected $table='type';
	protected $fillabel =['id','type'];
    public $timestamp = true;


    public function getphim()
    {
        return $this->haveMany('App\phim_type','t_id','id');
    }
}
