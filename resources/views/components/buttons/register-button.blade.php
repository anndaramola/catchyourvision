@props([
    'type' => 'button',
])

<button {{ $attributes->merge(['type' => $type, 'class' => 'inline-flex items-center px-4 py-2 text-xs text-white dark:text-gray-800 uppercase tracking-wide font-bold w-full max-w-[400px] mx-auto md:text-base text-center justify-center inline-flex rounded-3xl bg-[#9a8bc9] hover:bg-[#695d88] active:bg-[#4b324c] focus:bg-[#4b324c] focus:ring-indigo-600']) }}>
    @if($type === 'button')
        <a class="block w-full h-full" href="#register"/>Register</a>
    @else
        Register
    @endif
</button>
