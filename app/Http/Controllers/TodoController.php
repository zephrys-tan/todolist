<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;

class TodoController extends Controller
{
    public function index()
    {
    	$todo = Todo::all();
    	return view('todo')->with('todo', $todo);
    }

    public function store(Request $request)
	{
		$todo_item = $request->input('todo_item');
		$todo = new Todo;
		$todo->item = $todo_item;
		$todo->save();

		return redirect('todo');
	}

	 public function destroy($id_todo) 
    {
    	$todo= Todo::find($id_todo);
        $todo->delete();
        
        return redirect('todo');
    }
}
