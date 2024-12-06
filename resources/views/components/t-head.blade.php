@props(['dbName', 'sortBy', 'sortDir'])
<th wire:click="sort('{{$dbName}}')" scope="col" class="px-4 py-3">
    <button class="flex align-center ">
        {{$slot}}
        @if ($sortBy == 'created_at')
            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                class="size-4 ml-2">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M8.25 15 12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9" />
            </svg>
        @else
            @if ($sortDir == 'ASC')
                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                    class="size-4 ml-2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="m4.5 15.75 7.5-7.5 7.5 7.5" />
                </svg>
            @elseif($sortDir == 'DESC')
                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                    class="size-4 ml-2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                </svg>
            @endif
        @endif
    </button>
</th>