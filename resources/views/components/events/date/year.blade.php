@props([
    'event_id',
    'year',
])

    <span
        class="text-xs md:text-sm leading-5 uppercase"
        :class="event_id == '{{ $event_id }}' ? 'text-rose-700' : 'text-stone-500'"
    >
        &lsquo;{{ $year }}
    </span>
