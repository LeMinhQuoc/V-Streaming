<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comment extends Model
{ 
 protected $table='comment';
    protected $primaryKey = 'id';
	protected $fillabel = ['id','p_id', 'u_id', 'comment'];
    

	public function phim()
    {
        return $this->belongsTo('App\Phim','p_id','p_id');
    }
    public function user()
    {
        return $this->belongsTo('App\User','u_id','id');
    }
      public function reply()
    {
        return $this->hasMany('App\Reply','id','c_id');
    }

}
