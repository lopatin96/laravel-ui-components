@props(['title', 'maxW' => 'max-w-lg', 'placement' => null])

<div class="hs-tooltip inline-block [--trigger:click] @if($placement) [--placement:{{ $placement }}] @endif">
    <div class="hs-tooltip-toggle block text-center">
        <button type="button" class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 focus:outline-none focus:text-blue-800 disabled:opacity-50 disabled:pointer-events-none">
            {{ $title }}
            <svg class="shrink-0 size-4 rotate-180" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="m18 15-6-6-6 6"></path>
            </svg>
        </button>

        <div class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible hidden opacity-0 transition-opacity absolute invisible z-20 {{ $maxW }} w-full bg-white border border-gray-100 text-start rounded-xl shadow-md" role="tooltip">
            <div class="p-4">
                {{ $slot }}
            </div>
        </div>
    </div>
</div>