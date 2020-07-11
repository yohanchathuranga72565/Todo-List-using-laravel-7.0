<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\TodoCreateRequest;

use Illuminate\Support\Facades\Validator;

use App\Todo;

class TodoController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $todos= auth()->user()->todos->sortBy('completed');
        // $todos = Todo::orderBy('completed')->get();
        return view('todos.index',compact('todos'));
    }

    public function create(){
        return view('todos.create');
    }

    public function edit(Todo $todo){
        // $todo = Todo::find($id);
        return view('todos.edit',compact('todo'));
    }

    public function update(TodoCreateRequest $request,Todo $todo){
        $todo->update(['title'=>$request->title, 'description'=>$request->description]);
        return redirect(route('todo.index'))->with('message','Updated!');
    }

    public function complete(Todo $todo){
        $todo->update(['completed'=> true]);
        return redirect()->back()->with('message','Task marked as completed!');
    }

    public function incomplete(Todo $todo){
        $todo->update(['completed'=> false]);
        return redirect()->back()->with('message','Task marked as incompleted!');
    }

    public function destroy(Todo $todo){
        $todo->delete();
        return redirect()->back()->with('message','Task deleted!');
    }

    public function show(Todo $todo){
        return view('todos.show',compact('todo'));
    }

    public function store(TodoCreateRequest $request){
        // $request->validate([
        //     'title'=>'required|max:255'
        // ]);
        // $rules = [
        //     'title'=>'required|max:255',
        // ];

        // $messages = [
        //     'title.max' => 'Todo title should not be greater than 255 character',
        //     'title.required'=> 'Please enter any value'
        // ];

        // $validator = Validator::make($request->all(), $rules, $messages);

        // if($validator->fails()){
        //     return redirect()->back()->withErrors($validator)->withInput();
        // }
        // dd(auth()->user()->todos());
        auth()->user()->todos()->create($request->all());
        // Todo::create($request->all());
        return redirect(route('todo.index'))->with('message','Todo created successfully.');
    }
}
