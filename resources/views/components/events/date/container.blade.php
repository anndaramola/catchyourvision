@props([
    'event_id',
    'weekday',
    'month',
    'date',
    'year',
    'bg' => 'bg-rose-50',
])

<div
    x-on:click="event_id = {{ $event_id }}"
    class="flex flex-col items-center justify-center text-center leading-snug cursor-pointer py-2 md:py-4 px-6 md:px-6 rounded-lg shadow-sm transition-all ease-in-out delay-75 duration-150"
    :class="event_id == '{{ $event_id }}' ? 'bg-rose-300 hover:bg-rose-200' : 'hover:bg-rose-100 {{ $bg }}'"
>
{{--    <span class="text-sm leading-5 uppercase text-stone-500">{{ $weekday }}</span>--}}

    <x-events.date.weekday
        event_id="{{ $event_id }}"
        weekday="{{ $weekday }}"
    />
    <x-events.date.month
        event_id="{{ $event_id }}"
        month="{{ $month }}"
    />
    <x-events.date.date
        event_id="{{ $event_id }}"
        date="{{ $date }}"
    />
    <x-events.date.year
        event_id="{{ $event_id }}"
        year="{{ $year }}"
    />
{{--    <span class="text-lg leading-5">{{ $month }}</span>--}}
{{--    <span class="text-lg leading-5">{{ $date }}</span>--}}
{{--    <span class="text-sm leading-5 text-stone-500">&lsquo;{{ $year }}</span>--}}
</div>
