<div class="bg-gray-100 p-3 rounded-lg transform hover:-translate-y-4 transition ease-in-out duration-1000">
    <div class="flex items-center space-x-5 mb-3">
        <div class="flex space-x-2">
            <span class="size-3 bg-red-500 border border-red-600 rounded-full"></span>
            <span class="size-3 bg-yellow-500 border border-yellow-600 rounded-full"></span>
            <span class="size-3 bg-green-500 border border-green-600 rounded-full"></span>
        </div>

        <div class="select-none text-gray-500 text-sm">
            {{ $title }}
        </div>
    </div>
    {{ $slot }}
</div>
