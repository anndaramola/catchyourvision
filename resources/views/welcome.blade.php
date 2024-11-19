<x-static-layout>
    <div class="w-full max-w-[1100px] mx-auto bg-white px-5 rounded-2xl shadow">
        @if ($errors->any())
        <ul class="py-10 w-[300px] mx-auto">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
            <x-buttons.register-button data-pan="registration-button-error"/>
        @endif
        <section class="md:mx-auto min-h-[90vh] md:flex md:items-center md:justify-center">
            <div class="w-full max-w-[800px] md:px-10 pt-5 mx-auto flex flex-col h-full md:justify-center md:items-center">
                <a href="{{ route('home') }}" class="w-full mx-auto max-w-[400px] md:max-w-full inline-block">
                    <x-logos.full-logo />
                </a>
                <div class="my-4 w-full sm:w-3/5 md:w-4/5 sm:mx-auto">
                    <h2 class="text-3xl sm:text-5xl font-serif mt-4 mb-8">Experience a future of your own making.</h2>
                    <p class="text-xl md:text-2xl">The Catch Your Vision workshops are designed to bring you and your future closer to each other, and uncover the power of your imagination, your word, and your vision.</p>
                    <ul class="mx-2 my-10 md:m-10 space-y-1 md:space-y-2 text-lg md:text-2xl [&_li]:font-bold [&_li]:text-orange-700/80">
                        <li>Saturday, December 7, 2024</li>
                        <li>Sunday, December 8, 2024</li>
                        <li>Saturday, December 14, 2024</li>
                        <li>Saturday, December 28, 2024</li>
                    </ul>
                    <x-buttons.register-button data-pan="registration-button-hero"/>
                </div>
            </div>
        </section>
        <section id="why" class="md:px-5 py-10 max-w-[1000px] mx-auto my-20 border-t-[1px] border-t-indigo-100 flex flex-col items-center md:flex-row">
            <div class="w-full md:w-3/5 flex flex-col text-lg space-y-3 md:px-4">
                <p>These days, it seems everybody does a vision board. It’s a powerful way to take a snapshot of what you want your life to look at a certain point in the future.</p>
                <p>But, here at KABUVU, we know the power of community. So we created these workshops to make the visioning process a dynamic, community-based experience.</p>
                <p>For an hour and half, you get to let your imagination run wild and free, without judgement, and with a group of people cheering you on.</p>
                <span class="block py-5">
                    <x-buttons.register-button data-pan="registration-button-why"/>
                </span>
            </div>

            <div class="w-full md:w-2/5 flex">
                <img class="block mx-auto w-auto h-[500px] shadow-lg"
                     src="{{ url('/assets/images/image-002.png') }}"
                     alt="Woman smiling with a palm full of lights" />
            </div>
        </section>
        <section id="what" class="md:px-5 py-10 max-w-[1000px] mx-auto my-20 border-t-[1px] border-t-indigo-100 flex flex-col items-center md:flex-row">
            <div class="w-full md:w-3/5 flex flex-col text-lg space-y-3 md:px-4 order-2">
                <p>You’ll leave the workshop with a sense of direction, clarity, and hopefully some new friends.</p>
                <p>You’ll also leave with a draft of your vision that you can turn into a vision board, a plan, or anything you need to see it come to pass.</p>
                <p>Above all, this workshop is a powerful way to jumpstart any resolution you have for 2025.</p>
                <span class="block py-5">
                    <x-buttons.register-button data-pan="registration-button-what"/>
                </span>
            </div>

            <div class="w-2/5 flex order-1">
                <img class="block my-4 mx-auto shadow-lg rounded-full w-11/12 h-11/12"
                     src="{{ url('/assets/images/image-001.png') }}"
                     alt="Woman smiling with a palm full of lights" />
            </div>
        </section>

        <x-registration.form />
        <a href="{{ route('home') }}" class="w-full py-10 mx-auto max-w-[400px] block">
            <x-logos.full-logo />
        </a>
    </div>

</x-static-layout>
