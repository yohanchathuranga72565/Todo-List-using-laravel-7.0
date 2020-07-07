<div>
    {{$slot}}
    @if(session()->has('message'))
        <div class="alert alert-success">
            {{session()->get('message')}}
            {{-- {{session()->forget('message')}} --}}
        </div>
    @elseif(session()->has('error'))
        <div class="alert alert-danger">
            {{session()->get('error')}}
            {{-- {{session()->forget('error')}} --}}
        </div>
    @endif
</div>