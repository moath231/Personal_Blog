@auth
    <x-panel>
        <form action="/post/{{ $posts->slug }}/comment" method="post">
            @csrf
            <header class="flex items-center space-x-4">
                <div>
                    <img src="https://i.pravatar.cc/100?u={{ auth()->id() }}" alt="" width="60" height="60"
                        class=" rounded-xl">
                </div>

                <div class="w-full">
                    <h3>want to participate?</h3>
                </div>
            </header>

            <div class="mt-6">
                <textarea name="body" id=""rows="6" class="w-full text-xs focus:outline-none focus:ring p-1"
                    placeholder="Quick, things or something to say"></textarea>
            </div>
            <div class=" flex justify-end mt-6 pt-6 border-t border-gray-200">
                <x-form.button> post </x-form.button>
            </div>
        </form>
        <x-form.error name="body" />
    </x-panel>
@else
    <p class=" font-semibold">
        <a href="/register" class="hover:underline text-gray-600 capitalize">register</a> or <a
            class="hover:underline text-gray-600 capitalize" href="/login">login</a> to leave a coment.
    </p>
@endauth
