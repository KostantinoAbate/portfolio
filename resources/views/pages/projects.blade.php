<x-layout.app>
    @php
        $phrase = Arr::random(config('init.random_phrases'));
    @endphp
    <div class="w-full min-h-screen max-lg:h-fit max-lg:max-h-fit" id="prospect">
        <div class="w-full min-h-screen flex flex-col justify-center items-center gap-4 relative overflow-hidden">
            <x-graphic.grid/>
            <div class="absolute left-0 top-0 bottom-0 aspect-square bg-radial from-accent/10 via-accent/0 to-accent/0 scale-120 pointer-events-none"></div>
            <div class="absolute right-0 top-0 bottom-0 aspect-square bg-radial from-secondary/10 via-secondary/0 to-secondary/0 scale-120 pointer-events-none"></div>
            <div class="absolute left-0 top-0 right-0 bottom-0 m-auto w-full h-full bg-gradient-to-b from-primary/10 to-primary/0 pointer-events-none"></div>
            <div class="max-w-[1200px] max-2xl:max-w-[900px] max-lg:max-w-[90%] h-full min-h-[500px] flex flex-col justify-start items-start gap-4 max-lg:py-16">
                <h2 class="text-4xl font-bold font-display" data-aos="fade-right" data-aos-duration="1000"><span class="inline-block text-base-content/60 font-normal mr-1">#</span>Progetti</h2>
                <div class="divider" data-aos="fade-right" data-aos-delay="200" data-aos-duration="1000"></div>
                @if(session('is_verified'))
                    
                @else
                    <form action="{{ route('verify.access') }}" method="POST" id="verify-form" class="flex flex-col justify-center items-start gap-2 w-[700px] max-lg:w-full">
                        @csrf
                        <p>Prima di mostrarti i progetti esegui la verifica. Scrivi <code class="bg-base-300 p-0.5 px-1 select-none">{{ $phrase }}</code> nell'input qui sotto</p>
                        <x-honeypot />
                        <input type="text" name="verify" id="input-verify" class="input ct" placeholder="Verifica">
                        <button type="submit" class="btn btn-success" id="submit-button" disabled><span class="icon-[tabler--check] size-5"></span>Verifica</button>
                    </form>
                @endif
            </div>
        </div>
    </div>
    @vite('resources/js/modules/verify.js')
    <script>
        window.RANDOM_PHRASE = {!! json_encode($phrase) !!};
    </script>
</x-layout.app>
