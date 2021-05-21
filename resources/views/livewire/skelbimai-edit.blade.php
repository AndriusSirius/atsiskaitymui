<tr>
    @if (!$edit)
        <td class="px-6 py-4 whitespace-nowrap">
            {{ $skelbimas->id }}
        </td>

        <td class="px-6 text-center py-4 whitespace-nowraptext-sm text-sm text-gray-900">
            {{ $skelbimas->pavadinimas }}
        </td>

        <td class="px-6 text-center py-4 whitespace-nowraptext-sm text-sm text-gray-900">
            {{ $skelbimas->tekstas }}
        </td>

        <td class="px-6 text-center py-4 whitespace-nowraptext-sm text-sm text-gray-900">
            {{ $skelbimas->created_at }}
        </td>


        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
            <button wire:click.prevent="showEdit"
                class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-1 px-4 pl-2 rounded inline-flex items-center">
                <span><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                  </svg></span>
            </button>
        </td>
    @elseif($delete)
        <td class="px-6 py-4 align-top bg-white">
            {{ $skelbimas->id }}
        </td>
        <td colspan="4" class="px-6 py-8 bg-white0 text-center">
            <h4 class="mb-8 font-bold flex flex-row justify-center">
                <div class=" ml-4 pt-2">
                    {{ __('Ar tikrai norite ištrinti šį produktą?') }}
                </div>
            </h4>
            <div class="flex flex-row justify-center">
                <button wire:click.prevent="deleteCancel"
                    class="whitespace-nowrap bg-white border-2 font-bold py-1 px-4 pl-2 rounded inline-flex items-center mb-3">
                    <span>Atšaukti</span>
                </button>
                <button wire:click.prevent="deleteConfirm"
                    class="ml-4 whitespace-nowrap border-2 font-bold py-1 px-4 pl-2 rounded inline-flex items-center mb-3">
                    <span>Taip</span>
                </button>
            </div>
        </td>
    @else
        <td class="px-6 py-4 align-top bg-yellow-50">
            {{ $skelbimas->id }}
        </td>
        <td colspan="3" class="px-6 py-4  bg-yellow-50">

        </td>
        <td class="px-6 py-4 text-right text-sm font-medium align-top bg-yellow-50">
            <button wire:click.prevent="delete"
                class="whitespace-nowrap bg-gray-300 hover:bg-gray-400 text-white-800 font-bold py-1 px-4 pl-2 rounded inline-flex items-center mb-3">
                <svg class="fill-current w-4 h-4 mr-2" viewBox="0 0 20 20">
                    <path
                        d="M17.114,3.923h-4.589V2.427c0-0.252-0.207-0.459-0.46-0.459H7.935c-0.252,0-0.459,0.207-0.459,0.459v1.496h-4.59c-0.252,0-0.459,0.205-0.459,0.459c0,0.252,0.207,0.459,0.459,0.459h1.51v12.732c0,0.252,0.207,0.459,0.459,0.459h10.29c0.254,0,0.459-0.207,0.459-0.459V4.841h1.511c0.252,0,0.459-0.207,0.459-0.459C17.573,4.127,17.366,3.923,17.114,3.923M8.394,2.886h3.214v0.918H8.394V2.886z M14.686,17.114H5.314V4.841h9.372V17.114z M12.525,7.306v7.344c0,0.252-0.207,0.459-0.46,0.459s-0.458-0.207-0.458-0.459V7.306c0-0.254,0.205-0.459,0.458-0.459S12.525,7.051,12.525,7.306M8.394,7.306v7.344c0,0.252-0.207,0.459-0.459,0.459s-0.459-0.207-0.459-0.459V7.306c0-0.254,0.207-0.459,0.459-0.459S8.394,7.051,8.394,7.306">
                    </path>
                </svg>
                <span>Ištrinti produktą</span>
            </button>
        </td>
    @endif
</tr>
