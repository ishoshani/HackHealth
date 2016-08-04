<?php
namespace App\Modules\Tasks\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Modules\Tasks\Models\Task;

class TaskController extends Controller{
	public $tasks;
	public function __construct(){
        $this->middleware("web");
		$this->tasks = Task::orderBy('created_at', 'asc')->get();
	}
	public function Index(Request $request)
{
    return view('Tasks::taskDisplay', [
        'data' => $request->user()->tasks()->orderBy('created_at', 'asc')->get()
    ]);
    
}
	public function Store(Request $request)
	{
     $this->validate($request, [
        'name' => 'required|max:255',
    ]);
    $request->user()->tasks()->create([
        'name' => $request->name,
    ]);

    return redirect('/home');
	}
}
