<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-blue border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-yellow-700 active:bg-red-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300  transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
