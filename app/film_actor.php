<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class film_actor extends Model
{
  protected $table='film_actor';
	protected $fillabel = ['id','p_id','ac_id','role'];
    public $timestamp = true;

    public function film()
    {
        return $this->belongsTo('App\Phim','p_id','id');
    }
    public function actor()
    {
        return $this->belongsTo('App\actor','ac_id','id');
    }
}
