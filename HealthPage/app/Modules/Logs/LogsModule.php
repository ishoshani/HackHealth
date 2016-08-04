<?php

namespace App\Modules\Logs;

use Illuminate\Database\Eloquent\Model;
use App\Modules\Logs\Models\Log;
use App\User;
use App\Module;

class LogsModule extends Module
{
	public function __constuct(){
		$this->name = "Log";
	}
	public function getData(){
		return Logs::orderBy('created_at', 'asc')->get();
	}
	public function getView(){
		return 'Logs::logsPanel';
	}
	public function getDataForUser(User $user){
		return $user->logs()->orderBy('created_at', 'asc')->get();
	}
}