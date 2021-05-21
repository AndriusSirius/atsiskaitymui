<x-app-layout>
    <div class="container mx-auto">
        <div class="flex justify-center px-6 my-12">
            <!-- Row -->
            <div class="w-full xl:w-3/4 lg:w-11/12 flex">
                <!-- Col -->
                <img class="object-contain w-full h-auto bg-white hidden lg:block lg:w-1/2 bg-cover rounded-l-lg"
                    src="{{ asset('images/autoboto.jpg') }}">
                <!-- Col -->
                <div class="w-full lg:w-1/2 bg-white p-5 rounded-lg lg:rounded-l-none">
                    <div class="px-8 mb-4 text-center">
                        <h3 class="pt-4 mb-2 text-2xl">Automobilių klubo svetainė</h3>
                        <p class="mb-4 text-sm text-gray-700">
                            Pirmieji automobiliai sukurti XVIII a., kai arkliniam vežimui pritaikytas mechaninis
                            variklis – 1769 m. Prancūzijoje vežimui pritaikyta garo mašina. Pirmieji automobiliai galėjo
                            išvystyti 2-4 km/h greitį. 1814 m. sukurtas vairo mechanizmas, 1821 m. – krumplinė pavara,
                            1831 m. – diferencialas. 1831 m. Didžiojoje Britanijoje keleivių pervežimui pradėti naudoti
                            omnibusai, pasiekę iki 30 km/h greitį. 1835 metais sukurta elektros akumuliatorinė pavara.

                            XIX a. pabaigoje automobiliams pradėta pritaikyti benzininius variklius. 1885 m. C. F.
                            Bencas pagamino triratį benzininį automobilį, 1886 m. G. Daimleris – keturratį.

                            1895 m. sukurtos pneumatinės padangos. 1903 m. H. Fordas pradėjo serijinę automobilių gamybą
                            JAV.

                            1966 m. sukurti saugos diržai, 1968 – stabdžių antiblokavimo sistema, 1989 m. – dyzelinis
                            variklis su elektroniniu valdymu.
                        </p>
                    </div>
                    <form class="px-8 pt-6 pb-8 mb-4 bg-white rounded">
                        <div class="mb-4">
                            <label class="block mb-2 text-sm font-bold text-gray-700" for="email">
                                Rašyti atsiliepimą
                            </label>
                            <input
                                class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                id="email" type="email" placeholder="Rašyti pranešimą..." />
                        </div>
                        <div class="mb-6 text-center">
                            <button
                                class="w-full px-4 py-2 font-bold text-white bg-red-500 rounded-full hover:bg-red-700 focus:outline-none focus:shadow-outline"
                                type="button">
                                Siųsti
                            </button>
                        </div>
                        <hr class="mb-6 border-t" />
                        <div class="text-center">
                            <a class="inline-block text-sm text-blue-500 align-baseline hover:text-blue-800">
                                Susisiekti su mumis!
                            </a>
                        </div>
                    </form>
                </div>
            </div>


        </div>
        <div class="relative block md:flex items-center">
            <div class="w-full md:w-1/2 relative z-1 bg-gray-100 rounded shadow-lg overflow-hidden">
                <div
                    class="text-lg font-medium text-gray-700 uppercase p-8 text-center border-b border-gray-200 tracking-wide">
                    AutoKlubas - viskas apie automobilius, jų statistika ir daugiau!</div>
                <div class="block sm:flex md:block lg:flex items-center justify-center">
                    <div class="mt-8 sm:m-8 md:m-0 md:mt-8 lg:m-8 text-center">
                        <div class="inline-flex items-center">
                            <span class="text-3xl font-medium">3.000.000+</span>
                        </div>
                        <span class="block text-sm text-gray-600 mt-2">automoblių Lietuvoje</span>
                    </div>
                    <div class="mt-4 mb-8 sm:m-8 md:m-0 md:mt-4 md:mb-8 lg:m-8 text-center">
                        <div class="inline-flex items-center">
                            <span class="text-3xl font-medium">200.000+</span>
                        </div>
                        <span class="block text-sm text-gray-600 mt-2">šiuo metu parduodamų automobilių.</span>
                    </div>
                </div>
                <div class="flex justify-center mt-3">
                    <ul>
                        <li class="flex items-center">
                            <div class="bg-green-200 rounded-full p-2 fill-current text-green-700">
                                <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                    class="icon-umbrella">
                                    <path class="primary"
                                        d="M11 3.05V2a1 1 0 0 1 2 0v1.05A10 10 0 0 1 22 13c0 1.33-2 1.33-2 0a2 2 0 1 0-4 0c0 1.33-2 1.33-2 0a2 2 0 1 0-4 0c0 1.33-2 1.33-2 0a2 2 0 1 0-4 0c0 1.33-2 1.33-2 0a10 10 0 0 1 9-9.95z" />
                                    <path class="secondary"
                                        d="M11 14a1 1 0 0 1 2 0v5a3 3 0 0 1-6 0 1 1 0 0 1 2 0 1 1 0 0 0 2 0v-5z" />
                                </svg>
                            </div>
                            <span class="text-gray-700 text-lg ml-3">Greitai atsakome į jūsų žinutes!</span>
                        </li>
                        <li class="flex items-center mt-3">
                            <div class="bg-green-200 rounded-full p-2 fill-current text-green-700">
                                <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                    class="icon-shopping-bag">
                                    <path class="primary"
                                        d="M5 8h14a1 1 0 0 1 1 .92l1 12A1 1 0 0 1 20 22H4a1 1 0 0 1-1-1.08l1-12A1 1 0 0 1 5 8z" />
                                    <path class="secondary"
                                        d="M9 10a1 1 0 0 1-2 0V7a5 5 0 1 1 10 0v3a1 1 0 0 1-2 0V7a3 3 0 0 0-6 0v3z" />
                                </svg>
                            </div>
                            <span class="text-gray-700 text-lg ml-3">Jokių reklamų(NO-ADS)!</span>
                        </li>
                        <li class="flex items-center mt-3">
                            <div class="bg-green-200 rounded-full p-2 fill-current text-green-700">
                                <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                    class="icon-pie-chart">
                                    <path class="primary"
                                        d="M14 13h6.78a1 1 0 0 1 .97 1.22A10 10 0 1 1 9.78 2.25a1 1 0 0 1 1.22.97V10a3 3 0 0 0 3 3z" />
                                    <path class="secondary"
                                        d="M20.78 11H14a1 1 0 0 1-1-1V3.22a1 1 0 0 1 1.22-.97c3.74.85 6.68 3.79 7.53 7.53a1 1 0 0 1-.97 1.22z" />
                                </svg>
                            </div>
                            <span class="text-gray-700 text-lg ml-3">24/7 susisiekimas</span>
                        </li>
                    </ul>
                </div>
                <a class="block flex items-center justify-center bg-gray-200 hover:bg-gray-300 p-8 text-md font-semibold text-gray-800 uppercase mt-16"
                    href="{{ route('login') }}">
                    <span>Susiskurti vartotoją</span>
                    <span class="font-medium text-gray-700 ml-2">➔</span>
                </a>
            </div>
            <div class="w-full md:w-1/2 relative z-0 px-8 md:px-0 md:py-16">
                <div class="bg-gray-900 text-white rounded-b md:rounded-b-none md:rounded-r shadow-lg overflow-hidden">
                    <div class="text-lg font-medium uppercase p-8 text-center border-b border-gray-800 tracking-wide">
                        Lorem ipsum dolor sit amet.</div>
                    <div class="text-center text-sm sm:text-md max-w-sm mx-auto mt-8 text-gray-200 px-8 lg:px-0">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                    </div>
                    <div class="mt-8 border border-gray-800 mx-8 lg:mx-16 flex flex-wrap">
                        <div
                            class="flex items-center justify-center w-1/2 text-center p-4 border-r border-b border-gray-800">
                            Lorem, ipsum.</div>
                        <div class="flex items-center justify-center w-1/2 text-center p-4 border-b border-gray-800">
                            Lorem, ipsum.</div>
                        <div class="flex items-center justify-center w-1/2 text-center p-4 border-r border-gray-800">
                            Lorem, ipsum.</div>
                        <div class="flex items-center justify-center w-1/2 text-center p-4">Lorem, ipsum.</div>
                    </div>
                    <a class="block flex items-center justify-center bg-gray-800 hover:bg-gray-700 p-8 text-md font-semibold text-gray-300 uppercase mt-8"
                        href="#">
                        <span>Lorem, ipsum.</span>
                        <span class="font-medium text-gray-300 ml-2">➔</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
