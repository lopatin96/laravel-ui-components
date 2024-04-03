@props(['disabled' => false, 'counter' => false])

<div class="relative" x-data="{ count: 0 }" x-init="count = $refs.counter.value.length">
    <textarea
        {{ $disabled ? 'disabled' : '' }}
        {!! $attributes->merge(['class' => 'p-2 soft-scrollbar border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 rounded-lg shadow-sm']) !!}
        autocomplete="off"
        rows="4"
        x-ref="counter"
        x-on:keyup="count = $refs.counter.value.length"
    >{{ $slot }}</textarea>
    @if($counter)
        <div class="absolute right-0 text-sm mt-1 text-gray-400">
            <span x-html="count"></span> / <span x-html="$refs.counter.maxLength"></span>
        </div>
    @endif
</div>
