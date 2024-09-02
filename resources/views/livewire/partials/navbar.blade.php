<section class="bg-transparent !important">
    <div class="mx-auto max-w-7xl">
        <nav class="flex items-center w-full h-32 select-none" x-data="{ showMenu: false }">

            <div class="relative flex flex-wrap items-center justify-between w-full mx-auto font-medium md:items-center md:h-32 md:justify-between">
                <a href="#_" class="flex items-center w-1/4 py-6 pl-8 pr-6 space-x-2 font-extrabold text-white md:py-0">
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
                            $el.classList.remove('invisible');
                            gsap.fromTo($el.children, this.startingAnimation, this.endingAnimation);
                        }
                    }"
                    x-init="
                        splitCharactersIntoSpans($el);
                        if(addCNDScript){
                            addScriptToHead('https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/gsap.min.js');
                        }
                        const gsapInterval3 = setInterval(() => {
                            if(typeof gsap !== 'undefined'){
                                animateText();
                                clearInterval(gsapInterval3);
                            }
                        }, 5);
                    "
                    class="invisible block pb-1 overflow-hidden text-5xl font-bold custom-font">
                        FruHafizd
                    </h1>
                </a>
                
                <div :class="{'flex': showMenu, 'hidden md:flex': !showMenu }" class="absolute z-50 flex-col items-center justify-center w-full h-auto px-4 text-center text-gray-400 -translate-x-1/2 border-2 border-gray-700 rounded-full md:border md:w-auto md:h-12 left-1/2 md:flex-row md:items-center">
                    <a href="/" class="{{ request()->is('/') ? 'relative inline-block w-full h-full px-8 py-4 mx-2 font-medium leading-tight text-center text-white md:py-2 group md:w-auto md:px-4 lg:mx-4 md:text-center' : 'relative inline-block w-full h-full px-8 py-4 mx-2 font-medium leading-tight text-center duration-300 ease-out md:py-2 group hover:text-white md:w-auto md:px-4 lg:mx-4 md:text-center'}}" wire:navigate>
                        <span class="text-xl">Home</span>
                        <span class="{{ request()->is('/') ? 'absolute bottom-0 left-0 w-full h-px duration-300 ease-out translate-y-px bg-gradient-to-r md:from-gray-700 md:via-gray-400 md:to-gray-700 from-gray-900 via-gray-600 to-gray-900' : 'absolute bottom-0 w-0 h-px duration-300 ease-out translate-y-px group-hover:left-0 left-1/2 group-hover:w-full bg-gradient-to-r md:from-gray-700 md:via-gray-400 md:to-gray-700 from-gray-900 via-gray-600 to-gray-900' }}"></span>
                    </a>
                    <a href="/about" class="{{ request()->is('about') ? 'relative inline-block w-full h-full px-8 py-4 mx-2 font-medium leading-tight text-center text-white md:py-2 group md:w-auto md:px-4 lg:mx-4 md:text-center' : 'relative inline-block w-full h-full px-8 py-4 mx-2 font-medium leading-tight text-center duration-300 ease-out md:py-2 group hover:text-white md:w-auto md:px-4 lg:mx-4 md:text-center'}}"wire:navigate>
                        <span class="text-xl">About</span>
                        <span class="{{ request()->is('about') ? 'absolute bottom-0 left-0 w-full h-px duration-300 ease-out translate-y-px bg-gradient-to-r md:from-gray-700 md:via-gray-400 md:to-gray-700 from-gray-900 via-gray-600 to-gray-900' : 'absolute bottom-0 w-0 h-px duration-300 ease-out translate-y-px group-hover:left-0 left-1/2 group-hover:w-full bg-gradient-to-r md:from-gray-700 md:via-gray-400 md:to-gray-700 from-gray-900 via-gray-600 to-gray-900' }}"></span>
                    </a>
                    <a href="/project" class="{{ request()->is('project') ? 'relative inline-block w-full h-full px-8 py-4 mx-2 font-medium leading-tight text-center text-white md:py-2 group md:w-auto md:px-4 lg:mx-4 md:text-center' : 'relative inline-block w-full h-full px-8 py-4 mx-2 font-medium leading-tight text-center duration-300 ease-out md:py-2 group hover:text-white md:w-auto md:px-4 lg:mx-4 md:text-center'}}"wire:navigate>
                        <span class="text-xl">Projects</span>
                        <span class="{{ request()->is('project') ? 'absolute bottom-0 left-0 w-full h-px duration-300 ease-out translate-y-px bg-gradient-to-r md:from-gray-700 md:via-gray-400 md:to-gray-700 from-gray-900 via-gray-600 to-gray-900' : 'absolute bottom-0 w-0 h-px duration-300 ease-out translate-y-px group-hover:left-0 left-1/2 group-hover:w-full bg-gradient-to-r md:from-gray-700 md:via-gray-400 md:to-gray-700 from-gray-900 via-gray-600 to-gray-900' }}"></span>
                    </a>
                    <a href="/contact" class="{{ request()->is('contact') ? 'relative inline-block w-full h-full px-8 py-4 mx-2 font-medium leading-tight text-center text-white md:py-2 group md:w-auto md:px-4 lg:mx-4 md:text-center' : 'relative inline-block w-full h-full px-8 py-4 mx-2 font-medium leading-tight text-center duration-300 ease-out md:py-2 group hover:text-white md:w-auto md:px-4 lg:mx-4 md:text-center'}}"wire:navigate>
                        <span class="text-xl">Contacts</span>
                        <span class="{{ request()->is('contact') ? 'absolute bottom-0 left-0 w-full h-px duration-300 ease-out translate-y-px bg-gradient-to-r md:from-gray-700 md:via-gray-400 md:to-gray-700 from-gray-900 via-gray-600 to-gray-900' : 'absolute bottom-0 w-0 h-px duration-300 ease-out translate-y-px group-hover:left-0 left-1/2 group-hover:w-full bg-gradient-to-r md:from-gray-700 md:via-gray-400 md:to-gray-700 from-gray-900 via-gray-600 to-gray-900' }}"></span>
                    </a>
                </div>
            </div>
        </nav>
    </div>
</section>
