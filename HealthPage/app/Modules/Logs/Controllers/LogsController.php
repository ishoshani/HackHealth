<?php
namespace App\Modules\Logs\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Modules\Logs\Models\Log;

class LogsController extends Controller{
	public $logs;
	public function __construct(){
        $this->middleware("web");
	}

	public function Index(Request $request)
{
    return view('Logs::logsDisplay', [
        'data' => $request->user()->logs()->orderBy('created_at', 'desc')->get()]);
    
}
	public function Store(Request $request)
	{
     $this->validate($request, [
        'name' => 'required|max:255',
        'body' => 'required',
    ]);
    $request->user()->logs()->create([
        'name' => $request->name,
        'body' => $request->body,
    ]);

    return redirect('/home/logs/');
	}
}
