<?php

namespace App\Classes;

use Illuminate\Database\Eloquent\Model;
use App\Modules\Task;
use App\Module;

class Tasks extends Module
{
	public function __constuct(){
		$this->name = "Tasks";
	}
	public function getData(){
		return Task::orderBy('created_at', 'asc')->get();
	}
	public function getView(){
		return "Tasks::tasks";
	}
}
