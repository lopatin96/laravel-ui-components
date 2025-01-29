@props(['title', 'button', 'href', 'color', 'verticalAlignment' => false])

<div class="bg-{{ $color }}-50 sm:rounded-2xl space-y-2 border-y-2 border-x-0 sm:border-x-2 border-{{ $color }}-200 py-3 px-5">
    <div class="flex @if($verticalAlignment) flex-col space-y-4 @else justify-between items-center space-x-4 @endif">
        <p class="text-gray-800 text-sm leading-snug @if($verticalAlignment) text-justify @else text-balance @endif">
            {!! $title !!}
        </p>

        <a
            href="{{ $href }}"
            target="_blank"
            rel="noreferrer"
            class="shrink-0 text-sm text-black px-4 py-2 font-medium rounded-full border-2 border-{{ $color }}-200 w-fit ease duration-300 flex gap-1 items-center group"
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
