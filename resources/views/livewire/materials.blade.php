<div class="w-full max-w-xl">
    <div
        class="px-8 uppercase tracking-wider flex items-center justify-evenly mb-6 font-semibold text-sm text-gray-400">
        <div class="w-1/3">Materiał</div>
        <div class="w-1/3">Kolor</div>
        <div class="w-1/3">Kolekcja</div>
    </div>

    <div class="space-y-3">
        @foreach ($materials as $material)
        <div
            class="shadow-sm rounded bg-white px-8 py-6 w-full flex items-center justify-evenly uppercase tracking-wider">
            <div class="w-1/3 font-semibold text-sm text-gray-800">{{ $material->name }}</div>
            <div class="w-1/3 text-sm text-gray-600">{{ $material->color->name }}</div>
            <div class="w-1/3 text-sm text-gray-600">{{ $material->collection->name }}</div>
        </div>
        @endforeach
    </div>

    <form class="rounded shadow-sm w-full p-8 bg-white flex items-start justify-between flex-col mt-12">
        <label for="#name" class="w-full">
            <div class="mb-2 tracking-wider text-xs uppercase font-semibold text-gray-800">Nazwa</div>
            <input type="text" name="name" id="name" placeholder="Wpisz..."
                class="border rounded border-gray-200 appereance-none px-4 py-2 w-full text-sm" wire:model="formName">
        </label>
        <div class="flex w-full my-6 space-x-4">
            <label for="#color" class="w-1/2">
                <div class="mb-2 tracking-wider text-xs uppercase font-semibold text-gray-800">Kolor</div>
                <select id="color" name="color"
                    class="border rounded border-gray-200 appereance-none px-4 py-2 w-full text-sm text-gray-600"
                    wire:model="formColor">
                    <option value="" selected>Wybierz...</option>
                    @foreach ($colors as $color)
                    <option value=" {{ $color->id }}">{{ $color->name }}</option>
                    @endforeach
                </select>
                @if (!$addingColor)
                <button wire:click.prevent="toggle"
                    class="mt-2 text-gray-400 text-xs font-semibold uppercase tracking-wider">+ Dodaj kolor</button>
                @endif
                @if ($addingColor)
                <div class="flex flex-col mt-1">
                    <input type="text" placeholder="Wpisz kolor..." wire:model="formAddingColor"
                        class="border rounded border-gray-200 appereance-none px-4 py-2 my-2 w-full text-sm">
                    <div class="flex items-center justify-between">
                        <button type="button" class="text-red-500 text-xs font-semibold uppercase tracking-wider"
                            wire:click.prevent="toggle">Anuluj</button>
                        <button class="text-gray-800 text-xs font-semibold uppercase tracking-wider"
                            wire:click.prevent="add">+ Dodaj</button>
                    </div>
                </div>
                @endif
            </label>
            <label for="#color" class="w-1/2">
                <div class="mb-2 tracking-wider text-xs uppercase font-semibold text-gray-800">Kolekcja</div>
                <select id="collection" name="collection"
                    class="border rounded border-gray-200 appereance-none px-4 py-2 w-full text-sm text-gray-600"
                    wire:model="formCollection">
                    <option value="" selected>Wybierz...</option>
                    @foreach ($collections as $collection)
                    <option value="{{ $collection->id }}">{{ $collection->name }}</option>
                    @endforeach
                </select>
            </label>
        </div>
        <button type="button" wire:click.prevent.stop="submit"
            class="ml-auto rounded h-10 font-semibold px-4 bg-gray-800 text-white uppercase text-xs tracking-wider hover:bg-gray-900">+
            Dodaj materiał</button>
    </form>
</div>