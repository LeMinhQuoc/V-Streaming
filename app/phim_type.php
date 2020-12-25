<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class phim_type extends Model
{
    protected $table='film_type';
	protected $fillabel = ['id','p_id','t_id'];
    public $timestamp = true;

    public function phim()
    {
        return $this->belongsTo('App\Phim','id','p_id');
    }
    public function type()
    {
        return $this->belongsTo('App\type', 't_id','id');
    }
}
