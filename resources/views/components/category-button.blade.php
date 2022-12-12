@props(['category'])

<a href="/categories/{{$category->slug}}"
    class="px-3 py-1 border border-blue-400 rounded-full text-blue-400 text-xs uppercase font-semibold"
    style="font-size: 10px">
        {{ $category->name }}
    </a>