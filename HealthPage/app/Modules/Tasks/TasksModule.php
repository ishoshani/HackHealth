<?php

namespace App\Modules\Tasks;

use Illuminate\Database\Eloquent\Model;
use App\Modules\Tasks\Models\Task;
use App\User;
use App\Module;

class TasksModule extends Module
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
	public function getDataForUser(User $user){
		return $user->tasks()->orderBy('created_at', 'asc')->get();
	}
}
