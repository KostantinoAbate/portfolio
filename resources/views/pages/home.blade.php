@php
    $title = 'Home';
    if(app()->currentLocale() == 'it') {
        $metaData = [
            'keywords' => 'Kostantino Abate, sviluppatore full-stack, web developer, portfolio, sviluppo web, Laravel, React',
            'description' => 'Portfolio ufficiale di Kostantino Abate, sviluppatore full-stack specializzato in soluzioni web moderne e scalabili.',
            'abstract' => 'Scopri il lavoro di Kostantino Abate, sviluppatore full-stack con oltre 5 anni di esperienza.',
            'topic' => 'Sviluppo Web e Software',
            'summary' => 'Sviluppatore full-stack con base a Milano, specializzato in Laravel, React e soluzioni web personalizzate.',
            'title' => 'Kostantino Abate - Full-stack Developer',
            'subtitle' => 'Soluzioni web moderne. Codice pulito. Creatività applicata.',
            'image' => '',
        ];
    } else {
        $metaData = [
            'keywords' => 'Kostantino Abate, full-stack developer, web development, portfolio, Laravel, React, clean code',
            'description' => 'Official portfolio of Kostantino Abate, a full-stack developer specialized in scalable and modern web solutions.',
            'abstract' => 'Discover the work of Kostantino Abate, full-stack developer with over 5 years of experience.',
            'topic' => 'Web and Software Development',
            'summary' => 'Full-stack developer based in Milan, focused on Laravel, React, and custom web applications.',
            'title' => 'Kostantino Abate – Full-stack Developer',
            'subtitle' => 'Modern web solutions. Clean code. Creative thinking.',
            'image' => '',
        ];
    }
@endphp
<x-layout.app :metaData="$metaData" :title="$title">
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
