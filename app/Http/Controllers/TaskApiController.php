<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class TaskApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks = Task::all();

        return response()->json( compact('tasks'), 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $task = new Task();

        $task->name = $request->name;

        $task ->save();

        return response()->json(['status' => trans('tasks.createdMessage')], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $task = Task::find($id);

        if (is_null($task)){
            return resonse()->json(compact('task'), 200);
        }

        return redirect('tasks');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $task = Task::find($id);

        if (!is_null($task)){

            return view(compact('task'), 200);

        }

        return redirect('tasks');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        //dd($request);
        $task = Task::find($id);

        if (!is_null($task)){

        $task->name = $request->name;

        $task->save();

        return response()->json('tasks')-> with('status', trans('tasks.updatedMessage'), 201);


        }

       return redirect('tasks');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $task = Task::find($id);

      if (!is_null($task)){

          $task->delete();

          return response()->json('tasks')-> with('status', trans('tasks.deletedMessage'), 201);
      }

      return redirect('tasks');
    }
}
