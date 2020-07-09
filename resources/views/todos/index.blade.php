
    @extends('todos.layout')
    @section('content') 
        <div class="flex justify-center border-b pb-4">
            <h1 class="text-2xl">All Your Todos</h1>
            <a href="todos/create" class="mx-5 py-1 px-1 rounded bg-blue-400 text-white cursor-pointer">Create New</a>
        </div>
       
        <ul class="my-5">
            <x-alert />
            @foreach($todos as $todo)
                <li class="flex justify-between p-2">
                    @if($todo->completed)
                        <p class="line-through">{{$todo->title}}</p>
                    @else
                        <p>{{$todo->title}}</p>
                    @endif
                   
                    <div> 
                        <a href="/todos/{{$todo->id}}/edit" class="cursor-pointer"><span class="fas fa-edit text-orange-400 px-2"></span></a>
                        @if($todo->completed)   
                            <span class="fas fa-check text-green-400 px-2"></span>
                        @else
                            <span class="fas fa-check text-gray-300 cursor-pointer px-2" onclick="event.preventDefault(); document.getElementById('form-complete-{{$todo->id}}').submit();"></span>
                            <form action="{{route('todo.complete',$todo->id)}}" id="form-complete-{{$todo->id}}" method="post" style="display:none">
                                @csrf
                                @method('put')

                            </form>
                        @endif
                    </div>
                    
                </li>
            @endforeach
        </ul>
    @endsection
    