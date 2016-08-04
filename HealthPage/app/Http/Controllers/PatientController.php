<?php
/* Copyright © 2016 Ido Shoshani */


/* This program is released under the "GPL license".
   Please see the file LICENSE in this distribution for
   license terms. */
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;


class PatientController extends Controller{
protected $modules;
protected $classes;
protected $user;

public function __construct(){
	$this->middleware('web');
	$this->modules = config("module.modules");
	$this->classes=[];
	foreach ($this->modules as $module) {
		$classname = '\\App\\Modules\\'.$module.'\\'.$module.'Module';
		$this->classes[$module]= new $classname();
		}
}
public function getPatients(int $doctor_id){
	return User::where('doctor_id',$doctor_id)->orderby('created_at','asc')->get();

}
public function index(int $id){
	$m = $this->modules;
	$c = $this->classes;
	$p = User::find($id);

	return view("patient", ['modules'=>$m, 'classes'=>$c,'patient'=>$p]);
}






}