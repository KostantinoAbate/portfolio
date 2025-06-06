<div class="flex flex-col justify-center items-start w-fit h-[calc(100vh)] right-0 top-0 fixed gap-8 z-[998] p-8 pr-12 backdrop-blur-md border-l border-base-content/15 translate-x-[120%] transition-transform bg-primary/5" id="menu-body">
    @if(Route::is('home'))
        <a href="#home" class="link link-animated text-secondary/70 hover:text-secondary text-xl">Home</a>
        <a href="#about" class="link link-animated text-base-content/70 hover:text-base-content text-xl">About</a>
        <a href="#stack-skill" class="link link-animated text-base-content/70 hover:text-base-content text-xl">Stack & Skill</a>
        <a href="#projects" class="link link-animated text-base-content/70 hover:text-base-content text-xl">{{ __('atom.project') }}</a>
        <a href="#contacts" class="link link-animated text-base-content/70 hover:text-base-content text-xl">{{ __('atom.contact') }}</a>
    @else
        <a href="{{ route('home') }}" class="link link-animated text-base-content/70 hover:text-secondary text-xl">{{ __('atom.backHome') }}</a>
    @endif
</div>
