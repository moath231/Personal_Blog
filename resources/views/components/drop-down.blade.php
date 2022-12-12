@props(['tregger'])
<div x-data="{show: false}">
    {{-- tregger --}}
    <div @click=" show = ! show ">
        {{ $tregger }}
    </div>
    {{-- linkes --}}
    <div x-show="show" class="py-2 absolute bg-gray-200 w-full mt-2 rounded-xl z-50 " style="display: none">
            {{ $slot }}
    </div>
</div>
