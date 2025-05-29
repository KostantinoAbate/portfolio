@php
    $title = 'Bio';
    if(app()->currentLocale() == 'it') {
        $metaData = [
            'keywords' => 'Kostantino Abate, chi sono, sviluppatore full-stack, esperienza, bio, percorso, sviluppo web',
            'description' => 'Scopri chi è Kostantino Abate, il suo percorso da sviluppatore full-stack e il suo approccio al mondo dello sviluppo software.',
            'abstract' => 'Biografia completa di Kostantino Abate, sviluppatore web con approccio creativo e tecnico.',
            'topic' => 'Profilo professionale',
            'summary' => 'Approccio, competenze e filosofia di lavoro di Kostantino Abate come sviluppatore full-stack.',
            'title' => 'Chi sono – Kostantino Abate',
            'subtitle' => 'Un profilo completo tra esperienza, passione e codice.',
            'image' => '',
        ];
    } else {
        $metaData = [
            'keywords' => 'Kostantino Abate, about, full-stack developer, bio, experience, developer profile, web development',
            'description' => 'Learn more about Kostantino Abate’s background as a full-stack developer and his professional approach to web development.',
            'abstract' => 'Full biography of Kostantino Abate, a creative and technical web developer.',
            'topic' => 'Professional Profile',
            'summary' => 'Experience, mindset and skills of full-stack developer Kostantino Abate.',
            'title' => 'About Me – Kostantino Abate',
            'subtitle' => 'A complete profile driven by passion, experience, and code.',
            'image' => '',
        ];
    }
@endphp
<x-layout.app :metaData="$metaData" :title="$title">
    <div class="w-full min-h-screen max-lg:h-fit max-lg:max-h-fit" id="bio">
        <div class="w-full min-h-screen flex flex-col justify-center items-center gap-4 relative overflow-hidden">
            <x-graphic.grid/>
            <div class="absolute left-0 top-0 bottom-0 aspect-square bg-radial from-accent/10 via-accent/0 to-accent/0 scale-120 pointer-events-none"></div>
            <div class="absolute right-0 top-0 bottom-0 aspect-square bg-radial from-secondary/10 via-secondary/0 to-secondary/0 scale-120 pointer-events-none"></div>
            <div class="absolute left-0 top-0 right-0 bottom-0 m-auto w-full h-full bg-gradient-to-b from-primary/10 to-primary/0 pointer-events-none"></div>
            {!! __('complex.bio-page.text') !!}
        </div>
    </div>
</x-layout.app>
