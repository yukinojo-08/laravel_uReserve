<div style="text-align: center">
    <button wire:click="increment">+</button>
    <h1>{{ $count }}</h1>
    <div class="mb-8"></div>
    こんにちは、{{ $name }}さん<br>
    <input type="text" wire:model.="name">
    {{-- <input type="text" wire:model.debounce="name"> --}}
    {{-- <input type="text" wire:model.lazy="name"> --}}
    {{-- <input type="text" wire:model.defar="name"> --}}
    <br>
    <button wire:mouseover="mouseOver">マウスを合わせてね</button>
</div>