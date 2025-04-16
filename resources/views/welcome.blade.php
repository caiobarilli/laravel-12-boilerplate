<x-guest-layout>
    <h1>
        Laravel 12
    </h1>

    <x-mary-button label="Hi!" class="btn-primary" />
    <x-mary-button label="How" class="btn-warning" />
    <x-mary-button label="Are" class="btn-success" />
    <x-mary-button label="You?" class="btn-error btn-sm btn-soft" />

    <div data-theme="light">
        <x-mary-toggle label="Left" wire:model="item1" />
    </div>

    <div data-theme="dark">
        <x-mary-toggle label="Left" wire:model="item1" hint="Please, turn it off now!" />
    </div>

    <x-mary-toggle label="Right" wire:model="item2" right />
    <x-mary-toggle label="Right" wire:model="item2" hint="Please, turn it off now!" right />
    <x-mary-toggle wire:model="item3" class="self-start">
        <x-slot:label>
            This is <br>a very <br> long line.
        </x-slot:label>
    </x-mary-toggle>

    <x-mary-theme-toggle darkTheme="dark" lightTheme="light" />

    <div data-theme="light">
        This div will always use light theme
        <span data-theme="retro">This span will always use retro theme!</span>
    </div>

</x-guest-layout>
