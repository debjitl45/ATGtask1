<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Task;
use App\Http\Traits\TimestampsTrait;
use App\Http\Traits\TasksTrait;
use Illuminate\Support\Facades\Session;

class ATGController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks = Task::orderBy('name','asc')->paginate(5);

        return view('tasks.index')->with('tasks',$tasks);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tasks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
        'name'=>'required|string|max:50|min:3',
        'email' => 'required|email|unique:users,email',
        'pincode'=>'required|string|max:6|min:6',
        ]);

        $task = new Task;
        $task->name = $request->name;
        $task->email = $request->email;
        $task->pincode = $request->pincode;

        $task->save();
        Session::flash('success','Created Task Successfully');

        return redirect()->route('task.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        return view('tasks.edit')->withTask($task);
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
        $this->validate($request,[
        'name'=>'required|string|max:50|min:3',
        'email' => 'required|email',
        'pincode'=>'required|string|max:6|min:6',
        ]);

        $task = Task::find($id);
        $task->name = $request->name;
        $task->email = $request->email;
        $task->pincode = $request->pincode;

        $task->save();
        Session::flash('success','Saved Task Successfully');

        return redirect()->route('task.index');
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
        $task->delete();
        Session::flash('success','Deleted User Successfully!');
        return redirect()->route('task.index');
    }
}

