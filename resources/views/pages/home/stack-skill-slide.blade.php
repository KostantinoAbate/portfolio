<a name="stack-skill" id="stack-skill"></a>
<div class="w-full h-full flex flex-col justify-center items-center gap-8 relative overflow-hidden">
    <x-graphic.grid/>
    <div class="absolute left-0 top-0 bottom-0 aspect-square bg-radial from-accent/10 via-accent/0 to-accent/0 scale-120 pointer-events-none"></div>
    <div class="absolute right-0 top-0 bottom-0 aspect-square bg-radial from-secondary/10 via-secondary/0 to-secondary/0 scale-120 pointer-events-none"></div>
    <div class="absolute left-0 top-0 right-0 bottom-0 m-auto w-full h-full bg-gradient-to-t from-primary/10 to-primary/0 pointer-events-none"></div>
    <div class="w-[1200px] max-2xl:w-[900px] max-lg:w-[90%] flex flex-col justify-center items-center gap-4 group max-lg:py-16">
        <h2 class="text-4xl font-bold font-display" data-aos="fade-right" data-aos-duration="1000"><span class="inline-block text-base-content/60 font-normal mr-1">#</span>Stack & Skill</h2>
        <div class="divider" data-aos="fade-right" data-aos-delay="200" data-aos-duration="1000"></div>
        <nav class="tabs overflow-hidden space-x-1 p-1" aria-label="Tabs" role="tablist" aria-orientation="horizontal">
            <button data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000" type="button" class="btn btn-text active-tab:bg-primary active-tab:text-white hover:text-primary active hover:bg-primary/20" id="tabs-item-1" data-tab="#tabs-1" aria-controls="tabs-1" role="tab" aria-selected="false">
                <span class="icon-[iconoir--db] size-5 shrink-0"></span>
                <span class="hidden sm:inline">Back-end</span>
            </button>
            <button data-aos="fade-up" data-aos-delay="600" data-aos-duration="1000" type="button" class="btn btn-text active-tab:bg-primary active-tab:text-white hover:text-primary hover:bg-primary/20" id="tabs-item-2" data-tab="#tabs-2" aria-controls="tabs-2" role="tab" aria-selected="false">
                <span class="icon-[ic--outline-style] size-5 shrink-0"></span>
                <span class="hidden sm:inline">Front-end</span>
            </button>
            <button data-aos="fade-up" data-aos-delay="800" data-aos-duration="1000" type="button" class="btn btn-text active-tab:bg-primary active-tab:text-white hover:text-primary hover:bg-primary/20" id="tabs-item-3" data-tab="#tabs-3" aria-controls="tabs-3" role="tab" aria-selected="false">
                <span class="icon-[garden--markup-stroke-12] size-5 shrink-0"></span>
                <span class="hidden sm:inline">Markup<span>
            </button>
            <button data-aos="fade-up" data-aos-delay="1000" data-aos-duration="1000" type="button" class="btn btn-text active-tab:bg-primary active-tab:text-white hover:text-primary hover:bg-primary/20" id="tabs-item-4" data-tab="#tabs-4" aria-controls="tabs-4" role="tab" aria-selected="false">
                <span class="icon-[eos-icons--machine-learning-outlined] size-5 shrink-0"></span>
                <span class="hidden sm:inline">Soft-skill<span>
            </button>
        </nav>

        <div class="mt-3 w-full" data-aos="fade-right" data-aos-delay="400" data-aos-duration="1000">
            <div class="w-full" id="tabs-1" role="tabpanel" aria-labelledby="tabs-item-1">
                <div class="w-full grid grid-cols-4 max-lg:grid-cols-3 max-sm:grid-cols-2 gap-8">
                    <div class="flex flex-col justify-center items-center gap-4 group">
                        <img src="{{ asset('assets/stack/php.png') }}" class="rounded-2xl opacity-80 hover:opacity-100 hover:-translate-y-2 transition-all">
                        <h4 class="text-xl font-bold">PHP</h4>
                        <ul class="list-inside list-disc marker:text-teal-500 text-sm">
                            <li class="mb-2">OOP</li>
                            <li class="mb-2">{{ __('atom.security') }}</li>
                            <li class="mb-2">{{ __('atom.optimization') }}</li>
                        </ul>
                    </div>
                    <div class="flex flex-col justify-center items-center gap-4 group">
                        <img src="{{ asset('assets/stack/laravel.png') }}" class="rounded-2xl opacity-80 hover:opacity-100 hover:-translate-y-2 transition-all">
                        <h4 class="text-xl font-bold">Laravel</h4>
                        <ul class="list-inside list-disc marker:text-teal-500 text-sm">
                            <li class="mb-2">MVC</li>
                            <li class="mb-2">Eloquent ORM</li>
                            <li class="mb-2">{{ __('atom.scalability') }}</li>
                        </ul>
                    </div>
                    <div class="flex flex-col justify-center items-center gap-4 group">
                        <img src="{{ asset('assets/stack/node.png') }}" class="rounded-2xl opacity-80 hover:opacity-100 hover:-translate-y-2 transition-all">
                        <h4 class="text-xl font-bold">Node.js</h4>
                        <ul class="list-inside list-disc marker:text-teal-500 text-sm">
                            <li class="mb-2">Async/Await</li>
                            <li class="mb-2">API RESTful</li>
                            <li class="mb-2">NPM</li>
                        </ul>
                    </div>
                    <div class="flex flex-col justify-center items-center gap-4 group">
                        <img src="{{ asset('assets/stack/mysql.png') }}" class="rounded-2xl opacity-80 hover:opacity-100 hover:-translate-y-2 transition-all">
                        <h4 class="text-xl font-bold">MySQL</h4>
                        <ul class="list-inside list-disc marker:text-teal-500 text-sm">
                            <li class="mb-2">CRUD</li>
                            <li class="mb-2">{{ __('atom.relations') }}</li>
                            <li class="mb-2">{{ __('atom.indexing') }}</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div id="tabs-2" class="hidden" role="tabpanel" aria-labelledby="tabs-item-2">
                <div class="w-full grid grid-cols-4 max-lg:grid-cols-3 max-sm:grid-cols-2 gap-8">
                    <div class="flex flex-col justify-center items-center gap-4 group">
                        <img src="{{ asset('assets/stack/react.png') }}" class="rounded-2xl opacity-80 hover:opacity-100 hover:-translate-y-2 transition-all">
                        <h4 class="text-xl font-bold">React</h4>
                        <ul class="list-inside list-disc marker:text-teal-500 text-sm">
                            <li class="mb-2">CBP</li>
                            <li class="mb-2">SPA</li>
                            <li class="mb-2">Fluid UI/UX</li>
                        </ul>
                    </div>
                    <div class="flex flex-col justify-center items-center gap-4 group">
                        <img src="{{ asset('assets/stack/js.png') }}" class="rounded-2xl opacity-80 hover:opacity-100 hover:-translate-y-2 transition-all">
                        <h4 class="text-xl font-bold">Javascript</h4>
                        <ul class="list-inside list-disc marker:text-teal-500 text-sm">
                            <li class="mb-2">DOM</li>
                            <li class="mb-2">API</li>
                            <li class="mb-2">{{ __('atom.automation') }}</li>
                        </ul>
                    </div>
                    <div class="flex flex-col justify-center items-center gap-4 group">
                        <img src="{{ asset('assets/stack/tailwind.png') }}" class="rounded-2xl opacity-80 hover:opacity-100 hover:-translate-y-2 transition-all">
                        <h4 class="text-xl font-bold">Tailwind</h4>
                        <ul class="list-inside list-disc marker:text-teal-500 text-sm">
                            <li class="mb-2">Utility</li>
                            <li class="mb-2">Responsive</li>
                            <li class="mb-2">{{ __('atom.efficiency') }}</li>
                        </ul>
                    </div>
                    <div class="flex flex-col justify-center items-center gap-4 group">
                        <img src="{{ asset('assets/stack/sass.png') }}" class="rounded-2xl opacity-80 hover:opacity-100 hover:-translate-y-2 transition-all">
                        <h4 class="text-xl font-bold">Sass</h4>
                        <ul class="list-inside list-disc marker:text-teal-500 text-sm">
                            <li class="mb-2">{{ __('atom.cleanliness') }}</li>
                            <li class="mb-2">Nesting</li>
                            <li class="mb-2">{{ __('atom.reusability') }}</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div id="tabs-3" class="hidden" role="tabpanel" aria-labelledby="tabs-item-3">
                <div class="w-full grid grid-cols-3 max-sm:grid-cols-2 gap-8">
                    <div class="flex flex-col justify-center items-center gap-4 group">
                        <img src="{{ asset('assets/stack/html.png') }}" class="rounded-2xl opacity-80 hover:opacity-100 hover:-translate-y-2 transition-all">
                        <h4 class="text-xl font-bold">HTML</h4>
                        <ul class="list-inside list-disc marker:text-teal-500 text-sm">
                            <li class="mb-2">{{ __('atom.semantic') }}</li>
                            <li class="mb-2">SEO onsite</li>
                            <li class="mb-2">{{ __('atom.accessibility') }}</li>
                        </ul>
                    </div>
                    <div class="flex flex-col justify-center items-center gap-4 group">
                        <img src="{{ asset('assets/stack/css.png') }}" class="rounded-2xl opacity-80 hover:opacity-100 hover:-translate-y-2 transition-all">
                        <h4 class="text-xl font-bold">CSS</h4>
                        <ul class="list-inside list-disc marker:text-teal-500 text-sm">
                            <li class="mb-2">Responsive</li>
                            <li class="mb-2">Layout Building</li>
                            <li class="mb-2">{{ __('atom.optimization') }}</li>
                        </ul>
                    </div>
                    <div class="flex flex-col justify-center items-center gap-4 group">
                        <img src="{{ asset('assets/stack/markdown.png') }}" class="rounded-2xl opacity-80 hover:opacity-100 hover:-translate-y-2 transition-all">
                        <h4 class="text-xl font-bold">Markdown</h4>
                        <ul class="list-inside list-disc marker:text-teal-500 text-sm">
                            <li class="mb-2">{{ __('atom.doc') }}</li>
                            <li class="mb-2">{{ __('atom.sintex') }}</li>
                            <li class="mb-2">{{ __('atom.content') }}</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div id="tabs-4" class="hidden" role="tabpanel" aria-labelledby="tabs-item-4">
                <div class="w-full grid grid-cols-4 max-lg:grid-cols-3 max-sm:grid-cols-2 gap-8">
                    <div class="flex flex-col justify-center items-center gap-4 group">
                        <img src="{{ asset('assets/stack/db.png') }}" class="rounded-2xl opacity-80 hover:opacity-100 hover:-translate-y-2 transition-all">
                        <h4 class="text-xl font-bold">DB Design</h4>
                        <ul class="list-inside list-disc marker:text-teal-500 text-sm">
                            <li class="mb-2">{{ __('atom.normalization') }}</li>
                            <li class="mb-2">{{ __('atom.relations') }}</li>
                            <li class="mb-2">{{ __('atom.diagram') }}</li>
                        </ul>
                    </div>
                    <div class="flex flex-col justify-center items-center gap-4 group">
                        <img src="{{ asset('assets/stack/software.png') }}" class="rounded-2xl opacity-80 hover:opacity-100 hover:-translate-y-2 transition-all">
                        <h4 class="text-xl font-bold">Software Design</h4>
                        <ul class="list-inside list-disc marker:text-teal-500 text-sm">
                            <li class="mb-2">{{ __('atom.solid') }}</li>
                            <li class="mb-2">{{ __('atom.pattern') }}</li>
                            <li class="mb-2">{{ __('atom.uml') }}</li>
                        </ul>
                    </div>
                    <div class="flex flex-col justify-center items-center gap-4 group">
                        <img src="{{ asset('assets/stack/photoshop.png') }}" class="rounded-2xl opacity-80 hover:opacity-100 hover:-translate-y-2 transition-all">
                        <h4 class="text-xl font-bold">Photoshop</h4>
                        <ul class="list-inside list-disc marker:text-teal-500 text-sm">
                            <li class="mb-2">{{ __('atom.component') }}</li>
                            <li class="mb-2">{{ __('atom.prototype') }}</li>
                            <li class="mb-2">{{ __('atom.export') }}</li>
                        </ul>
                    </div>
                    <div class="flex flex-col justify-center items-center gap-4 group">
                        <img src="{{ asset('assets/stack/illustrator.png') }}" class="rounded-2xl opacity-80 hover:opacity-100 hover:-translate-y-2 transition-all">
                        <h4 class="text-xl font-bold">Illustrator</h4>
                        <ul class="list-inside list-disc marker:text-teal-500 text-sm">
                            <li class="mb-2">{{ __('atom.component') }}</li>
                            <li class="mb-2">{{ __('atom.vector') }}</li>
                            <li class="mb-2">{{ __('atom.export') }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="divider" data-aos="fade-up" data-aos-delay="1200" data-aos-duration="1000">{{ __('atom.more') }}</div>
        <div class="w-full flex flex-row justify-center items-center gap-2">
            <a href="{{ route('prospect') }}" class="btn btn-secondary text-sm" data-aos="fade-up" data-aos-delay="1400" data-aos-duration="1000"><span class="icon-[eos-icons--machine-learning-outlined] size-5"></span>{{ __('atom.prospect') }}</a>
            <a href="#projects" class="btn btn-secondary btn-outline text-sm" data-aos="fade-up" data-aos-delay="1600" data-aos-duration="1000"><span class="icon-[tabler--folder] size-5"></span>{{ __('atom.project') }}</a>
        </div>
    </div>
</div>
