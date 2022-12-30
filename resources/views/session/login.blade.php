<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10  border border-gray-100 p-6 rounded-xl">
            <h1 class="text-center text-xl font-bold">login</h1>
            <form action="/login" method="POST" class="mt-10">
                @csrf

                <x-form.input name="email" type="email" autocomplete="username"/>
                <x-form.input name="password" type="password" autocomplete="new-password"/>

                <x-form.button>login</x-form.button>
            </form>
        </main>
    </section>
</x-layout>
