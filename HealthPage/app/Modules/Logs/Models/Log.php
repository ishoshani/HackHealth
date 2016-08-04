<?php

namespace App\Modules\Logs\Models;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
	protected $fillable =['name','body'];
	public function user(){

		return $this->belongsTo(User::class);
	}
}