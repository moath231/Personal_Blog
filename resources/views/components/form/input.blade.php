@props(['name'])
<x-form.field>

    <x-form.label
        name="{{ $name }}" />

    <input
        name="{{ $name }}"
        id="{{ $name }}"
        class="w-full p-2 rounded-xl border border-gray-200 outline-none bg-gray-50"
        {{  $attributes(['value'=> old($name)])  }}
        >

    <x-form.error
        name="{{ $name }}" />

</x-form.field>
