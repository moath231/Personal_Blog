@props(['name'])
<x-form.field>
    <x-form.label name="{{ $name }}" />
    <textarea name="{{ $name }}" id="{{ $name }}" rows="5"
        class="w-full p-2 rounded-xl border border-gray-200 outline-none">{{ $slot ?? old($name) }}
    </textarea>
    <x-form.error name="{{ $name }}" />
</x-form.field>
