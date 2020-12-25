<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    protected $table='like';
	protected $fillabel =['id','p_id','u_id'];
    public $timestamp = true;
    public function phim()
    {
        return $this->belongsTo('App\Phim','p_id','id');
    }
    public function user()
    {
        return $this->belongsTo('App\User','u_id','id');
    }


}
