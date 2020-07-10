
    @extends('todos.layout')
    @section('content') 
        <div class="flex justify-between border-b pb-4 px-4">
            <h1 class="text-2xl">All Your Todos</h1>
            <a href="todos/create" class="mx-5 py-2 text-blue-400 cursor-pointer"><span class="fas fa-plus-circle"></span></a>
        </div>
       
        <ul class="my-5">
            <x-alert />
            @foreach($todos as $todo)
                <li class="flex justify-between p-2">
                    @include('todos.complete-button')
                    @if($todo->completed)
                        <p class="line-through">{{$todo->title}}</p>
                    @else
                        <p>{{$todo->title}}</p>
                    @endif

                    <div> 
                        <a href="/todos/{{$todo->id}}/edit" class="cursor-pointer"><span class="fas fa-edit text-orange-400 px-2"></span></a>
                        <span class="fas fa-trash text-red-500 px-2 cursor-pointer" onclick="event.preventDefault();if(confirm('Are you sure want to delete?')){document.getElementById('form-delete-{{$todo->id}}').submit();}"></span>
                        <form action="{{route('todo.delete',$todo->id)}}" id="form-delete-{{$todo->id}}" method="post" style="display:none">
                            @csrf
                            @method('delete')
                        </form>  
                    </div>        
                </li>
            @endforeach
        </ul>
    @endsection
    