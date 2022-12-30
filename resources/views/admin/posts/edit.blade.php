<x-layout>

    <x-setteing heading="publish new Post">
        <form action="/admin/posts/{{ $post->id }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PATCH')

            <x-form.input required name="title" :value="old('title', $post->title)" />
            <x-form.input required name="slug" :value="old('slug', $post->slug)" />
            <div class=" flex">
                <div class=" flex-1">
                    <x-form.input  name="thembnail" type="file" :value="old('thembnail', $post->thembnail)" />
                </div>
                <div class="ml-3">
                    <img src="{{ asset('storage/' . $post->thembnail) }}" alt="" class="rounded-xl" width="100">
                </div>
            </div>

            <x-form.textarea name="excerpt">{{ old('excerpt', $post->excerpt) }}</x-form.textarea>
            <x-form.textarea name="body">{{ old('excerpt', $post->body) }}</x-form.textarea>

            <x-form.field>
                <x-form.label name="category" />
                <select name="category_id" id="category_id"
                    class=" bg-white w-full p-2 rounded-xl border border-gray-400 outline-none">
                    @foreach (\App\Models\Category::all() as $cate)
                        <option value="{{ $cate->id }}"
                            {{ old('category_id', $post->category_id) == $cate->id ? 'selected' : '' }}>
                            {{ ucwords($cate->name) }}
                        </option>
                    @endforeach
                </select>
                <x-form.error name="category_id" />
            </x-form.field>

            <x-form.button>publish</x-form.button>
        </form>
    </x-setteing>

</x-layout>
