<x-app-layout>

    <div class="p-16">
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

</x-app-layout>
