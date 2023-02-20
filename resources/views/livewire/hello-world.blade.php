<div>
    {{-- Care about people's approval and you will be their prisoner. --}}

    <input wire:model="name" type="text">

    <input wire:model="exclaim" type="checkbox">

    <select wire:model="greeting">
        <option>Hello</option>
        <option>Salut</option>
        <option>Goodbye</option>
    </select>


<br/>
    {{ $greeting }} {{ $name }} @if ($exclaim) ! @endif

    <button wire:click="resetName">Reset Name</button>
</div>
 