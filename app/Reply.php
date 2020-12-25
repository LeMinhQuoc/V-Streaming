<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
   protected $table='reply';
    protected $primaryKey = 'id';
	protected $fillabel = ['id','c_id', 'u_id','re_comment'];
    public $timestamp = true;

	 public function comment()
    {
        return $this->belongsTo('App\comment', 'c_id','id');
    }
     public function user()
    {
        return $this->belongsTo('App\user', 'u_id','id');
    }
}
