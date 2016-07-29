<?php 
 namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
class NewPatientController extends Controller{
	
	public function __construct(){
		$this->middleware('web');
	}
	public function index(int $id){
		return view('newPatient',['doctor'=>$id]);
	}
	public function store(Request $request){
		$this->validate($request, 
			['name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
            ]
            );
		User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => bcrypt($request['password']),
            'doctor' => 0,
            'doctor_id' => $request['doctor_id'],
			]);
		    return redirect('/home');

	}
}