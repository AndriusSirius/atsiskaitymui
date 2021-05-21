<x-app-layout>
    <div class="container mx-auto">
        <div class="flex justify-center px-6 my-12">
            <!-- Row -->
            <div class="w-full xl:w-3/4 lg:w-11/12 flex">
                <!-- Col -->
                <img class="object-contain w-full h-auto bg-white hidden lg:block lg:w-1/2 bg-cover rounded-l-lg" src="{{ asset('images/autoboto.jpg') }}">
                <!-- Col -->
                <div class="w-full lg:w-1/2 bg-white p-5 rounded-lg lg:rounded-l-none">
                    <div class="px-8 mb-4 text-center">
                        <h3 class="pt-4 mb-2 text-2xl">Automobilių klubo svetainė</h3>
                        <p class="mb-4 text-sm text-gray-700">
                            Pirmieji automobiliai sukurti XVIII a., kai arkliniam vežimui pritaikytas mechaninis variklis – 1769 m. Prancūzijoje vežimui pritaikyta garo mašina. Pirmieji automobiliai galėjo išvystyti 2-4 km/h greitį. 1814 m. sukurtas vairo mechanizmas, 1821 m. – krumplinė pavara, 1831 m. – diferencialas. 1831 m. Didžiojoje Britanijoje keleivių pervežimui pradėti naudoti omnibusai, pasiekę iki 30 km/h greitį. 1835 metais sukurta elektros akumuliatorinė pavara.

                            XIX a. pabaigoje automobiliams pradėta pritaikyti benzininius variklius. 1885 m. C. F. Bencas pagamino triratį benzininį automobilį, 1886 m. G. Daimleris – keturratį.

                            1895 m. sukurtos pneumatinės padangos. 1903 m. H. Fordas pradėjo serijinę automobilių gamybą JAV.

                            1966 m. sukurti saugos diržai, 1968 – stabdžių antiblokavimo sistema, 1989 m. – dyzelinis variklis su elektroniniu valdymu.
                        </p>
                    </div>
                    <form class="px-8 pt-6 pb-8 mb-4 bg-white rounded">
                        <div class="mb-4">
                            <label class="block mb-2 text-sm font-bold text-gray-700" for="email">
                                Rašyti atsiliepimą
                            </label>
                            <input
                                class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                id="email"
                                type="email"
                                placeholder="Rašyti pranešimą..."
                            />
                        </div>
                        <div class="mb-6 text-center">
                            <button
                                class="w-full px-4 py-2 font-bold text-white bg-red-500 rounded-full hover:bg-red-700 focus:outline-none focus:shadow-outline"
                                type="button"
                            >
                                Siųsti
                            </button>
                        </div>
                        <hr class="mb-6 border-t" />
                        <div class="text-center">
                            <a
                                class="inline-block text-sm text-blue-500 align-baseline hover:text-blue-800"
                            >
                                Susisiekti su mumis!
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
