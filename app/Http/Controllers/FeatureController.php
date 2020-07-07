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

    /**
     * Show the form for editing the specified resournce.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id) 
    {    
        $features = Feature::findOrFail($id);
        return view('editFeature', compact('features'));
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
            'name' => 'required',
        ]);

        $features = Feature::findOrFail($id);
        $features->update($attributes);
        return redirect()->route('tasks');
    }


        /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $features = Feature::find($id);
        $features->delete();
        return redirect()->route('tasks');
    }

    public function checkboxState($id){
        //
        $attributes = request()->validate([
            'etat' => 'required',
        ]);
        $features = Feature::find($id);
        $features->etat=request('etat');
        
        $features->save();
    }
}