<div class="flex items-center w-full flex mt-4">
    <div
        class="px-4 break-normal py-2 border bg-gray-100 flex items-center justify-center text-xs text-gray-800 uppercase rounded-full">
        Likes: {{ $likes }}
    </div>
    <div class="flex items-center space-x-2 ml-auto">
        <button class="rounded-full w-8 h-8 border font-bold text-gray-800"
            wire:click.debounce.200ms="decrement">-</button>
        <button class="rounded-full w-8 h-8 border font-bold text-gray-800"
            wire:click.debounce.200ms="increment">+</button>
    </div>
</div>