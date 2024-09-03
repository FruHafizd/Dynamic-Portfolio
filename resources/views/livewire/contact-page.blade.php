<div class="xl:px-64">
    <div class="relative mb-10 font-semibold xl:text-xl">
        <p class="relative mx-auto text-2xl w-fit text-black-primary dark:text-white md:text-4xl">
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
                        Contact Me
                    </h1>
                </a>
            </div>
        </p>
    </div>

        <div class="flex flex-row flex-wrap justify-center gap-6">
            @foreach ($contact as $contacts)
                <a class="flex items-center h-16 gap-5 p-3 transition-all duration-200 bg-white border-2 cursor-pointer w-52 rounded-xl border-black-primary text-black-primary shadow-button-card hover:scale-105 hover:shadow-image-card" href="{{ $contacts->link }}">
                    {!! $contacts->icon_svg !!}
                    <p class="font-semibold">{{ $contacts->text_content }}</p>
                </a>
            @endforeach
        </div>


    </div>
</div>

