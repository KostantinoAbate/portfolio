<x-layout.app>
    @foreach($views as $view)
        @php
            // ricavo l’id dal nome della view
            $pageId = Str::afterLast($view, '.');
        @endphp

        <div class="w-full h-screen max-h-screen max-lg:h-fit max-lg:max-h-fit" id="{{ $pageId }}">
            @include($view)
        </div>
    @endforeach
</x-layout.app>
