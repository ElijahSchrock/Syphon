@foreach ($comments as $comment)
<div class="mt-6 flex">
    <div class="mr-4 flex-shrink-0">
        <svg class="h-12 w-12 border border-gray-300 bg-white text-gray-300" preserveAspectRatio="none" stroke="currentColor" fill="none" viewBox="0 0 200 200" aria-hidden="true">
            <path vector-effect="non-scaling-stroke" stroke-width="1" d="M0 0l200 200M0 200L200 0" />
        </svg>
    </div>
    <div>
        <h4 class="text-lg font-bold">Lorem ipsum</h4>
        @foreach ($comments as $comment )
            
        <p class="mt-1">{{ $comment->comment }}</p>
        @endforeach
    </div>
</div>
{{-- <div class="mt-6 flex">
    <div class="mr-4 flex-shrink-0">
        <svg class="h-12 w-12 border border-gray-300 bg-white text-gray-300" preserveAspectRatio="none" stroke="currentColor" fill="none" viewBox="0 0 200 200" aria-hidden="true">
            <path vector-effect="non-scaling-stroke" stroke-width="1" d="M0 0l200 200M0 200L200 0" />
        </svg>
    </div>
    <div>
        <h4 class="text-lg font-bold">Lorem ipsum</h4>
        <p class="mt-1">Repudiandae sint consequuntur vel. Amet ut nobis explicabo numquam expedita quia omnis voluptatem. Minus quidem ipsam quia iusto.</p>
    </div>
</div> --}}
@endforeach
