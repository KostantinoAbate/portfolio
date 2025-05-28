<x-layout.app>
    <div class="w-full min-h-screen max-lg:h-fit max-lg:max-h-fit" id="prospect">
        <div class="w-full min-h-screen flex flex-col justify-center items-center gap-4 relative overflow-hidden">
            <x-graphic.grid/>
            <div class="absolute left-0 top-0 bottom-0 aspect-square bg-radial from-accent/10 via-accent/0 to-accent/0 scale-120 pointer-events-none"></div>
            <div class="absolute right-0 top-0 bottom-0 aspect-square bg-radial from-secondary/10 via-secondary/0 to-secondary/0 scale-120 pointer-events-none"></div>
            <div class="absolute left-0 top-0 right-0 bottom-0 m-auto w-full h-full bg-gradient-to-b from-primary/10 to-primary/0 pointer-events-none"></div>
            <div class="max-w-[1200px] max-2xl:max-w-[900px] max-lg:max-w-[90%] h-full min-h-[500px] flex flex-col justify-start items-start gap-4 max-lg:py-16">
                <h2 class="text-4xl font-bold font-display" data-aos="fade-right" data-aos-duration="1000"><span class="inline-block text-base-content/60 font-normal mr-1">#</span>Prospetto</h2>
                <div class="divider" data-aos="fade-right" data-aos-delay="200" data-aos-duration="1000"></div>
                <p data-aos="fade-right" data-aos-delay="400" data-aos-duration="1000">
                    Potrei fare un <span class="ka-highlight">wall of text</span> di competenze, ambiti, tecnologie con cui ho lavorato. Ma essendo uno sviluppatore non potevo
                    non cercare una soluzione anche per questo! <span class="ka-highlight">Cerca tu quello che ti serve</span>, ti dirò se posso aiutarti.
                </p>
                <div class="input flex w-full space-x-4">
                    <span class="icon-[tabler--search] text-base-content/80 my-auto size-6 shrink-0"></span>
                    <input type="search" class="grow ct" placeholder="Search" id="search-input" search-input/>
                    <label class="sr-only" for="kbdInput">Cerca una competenza, una tecnologia o una skill</label>
                </div>
                <div class="flex flex-row justify-center items-center flex-wrap gap-2">
                    @foreach(config('init.skills') as $skill)
                        <span class="badge badge-lg badge-soft badge-secondary hover:bg-secondary/30 font-display cursor-default transition-colors" search-target-box><span search-target-text>{{ $skill }}</span></span>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    @vite('resources/js/modules/search.js')
</x-layout.app>
