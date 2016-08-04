<?php

namespace App\Modules\Tasks\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
	protected $fillable =['name'];
	public function user(){

		return $this->belongsTo(User::class);
	}
}
