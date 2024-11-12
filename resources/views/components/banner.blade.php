@props(['color' => 'blue', 'url', 'title', 'button', 'href'])

<div class="flex items-center justify-between space-x-4 sm:space-x-10 border-y border-x-0 sm:border-x border-{{ $color }}-600 bg-gradient-to-br from-{{ $color }}-500 via-{{ $color }}-400 to-{{ $color }}-500 py-6 px-6 sm:px-10 sm:rounded-2xl w-full text-white">
    <div class="flex flex-col gap-6">
        <p class="font-semibold">
            {{ $url }}
        </p>
        <p class="text-gray-200 text-lg sm:text-lg text-white text-balance leading-5">
            {!! $title !!}
        </p>
        <a
            href="{{ $href }}"
            target="_blank"
            rel="noreferrer"
            class="bg-gradient-to-br from-{{ $color }}-50 via-{{ $color }}-100 to-{{ $color }}-50 text-black bg-white hover:bg-gray-50 px-4 py-2 rounded-lg w-fit  ease duration-300 flex gap-1 items-center group"
        >
            <span>{!! $button !!}</span>
            <svg
                data-v-e660a7a7="" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" width="1em" height="1em" viewBox="0 0 256 256"
                class="group-hover:translate-x-1 transition-transform ease duration-200"
            >
                <path fill="currentColor" d="m221.66 133.66l-72 72a8 8 0 0 1-11.32-11.32L196.69 136H40a8 8 0 0 1 0-16h156.69l-58.35-58.34a8 8 0 0 1 11.32-11.32l72 72a8 8 0 0 1 0 11.32Z"></path>
            </svg>
        </a>
    </div>
    <div>
        {!! $slot !!}
    </div>
</div>
