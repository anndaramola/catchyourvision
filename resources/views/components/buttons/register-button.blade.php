@props([
    'type' => 'button',
])

<x-primary-button {{ $attributes->merge(['type' => $type, 'class' => 'w-full max-w-[400px] mx-auto md:text-base text-center justify-center inline-flex rounded-3xl bg-[#9a8bc9] hover:bg-[#695d88] active:bg-[#4b324c] focus:bg-[#4b324c] focus:ring-indigo-600']) }}>
    @if($type === 'button')
        <a href="#register"/>Register</a>
    @else
        Register
    @endif
</x-primary-button>
