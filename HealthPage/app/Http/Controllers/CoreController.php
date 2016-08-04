<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;


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
	$m = $this->modules;
	$c = $this->classes;
	$is = $request->user()->doctor;
	$p = $this->getPatients($request->user()->id);


	return view("core", ['modules'=>$m, 'classes'=>$c, 'user'=>$request->user(),'doctor'=>$is,'patients'=>$p]);
}






}