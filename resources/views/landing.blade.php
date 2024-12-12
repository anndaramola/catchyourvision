<x-static-layout>
    <div class="w-full h-screen bg-white flex flex-col md:flex-row">
        <div class="w-screen fixed top-0 left-0 h-[40px] space-x-2 bg-indigo-900 text-white text-xs z-50 flex items-center px-2 md:ps-10 justify-center">
            <span>KABUVU presents: </span><x-logos.bold-text class="h-4 md:h-[24px] fill-white md:-mt-1"/>
        </div>
        <div class="w-screen h-2/3 md:w-1/2 md:h-screen bg-white relative flex flex-col justify-center items-center">
            <div class="md:w-2/3 p-5 md:px-10 space-y-10">
                <div class="relative flex items-center w-11/12 md:w-full mx-auto">
                    <x-logos.symbol fill="purple" class="w-4 absolute -right-8"/>
                    <x-logos.symbol fill="purple" class="w-4 absolute -bottom-4 -right-4"/>
                    <x-logos.symbol fill="purple" class="w-4 absolute -left-8 top-[20%]"/>
                    <x-logos.symbol fill="purple" class="w-4 absolute -left-4 bottom-0"/>
                </div>
                <hgroup class="space-y-6">
                    <h2 class="text-3xl md:text-4xl 2xl:text-5xl text-stone-800">What happens when you get clear about who you are and who you want to be?</h2>
                    <p class="md:text-lg 2xl:text-xl text-stone-800/90">The Catch Your Vision workshops are designed to bring you and your future closer to each other, and uncover the power of your imagination, your word, and your vision.</p>
                </hgroup>
                <x-logos.symbol fill="purple" class="w-6"/>
            </div>
            @if(count($events) > 0)
            <a href="#register" class="transition-all ease-in-out delay-200 duration-200 w-[70px] h-[70px] rounded-full bg-neutral-900 text-white font-bold text-xs uppercase flex items-center justify-center absolute bottom-[-35px] md:top-[50%] md:right-[-35px] hover:bg-black">
                Register
            </a>
            @endif
        </div>
        <div class="bg-mesh1 w-screen md:w-1/2 h-1/3 md:h-screen bg-purple-500 flex items-center justify-center">
            <div class="text-white text-2xl md:w-2/5 mx-auto text-center">
                Experience a future of your own making.
            </div>
        </div>
    </div>
    @if(count($events) > 0)
        <div id="register" class="w-full min-h-screen flex flex-col items-center">
            <div class="pt-20 w-1/3 mx-auto space-y-3">
                <h2 class="text-2xl font-serif">A workshop designed to bring your future closer.</h2>
                <p>You’ll leave the workshop with a sense of direction, clarity, and hopefully some new friends.</p>
                <p>You’ll also leave with a draft of your vision that you can turn into a vision board, a plan, or anything you need to see it come to pass.</p>
                <p>Above all, this workshop is a powerful way to jumpstart any resolution you have for 2025.</p>
            </div>
            <div class="p-5 mx-auto">
                <x-registration.form :events="$events"/>
            </div>
        </div>
    @endif
</x-static-layout>
