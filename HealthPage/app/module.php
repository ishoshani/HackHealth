<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
	/*
	Base class for modules. EveryModule should have a file that inherits from this, and have something other than than the default for the following methods.

	*/
	public $name;
	public function __construct(){
		 $name = "Unamed module";
	}
	public function getData(){
		return [];
	}
	//Return string for viewing
	public function getView(bool $isEditable){
		return "$name::PanelView";
	}
	public function getDataForUser(User $user){
		return [];

	}
}
