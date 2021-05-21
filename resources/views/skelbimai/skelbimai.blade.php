<x-app-layout>
    @auth
    <div class="container mx-auto">

        <div class="flex justify-center">
            <div class="container mx-auto px-4">

                <section class="pt-8 px-4">
                    <div class="flex flex-wrap overflow-hidden sm:-mx-1">

                        <div class="border-b-2 w-full overflow-hidden sm:my-1 sm:px-1">
                            <h2 class="mt-14 font-semibold uppercase text-dark text-lg">Jūsų parašyti skelbimai ir jų valdymas</h2>
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-700">
                                    <div class="flex justify-end">
                                        <a href="#" onclick="Livewire.emit('showPostCreate'); return false;"
                                            class="inline-block px-6 py-2 text-xs font-medium leading-6 text-center text-white uppercase transition bg-gray-700 rounded shadow ripple hover:shadow-lg hover:bg-gray-800 focus:outline-none mb-6">
                                            Rašyti naują skelbimą
                                        </a>
                                    </div>
                                    @livewire('skelbimai-add')

                                    <tr>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider w-1">
                                            ID
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-xs font-medium text-white uppercase tracking-wider">
                                            Pavadinimas
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-xs font-medium text-white uppercase tracking-wider">
                                            Tekstas
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3  text-xs font-medium text-white uppercase tracking-wider">
                                            Kada sukurtas
                                        </th>

                                        <th scope="col" class="relative px-6 py-3 w-1">
                                            <span class="sr-only">Valdymas</span>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    @foreach ($postai as $skelbimas)
                                        @livewire('skelbimai-edit', compact(['skelbimas']), key($skelbimas->id))
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="m-4">
                                {{ $posts->links() }}
                            </div>
                        </div>

                    </div>
                </section>
            </div>

        </div>
    </div>
    @endauth

    <div class="container mx-auto">

        <div class="flex justify-center">
            <div class="container mx-auto px-4">

                <section class="pt-8 px-4">
                    <div class="flex flex-wrap overflow-hidden sm:-mx-1">

                        <div class="border-b-2 w-full overflow-hidden sm:my-1 sm:px-1">
                            <h2 class="mt-14 font-semibold uppercase text-dark text-lg">Skelbimų lenta</h2>
                            <div class="grid md:grid-cols-2 sm:grid-cols-1 lg:grid-cols-3 m-5 mb-10">

                                @foreach ($posts as $post)

                                    <div class="bg-white overflow-hidden hover:bg-gray-50 border border-gray-200 p-3">
                                        <div class="m-2 text-justify text-sm">
                                            <p class="text-right text-xs">{{ $post->created_at }}</p>
                                            <h2 class="font-bold text-lg h-2 mb-8">{{ $post->pavadinimas }} </h2>
                                            <p class="text-xs">
                                                {{ $post->tekstas }}
                                            </p>

                                        </div>
                                        <div class="w-full text-right mt-4">
                                            Skelbėjo el.paštas:
                                            <p class="uppercase font-bold text-sm">{{ $post->users->email }}</p>
                                        </div>
                                    </div>

                                @endforeach

                            </div>
                        </div>

                </section>
            </div>
        </div>
    </div>

</x-app-layout>
