@props([ 'events' => [], ])
<section id="register" class="py-10 mb-5 mx-auto text-2xl space-y-3 border-t-[1px] border-t-indigo-100" x-data="{event_id: 0, terms:false}">
    <h2 class="w-full text-center text-3xl">Register for Catch Your Vision 2024</h2>
    <form class="w-full md:max-w-[500px] mx-auto pb-10 space-y-5" action="{{ route('registration') }}" method="post">
        @csrf
        <h3 class="w-full text-center uppercase text-sm text-stone-500 pt-2">Choose a date</h3>
        <div class="flex justify-center w-full text-base overflow-x-auto space-x-3 py-3">
            @foreach($events as $event)
            <x-events.date.container
                event_id="{{ $event['id'] }}"
                weekday="{{ $event['day'] }}"
                month="{{ $event['month'] }}"
                date="{{ $event['date'] }}"
                year="{{ $event['year'] }}"
            />
            @endforeach
            <x-text-input id="event" class="block mt-1 w-full"
                          type="hidden"
                          name="event"
                          required
                          x-bind:value="event_id"
            />
        </div>
        <div class="w-full md:max-w-[300px] mx-auto pb-10 space-y-5">
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
                        <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('I accept the') }} <a class="text-fuchsia-500 hover:text-fuchsia-800 transition-all ease-in-out delay-75 duration-150" href="{{ route('terms') }}"  x-on:click.prevent="$dispatch('open-modal', 'registration-terms')">{{ __('terms and conditions') }}</a>.</span>
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
                <x-buttons.register-button type="submit" x-bind:disabled="event_id == 0" data-pan="registration-button-form"/>
            </div>
        </div>
    </form>

<x-modal name="registration-terms" x-show="terms == true">
    <div class="text-sm text-stone-600 h-[90vh] relative overflow-y-auto px-3 py-6 [&_h1]:text-2xl [&_h2]:text-xl [&_h2]:mt-3">
        <div x-on:click="$dispatch('close-modal', 'registration-terms')" class="cursor-pointer fixed top-2 right-2 text-xs uppercase py-1 px-2 rounded-sm bg-indigo-200 text-indigo-800">Close</div>
        <x-registration.terms />
    </div>
</x-modal>
</section>
