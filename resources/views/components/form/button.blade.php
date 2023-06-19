<button class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 inline-flex focus:ring-blue-300 font-medium rounded-lg text-sm px-6 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"
    {{ $attributes->merge(['type' => 'submit', 'class' => 'button'])->except(['label']) }}
    >
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-4 h-4 fill-current ml-1"><path fill="none" d="M0 0h24v24H0z"/><path d="M7 19v-6h10v6h2V7.828L16.172 5H5v14h2zM4 3h13l4 4v13a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1zm5 12v4h6v-4H9z"/></svg>
    {{ $label }}
</button>