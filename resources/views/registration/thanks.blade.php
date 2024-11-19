<x-static-layout>
    <div class="w-full max-w-[1100px] mx-auto bg-white px-5 rounded-2xl shadow">
        <section id="thanks" class="px-5 py-10 max-w-[1000px] mx-auto flex flex-col">
            <a href="{{ route('home') }}" class="w-full mx-auto max-w-[400px] block">
                <x-logos.full-logo />
            </a>
            <div class="w-4/5 max-w-[600px] md:max-w-[400px] mx-auto flex flex-col text-2xl py-10 space-y-3 md:px-4 order-2 items-center">
                <h1 class="text-center">Thank you for registering.</h1>
                <p class="text-base">In a bit, you'll receive an email with full details. We look forward to hosting you this year.</p>
                <p><a class="text-indigo-700 hover:text-indigo-800" href="{{route('home')}}">Home</a></p>
            </div>
        </section>
        <section id="register" class="hidden px-5 py-10 mb-20 mx-auto my-20 text-2xl space-y-3 border-t-[1px] border-t-indigo-100" x-data="{event_id: 0}">
            <h2 class="w-full text-center">Register</h2>
            <form class="max-w-[600px] md:max-w-[400px] mx-auto pb-40 space-y-5" action="{{ route('registration') }}" method="post">
                @csrf
                <h3 class="w-full text-center uppercase text-sm text-stone-500 pt-4">Choose a date</h3>
                <div class="flex justify-between w-full text-base">
                    <x-events.date.container
                        event_id="100120241207"
                        weekday="Sat"
                        month="Dec"
                        date="07"
                        year="24"
                    />
                    <x-events.date.container
                        event_id="100220241208"
                        weekday="Sun"
                        month="Dec"
                        date="08"
                        year="24"
                    />
                    <x-events.date.container
                        event_id="100320241214"
                        weekday="Sat"
                        month="Dec"
                        date="14"
                        year="24"
                    />
                    <x-events.date.container
                        event_id="100420241228"
                        weekday="Sat"
                        month="Dec"
                        date="28"
                        year="24"
                    />
                    <x-text-input id="event" class="block mt-1 w-full"
                                  type="hidden"
                                  name="event"
                                  required
                                  x-bind:value="event_id"
                    />
                </div>
                <div>
                    <x-input-label for="first_name" :value="__('First Name')" />
                    <x-text-input id="first_name" class="block mt-1 w-full"
                                  type="text"
                                  name="first_name"
                                  required
                    />
                </div>
                <div>
                    <x-input-label for="last_name" :value="__('Last Name')" />
                    <x-text-input id="last_name" class="block mt-1 w-full"
                                  type="text"
                                  name="last_name"
                                  required
                    />
                </div>
                <div>
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" class="block mt-1 w-full"
                                  type="text"
                                  name="email"
                                  required
                    />
                </div>
                <div>
                    <x-input-label for="email_confirmation" :value="__('Confirm Email')" />
                    <x-text-input id="email_confirmation" class="block mt-1 w-full"
                                  type="text"
                                  name="email_confirmation"
                                  required
                    />
                </div>
                <div>
                    <div>
                        <label for="accept_terms" class="inline-flex items-center">
                            <input
                                class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                                id="accept_terms"
                                type="checkbox"
                                name="accept_terms"
                                required
                            >
                            <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('I accept the') }} <a class="text-fuchsia-500 hover:text-fuchsia-800 transition-all ease-in-out delay-75 duration-150" href="{{ route('terms') }}">{{ __('terms and conditions') }}</a>.</span>
                        </label>
                    </div>
                    <div>
                        <label for="accept_emails" class="inline-flex items-center">
                            <input
                                class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                                id="accept_emails"
                                type="checkbox"
                                name="accept_emails"
                                required
                            >
                            <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('I understand that I will receive updates via email') }}.</span>
                        </label>
                    </div>
                </div>
                <div>
                    <x-buttons.register-button type="submit"/>
                </div>
            </form>
        </section>
    </div>
</x-static-layout>
