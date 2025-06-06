<a name="projects" id="projects"></a>
<div class="w-full h-full flex flex-row justify-center items-center gap-16 relative overflow-hidden">
    <x-graphic.grid/>
    <div class="absolute left-0 top-0 bottom-0 aspect-square bg-radial from-accent/10 via-accent/0 to-accent/0 scale-120 pointer-events-none"></div>
    <div class="absolute right-0 top-0 bottom-0 aspect-square bg-radial from-secondary/10 via-secondary/0 to-secondary/0 scale-120 pointer-events-none"></div>
    <div class="absolute left-0 top-0 right-0 bottom-0 m-auto w-full h-full bg-gradient-to-b from-primary/10 to-primary/0 pointer-events-none"></div>
    <div class="w-[1200px] max-2xl:w-[900px] max-lg:w-[90%] flex flex-col justify-center items-center gap-4 max-lg:py-16">
        <h2 class="text-4xl font-bold font-display" data-aos="fade-right" data-aos-duration="1000"><span class="inline-block text-base-content/60 font-normal mr-1">#</span>{{ __('atom.project') }}</h2>
        <div class="divider" data-aos="fade-right" data-aos-delay="200" data-aos-duration="1000"></div>
        <p data-aos="fade-right" data-aos-delay="400" data-aos-duration="1000">
            {!! __('complex.project-slide.text') !!}
        </p>
        <div class="divider" data-aos="fade-up" data-aos-delay="600" data-aos-duration="1000">{{ __('atom.more') }}</div>
        <div class="w-full flex flex-row justify-center items-center gap-2">
            <a href="{{ route('projects') }}" class="btn btn-secondary text-sm" data-aos="fade-up" data-aos-delay="800" data-aos-duration="1000"><span class="icon-[tabler--folder] size-5"></span>{{ __('atom.project') }}</a>
            <a href="#contact" class="btn btn-secondary btn-outline text-sm" data-aos="fade-up" data-aos-delay="1000" data-aos-duration="1000"><span class="icon-[tabler--chevron-down] size-5"></span>{{ __('atom.continue') }}</a>
        </div>
    </div>
</div>
