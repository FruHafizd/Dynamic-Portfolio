<div>
    <div class="relative flex items-center justify-center w-full mx-auto font-medium md:h-3">
        <a class="flex items-center justify-center w-full py-6 pl-8 pr-6 space-x-2 font-extrabold text-white">
            <h1 x-data="{
                startingAnimation: { opacity: 0 },
                endingAnimation: { opacity: 1, stagger: 0.08, duration: 2.7, ease: 'power4.easeOut' },
                addCNDScript: true,
                splitCharactersIntoSpans(element) {
                    const text = element.textContent; // Use textContent to avoid HTML manipulation
                    let modifiedHTML = '';
                    text.split('').forEach(char => {
                        modifiedHTML += char.trim() ? `<span class='inline-block'>${char}</span>` : char;
                    });
                    element.innerHTML = modifiedHTML;
                },
                addScriptToHead(url) {
                    const script = document.createElement('script');
                    script.src = url;
                    document.head.appendChild(script);
                },
                animateText() {
                    this.$el.classList.remove('invisible');
                    gsap.fromTo(this.$el.children, this.startingAnimation, this.endingAnimation);
                }
            }"
            x-init="
                splitCharactersIntoSpans($el);
                if (addCNDScript) {
                    addScriptToHead('https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/gsap.min.js');
                }
                const gsapInterval3 = setInterval(() => {
                    if (typeof gsap !== 'undefined') {
                        animateText();
                        clearInterval(gsapInterval3);
                    }
                }, 5);
            "
            class="invisible text-4xl font-bold text-white custom-font">
                {{ $title_page->project_page_header }}
            </h1>
        </a>
    </div>
    <br>

    <div class="flex flex-wrap gap-5 mt-5 justify-self-auto xl:gap-10 xl:px-40">

        @foreach ($project_page as $project)

        <div class="dark:border-dark-secondary group relative h-36 w-[280px] cursor-pointer overflow-hidden rounded-lg border-2 border-black-primary object-cover shadow-button-card sm:w-[360px] lg:h-44">
            <img alt="foto" loading="lazy" width="1000" height="1000" decoding="async" data-nimg="1" class="object-cover w-full h-full" src="{{ url('storage', $project->images)  }}" style="color: transparent;">

            <div class="dark:bg-dark-secondary absolute bottom-0 h-10 w-full border-t-2 border-black-primary dark:bg-gray-800 dark:border-gray-700 p-2 transition-all duration-300 group-hover:h-[60%] lg:group-hover:h-2/4">
                <div class="h-20 text-white">
                    <h1 class="font-bold line-clamp-1 text-black-primary group-hover:line-clamp-2">{{ $project->name_project }}</h1>
                    <p class="hidden h-full text-xs font-normal text-white text-black-primary group-hover:block">
                        {{ $project->decsription_project }}
                    </p>
                </div>
            </div>
        </div>
        @endforeach



    </div>





</div>
