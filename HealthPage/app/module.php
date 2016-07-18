<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
	public $name;
	public function __construct(){
		 $name = "Unamed module";
	}
	public function getData(){
		return [];
	}
	//Return string for viewing
	public function getView(){
		return "$name::PanelView";
	}
}
