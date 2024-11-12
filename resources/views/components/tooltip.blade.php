@props(['text', 'position' => 'top'])

<div class="relative group size-4">
    <svg
        class="size-4 opacity-25 hover:opacity-50 transition cursor-help"
        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor"
    >
        <path fill-rule="evenodd" d="M15 8A7 7 0 1 1 1 8a7 7 0 0 1 14 0Zm-6 3.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0ZM7.293 5.293a1 1 0 1 1 .99 1.667c-.459.134-1.033.566-1.033 1.29v.25a.75.75 0 1 0 1.5 0v-.115a2.5 2.5 0 1 0-2.518-4.153.75.75 0 1 0 1.061 1.06Z" clip-rule="evenodd" />
    </svg>
    <span
        class="
            transition invisible opacity-0 group-hover:opacity-100 group-hover:visible absolute z-10 py-1 px-2 w-[220px] bg-gray-900 text-xs text-white font-normal rounded shadow-sm
            @if($position === 'right')
                -top-1 left-[110%]
            @elseif($position === 'left')
                -top-1 right-[110%]
            @elseif($position === 'bottom')
                top-5 left-[50%] ml-[-110px]
            @else
                bottom-[110%] left-[50%] ml-[-110px]
            @endif
        "
        role="tooltip"
    >
        {!! $text !!}
    </span>
</div>