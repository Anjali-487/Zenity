<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data=Task::latest()->paginate(5);
        return view('task.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('task.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $table = new Task();
        
        $imgName = "task_" . time() . "." . $request->image->extension();
        $request->image->move(public_path('images'), $imgName);

        // $table->name = $request->name;
        $table->image = $imgName;
        // $table->emotion = $request->emotion;
        $table->description = $request->description;
        $table->save();

        return redirect('task')->withSuccess("Inserted Successfully!!!");
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
        return view('task.show',compact('task'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $task)
    {
        //
        return view('task.edit',compact('task'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Task $task)
    {
        $table=Task::find($task->_id);
        

        // $table->name = $request->name;
        if(isset($request->image)){
            $imgName = "task" . time() . "." . $request->image->extension();
            $request->image->move(public_path('images'), $imgName);
            $table->image = $imgName;
        }
        // $table->emotion = $request->emotion;
        $table->description = $request->description;
      
        $table->save();

        return redirect('task')->withSuccess("Updated Successfully!!!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        //
        $task->delete();
        return redirect('task')->withsuccess("deleted successfully!!");
        
}
}