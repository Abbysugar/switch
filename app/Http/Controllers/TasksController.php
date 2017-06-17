<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request; 



class TasksController extends Controller
{
    

    public function index()
    {

    	$tasks = Task::latest()->get();


		return view('tasks.index', compact('tasks'));

    }


    public function show(Task $task)
    {

    	// $task = Task::find($id);

    	return view('tasks.show', compact('task'));

    }


    public function create()
    {
    	
    	return view('tasks.create');

    }


    public function store()
    {


		$this->validate(request(), [

			'title' => 'required',
			'body' => 'required',

		]);

		Task::create(request(['title', 'body']));

		

		return redirect('/');


		
    }


    public function edit(Task $id)
    {
        // get the task

        // $task = Task::find($id);

        // show the edit form and pass the task

        return view('tasks.edit', compact('id'));
  
    }
}
