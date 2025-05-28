<div class="fixed top-4 right-4 z-[999]">
    <button class="btn btn-text btn-square btn-lg" open-menu>
        <span class="icon-[tabler--menu-2] text-base-content size-6" id="menu-icon-open"></span>
        <span class="icon-[tabler--x] text-base-content size-6 hidden" id="menu-icon-close"></span>
    </button>
</div>
<div class="fixed top-4 left-4 z-[999] flex flex-row justify-center items-center">
    <div class="dropdown relative inline-flex">
        <button type="button" id="dropdown-menu-icon" type="button" class="dropdown-toggle btn btn-text btn-square btn-lg" aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
            <span class="icon-[tabler--world] text-base-content size-6"></span>
        </button>
        <ul class="dropdown-menu dropdown-open:opacity-100 hidden min-w-60" role="menu" aria-orientation="vertical" aria-labelledby="dropdown-menu-icon">
            <li><button type="button" onclick="$('#input-lang').val('it'); $('#change-language').trigger('submit');" class="dropdown-item p-0.5 px-1 text-sm" href="#"><span class="icon-[twemoji--flag-italy]"></span>Italiano</button></li>
            <li><button type="button" onclick="$('#input-lang').val('en'); $('#change-language').submit();" class="dropdown-item p-0.5 px-1 text-sm" href="#"><span class="icon-[twemoji--flag-united-kingdom]"></span>English</button></li>
        </ul>
    </div>
    @if(!Route::is('home'))
        <a href="{{ route('home') }}" class="text-secondary/40 hover:text-secondary transition-colors flex items-center" data-aos="fade-right" data-aos>
            <span class="icon-[tabler--arrow-left] size-8"></span>
            <span>{{ __('atom.backHome') }}</span>
        </a>
    @endif
</div>
<form class="hidden" action="{{ route('change-language') }}" method="POST" id="change-language">@csrf<input type="hidden" id="input-lang" name="locale" value="it"></form>
