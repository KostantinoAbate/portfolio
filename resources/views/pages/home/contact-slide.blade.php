<a name="contacts" id="contacts"></a>
<div class="w-full h-full flex flex-row justify-center items-center gap-16 relative overflow-hidden">
    <x-graphic.grid/>
    <div class="absolute left-0 top-0 bottom-0 aspect-square bg-radial from-accent/10 via-accent/0 to-accent/0 scale-120 pointer-events-none"></div>
    <div class="absolute right-0 top-0 bottom-0 aspect-square bg-radial from-secondary/10 via-secondary/0 to-secondary/0 scale-120 pointer-events-none"></div>
    <div class="absolute left-0 top-0 right-0 bottom-0 m-auto w-full h-full bg-gradient-to-b from-primary/10 to-primary/0 pointer-events-none"></div>
    <div class="w-[1200px] max-2xl:w-[900px] max-lg:w-[90%] flex flex-col justify-center items-center gap-4 max-lg:py-16">
        <h2 class="text-4xl font-bold font-display" data-aos="fade-right" data-aos-duration="1000"><span class="inline-block text-base-content/60 font-normal mr-1">#</span>{{ __('atom.contact') }}</h2>
        <div class="divider" data-aos="fade-right" data-aos-delay="200" data-aos-duration="1000"></div>
        <p data-aos="fade-right" data-aos-delay="400" data-aos-duration="1000">
            {!! __('complex.contact-slide.text') !!}
        </p>
        <div class="grid grid-cols-3 w-xl max-lg:max-w-sm">
            <a href="https://github.com/KostantinoAbate" class="mx-auto group" target="_blank" data-aos="fade-up" data-aos-delay="600" data-aos-duration="1000">
                <span class="icon-[mdi--github] size-16 text-base-content/70 group-hover:text-secondary transition-colors"></span>
            </a>
            <a href="https://www.linkedin.com/in/kostantino-abate-a3b490315/" class="mx-auto group" target="_blank" data-aos="fade-up" data-aos-delay="800" data-aos-duration="1000">
                <span class="icon-[mdi--linkedin] size-16 text-base-content/70 group-hover:text-secondary transition-colors"></span>
            </a>
            <a href="mailto:kostantinoabate.dev@gmail.com" class="mx-auto group" target="_blank" data-aos="fade-up" data-aos-delay="1000" data-aos-duration="1000">
                <span class="icon-[tabler--mail] size-16 text-base-content/70 group-hover:text-secondary transition-colors"></span>
            </a>
        </div>
    </div>
</div>
