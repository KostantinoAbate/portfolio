@php
    $title = __('atom.project');
    if(app()->currentLocale() == 'it') {
        $metaData = [
            'keywords' => 'progetti, lavori, sviluppatore web, Laravel, React, portfolio, applicazioni, codice',
            'description' => 'Lista completa dei progetti realizzati da Kostantino Abate: dalle web app ai gestionali personalizzati.',
            'abstract' => 'Catalogo dei progetti sviluppati, con descrizioni, stack utilizzati e funzionalità chiave.',
            'topic' => 'Sviluppo web',
            'summary' => 'Scopri i progetti che ho realizzato: soluzioni su misura per esigenze reali.',
            'title' => 'Progetti – Kostantino Abate',
            'subtitle' => 'Dal codice alla soluzione: ogni progetto racconta una sfida.',
            'image' => '',
        ];
    } else {
        $metaData = [
            'keywords' => 'projects, work, developer portfolio, Laravel, React, web apps, applications, full-stack',
            'description' => 'A full list of projects by Kostantino Abate: from web apps to custom management tools.',
            'abstract' => 'Project catalog with detailed descriptions, technologies used, and key features.',
            'topic' => 'Web Development',
            'summary' => 'Discover custom-built projects tailored to real-world needs.',
            'title' => 'Projects – Kostantino Abate',
            'subtitle' => 'From code to solution: every project tells a story.',
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
                <h2 class="text-4xl font-bold font-display" data-aos="fade-right" data-aos-duration="1000"><span class="inline-block text-base-content/60 font-normal mr-1">#</span>{{ __('atom.project') }}</h2>
                <div class="divider" data-aos="fade-right" data-aos-delay="200" data-aos-duration="1000"></div>
                @if(!session('is_verified'))
                    {!! __('complex.projects-page.text-3') !!}
                    <div class="input flex w-full space-x-4" data-aos="fade-right" data-aos-delay="600" data-aos-duration="1000">
                        <span class="icon-[tabler--search] text-base-content/80 my-auto size-6 shrink-0"></span>
                        <input type="search" class="grow ct" placeholder="{{ __('atom.searchProject') }}" id="search-input" search-input/>
                        <label class="sr-only" for="search-input">{{ __('atom.searchProject') }}</label>
                    </div>
                    @foreach($projects as $projectGroup => $projectItems)
                        <div class="w-full h-fit p-6 bg-base-200/70 rounded-2xl">
                            <h3 class="text-2xl font-bold font-display">{{ $projectGroup }}</h3>
                            <div class="divider mb-8"></div>
                            <div class="w-full grid grid-cols-1 gap-8 max-lg:gap-16">
                                @foreach($projectItems as $id => $item)
                                    <div class="flex flex-row max-lg:flex-col justify-start items-center gap-8" search-target-box>
                                        @if(isset($item['gallery']) && $item['gallery'] === true)
                                            <a href="{{ route('gallery', [$projectGroup, $id]) }}" class="w-96 min-w-96 h-auto rounded-2xl overflow-hidden">
                                                <img src="{{ asset('storage/projects/' . $id . '/thumbnail.png') }}" class="w-full h-auto">
                                            </a>
                                        @else
                                            <img src="{{ asset('storage/projects/' . $id . '/thumbnail.png') }}" class="w-96 h-auto rounded-2xl">
                                        @endif
                                        <div class="grow flex flex-col items-start max-lg:items-center justify-center gap-2">
                                            <h4 class="text-xl font-semibold" search-target-text>{{ $item['title'] }}</h4>
                                            <div class="divider"></div>
                                            <div class="flex items-center gap-1 flex-wrap" search-target-text>
                                                @forelse($item['stack'] as $stack)
                                                    <span class="badge badge-sm badge-soft badge-secondary hover:bg-secondary/30 font-display cursor-default transition-colors" search-target-box><span search-target-text>{{ $stack }}</span></span>
                                                @empty
                                                    <span>N/D</span>
                                                @endforelse
                                            </div>
                                            @php
                                                if(app()->currentLocale() == 'it') {
                                                    $desc = $item['desc']['it'];
                                                } else {
                                                    $desc = $item['desc']['en'];
                                                }
                                            @endphp
                                            <p class="text-sm">{{ $desc }}</p>
                                            <div class="flex items-center gap-2">
                                                @if(isset($item['demo']))
                                                    <a href="{{ $item['demo'] }}" target="_blank" class="btn btn-secondary btn-sm">Live</a>
                                                @endif
                                                @if(isset($item['repository']) && $item['repository'] !== null)
                                                    @if(is_array($item['repository']))
                                                        @foreach($item['repository'] as $repo)
                                                            <a href="{{ $repo }}" target="_blank" class="btn btn-secondary btn-outline btn-sm">Repo {{ $loop->iteration }}</a>
                                                        @endforeach
                                                    @else
                                                        <a href="{{ $item['repository'] }}" target="_blank" class="btn btn-secondary btn-outline btn-sm">Repo</a>
                                                    @endif
                                                @endif
                                                @if(isset($item['gallery']) && $item['gallery'] === true)
                                                    <a href="{{ route('gallery', [$projectGroup, $id]) }}" target="_blank" class="btn btn-accent btn-outline btn-sm">Gallery</a>
                                                @endif
                                                @if(isset($item['attach']) && $item['attach'] === true)
                                                    <a href="{{ route('download.attach', [$id, $item['attach_name']]) }}" class="btn btn-accent btn-outline btn-sm">Attach</a>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
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
