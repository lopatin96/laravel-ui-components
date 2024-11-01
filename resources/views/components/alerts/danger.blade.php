<div class="bg-red-50 border-s-4 border-red-600 px-2 sm:px-4 py-1.5 sm:py-3" role="alert">
    <div class="flex">
        <svg class="hidden sm:block flex-shrink-0 size-5 mt-0.5 text-red-800" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="m15 9-6 6"/><path d="m9 9 6 6"/></svg>

        <div class="ms-3">
            <div class="flex space-x-2 sm:space-x-0">
                <svg class="sm:hidden flex-shrink-0 size-5 mt-0.5 text-red-800" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="m15 9-6 6"/><path d="m9 9 6 6"/></svg>

                <h3 class="text-red-800 font-semibold">
                    {!! $title !!}
                </h3>
            </div>

            <p class="mt-2 text-sm text-gray-700">
                {!! $text !!}
            </p>
        </div>
    </div>
</div>