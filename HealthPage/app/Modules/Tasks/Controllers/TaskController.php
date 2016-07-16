<?php
namespace App\Modules\Tasks\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Modules\Task;

class TaskController extends Controller{
	protected $tasks;
	public function __construct(){
		$this->tasks = Task::orderBy('created_at', 'asc')->get();
	}

	public function Index(Request $request)
{
    return view('Tasks::tasks', [
        'tasks' => $this->tasks
    ]);
    
}
	public function Store(Request $request)
	{
     $this->validate($request, [
        'name' => 'required|max:255',
    ]);

    $task = new Task;
    $task->name = $request->name;
    $task->save();

    return redirect('/main/task');
	}
}
