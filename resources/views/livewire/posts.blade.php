<div class="space-y-4">
    @foreach ($posts as $post)
    <div class="shadow-sm rounded bg-white p-8 w-full max-w-xl flex items-start justify-between flex-col">
        <div>
            <div class="font-semibold text-gray-800 mb-2">{{ $post->title }}</div>
            <p class="text-sm text-gray-500">{{ $post->description }}</p>
        </div>
        @livewire('counter', ['post' => $post], key($post->id))
    </div>
    @endforeach

    <form class="shadow-sm rounded bg-white p-8 w-full max-w-xl flex items-start justify-between flex-col"
        wire:submit.prevent="submit">
        @csrf
        <label for="#title" class="w-full">
            <div class="mb-2 tracking-wider text-xs uppercase font-semibold text-gray-800">Title</div>
            <input type="text" name="title" id="title" placeholder="Title..."
                class="border rounded border-gray-200 appereance-none px-4 py-2 w-full" wire:model="title">
            @error('title') <div class="bg-red-50 text-red-400 rounded border border-red-400 px-4 py-2 mt-3">
                {{ $message }}</div> @enderror
        </label>
        <label for="#description" class="w-full my-6">
            <div class="mb-2 tracking-wider text-xs uppercase font-semibold text-gray-800">Description</div>
            <input type="text" name="description" id="description" placeholder="Description..."
                class="border rounded border-gray-200 appereance-none px-4 py-2 w-full" wire:model="description">
            @error('description') <div class="bg-red-50 text-red-400 rounded border border-red-400 px-4 py-2 mt-3">
                {{ $message }}</div> @enderror
        </label>
        <button type="submit"
            class="ml-auto rounded h-10 font-semibold px-4 bg-gray-800 text-white uppercase text-xs tracking-wider hover:bg-gray-900">+
            Add
            post</button>
    </form>
</div>