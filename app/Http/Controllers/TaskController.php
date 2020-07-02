<?php

namespace App\Http\Controllers;
use App\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {   
        $data =Task::all();
        return view('tasks.index',compact('data'));
    } 
    public function store(Request $request){
        $data = $request->validate([
            'title' => 'required'
            ]);

        Task::create($data);
        // dd($data);
        return redirect('/');
    }
    public function destroy($task_id){
        $data = Task::find($task_id);
        $data->delete();
        return redirect('/');   

    }
    public function edit($task_id){
        try{
            $task = Task::findOrfail($task_id);
        }
        catch(\Exception $e){
            return back()->withErrors(['']);
        }
        return view('tasks.edit',compact('task'));
    }
    public function update(Request $request,$task_id){
        try{
            $task = Task::findOrfail($task_id);
        }
        catch(\Exception $e){
            return back()->withErrors(['']);
        }
        $data = $request->validate([
            'title'=>'required'
        ]);
        // dd($data);
        $task->update($data);

        return redirect('/');
    }

}
