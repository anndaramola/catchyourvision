<x-static-layout>
    <div class="w-full max-w-[1100px] mx-auto bg-white px-5 rounded-2xl shadow">
        <section class="md:mx-auto min-h-[90vh] md:flex md:items-center md:justify-center">
            <div class="w-full max-w-[800px] md:px-10 pt-5 mx-auto flex flex-col md:justify-center md:items-center">
                <a href="{{ route('home') }}" class="w-full mx-auto max-w-[300px] block">
                    <x-logos.full-logo />
                </a>
                <div class="my-4 w-full sm:w-3/5 md:w-4/5 sm:mx-auto">
                    <div class="text-sm text-stone-600 relative px-3 py-6 [&_h1]:text-2xl [&_h2]:text-xl [&_h2]:mt-3">
                        <x-registration.terms />
                    </div>
                </div>
            </div>
        </section>
    </div>

</x-static-layout>
