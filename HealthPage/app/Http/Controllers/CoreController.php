<?php
/* Copyright © 2016 Ido Shoshani */


/* This program is released under the "GPL license".
   Please see the file LICENSE in this distribution for
   license terms. */
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
/*
Controller for the users main view, the portal view. Loads up the panels of each module and displays them. What is in the panel is dependant on the module

modules must be properly namespaced, have a [modulename]Module.php folder, or atleast have a folder namespaced as such, and be in the modules config file to be included. They should also inherit and have methods for all the things in the module.php folder

A feature feature should be to make displaying ind. modules optional.

*/
class CoreController extends Controller{
protected $modules;
protected $classes;
protected $user;

public function __construct(){
	$this->middleware('auth');
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
public function index(Request $request){
	$modules = $this->modules;
	$classes = $this->classes;
	$isDoctor = $request->user()->doctor;
	$patients = $this->getPatients($request->user()->id);


	return view("core", ['modules'=>$modules, 'classes'=>$classes, 'user'=>$request->user(),'doctor'=>$isDoctor,'patients'=>$patients]);
}






}