<a name="home" id="home"></a>
<div class="w-full h-full flex flex-row max-lg:flex-col-reverse justify-center items-center gap-16 max-lg:gap-6 relative overflow-hidden">
    <x-graphic.grid/>
    <div class="absolute left-0 top-0 bottom-0 aspect-square bg-radial from-accent/10 via-accent/0 to-accent/0 scale-120 pointer-events-none"></div>
    <div class="absolute right-0 top-0 bottom-0 aspect-square bg-radial from-secondary/10 via-secondary/0 to-secondary/0 scale-120 pointer-events-none"></div>
    <div class="absolute left-0 top-0 right-0 bottom-0 m-auto w-full h-full bg-gradient-to-t from-primary/10 to-primary/0 pointer-events-none"></div>
    <div class="w-fit h-fit flex flex-col justify-center items-start max-md:items-center max-w-96 max-lg:max-w-[90%] gap-1 max-lg:py-16">
        <h1 class="font-display text-6xl max-md:text-5xl font-bold" data-aos="fade-right" data-aos-duration="1000">Kostantino</h1>
        <h2 class="text-xl uppercase mb-1 font-display" data-aos="fade-left" data-aos-delay="200" data-aos-duration="1000">Full-stack developer</h2>
        <div class="flex flex-row max-md:justify-center gap-1 flex-wrap">
            <span class="badge badge-soft badge-secondary hover:bg-secondary/30 font-display cursor-default transition-colors" data-aos="fade" data-aos-delay="400" data-aos-duration="1000">
                PHP
            </span>
            <span class="badge badge-soft badge-secondary hover:bg-secondary/30 font-display cursor-default transition-colors" data-aos="fade" data-aos-delay="600" data-aos-duration="1000">
                JavaScript
            </span>
            <span class="badge badge-soft badge-secondary hover:bg-secondary/30 font-display cursor-default transition-colors" data-aos="fade" data-aos-delay="800" data-aos-duration="1000">
                Laravel
            </span>
            <span class="badge badge-soft badge-secondary hover:bg-secondary/30 font-display cursor-default transition-colors" data-aos="fade" data-aos-delay="1000" data-aos-duration="1000">
                React
            </span>
            <span class="badge badge-soft badge-secondary hover:bg-secondary/30 font-display cursor-default transition-colors" data-aos="fade" data-aos-delay="1200" data-aos-duration="1000">
                Tailwind
            </span>
        </div>
        <div class="divider my-4" data-aos="fade-right" data-aos-delay="400" data-aos-duration="1000"></div>
        <p class="max-md:text-center" data-aos="fade-right" data-aos-delay="600" data-aos-duration="1000">
            {!! __('complex.landing-slide.text') !!}
        </p>
        <div class="flex flex-row justify-center items-center gap-2 mt-4">
            <a href="{{ route('download.cv') }}" class="btn btn-secondary text-sm" data-aos="fade-up" data-aos-delay="800" data-aos-duration="1000"><span class="icon-[tabler--file-download] size-5"></span>{{ __('atom.cv') }}</a>
            <a href="#projects" class="btn btn-outline btn-secondary text-sm" data-aos="fade-up" data-aos-delay="1000" data-aos-duration="1000"><span class="icon-[tabler--folder] size-5"></span>{{ __('atom.project') }}</a>
        </div>
    </div>
    <div class="w-96 h-96 max-lg:w-[90%] max-lg:h-auto max-lg:aspect-square relative group" data-aos="zoom-in" data-aos-delay="400" data-aos-duration="1000">
        <div class="absolute left-0 right-0 bottom-0 top-0 m-auto flex flex-col justify-center items-center size-96 max-lg:size-[90%] bg-primary mask mask-hexagon-2 group-hover:translate-x-4 duration-700 transition-transform"></div>
        <div class="absolute left-0 right-0 bottom-0 top-0 m-auto flex flex-col justify-center items-center size-93 max-lg:size-[88%] bg-secondary mask mask-hexagon-2 group-hover:-translate-x-4 duration-500 transition-transform"></div>
        <img src="{{ asset('assets/profile.png') }}" class="absolute left-0 right-0 bottom-0 top-0 m-auto size-90 max-lg:size-[86%] object-cover mask mask-hexagon-2 group-hover:translate-y-4 duration-300 transition-transform">
    </div>
</div>
