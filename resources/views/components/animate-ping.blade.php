<div class="relative">
    {{ $slot }}

    <span class="flex absolute size-3 sm:size-4 top-0 right-0 mt-1.5 mr-1.5 sm:-mt-1.5 sm:-mr-1.5">
        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-red-400 opacity-75"></span>
        <span class="relative inline-flex rounded-full size-3 sm:size-4 bg-red-500"></span>
    </span>
</div>