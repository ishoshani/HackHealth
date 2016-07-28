<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
public function index(Request $request){
	$m = $this->modules;
	$c = $this->classes;
	return view("core", ['modules'=>$m, 'classes'=>$c, 'user'=>$request->user()]);
}






}