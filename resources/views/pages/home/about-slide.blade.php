<a name="about" id="about"></a>
<div class="w-full h-full flex flex-col justify-center items-center gap-4 relative overflow-hidden">
    <x-graphic.grid/>
    <div class="absolute left-0 top-0 bottom-0 aspect-square bg-radial from-accent/10 via-accent/0 to-accent/0 scale-120 pointer-events-none"></div>
    <div class="absolute right-0 top-0 bottom-0 aspect-square bg-radial from-secondary/10 via-secondary/0 to-secondary/0 scale-120 pointer-events-none"></div>
    <div class="absolute left-0 top-0 right-0 bottom-0 m-auto w-full h-full bg-gradient-to-b from-primary/10 to-primary/0 pointer-events-none"></div>
    <div class="max-w-[1200px] max-2xl:max-w-[900px] max-lg:max-w-[90%] flex flex-col justify-center items-start gap-4 max-lg:py-16">
        <h2 class="text-4xl font-bold font-display" data-aos="fade-right" data-aos-duration="1000"><span class="inline-block text-base-content/60 font-normal mr-1">#</span>About</h2>
        <div class="divider" data-aos="fade-right" data-aos-delay="200" data-aos-duration="1000"></div>
        <p class="columns-2 max-lg:columns-1" data-aos="fade-right" data-aos-delay="400" data-aos-duration="1000">
            <span>
                Mi chiamo Kostantino Abate e sono uno sviluppatore Full-stack con una forte passione per lo <span class="ka-highlight">sviluppo software</span>, il design funzionale e le soluzioni digitali su misura.
                Nel mio lavoro unisco competenze tecniche solide con <span class="ka-highlight">creatività</span> e attenzione al dettaglio, costruendo applicazioni moderne, performanti e facili da usare.

                Mi occupo dello sviluppo <span class="ka-highlight">end-to-end</span> di progetti web: dall’architettura backend con PHP e Laravel, fino alle interfacce frontend dinamiche con JavaScript, React e Tailwind CSS.
                Lavoro con metodo, curiosità e spirito di squadra, cercando sempre di coniugare efficienza, scalabilità ed esperienza utente.
            </span>
            <span class="max-lg:inline-block max-lg:mt-4">
                Nel corso del tempo ho collaborato a progetti che spaziano da gestionali personalizzati a <span class="ka-highlight">piattaforme complesse</span>, adattandomi a diversi contesti e obiettivi.
                Ogni riga di codice che scrivo ha uno scopo preciso: <span class="ka-highlight">risolvere problemi reali</span> con soluzioni eleganti e ben strutturate.

                Quando non programmo, continuo a imparare, testare nuove tecnologie e migliorare il mio workflow: credo nella crescita continua e nella condivisione della conoscenza.
            </span>
        </p>
        <div class="divider" data-aos="fade-right" data-aos-delay="600" data-aos-duration="1000">{{ __('static.more') }}</div>
        <div class="w-full flex flex-row justify-center items-center gap-2">
            <a href="{{ route('bio') }}" class="btn btn-secondary text-sm" data-aos="fade-up" data-aos-delay="800" data-aos-duration="1000"><span class="icon-[tabler--user] size-5"></span>Bio</a>
            <a href="#projects" class="btn btn-secondary btn-outline text-sm" data-aos="fade-up" data-aos-delay="1000" data-aos-duration="1000"><span class="icon-[tabler--folder] size-5"></span>Progetti</a>
        </div>
    </div>
</div>
