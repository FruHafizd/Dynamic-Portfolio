<div class="overflow-x-hidden text-white" x-data="{ showMenu: false }">
    <section class="flex flex-col items-start justify-start w-full px-4 pt-16 space-y-12 lg:flex-row md:px-8 lg:px-16 lg:space-y-0 md:pt-24">
        <!-- Text content -->
        <div class="space-y-6 text-left lg:w-1/2">
            <h3 class="text-4xl font-semibold">{{ $home_pages->text_content ?? 'No Data Found'}}</h3>
            <h1 class="font-extrabold text-8xl">{{ $home_pages->name ?? 'No Data Found'}}</h1>

            <!-- Typing animation section -->
            <div
                x-data="{
                    text: '',
                    textArray: ['Junior Web Developer', 'Full Stack Learner 🚀', 'Coding Enjoyer' ],
                    textIndex: 0,
                    charIndex: 0,
                    typeSpeed: 110,
                    cursorSpeed: 550,
                    pauseEnd: 1500,
                    pauseStart: 20,
                    direction: 'forward',
                }"
                x-init="$nextTick(() => {
                    let typingInterval = setInterval(startTyping, $data.typeSpeed);

                    function startTyping(){
                        let current = $data.textArray[$data.textIndex];

                        if($data.charIndex > current.length){
                            $data.direction = 'backward';
                            clearInterval(typingInterval);

                            setTimeout(function(){
                                typingInterval = setInterval(startTyping, $data.typeSpeed);
                            }, $data.pauseEnd);
                        }

                        $data.text = current.substring(0, $data.charIndex);

                        if($data.direction == 'forward'){
                            $data.charIndex += 1;
                        } else {
                            if($data.charIndex == 0){
                                $data.direction = 'forward';
                                clearInterval(typingInterval);
                                setTimeout(function(){
                                    $data.textIndex += 1;
                                    if($data.textIndex >= $data.textArray.length){
                                        $data.textIndex = 0;
                                    }
                                    typingInterval = setInterval(startTyping, $data.typeSpeed);
                                }, $data.pauseStart);
                            }
                            $data.charIndex -= 1;
                        }
                    }

                    setInterval(function(){
                        if($refs.cursor.classList.contains('hidden')){
                            $refs.cursor.classList.remove('hidden');
                        } else {
                            $refs.cursor.classList.add('hidden');
                        }
                    }, $data.cursorSpeed);
                })"
                class="text-5xl font-semibold"
            >
                <p x-text="text"></p>
                <span class="hidden w-2 h-12 ml-2 bg-white" x-ref="cursor"></span>
            </div>

            <p class="max-w-3xl text-xl font-semibold leading-relaxed text-gray-300">
                {{ $home_pages->description ?? 'No Data Found' }}
            </p>

            <!-- Button section -->
            <section class="w-full text-left">
                <a href="/about" class="inline-block px-6 py-3 text-lg font-semibold text-black transition rounded-lg bg-slate-200 hover:bg-slate-400">{{ $home_pages->button_page ?? 'No Data Found' }}</a>
            </section>
        </div>

        <div class="flex items-center justify-center lg:w-1/2" :class="{'flex': showMenu, 'hidden lg:flex': !showMenu }">
            <div class="relative w-[500px] h-[500px] lg:w-[500px] lg:h-[500px] overflow-hidden rounded-full border-4 border-white">
                <img src="{{ url('storage', $home_pages->images ?? 'No Data Found')  }}" alt="Profile Image" class="object-cover object-top w-full h-full">

                <div class="absolute inset-0 border-2 border-white rounded-full opacity-50 blur-md"></div>
            </div>
        </div>

    </section>
</div>
