<button {{ $attributes->merge(['type' => 'submit', 'class' => 'py-2 px-2 rounded-md bg-blue-500 text-white font-medium hover:bg-blue-600 duration-150 ease-in-out']) }}>
    {{ $slot }}
</button>
