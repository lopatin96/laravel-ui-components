<div class="hs-tooltip">
    <svg
        class="size-4 opacity-25 hover:opacity-50 transition cursor-help"
        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor"
    >
        <path fill-rule="evenodd" d="M15 8A7 7 0 1 1 1 8a7 7 0 0 1 14 0Zm-6 3.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0ZM7.293 5.293a1 1 0 1 1 .99 1.667c-.459.134-1.033.566-1.033 1.29v.25a.75.75 0 1 0 1.5 0v-.115a2.5 2.5 0 1 0-2.518-4.153.75.75 0 1 0 1.061 1.06Z" clip-rule="evenodd" />
    </svg>
    <span
        class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 py-1 px-2 w-60 bg-gray-900 text-xs text-white rounded shadow-sm"
        role="tooltip"
    >
        {{ $text }}
    </span>
</div>