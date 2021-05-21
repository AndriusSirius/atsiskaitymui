<div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4 @if($show) hidden @endif">
    <div class="sm:flex sm:items-start">
        <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left w-full">

            <div class="mb-3">
                <label class=" ml-2 font-semibold" for="pavadinimas">Čia rašykite skelbimo pavadinimą
                    <input wire:model="pavadinimas" id="pavadinimas" class="block mt-1 w-96 border-gray-700 rounded" type="text" name="pavadinimas" required>
                </label>
            </div>

            <div class="mb-3">
                <label class=" ml-2 font-semibold" for="tekstas">Skelbimo tekstas:
                    <textarea rows="3" wire:model="tekstas" id="tekstas" class="block mt-1 w-full border-gray-700 rounded" type="text" name="tekstas" required></textarea>
                </label>
            </div>

        </div>
    </div>
    <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
        <button type="button" wire:click.prevent="save()"
            class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 pl-2 py-1 bg-gray-600 text-base font-medium text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 sm:ml-3 sm:w-auto sm:text-sm">
            <svg class="fill-current w-4 h-4 mr-2" viewBox="0 0 20 20">
                <path
                    d="M7.629,14.566c0.125,0.125,0.291,0.188,0.456,0.188c0.164,0,0.329-0.062,0.456-0.188l8.219-8.221c0.252-0.252,0.252-0.659,0-0.911c-0.252-0.252-0.659-0.252-0.911,0l-7.764,7.763L4.152,9.267c-0.252-0.251-0.66-0.251-0.911,0c-0.252,0.252-0.252,0.66,0,0.911L7.629,14.566z">
                </path>
            </svg>
            Sukurti
        </button>
        <button type="button" wire:click.prevent="cancelPostCreate()"
            class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 pl-2 py-1 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
            <svg class="fill-current w-4 h-4 mr-2" viewBox="0 0 20 20">
                <path
                    d="M15.898,4.045c-0.271-0.272-0.713-0.272-0.986,0l-4.71,4.711L5.493,4.045c-0.272-0.272-0.714-0.272-0.986,0s-0.272,0.714,0,0.986l4.709,4.711l-4.71,4.711c-0.272,0.271-0.272,0.713,0,0.986c0.136,0.136,0.314,0.203,0.492,0.203c0.179,0,0.357-0.067,0.493-0.203l4.711-4.711l4.71,4.711c0.137,0.136,0.314,0.203,0.494,0.203c0.178,0,0.355-0.067,0.492-0.203c0.273-0.273,0.273-0.715,0-0.986l-4.711-4.711l4.711-4.711C16.172,4.759,16.172,4.317,15.898,4.045z">
                </path>
            </svg>
            Atšaukti
        </button>
    </div>
</div>
