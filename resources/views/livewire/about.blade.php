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
            class="invisible text-white text-4xl font-bold custom-font">
                {{ $about_pages->text_content }}
            </h1>
        </a>
    </div>
    <br>

    <div class="flex flex-wrap items-center w-full">
        <!-- Bagian Gambar -->
        <div class="flex-shrink-0 w-full md:w-1/3 lg:w-1/4 p-5">
            <div class="relative p-5">
                <div class="absolute z-10 w-full h-full -mt-5 -ml-5 rounded-full rounded-tr-none bg-gray-600"></div>
                <img class="relative z-20 w-full rounded-full" src="{{ url('storage', $about_pages->images)  }}" alt="Profile Picture" />
            </div>
        </div>
    
        <!-- Bagian Teks -->
        <div class="w-full md:w-2/3 lg:w-3/4 space-y-5 md:pr-16 md:pl-4">
            <h2 class="text-2xl font-extrabold leading-none text-white sm:text-3xl md:text-3xl">
                {{ $about_pages->name }}
                <p class="text-xl text-gray-400">
                    {{ $about_pages->description }}
                </p>
            </h2>
            <a href="/contact" class="inline-block px-6 py-3 text-lg font-semibold bg-slate-200 text-black rounded-lg hover:bg-slate-400 transition">
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
            class="invisible text-white text-4xl font-bold custom-font">
                {{ $about_pages->above_header}} 
            </h1>
        </a>
    </div>
    <br>

    <div class="mt-5 flex flex-wrap justify-center gap-5 xl:gap-10 xl:px-40">
    @foreach ($skill as $skills )
        <div class="flex h-24 w-24 flex-col items-center justify-center gap-y-2 rounded-2xl border-2 bg-white transition-transform duration-150 transform hover:scale-105 hover:shadow-lg hover:border-black md:h-36 md:w-36 md:p-4">
             {!! $skills->icon_svg !!}
            <p class="text-base font-bold text-black md:text-2xl">{{ $skills->text_content }}</p>
        </div>
    @endforeach
    </div>
</div>


