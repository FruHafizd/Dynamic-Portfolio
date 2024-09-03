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
                {{ $title_page->about_page_header }}
            </h1>
        </a>
    </div>
    <br>

    <div class="flex flex-wrap items-center w-full">
        <!-- Bagian Gambar -->
        <div class="flex-shrink-0 w-full p-5 md:w-1/3 lg:w-1/4">
            <div class="relative p-5">
                <div class="absolute z-10 w-full h-full -mt-5 -ml-5 bg-gray-600 rounded-full rounded-tr-none"></div>
                <img class="relative z-20 w-full rounded-full" src="{{ url('storage', $about_pages->images)  }}" alt="Profile Picture" />
            </div>
        </div>

        <!-- Bagian Teks -->
        <div class="w-full space-y-5 md:w-2/3 lg:w-3/4 md:pr-16 md:pl-4">
            <h2 class="text-2xl font-extrabold leading-none text-white sm:text-3xl md:text-3xl">
                {{ $about_pages->name }}
                <p class="text-xl text-gray-400">
                    {{ $about_pages->description }}
                </p>
            </h2>
            <a href="/contact" class="inline-block px-6 py-3 text-lg font-semibold text-black transition rounded-lg bg-slate-200 hover:bg-slate-400">
                {{ $about_pages->button_page }}
            </a>
        </div>
    </div>


    <br>
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
                {{ $title_page->about_page_above }}
            </h1>
        </a>
    </div>
    <br>

    <div class="flex flex-wrap justify-center gap-5 mt-5 xl:gap-10 xl:px-40">
    @foreach ($skill as $skills )
        <div class="flex flex-col items-center justify-center w-24 h-24 transition-transform duration-150 transform bg-white border-2 gap-y-2 rounded-2xl hover:scale-105 hover:shadow-lg hover:border-black md:h-36 md:w-36 md:p-4">
             {!! $skills->icon_svg !!}
            <p class="text-base font-bold text-black md:text-2xl">{{ $skills->text_content }}</p>
        </div>
    @endforeach
    </div>
</div>


