<template>
    <div class="flex flex-col">
        <div class="p-3 flex item-center justify-center">
                <label for="table-search" class="sr-only">Search</label>
                <div class="relative mt-1">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                    </div>
                    <input type="text" id="table-search" class="bg-gray-50 w-60 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search for items">
                </div>
        </div>

        <div class="flex flex-col item-center justify-center">
            <div class="block w-full font-bold text-gray-600 bg-title p-2"><h1>Prix (MAD)</h1></div>
            <div class="flex item-center justify-between p-2">
                <span class="text-sm">120 DH</span>
                <span class="text-sm">2500 DH</span>
            </div>
            <div class="relative pt-1 px-2 mb-4">
                <input
                    type="range"
                    min="10"
                    max="2500"
                    value="1000"
                    class="
                    form-range
                    appearance-none
                    w-full
                    h-1
                    p-0
                    bg-gray-200
                    focus:outline-none focus:ring-0 focus:shadow-none
                    "
                    id="customRange1"
                />
            </div>
        </div>


<!-- les couleurs -->
        <div class="block w-full font-bold text-gray-600 bg-title p-2 mb-2"><h1>Coleur</h1></div>
        <div class="flex h-40 overflow-y-scroll flex-col item-center justify-center py-3">
              
            <div class="flex item-center justify-between p-2">
                <span class="">red</span>
                <input id="checkbox-1" aria-describedby="checkbox-1" type="checkbox" class="w-4 h-4 mt-2 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            </div>

            <div class="flex item-center justify-between p-2">
                <span class="">orange</span>
                <input id="checkbox-1" aria-describedby="checkbox-1" type="checkbox" class="w-4 h-4 mt-2 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            </div>

            <div class="flex item-center justify-between p-2">
                <span class="">green</span>
                <input id="checkbox-1" aria-describedby="checkbox-1" type="checkbox" class="w-4 h-4 mt-2 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            </div>

            <div class="flex item-center justify-between p-2">
                <span class="">gray</span>
                <input id="checkbox-1" aria-describedby="checkbox-1" type="checkbox" class="w-4 h-4 mt-2 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            </div>

        </div>

<!-- les types -->
        <div class="flex flex-col item-center justify-center">

            <div class="block w-full font-bold text-gray-600 bg-title p-2"><h1>Type</h1></div>
            <div class="flex item-center justify-between p-2">
                <span class="">produits</span>
                <input id="checkbox-1" aria-describedby="checkbox-1" type="checkbox" class="w-4 h-4 mt-2 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            </div>

            <div class="flex item-center justify-between p-2">
                <span class="">pekage</span>
                <input id="checkbox-1" aria-describedby="checkbox-1" type="checkbox" class="w-4 h-4 mt-2 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            </div>

            <div class="flex item-center justify-between p-2">
                <span class="">card</span>
                <input id="checkbox-1" aria-describedby="checkbox-1" type="checkbox" class="w-4 h-4 mt-2 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            </div>

        </div>

<!-- les Categorie -->
        <div class="block w-full font-bold text-gray-600 bg-title p-2 mb-2"><h1>Categorie</h1></div>
        <div class="flex h-40 overflow-y-scroll flex-col item-center justify-center py-3">
              <br><br>
            <div class="flex item-center justify-between p-2">
                <span class="">birthday</span>
                <input id="checkbox-1" aria-describedby="checkbox-1" type="checkbox" class="w-4 h-4 mt-2 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            </div>

            <div class="flex item-center justify-between p-2">
                <span class="">love</span>
                <input id="checkbox-1" aria-describedby="checkbox-1" type="checkbox" class="w-4 h-4 mt-2 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            </div>

            <div class="flex item-center justify-between p-2">
                <span class="">friends</span>
                <input id="checkbox-1" aria-describedby="checkbox-1" type="checkbox" class="w-4 h-4 mt-2 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            </div>

            <div class="flex item-center justify-between p-2">
                <span class="">copines</span>
                <input id="checkbox-1" aria-describedby="checkbox-1" type="checkbox" class="w-4 h-4 mt-2 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            </div>

            <div class="flex item-center justify-between p-2">
                <span class="">mariage</span>
                <input id="checkbox-1" aria-describedby="checkbox-1" type="checkbox" class="w-4 h-4 mt-2 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            </div>

        </div>

<!-- les Modes -->
        <div class="block w-full font-bold text-gray-600 bg-title p-2 mb-2"><h1>Mode</h1></div>
        <div class="flex h-40 overflow-y-scroll flex-col item-center justify-center py-3">
            <div class="flex item-center justify-between p-2">
                <span class="">Maroc</span>
                <input id="checkbox-1" aria-describedby="checkbox-1" type="checkbox" class="w-4 h-4 mt-2 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            </div>

            <div class="flex item-center justify-between p-2">
                <span class="">France</span>
                <input id="checkbox-1" aria-describedby="checkbox-1" type="checkbox" class="w-4 h-4 mt-2 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            </div>

            <div class="flex item-center justify-between p-2">
                <span class="">American</span>
                <input id="checkbox-1" aria-describedby="checkbox-1" type="checkbox" class="w-4 h-4 mt-2 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            </div>

            <div class="flex item-center justify-between p-2">
                <span class="">Espana</span>
                <input id="checkbox-1" aria-describedby="checkbox-1" type="checkbox" class="w-4 h-4 mt-2 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            </div>

        </div>

    </div>
</template>

<script>
export default {
    name : 'searchComponent'
}
</script>