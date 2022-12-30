<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10 border border-gray-100 p-6 rounded-xl">
            <h1 class="text-center text-xl font-bold">Regster</h1>
            <form action="/register" method="POST" class="mt-10">
                @csrf
                <x-form.input name="name" type="text"/>
                <x-form.input name="email" type="email"/>
                <x-form.input name="username" type="text"/>
                <x-form.input name="password" type="password"/>
                <x-form.button>submite</x-form.button>

            </form>
        </main>
    </section>
</x-layout>
