<div>
    {{$slot}}
    @if(session()->has('message'))
        <div class="py-4 px-2 bg-green-300">
            {{session()->get('message')}}
            {{-- {{session()->forget('message')}} --}}
        </div>
    @elseif(session()->has('error'))
        <div class="py-4 px-2 bg-red-300">
            {{session()->get('error')}}
            {{-- {{session()->forget('error')}} --}}
        </div>
    @endif
</div>