<div>
    <div class="flex flex-col items-center ">
        <div class="flex p-16 mx-auto justify-center items-center gap-4 ">
            <input type="number" wire:model="num1" placeholder="Num 1">
            <select class="w-24" wire:model="op">
                <option>+</option>
                <option>-</option>
                <option>*</option>
                <option>/</option>
                <option>%</option>
            </select>
            <input type="number" wire:model="num2" placeholder="Num 2">
            <button wire:click="calculate"
            class="py-2 px-4 bg-blue-500 hover:bg-blue-600 disabled:cursor-not-allowed disabled:bg-opacity-90 rounded text-white"
            {{$disabled? 'disabled' : ''}} >
                =
            </button>
        </div>
        <p class="text-3xl" >{{$res}}</p>
    </div>
</div>
