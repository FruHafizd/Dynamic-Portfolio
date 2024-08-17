<div class="text-white overflow-x-hidden">
    <section class="flex flex-col lg:flex-row items-start justify-start w-full px-4 md:px-8 lg:px-16 space-y-12 lg:space-y-0 pt-16 md:pt-24">
        <!-- Text content -->
        <div class="text-left space-y-6 lg:w-1/2">
            <h3 class="text-4xl font-semibold">Hi There👋</h3>
            <h1 class="text-8xl font-extrabold">Muhammad Hafizd</h1>

            <!-- Typing animation section -->
            <div 
                x-data="{
                    text: '',
                    textArray: ['Junior Web Developer', 'Full Stack Learner 🚀', 'Coding Enjoyer'],
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
                <span class="ml-2 w-2 bg-white h-12 hidden" x-ref="cursor"></span>
            </div>

            <p class="text-xl max-w-3xl font-semibold text-gray-300 leading-relaxed">
                I am a passionate 18-year-old Junior Web Developer committed to daily growth and continuous learning. Always eager to tackle new challenges and push my boundaries, I strive to make a positive impact through my work and creativity. 
            </p>            

            <!-- Button section -->
            <section class="w-full text-left">
                <a href="/about" class="inline-block px-6 py-3 text-lg font-semibold bg-slate-200 text-black rounded-lg hover:bg-slate-400 transition">Learn More</a>
            </section>
        </div>
        
        <div class="lg:w-1/2 flex items-center justify-center">
            <div class="relative w-[500px] h-[500px] lg:w-[500px] lg:h-[500px] overflow-hidden rounded-full border-4 border-white">
                <img src="{{ asset('storage/profiles/FruHafizd.jpg') }}" alt="Profile Image" class="w-full h-full object-cover object-top">
                <div class="absolute inset-0 rounded-full border-2 border-white blur-md opacity-50"></div>
            </div>
        </div>
        
        
        
        
        
        
        
        

        
    </section>
</div>
