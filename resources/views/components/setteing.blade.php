@props(['heading'])

<section class="py-8 max-w-5xl max-w mx-auto">
    <h1 class="text-2xl font-bold mb-7 pb-4 capitalize border-b">
        {{ $heading }}
    </h1>

    <div class="flex">
        <aside class="w-48 flex-shrink-0">
            <h4 class=" font-semibold mb-4 capitalize text-lg">links</h4>
            <ul class="space-y-2">
                <li>
                    <a href="/admin/posts"
                        class="{{ request()->is('admin/posts') ? 'text-blue-500' : '' }}">All posts</a>
                </li>
                <li>
                    <a href="/admin/posts/create"
                        class="{{ request()->is('admin/posts/create') ? 'text-blue-500' : '' }}">new post</a>
                </li>
            </ul>
        </aside>
        <main class="flex-1">
            <x-panel>
                {{ $slot }}
            </x-panel>
        </main>
    </div>

</section>
