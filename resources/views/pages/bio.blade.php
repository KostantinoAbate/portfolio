<x-layout.app>
    <div class="w-full min-h-screen max-lg:h-fit max-lg:max-h-fit" id="bio">
        <div class="w-full min-h-screen flex flex-col justify-center items-center gap-4 relative overflow-hidden">
            <x-graphic.grid/>
            <div class="absolute left-0 top-0 bottom-0 aspect-square bg-radial from-accent/10 via-accent/0 to-accent/0 scale-120 pointer-events-none"></div>
            <div class="absolute right-0 top-0 bottom-0 aspect-square bg-radial from-secondary/10 via-secondary/0 to-secondary/0 scale-120 pointer-events-none"></div>
            <div class="absolute left-0 top-0 right-0 bottom-0 m-auto w-full h-full bg-gradient-to-b from-primary/10 to-primary/0 pointer-events-none"></div>
            <div class="max-w-[1200px] max-2xl:max-w-[900px] max-lg:max-w-[90%] h-full flex flex-col justify-center items-start gap-4 max-lg:py-16">
                <h2 class="text-4xl font-bold font-display" data-aos="fade-right" data-aos-duration="1000"><span class="inline-block text-base-content/60 font-normal mr-1">#</span>Bio</h2>
                <div class="divider" data-aos="fade-right" data-aos-delay="200" data-aos-duration="1000"></div>
                <p data-aos="fade-right" data-aos-delay="400" data-aos-duration="1000">
                    Mi chiamo <span class="ka-highlight">Kostantino Abate</span>, sono uno sviluppatore <span class="ka-highlight">full-stack</span> con sede a Milano e oltre 5 anni di esperienza nello sviluppo web e 
                    software. Non ho un titolo di studio formale nel settore: ho imparato tutto sul campo, lavorando a <span class="ka-highlight">progetti reali</span> e affrontando 
                    sfide concrete, il che mi ha permesso di sviluppare competenze solide, pratiche e sempre aggiornate.
                </p>
                <p class="mt-4" data-aos="fade-right" data-aos-delay="600" data-aos-duration="1000">
                    Lavoro con <span class="badge badge-soft badge-secondary hover:bg-secondary/30 font-display cursor-default transition-colors cd">PHP</span>, 
                    <span class="badge badge-soft badge-secondary hover:bg-secondary/30 font-display cursor-default transition-colors cd">Laravel</span>, 
                    <span class="badge badge-soft badge-secondary hover:bg-secondary/30 font-display cursor-default transition-colors cd">Twig</span>, 
                    <span class="badge badge-soft badge-secondary hover:bg-secondary/30 font-display cursor-default transition-colors cd">JavaScript</span>, 
                    <span class="badge badge-soft badge-secondary hover:bg-secondary/30 font-display cursor-default transition-colors cd">Tailwind CSS</span>, 
                    <span class="badge badge-soft badge-secondary hover:bg-secondary/30 font-display cursor-default transition-colors cd">React</span>, 
                    <span class="badge badge-soft badge-secondary hover:bg-secondary/30 font-display cursor-default transition-colors cd">Node.js</span>, 
                    <span class="badge badge-soft badge-secondary hover:bg-secondary/30 font-display cursor-default transition-colors cd">Electron.js</span>, 
                    <span class="badge badge-soft badge-secondary hover:bg-secondary/30 font-display cursor-default transition-colors cd">Sass</span>, 
                    <span class="badge badge-soft badge-secondary hover:bg-secondary/30 font-display cursor-default transition-colors cd">Less</span>, 
                    <span class="badge badge-soft badge-secondary hover:bg-secondary/30 font-display cursor-default transition-colors cd">jQuery</span> e 
                    <span class="badge badge-soft badge-secondary hover:bg-secondary/30 font-display cursor-default transition-colors cd">Wordpress</span>. Ho 
                    realizzato gestionali, checklist, e-commerce, CRM, ERP, piattaforme di networking e siti vetrina per clienti e aziende di 
                    varia natura.
                </p>
                <p class="mt-4" data-aos="fade-right" data-aos-delay="800" data-aos-duration="1000">
                    Ho esperienza sia come freelance che all’interno di <span class="ka-highlight">team aziendali</span>, dove ho lavorato in autonomia e in collaborazione con altri 
                    professionisti. Mi distinguo per un approccio orientato alla qualità del codice, alla <span class="ka-highlight">sicurezza</span>, alla pulizia architetturale e 
                    alla ricerca di soluzioni creative e robuste.
                </p>
                <p class="mt-4" data-aos="fade-right" data-aos-delay="1000" data-aos-duration="1000">
                    Quando affronto un problema tecnico, seguo un workflow ben preciso:
                </p>
                <ul class="list-inside list-decimal marker:text-secondary mt-4" data-aos="fade-right" data-aos-delay="1200" data-aos-duration="1000">
                    <li class="mb-2">Individuo il nodo centrale e analizzo cause e conseguenze;</li>
                    <li class="mb-2">Se serve, applico un’analisi SWOT per capire se dietro al problema si nascondono opportunità;</li>
                    <li class="mb-2">Verifico la presenza di attriti o condizioni limitanti, per avere una visione chiara;</li>
                    <li class="mb-2">Solo allora affronto e risolvo il problema nel modo più adatto al contesto.</li>
                </ul>
                <p class="mt-4" data-aos="fade-right" data-aos-delay="1400" data-aos-duration="1000">
                    Credo che:
                </p>
                <blockquote class="relative ms-auto p-4 text-end" data-aos="fade-right" data-aos-delay="1600" data-aos-duration="1000">
                    <span class="icon-[tabler--quote] text-base-300/20 absolute -top-3 start-6 size-16 rotate-180 rtl:rotate-0"></span>
                    <div class="relative z-1">
                        <p class="text-base-content text-lg">
                        <em>
                            Quando si tratta di sviluppo non esistono soluzioni impossibili.
                            Esistono soluzioni brutte, soluzioni noiose, soluzioni inadatte, soluzioni antiquate.
                            Ma non esistono soluzioni impossibili.
                        </em>
                        </p>
                    </div>
                </blockquote>
                <p data-aos="fade-right" data-aos-delay="1800" data-aos-duration="1000">
                    Oltre allo sviluppo, ho una grande passione per la produzione musicale: sono anche tecnico del suono certificato e nel tempo 
                    libero compongo e produco brani per artisti emergenti.
                </p>
            </div>
        </div>
    </div>
</x-layout.app>
