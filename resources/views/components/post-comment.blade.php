@props(['comment'])
<x-panel class="bg-gray-50">
    <section class=" flex space-x-4">
        <div class="flex-shrink-0">
            <img src="https://i.pravatar.cc/100?u={{ $comment->auther->id }}" alt="" width="60" height="60"
                class=" rounded-xl">
        </div>
        <div>
            <header class=" mb-4">
                <h3 class="font-bold capitalize">{{ $comment->auther->name }}</h3>
                <span class="text-xs capitalize">posts <time>{{ $comment->created_at->diffForHumans() }}</time>
                </span>
            </header>
            <p class="leading-6">{{ $comment->body }}</p>
        </div>
    </section>
</x-panel>
