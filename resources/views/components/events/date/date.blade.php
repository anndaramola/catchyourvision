@props([
    'event_id',
    'date',
])

    <span
        class="text-lg leading-5"
        :class="event_id == '{{ $event_id }}' ? 'text-rose-900' : 'text-stone-500'"
    >
        {{ $date }}
    </span>
