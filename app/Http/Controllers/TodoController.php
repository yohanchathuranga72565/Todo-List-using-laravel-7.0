<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\TodoCreateRequest;

use Illuminate\Support\Facades\Validator;

use App\Todo;

class TodoController extends Controller
{
    public function index(){
        $todos = Todo::all();
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
        $todo->update(['title'=>$request->title]);
        return redirect(route('todo.index'))->with('message','Updated!');
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
        Todo::create($request->all());
        return redirect()->back()->with('message','Todo created successfully.');
    }
}
