@props(['title', 'button', 'href'])

<div class="shadow-sm sm:rounded-2xl bg-white space-y-2 border-y border-x-0 sm:border-x py-3 px-5 sm:px-6">
    <div class="flex flex-col gap-4">
        <p class="text-gray-800 text-sm leading-snug">
            {!! $title !!}
        </p>
        <a
            href="{{ $href }}"
            target="_blank"
            rel="noreferrer"
            class="text-sm text-black px-4 py-2 font-medium rounded-full border-2 border-dark w-fit ease duration-300 flex gap-1 items-center group"
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
</div>
