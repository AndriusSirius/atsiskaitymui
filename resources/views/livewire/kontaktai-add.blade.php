<form class="p-6 flex flex-col justify-center">
    <div class="flex flex-col">
        <label for="name" class="hidden">Vardas, pavardė</label>
        <input type="fullname" name="fullname" wire:model="fullname" id="name" placeholder="Vardas, pavardė" class="w-100 mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 font-semibold focus:border-indigo-500 focus:outline-none">
    </div>

    <div class="flex flex-col mt-2">
        <label for="email" class="hidden">El.paštas</label>
        <input type="email" name="email" id="email" wire:model="email" placeholder="El.paštas" class="w-100 mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 font-semibold focus:border-indigo-500 focus:outline-none">
    </div>

    <div class="flex flex-col mt-2 mb-2">
        <label for="content" class="hidden">Žinutė</label>
        <textarea name="content" wire:model="content" class="w-100 mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 font-semibold focus:border-indigo-500 focus:outline-none" rows="3" placeholder="Žinutė"></textarea>
    </div>

    <button type="submit" wire:click.prevent="save()" class="w-full px-6 py-3 font-bold text-white bg-red-500 rounded-full hover:bg-red-700 focus:outline-none focus:shadow-outline">
        Patvirtinti
    </button>
</form>
