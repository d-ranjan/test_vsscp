<x-guest-layout>
    <div class="bg-white shadow-sm dark:bg-gray-800 dark:border-gray-700 container max-w-4xl mx-auto">
        <!-- Carousel -->
        {{-- <div class="w-full mx-auto h-96 md:h-[32rem]">
            <div id="default-carousel" class="relative w-full h-full" data-carousel="slide">
                <!-- Carousel wrapper -->
                <div class="relative overflow-hidden h-full">
                    @foreach ($courses as $course)
                    <!-- Item -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src={{ asset(__('/courses/'. $course->banner)) }}
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                    @endforeach
                    @if ($courses->count() < 2) <!-- Item 1 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="./carousel/carousel-1.svg"
                                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                alt="...">
                        </div>
                        <!-- Item 2 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="./carousel/carousel-2.svg"
                                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                alt="...">
                        </div>
                        <!-- Item 3 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="./carousel/carousel-3.svg"
                                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                alt="...">
                        </div>
                        <!-- Item 4 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="./carousel/carousel-4.svg"
                                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                alt="...">
                        </div>
                        <!-- Item 5 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="./carousel/carousel-5.svg"
                                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                alt="...">
                        </div>
                        @endif
                </div>
                <!-- Slider indicators -->
                <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                    @foreach ($courses as $course)
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                        data-carousel-slide-to="0"></button>
                    @endforeach

                    @if ($courses->count() < 2) <button type="button" class="w-3 h-3 rounded-full" aria-current="true"
                        aria-label="Slide 1" data-carousel-slide-to="0"></button>
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                            data-carousel-slide-to="1"></button>
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                            data-carousel-slide-to="2"></button>
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4"
                            data-carousel-slide-to="3"></button>
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5"
                            data-carousel-slide-to="4"></button>
                        @endif
                </div>
                <!-- Slider Control Left Button -->
                <button type="button"
                    class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-prev>
                    <span
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 1 1 5l4 4" />
                        </svg>
                        <span class="sr-only">Previous</span>
                    </span>
                </button>
                <!-- Slider Control Right Button -->
                <button type="button"
                    class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-next>
                    <span
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4" />
                        </svg>
                        <span class="sr-only">Next</span>
                    </span>
                </button>
            </div>
        </div> --}}
        <!-- Organisation Info -->
        <div
            class="bg-[conic-gradient(at_bottom_left,_var(--tw-gradient-stops))] from-orange-300 via-pink-700 to-rose-900 py-8 px-3 w-full flex flex-col items-center font-bold">
            <h1 class="mb-0 w-full text-center text-cyan-700 text-5xl md:text-5xl">विद्या संकल्प संस्थान कैरियर
                पथ</h1>
            <h1 class="py-2 text-white text-center text-2xl md:text-3xl">
                सपने आप देखो, साकार हम करेंगे
            </h1>
            <p class="text-md text-white text-center">
                हमारा उदेश्य शिक्षा एवं संस्कार
            </p>
            <button
                class="mx-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full mt-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                Explore Classes
            </button>
        </div>

        <!-- Teachers -->
        <h2
            class="w-full my-2 text-3xl font-bold leading-tight text-center text-gray-800 underline decoration-2 dark:text-white">
            Know Your Teachers
        </h2>
{{-- 
        @foreach ($teachers as $teacher)
        @if ($loop->odd)
        <div class="flex flex-wrap items-center justify-center text-gray-800 dark:text-white">
            <div class="w-full flex items-center justify-center sm:w-1/2 sm:order-2">
                <img class="h-72 w-54" src={{ asset(__('/teachers/'. $teacher->photo_right)) }}>
            </div>
            <div class="w-full flex flex-col items-center justify-center sm:w-1/2 sm:order-1">
                <h3 class="text-2xl font-bold leading-none">
                    {{ $teacher->name }}
                </h3>
                <p class="mb-8 text-xl">
                    {{ $teacher->qualifications }}
                </p>
            </div>
        </div>
        @else
        <div class="flex flex-wrap items-center justify-center text-gray-800 dark:text-white">
            <div class="w-full flex items-center justify-center sm:w-1/2">
                <img class="h-72 w-54" src={{ asset(__('/teachers/'. $teacher->photo_left)) }}>
            </div>
            <div class="w-full flex flex-col items-center justify-center sm:w-1/2">
                <h3 class="text-2xl font-bold leading-none">
                    {{ $teacher->name }}
                </h3>
                <p class="mb-8 text-xl">
                    {{ $teacher->qualifications }}
                </p>
            </div>
        </div>
        @endif
        @endforeach --}}
    </div>
</x-app-layout>