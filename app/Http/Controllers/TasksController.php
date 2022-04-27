<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Task;
class TasksController extends Controller
{
    

 
public function store(Request $request){

$this->validate($request,[
    'task'=>'required|max:100|min:5',
]);

 $task= new Task;
 $task->task=$request->task;
 $task->save();

 return redirect('/tasks');



 $data=Task::all();
// dd($data);
    return view('tasks')->with('tasks',$data);

     


}

public function delete($id){

    $task=Task::find($id);
    $task->delete();
  return redirect('/tasks');
}


public function mark($id){
    $task=Task::find($id);
    $task->iscompleted=1;
    $task->save();

    return redirect('/tasks');
}


public function marknot($id){
    $task=Task::find($id);
    $task->iscompleted=0;
    $task->save();

    return redirect('/tasks');
}
  
public function uptask($id){
    $task=Task::find($id);
    

    return view('tasks.edit')->with('editdata',$task);

}


public function edited(Request $request){
   $task=$request->task;
   $id=$request->id;
   $data=Task::find($id);
   $data->task=$task;
    $data->save();

    return view('tasks.tasks');

}













}
