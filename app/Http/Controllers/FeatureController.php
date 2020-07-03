<?php

namespace App\Http\Controllers;

use App\Task;
use App\Feature;
use Illuminate\Http\Request;

class FeatureController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        //
        $attributes = request()->validate([
            'name' => 'required',
            'task' => 'required|exists:tasks,id'
        ]);
        $task = Task::find(request('task'));

        $task->features()->save(new Feature($attributes));

        // $features = Feature::create($attributes);

        return redirect()->route('tasks');
    }

}
