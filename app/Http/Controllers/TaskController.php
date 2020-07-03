<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks = Task::get();
        return view('welcome', compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');

    }

       /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $attributes = request()->validate([
            'title' => 'required',
            'description' => 'required',
            'task' => 'required',
        ]);
        
        $task = Task::create($attributes);
        // dd($task);
        return redirect()->route('tasks')->with('success, Task created successfully !');
    }

    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id) 
    {    
        $task = Task::findOrFail($id);
        return view('edit', compact('task'));
    } 

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $attributes = request()->validate([
            'title' => 'required',
            'description' => 'required',
            'task' => 'required',
        ]);

        $task = Task::findOrFail($id)::update($attributes);
        return redirect()->route('edit')->width('success');
    }

    public function editTask()
    {
        return view('edit');
    }
    public function deleteTask()
    {
        return view('delete');
    }
}
