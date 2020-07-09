<?php

namespace App\Http\Controllers;

use App\Task;
use App\Feature;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;

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
        $tasks = Task::with(['features'])->get();
        foreach ($tasks as $task){
            // $task->features->count() $task->features->where('etat',true)->count();
            if ($task->features->count() == 0) {
                $task->div = 0;
            }
            else {
                $task->div = ($task->features->where('etat', true)->count() / $task->features->count())*100;             
            }
        }
        
        // echo $taskCount->features_count;
        // $featuresCount = Task::withCount('features')->where('etat', '1')->get();

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
        ]);
        
        $task = Task::create($attributes);
        
        return redirect()->route('tasks')->with('success, Task created successfully !');
    }

    
    /**
     * Show the form for editing the specified resournce.
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
        ]);

        $task = Task::findOrFail($id);
        $task->update($attributes);
        return redirect('edit/'.$task->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $task = Task::findOrFail($id);
        $task->delete();
        return redirect()->route('tasks');
    }

    public function api()
    {
        $tasks = Task::with(['features'])->get()->toJson(JSON_PRETTY_PRINT);
        return $tasks;
    }

    public function updateApi($id)
    {
        $attributes = request()->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        $task = Task::findOrFail($id);
        $task->update($attributes);
        $task->save();
    }

    public function destroyApi($id)
    {
        $task = Task::findOrFail($id);
        $task->delete();
    }

}
