<ol class="flex items-center whitespace-nowrap" aria-label="Breadcrumb">
    @foreach($breadcrumbs as $breadcrumb)
        @isset($breadcrumb['route'])
            <li class="inline-flex items-center">
                <a
                    class="flex items-center text-sm text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600"
                    href="{{ route($breadcrumb['route']) }}"
                >
                    {{ $breadcrumb['title'] }}
                </a>
                <svg class="flex-shrink-0 mx-2 overflow-visible h-4 w-4 text-gray-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
            </li>
        @else
            <li class="inline-flex items-center text-sm font-semibold text-gray-800 truncate" aria-current="page">
                {{ $breadcrumb['title'] }}
            </li>
        @endisset
    @endforeach
</ol>
