<x-layout>

    <x-setteing heading="publish new category">
        <form action="/admin/category" method="post" enctype="multipart/form-data">
            @csrf

            <x-form.input name="name" type="text"/>
            <x-form.input name="slug" type="text"/>
            <x-form.button>publish</x-form.button>
        </form>
    </x-setteing>

</x-layout>
