@php
    $title = $project['title'];
    if(app()->currentLocale() == 'it') {
        $metaData = [
            'keywords' => 'progetti, portfolio, galleria, lavori, web app, frontend, backend, UI, UX, showcase',
            'description' => 'Sfoglia la gallery dei progetti realizzati da Kostantino Abate: interfacce, funzionalità, design e codice.',
            'abstract' => 'Galleria interattiva dei progetti sviluppati, con esempi visivi e tecnici.',
            'topic' => 'Portfolio progetti',
            'summary' => 'Immagini e demo dei progetti realizzati: ogni dettaglio racconta un approccio solido e creativo.',
            'subtitle' => 'Uno sguardo concreto al mio lavoro attraverso interfacce e funzionalità.',
            'image' => '',
        ];
    } else {
        $metaData = [
            'keywords' => 'projects, portfolio, gallery, web development, UI design, UX, frontend, backend, showcase',
            'description' => 'Browse the visual gallery of Kostantino Abate’s projects: interfaces, features, design and code.',
            'abstract' => 'Interactive gallery of developed projects with visual and technical highlights.',
            'topic' => 'Project Portfolio',
            'summary' => 'Screenshots and demos of real work: a solid and creative full-stack approach.',
            'subtitle' => 'A visual journey through interfaces, features, and code.',
            'image' => '',
        ];
    }
@endphp
<x-layout.app :metaData="$metaData" :title="$title">
    @php
        if(app()->currentLocale() == 'it') {
            $phrase = Arr::random(config('init.random_phrases.it'));
        } else {
            $phrase = Arr::random(config('init.random_phrases.en'));
        }
    @endphp
    <div class="w-full min-h-screen max-lg:h-fit max-lg:max-h-fit" id="prospect">
        <div class="w-full min-h-screen flex flex-col justify-start items-center gap-4 relative overflow-hidden">
            <x-graphic.grid/>
            <div class="absolute left-0 top-0 bottom-0 aspect-square bg-radial from-accent/10 via-accent/0 to-accent/0 scale-120 pointer-events-none"></div>
            <div class="absolute right-0 top-0 bottom-0 aspect-square bg-radial from-secondary/10 via-secondary/0 to-secondary/0 scale-120 pointer-events-none"></div>
            <div class="absolute left-0 top-0 right-0 bottom-0 m-auto w-full h-full bg-gradient-to-b from-primary/10 to-primary/0 pointer-events-none"></div>
            <div class="w-[1200px] max-2xl:w-[900px] max-lg:w-[90%] h-full min-h-[500px] flex flex-col justify-start items-start gap-4 py-16 z-[99]">
                <h2 class="text-4xl font-bold font-display" data-aos="fade-right" data-aos-duration="1000"><span class="inline-block text-base-content/60 font-normal mr-1">#</span>{{ $project['title'] }}</h2>
                <div class="divider" data-aos="fade-right" data-aos-delay="200" data-aos-duration="1000"></div>
                @if(!session('is_verified'))
                    @if($hasVideo)
                        <div class="w-full h-fit">
                            <video
                                id="my-video"
                                class="video-js vjs-default-skin w-full rounded-2xl"
                                controls
                                preload="auto"
                                data-setup='{ "aspectRatio":"640:267", "playbackRates": [1, 1.5, 2] }'
                                vjs-fluid
                            >
                                <source src="{{ $video }}" type="video/webm" />
                                <p class="vjs-no-js">
                                To view this video please enable JavaScript, and consider upgrading to a
                                web browser that
                                <a href="https://videojs.com/html5-video-support/" target="_blank"
                                    >supports HTML5 video</a
                                >
                                </p>
                            </video>
                        </div>
                    @endif
                    @if($hasImg)
                        @if($hasVideo)
                            <div class="divider my-4"></div>
                        @endif
                        <div class="pswp-gallery grid grid-cols-4 max-lg:grid-cols-2 max-sm:grid-cols-1 gap-4" id="my-gallery">
                            @foreach($imgs as $img)
                                <a href="{{ $img }}" data-pswp-width="1917" data-pswp-height="907" data-cropped="true" target="_blank">
                                    <img src="{{ $img }}" class="rounded-2xl hover:scale-110 transition-all" alt="" />
                                </a>
                            @endforeach
                        </div>
                    @endif
                @else
                    <form action="{{ route('verify.access') }}" method="POST" id="verify-form" class="flex flex-col justify-center items-start gap-2 w-[700px] max-lg:w-full">
                        @csrf
                        {!! __('complex.projects-page.text-1') !!} {{ $phrase }} {!! __('complex.projects-page.text-2') !!}
                        <x-honeypot />
                        <input type="text" name="verify" id="input-verify" class="input ct" placeholder="{{ __('atom.verify') }}">
                        <button type="submit" class="btn btn-success" id="submit-button" disabled><span class="icon-[tabler--check] size-5"></span>{{ __('atom.verify') }}</button>
                    </form>
                @endif
            </div>
        </div>
    </div>
    @vite(['resources/js/modules/verify.js', 'resources/js/modules/search.js'])
    <script>
        window.RANDOM_PHRASE = {!! json_encode($phrase) !!};
    </script>
</x-layout.app>
