<x-layout>

  <x-setteing heading="publish new category">
      <form action="/admin/category/{{ $category->id }}" method="post" enctype="multipart/form-data">
          @csrf
          @method('PATCH')

          <x-form.input name="name" :value="old('slug', $category->name)"/>
          <x-form.input name="slug" :value="old('slug', $category->slug)"/>
          <x-form.button>publish</x-form.button>
      </form>
  </x-setteing>

</x-layout>
