<x-layout.app>
    @foreach($views as $view)
        @php
            // ricavo l’id dal nome della view
            $pageId = Str::afterLast($view, '.');
        @endphp

        <div class="w-full h-full max-h-screen" id="{{ $pageId }}">
            @include($view)
        </div>
    @endforeach
</x-layout.app>
