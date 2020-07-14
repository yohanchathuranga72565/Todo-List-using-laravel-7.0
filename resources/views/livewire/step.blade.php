<div>
    <div class="flex justify-center pb-4 px-4">
        <h2 class="text-lg pb-4">Add Steps for tasks</h2>
        <span wire:click="increment" class="fas fa-plus px-2 py-2 cursor-pointer"></span>
    </div>
    @foreach($steps as $step)
        <div class="flex justify-center py-2" wire:key="{{ $step }}">
            <input type="text" name="step[]" class="p-1 rounded border" placeholder="Describe step {{$step+1}}"/>
            <span class="fas fa-times text-red-400 p-2 cursor-pointer" wire:click="remove({{$step}})"></span>
        </div>
    
    @endforeach
</div>
