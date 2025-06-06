<div class="w-full">
    <footer class="footer flex flex-row max-md:flex-col justify-between bg-base-200/60 p-10">
        <div class="gap-6">
            <div class="flex flex-col items-start gap-1 text-xl font-bold text-base-content">
                <span>Kostantino Abate</span>
                <span class="text-base-content/70 text-sm uppercase font-semibold">Full-stack developer</span>
            </div>
            <p class="text-base-content text-sm">
                {!! __('complex.footer') !!}
            </p>
            <div class="flex felx-row justify-center items-center gap-2">
                <a href="{{ route('download.cv') }}" class="btn btn-sm btn-secondary text-sm"><span class="icon-[tabler--file-download] size-5"></span>{{ __('atom.cv') }}</a>
                <a href="{{ route('projects') }}" class="btn btn-sm btn-outline btn-secondary text-sm"><span class="icon-[tabler--folder] size-5"></span>{{ __('atom.project') }}</a>
            </div>
        </div>
        <div class="flex flex-row justify-center gap-16">
            <nav class="text-base-content flex flex-col justify-start items-start text-sm">
                <h6 class="footer-title text-xl">Info</h6>
                <div class="divider mb-2"></div>
                <a href="{{ route('bio') }}" class="link link-hover">Bio</a>
                <a href="{{ route('prospect') }}" class="link link-hover mt-1">{{ __('atom.prospect') }}</a>
                <a href="{{ route('projects') }}" class="link link-hover mt-1">{{ __('atom.project') }}</a>
                <a href="{{ route('download.cv') }}" class="link link-hover mt-1">Curriculum Vitae</a>
            </nav>
            <nav class="text-base-content flex flex-col justify-start items-start text-sm">
                <h6 class="footer-title text-xl">Social</h6>
                <div class="divider mb-2"></div>
                <a href="https://github.com/KostantinoAbate" target="_blank" class="link link-hover">GitHub</a>
                <a href="https://www.linkedin.com/in/kostantino-abate-a3b490315/" target="_blank" class="link link-hover mt-1">Linkedin</a>
                <a href="mailto:kostantinoabate.dev@gmail.com" class="link link-hover mt-1">{{ __('atom.contactMe') }}</a>
            </nav>
        </div>
    </footer>
    <footer class="footer bg-base-200/60 border-base-content/25 border-t px-6 py-4 text-sm">
        <div class="flex w-full items-center justify-between">
            <aside class="grid-flow-col items-center">
                <p>
                    &copy;{{ now()->format('Y') }} <a class="link link-hover font-medium" href="#">Kostantino Abate</a>
                </p>
            </aside>
            <div class="flex h-5 gap-4">
                <a href="https://github.com/KostantinoAbate" target="_blank" class="link" aria-label="Github Link">
                    <span class="icon-[tabler--brand-github] size-5"></span>
                </a>
                <a href="https://www.linkedin.com/in/kostantino-abate-a3b490315/" target="_blank" class="link"
                    aria-label="Linkedin Link">
                    <span class="icon-[tabler--brand-linkedin] size-5"></span>
                </a>
                <a href="mailto:kostantinoabate.dev@gmail.com" class="link" aria-label="Mail Link">
                    <span class="icon-[tabler--mail] size-5"></span>
                </a>
            </div>
        </div>
    </footer>
</div>
