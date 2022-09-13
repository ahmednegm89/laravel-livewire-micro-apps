<div class="p-16 flex justify-center gap-6 items-center" >
    <button wire:click="inc" class="py-2 px-4 bg-green-500 hover:bg-green-600 rounded text-white" >+</button>
    <span class="py-2 px-4" >{{$count}}</span>
    <button wire:click="dec" class="py-2 px-4 bg-red-500 hover:bg-red-600 rounded text-white" >-</button>
</div>
