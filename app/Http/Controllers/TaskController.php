<?php

namespace App\Http\Controllers;

use App\Http\Middleware\Authenticate;
use App\Models\Tasks;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
   public function __construct()
   {
       $this->middleware('auth');
   }

    public function index()
    {
        $tasks=Tasks::latest()->paginate(6);
        return view('task.index',compact('tasks'));
    }


    public function create()
    {
        return view('task.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'task'=>'required'
        ]);
        $tasks=Tasks::create([
            'task' => $request->input('task'),
//            'user_id' => Auth::id()
        ]);
        return redirect()->route('task.index');

    }


    public function show($id)
    {
        $task = Tasks::query()->findOrFail($id);
        return view('task.show',compact('task'));
    }

    public function update(Request $request, $id)
    {
        // code here
    }



    public function destroy($id)
    {
         Tasks::query()->findOrFail($id)->delete();
        return redirect()->route('task.index');

    }
}
