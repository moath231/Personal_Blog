<x-layout>

    <x-setteing heading="publish new Post">
        <section class="mx-auto font-normal">
            <div class="w-full overflow-hidden shadow-lg">
                <div class="w-full overflow-x-auto">
                    <table class="w-full">
                        <tbody class="bg-white">

                            @foreach (App\Models\Post::all() as $post)
                                <tr class="text-gray-800">

                                    <td class="px-4 py-5 text-sm  border-l border-b border-t"> <a
                                            href="/post/{{ $post->slug }}">{{ $post->title }}</a>
                                    </td>

                                    <td
                                        class="px-4 py-3 text-xs border-b border-t text-blue-500 hover:text-blue-600 cursor-pointer">
                                        <a href="/admin/posts/{{ $post->id }}/edit">edit</a>
                                    </td>

                                    <td
                                        class="px-4 py-3 text-xs border-b border-t border-r text-blue-500 hover:text-blue-600 cursor-pointer">
                                        <form action="/admin/posts/{{ $post->id }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="text-gray-400">delete</button>
                                        </form>
                                    </td>

                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </x-setteing>

</x-layout>
