<x-layout>

    <x-setteing heading="publish new Post">
        <form action="/admin/posts" method="post" enctype="multipart/form-data">
            @csrf

            <x-form.input name="title" />
            <x-form.input name="slug" />
            <x-form.input name="thembnail" type="file" />

            <x-form.textarea name="excerpt" />
            <x-form.textarea name="body" />

            <x-form.field>
                <x-form.label name="category" />
                <select name="category_id" id="category_id"
                    class=" bg-white w-full p-2 rounded-xl border border-gray-400 outline-none">
                    @foreach (\App\Models\Category::all() as $cate)
                        <option value="{{ $cate->id }}" {{ old('category_id') == $cate->id ? 'selected' : '' }}>
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
