
<script setup>



defineProps(
    {
        testimonialsFirstBatch:Array,
        testimonialsSecondBatch:Array,
        testimonialsThirdBatch:Array
    }
)


</script>

<template>



<div class="relative footer-separator">
        <div class="custom-shape-divider-top-1738359697">
    <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
        <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" class="shape-fill"></path>
    </svg>
</div>

</div>
    <div class="bg-[#363092] py-10">
        <section id="testimonies" class="py-20 bg-[#]">
    <div class="max-w-6xl mx-8 md:mx-10 lg:mx-20 xl:mx-auto">


        <div class="transition duration-500 ease-in-out transform scale-100 translate-x-0 translate-y-0 opacity-100">
            <div class="mb-12 space-y-5 md:mb-16 md:text-center">
                <div
                    class="inline-block px-3 py-1 text-sm font-bold text-white text-indigo-100 rounded-lg md:text-center text-cn bg-[#202c47] bg-opacity-60 hover:cursor-pointer hover:bg-opacity-40">
                    Words from Others
                </div>
                <h1 class="mb-5 text-3xl font-bold text-white text-white md:text-center md:text-5xl">
                    It's not just us.
                </h1>
                <p class="text-xl text-white md:text-center md:text-2xl">
                    Here's what others have to say about us.
                </p>
            </div>
        </div>


        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3 lg:gap-8">


            <ul class="space-y-8">
                <li v-for="testimonial in testimonialsFirstBatch" class="text-sm leading-6">
                    <div class="relative group">
                        <div
                            class="absolute transition rounded-lg opacity-25 -inset-1 bg-gradient-to-r from-purple-600 to-pink-600 blur duration-400 group-hover:opacity-100 group-hover:duration-200">
                        </div><a href="https://twitter.com/kanyewest" class="cursor-pointer">
                            <div
                                class="relative p-6 space-y-6 leading-none rounded-lg  bg-[#2e297d] ring-1 ring-gray-900/5">
                                <div class="flex items-center space-x-4"><img
                                        :src="testimonial.image"
                                        class="w-12 h-12 bg-center bg-cover border rounded-full" :alt="testimonial.name">
                                    <div>
                                        <h3 class="text-lg font-bold text-white ">{{ testimonial.name }}</h3>
                                        <p class=" text-white text-md">{{ testimonial.title }}</p>
                                    </div>
                                </div>
                                <p class="leading-normal text-white text-md">{{ testimonial.message }}</p>
                            </div>
                        </a>
                    </div>
                </li>


                <!-- <li class="text-sm leading-6">
                    <div class="relative group">
                        <div
                            class="absolute transition rounded-lg opacity-25 -inset-1 bg-gradient-to-r from-purple-600 to-pink-600 blur duration-400 group-hover:opacity-100 group-hover:duration-200">
                        </div><a href="https://twitter.com/tim_cook" class="cursor-pointer">
                            <div
                                class="relative p-6 space-y-6 leading-none rounded-lg  bg-[#2e297d] ring-1 ring-gray-900/5">
                                <div class="flex items-center space-x-4"><img
                                        src="https://pbs.twimg.com/profile_images/1535420431766671360/Pwq-1eJc_400x400.jpg"
                                        class="w-12 h-12 bg-center bg-cover border rounded-full" alt="Tim Cook">
                                    <div>
                                        <h3 class="text-lg font-bold text-white ">Tim Cook</h3>
                                        <p class=" text-white text-md">CEO of Apple</p>
                                    </div>
                                </div>
                                <p class="leading-normal text-white text-md">Diam quis enim lobortis scelerisque
                                    fermentum dui faucibus in ornare. Donec pretium vulputate sapien nec sagittis
                                    aliquam malesuada bibendum.</p>
                            </div>
                        </a>
                    </div>
                </li> -->
                <!-- <li class="text-sm leading-6">
                    <div class="relative group">
                        <div
                            class="absolute transition rounded-lg opacity-25 -inset-1 bg-gradient-to-r from-purple-600 to-pink-600 blur duration-400 group-hover:opacity-100 group-hover:duration-200">
                        </div><a href="https://twitter.com/kanyewest" class="cursor-pointer">
                            <div
                                class="relative p-6 space-y-6 leading-none rounded-lg  bg-[#2e297d] ring-1 ring-gray-900/5">
                                <div class="flex items-center space-x-4"><img
                                        src="https://pbs.twimg.com/profile_images/1276461929934942210/cqNhNk6v_400x400.jpg"
                                        class="w-12 h-12 bg-center bg-cover border rounded-full" alt="Kanye West">
                                    <div>
                                        <h3 class="text-lg font-bold text-white ">Kanye West</h3>
                                        <p class=" text-white text-md">Rapper &amp; Entrepreneur</p>
                                    </div>
                                </div>
                                <p class="leading-normal text-white text-md">Find God.</p>
                            </div>
                        </a>
                    </div>
                </li> -->
                <!-- <li class="text-sm leading-6">
                    <div class="relative group">
                        <div
                            class="absolute transition rounded-lg opacity-25 -inset-1 bg-gradient-to-r from-purple-600 to-pink-600 blur duration-400 group-hover:opacity-100 group-hover:duration-200">
                        </div><a href="https://twitter.com/tim_cook" class="cursor-pointer">
                            <div
                                class="relative p-6 space-y-6 leading-none rounded-lg  bg-[#2e297d] ring-1 ring-gray-900/5">
                                <div class="flex items-center space-x-4"><img
                                        src="https://pbs.twimg.com/profile_images/1535420431766671360/Pwq-1eJc_400x400.jpg"
                                        class="w-12 h-12 bg-center bg-cover border rounded-full" alt="Tim Cook">
                                    <div>
                                        <h3 class="text-lg font-bold text-white ">Tim Cook</h3>
                                        <p class=" text-white text-md">CEO of Apple</p>
                                    </div>
                                </div>
                                <p class="leading-normal text-white text-md">Diam quis enim lobortis scelerisque
                                    fermentum dui faucibus in ornare. Donec pretium vulputate sapien nec sagittis
                                    aliquam malesuada bibendum.</p>
                            </div>
                        </a>
                    </div>
                </li> -->
            </ul>


            <ul class="space-y-8">
                <li v-for="testimonial in testimonialsThirdBatch" class="text-sm leading-6">
                    <div class="relative group">
                        <div
                            class="absolute transition rounded-lg opacity-25 -inset-1 bg-gradient-to-r from-purple-600 to-pink-600 blur duration-400 group-hover:opacity-100 group-hover:duration-200">
                        </div><a href="https://twitter.com/kanyewest" class="cursor-pointer">
                            <div
                                class="relative p-6 space-y-6 leading-none rounded-lg  bg-[#2e297d] ring-1 ring-gray-900/5">
                                <div class="flex items-center space-x-4"><img
                                        :src="testimonial.image"
                                        class="w-12 h-12 bg-center bg-cover border rounded-full" :alt="testimonial.name">
                                    <div>
                                        <h3 class="text-lg font-bold text-white ">{{ testimonial.name }}</h3>
                                        <p class=" text-white text-md">{{ testimonial.title }}</p>
                                    </div>
                                </div>
                                <p class="leading-normal text-white text-md">{{ testimonial.message }}</p>
                            </div>
                        </a>
                    </div>
                </li>


                <!-- <li class="text-sm leading-6">
                    <div class="relative group">
                        <div
                            class="absolute transition rounded-lg opacity-25 -inset-1 bg-gradient-to-r from-purple-600 to-pink-600 blur duration-400 group-hover:opacity-100 group-hover:duration-200">
                        </div><a href="https://twitter.com/tim_cook" class="cursor-pointer">
                            <div
                                class="relative p-6 space-y-6 leading-none rounded-lg  bg-[#2e297d] ring-1 ring-gray-900/5">
                                <div class="flex items-center space-x-4"><img
                                        src="https://pbs.twimg.com/profile_images/1535420431766671360/Pwq-1eJc_400x400.jpg"
                                        class="w-12 h-12 bg-center bg-cover border rounded-full" alt="Tim Cook">
                                    <div>
                                        <h3 class="text-lg font-bold text-white ">Tim Cook</h3>
                                        <p class=" text-white text-md">CEO of Apple</p>
                                    </div>
                                </div>
                                <p class="leading-normal text-white text-md">Diam quis enim lobortis scelerisque
                                    fermentum dui faucibus in ornare. Donec pretium vulputate sapien nec sagittis
                                    aliquam malesuada bibendum.</p>
                            </div>
                        </a>
                    </div>
                </li> -->
                <!-- <li class="text-sm leading-6">
                    <div class="relative group">
                        <div
                            class="absolute transition rounded-lg opacity-25 -inset-1 bg-gradient-to-r from-purple-600 to-pink-600 blur duration-400 group-hover:opacity-100 group-hover:duration-200">
                        </div><a href="https://twitter.com/kanyewest" class="cursor-pointer">
                            <div
                                class="relative p-6 space-y-6 leading-none rounded-lg  bg-[#2e297d] ring-1 ring-gray-900/5">
                                <div class="flex items-center space-x-4"><img
                                        src="https://pbs.twimg.com/profile_images/1276461929934942210/cqNhNk6v_400x400.jpg"
                                        class="w-12 h-12 bg-center bg-cover border rounded-full" alt="Kanye West">
                                    <div>
                                        <h3 class="text-lg font-bold text-white ">Kanye West</h3>
                                        <p class=" text-white text-md">Rapper &amp; Entrepreneur</p>
                                    </div>
                                </div>
                                <p class="leading-normal text-white text-md">Find God.</p>
                            </div>
                        </a>
                    </div>
                </li> -->
                <!-- <li class="text-sm leading-6">
                    <div class="relative group">
                        <div
                            class="absolute transition rounded-lg opacity-25 -inset-1 bg-gradient-to-r from-purple-600 to-pink-600 blur duration-400 group-hover:opacity-100 group-hover:duration-200">
                        </div><a href="https://twitter.com/tim_cook" class="cursor-pointer">
                            <div
                                class="relative p-6 space-y-6 leading-none rounded-lg  bg-[#2e297d] ring-1 ring-gray-900/5">
                                <div class="flex items-center space-x-4"><img
                                        src="https://pbs.twimg.com/profile_images/1535420431766671360/Pwq-1eJc_400x400.jpg"
                                        class="w-12 h-12 bg-center bg-cover border rounded-full" alt="Tim Cook">
                                    <div>
                                        <h3 class="text-lg font-bold text-white ">Tim Cook</h3>
                                        <p class=" text-white text-md">CEO of Apple</p>
                                    </div>
                                </div>
                                <p class="leading-normal text-white text-md">Diam quis enim lobortis scelerisque
                                    fermentum dui faucibus in ornare. Donec pretium vulputate sapien nec sagittis
                                    aliquam malesuada bibendum.</p>
                            </div>
                        </a>
                    </div>
                </li> -->
            </ul>


            <ul class="space-y-8">
                <li v-for="testimonial in testimonialsSecondBatch" class="text-sm leading-6">
                    <div class="relative group">
                        <div
                            class="absolute transition rounded-lg opacity-25 -inset-1 bg-gradient-to-r from-purple-600 to-pink-600 blur duration-400 group-hover:opacity-100 group-hover:duration-200">
                        </div><a href="https://twitter.com/kanyewest" class="cursor-pointer">
                            <div
                                class="relative p-6 space-y-6 leading-none rounded-lg  bg-[#2e297d] ring-1 ring-gray-900/5">
                                <div class="flex items-center space-x-4"><img
                                        :src="testimonial.image"
                                        class="w-12 h-12 bg-center bg-cover border rounded-full" :alt="testimonial.name">
                                    <div>
                                        <h3 class="text-lg font-bold text-white ">{{ testimonial.name }}</h3>
                                        <p class=" text-white text-md">{{ testimonial.title }}</p>
                                    </div>
                                </div>
                                <p class="leading-normal text-white text-md">{{ testimonial.message }}</p>
                            </div>
                        </a>
                    </div>
                </li>


                <!-- <li class="text-sm leading-6">
                    <div class="relative group">
                        <div
                            class="absolute transition rounded-lg opacity-25 -inset-1 bg-gradient-to-r from-purple-600 to-pink-600 blur duration-400 group-hover:opacity-100 group-hover:duration-200">
                        </div><a href="https://twitter.com/tim_cook" class="cursor-pointer">
                            <div
                                class="relative p-6 space-y-6 leading-none rounded-lg  bg-[#2e297d] ring-1 ring-gray-900/5">
                                <div class="flex items-center space-x-4"><img
                                        src="https://pbs.twimg.com/profile_images/1535420431766671360/Pwq-1eJc_400x400.jpg"
                                        class="w-12 h-12 bg-center bg-cover border rounded-full" alt="Tim Cook">
                                    <div>
                                        <h3 class="text-lg font-bold text-white ">Tim Cook</h3>
                                        <p class=" text-white text-md">CEO of Apple</p>
                                    </div>
                                </div>
                                <p class="leading-normal text-white text-md">Diam quis enim lobortis scelerisque
                                    fermentum dui faucibus in ornare. Donec pretium vulputate sapien nec sagittis
                                    aliquam malesuada bibendum.</p>
                            </div>
                        </a>
                    </div>
                </li> -->
                <!-- <li class="text-sm leading-6">
                    <div class="relative group">
                        <div
                            class="absolute transition rounded-lg opacity-25 -inset-1 bg-gradient-to-r from-purple-600 to-pink-600 blur duration-400 group-hover:opacity-100 group-hover:duration-200">
                        </div><a href="https://twitter.com/kanyewest" class="cursor-pointer">
                            <div
                                class="relative p-6 space-y-6 leading-none rounded-lg  bg-[#2e297d] ring-1 ring-gray-900/5">
                                <div class="flex items-center space-x-4"><img
                                        src="https://pbs.twimg.com/profile_images/1276461929934942210/cqNhNk6v_400x400.jpg"
                                        class="w-12 h-12 bg-center bg-cover border rounded-full" alt="Kanye West">
                                    <div>
                                        <h3 class="text-lg font-bold text-white ">Kanye West</h3>
                                        <p class=" text-white text-md">Rapper &amp; Entrepreneur</p>
                                    </div>
                                </div>
                                <p class="leading-normal text-white text-md">Find God.</p>
                            </div>
                        </a>
                    </div>
                </li> -->
                <!-- <li class="text-sm leading-6">
                    <div class="relative group">
                        <div
                            class="absolute transition rounded-lg opacity-25 -inset-1 bg-gradient-to-r from-purple-600 to-pink-600 blur duration-400 group-hover:opacity-100 group-hover:duration-200">
                        </div><a href="https://twitter.com/tim_cook" class="cursor-pointer">
                            <div
                                class="relative p-6 space-y-6 leading-none rounded-lg  bg-[#2e297d] ring-1 ring-gray-900/5">
                                <div class="flex items-center space-x-4"><img
                                        src="https://pbs.twimg.com/profile_images/1535420431766671360/Pwq-1eJc_400x400.jpg"
                                        class="w-12 h-12 bg-center bg-cover border rounded-full" alt="Tim Cook">
                                    <div>
                                        <h3 class="text-lg font-bold text-white ">Tim Cook</h3>
                                        <p class=" text-white text-md">CEO of Apple</p>
                                    </div>
                                </div>
                                <p class="leading-normal text-white text-md">Diam quis enim lobortis scelerisque
                                    fermentum dui faucibus in ornare. Donec pretium vulputate sapien nec sagittis
                                    aliquam malesuada bibendum.</p>
                            </div>
                        </a>
                    </div>
                </li> -->
            </ul>



            <!-- <ul class="hidden space-y-8 sm:block">
                <li class="text-sm leading-6">
                    <div class="relative group">
                        <div
                            class="absolute transition rounded-lg opacity-25 -inset-1 bg-gradient-to-r from-purple-600 to-pink-600 blur duration-400 group-hover:opacity-100 group-hover:duration-200">
                        </div><a href="https://twitter.com/paraga" class="cursor-pointer">
                            <div
                                class="relative p-6 space-y-6 leading-none rounded-lg  bg-[#2e297d] ring-1 ring-gray-900/5">
                                <div class="flex items-center space-x-4"><img
                                        src="https://pbs.twimg.com/profile_images/1375285353146327052/y6jeByyD_400x400.jpg"
                                        class="w-12 h-12 bg-center bg-cover border rounded-full" alt="Parag Agrawal">
                                    <div>
                                        <h3 class="text-lg font-bold text-white ">Parag Agrawal</h3>
                                        <p class=" text-white text-md">CEO of Twitter</p>
                                    </div>
                                </div>
                                <p class="leading-normal text-white text-md">Enim neque volutpat ac tincidunt vitae
                                    semper. Mattis aliquam faucibus purus in massa tempor. Neque vitae tempus quam
                                    pellentesque nec. Turpis cursus in hac habitasse platea dictumst.</p>
                            </div>
                        </a>
                    </div>
                </li>
                <li class="text-sm leading-6">
                    <div class="relative group">
                        <div
                            class="absolute transition rounded-lg opacity-25 -inset-1 bg-gradient-to-r from-purple-600 to-pink-600 blur duration-400 group-hover:opacity-100 group-hover:duration-200">
                        </div><a href="https://twitter.com/tim_cook" class="cursor-pointer">
                            <div
                                class="relative p-6 space-y-6 leading-none rounded-lg  bg-[#2e297d] ring-1 ring-gray-900/5">
                                <div class="flex items-center space-x-4"><img
                                        src="https://pbs.twimg.com/profile_images/1535420431766671360/Pwq-1eJc_400x400.jpg"
                                        class="w-12 h-12 bg-center bg-cover border rounded-full" alt="Tim Cook">
                                    <div>
                                        <h3 class="text-lg font-bold text-white ">Tim Cook</h3>
                                        <p class=" text-white text-md">CEO of Apple</p>
                                    </div>
                                </div>
                                <p class="leading-normal text-white text-md">Diam quis enim lobortis scelerisque
                                    fermentum dui faucibus in ornare. Donec pretium vulputate sapien nec sagittis
                                    aliquam malesuada bibendum.</p>
                            </div>
                        </a>
                    </div>
                </li>
                <li class="text-sm leading-6">
                    <div class="relative group">
                        <div
                            class="absolute transition rounded-lg opacity-25 -inset-1 bg-gradient-to-r from-purple-600 to-pink-600 blur duration-400 group-hover:opacity-100 group-hover:duration-200">
                        </div><a href="https://twitter.com/paraga" class="cursor-pointer">
                            <div
                                class="relative p-6 space-y-6 leading-none rounded-lg  bg-[#2e297d] ring-1 ring-gray-900/5">
                                <div class="flex items-center space-x-4"><img
                                        src="https://pbs.twimg.com/profile_images/1375285353146327052/y6jeByyD_400x400.jpg"
                                        class="w-12 h-12 bg-center bg-cover border rounded-full" alt="Parag Agrawal">
                                    <div>
                                        <h3 class="text-lg font-bold text-white ">Parag Agrawal</h3>
                                        <p class=" text-white text-md">CEO of Twitter</p>
                                    </div>
                                </div>
                                <p class="leading-normal text-white text-md">Enim neque volutpat ac tincidunt vitae
                                    semper. Mattis aliquam faucibus purus in massa tempor. Neque vitae tempus quam
                                    pellentesque nec. Turpis cursus in hac habitasse platea dictumst.</p>
                            </div>
                        </a>
                    </div>
                </li>
                <li class="text-sm leading-6">
                    <div class="relative group">
                        <div
                            class="absolute transition rounded-lg opacity-25 -inset-1 bg-gradient-to-r from-purple-600 to-pink-600 blur duration-400 group-hover:opacity-100 group-hover:duration-200">
                        </div><a href="https://twitter.com/tim_cook" class="cursor-pointer">
                            <div
                                class="relative p-6 space-y-6 leading-none rounded-lg  bg-[#2e297d] ring-1 ring-gray-900/5">
                                <div class="flex items-center space-x-4"><img
                                        src="https://pbs.twimg.com/profile_images/1535420431766671360/Pwq-1eJc_400x400.jpg"
                                        class="w-12 h-12 bg-center bg-cover border rounded-full" alt="Tim Cook">
                                    <div>
                                        <h3 class="text-lg font-bold text-white ">Tim Cook</h3>
                                        <p class=" text-white text-md">CEO of Apple</p>
                                    </div>
                                </div>
                                <p class="leading-normal text-white text-md">Diam quis enim lobortis scelerisque
                                    fermentum dui faucibus in ornare. Donec pretium vulputate sapien nec sagittis
                                    aliquam malesuada bibendum.</p>
                            </div>
                        </a>
                    </div>
                </li>
            </ul> -->


            <!-- <ul class="hidden space-y-8 lg:block">
                <li class="text-sm leading-6">
                    <div class="relative group">
                        <div
                            class="absolute transition rounded-lg opacity-25 -inset-1 bg-gradient-to-r from-purple-600 to-pink-600 blur duration-400 group-hover:opacity-100 group-hover:duration-200">
                        </div><a href="https://twitter.com/satyanadella" class="cursor-pointer">
                            <div
                                class="relative p-6 space-y-6 leading-none rounded-lg  bg-[#2e297d] ring-1 ring-gray-900/5">
                                <div class="flex items-center space-x-4"><img
                                        src="https://pbs.twimg.com/profile_images/1221837516816306177/_Ld4un5A_400x400.jpg"
                                        class="w-12 h-12 bg-center bg-cover border rounded-full" alt="Satya Nadella">
                                    <div>
                                        <h3 class="text-lg font-bold text-white ">Satya Nadella</h3>
                                        <p class=" text-white text-md">CEO of Microsoft</p>
                                    </div>
                                </div>
                                <p class="leading-normal text-white text-md">Tortor dignissim convallis aenean et
                                    tortor at. At ultrices mi tempus imperdiet nulla malesuada. Id cursus metus aliquam
                                    eleifend mi. Quis ipsum suspendisse ultrices gravida dictum fusce ut.</p>
                            </div>
                        </a>
                    </div>
                </li>
                <li class="text-sm leading-6">
                    <div class="relative group">
                        <div
                            class="absolute transition rounded-lg opacity-25 -inset-1 bg-gradient-to-r from-purple-600 to-pink-600 blur duration-400 group-hover:opacity-100 group-hover:duration-200">
                        </div><a href="https://twitter.com/dan_schulman" class="cursor-pointer">
                            <div
                                class="relative p-6 space-y-6 leading-none rounded-lg  bg-[#2e297d] ring-1 ring-gray-900/5">
                                <div class="flex items-center space-x-4"><img
                                        src="https://pbs.twimg.com/profile_images/516916920482672641/3jCeLgFb_400x400.jpeg"
                                        class="w-12 h-12 bg-center bg-cover border rounded-full" alt="Dan Schulman">
                                    <div>
                                        <h3 class="text-lg font-bold text-white ">Dan Schulman</h3>
                                        <p class=" text-white text-md">CEO of PayPal</p>
                                    </div>
                                </div>
                                <p class="leading-normal text-white text-md">Quam pellentesque nec nam aliquam sem
                                    et tortor consequat id. Enim sit amet venenatis urna cursus.</p>
                            </div>
                        </a>
                    </div>
                </li>
                <li class="text-sm leading-6">
                    <div class="relative group">
                        <div
                            class="absolute transition rounded-lg opacity-25 -inset-1 bg-gradient-to-r from-purple-600 to-pink-600 blur duration-400 group-hover:opacity-100 group-hover:duration-200">
                        </div><a href="https://twitter.com/satyanadella" class="cursor-pointer">
                            <div
                                class="relative p-6 space-y-6 leading-none rounded-lg  bg-[#2e297d] ring-1 ring-gray-900/5">
                                <div class="flex items-center space-x-4"><img
                                        src="https://pbs.twimg.com/profile_images/1221837516816306177/_Ld4un5A_400x400.jpg"
                                        class="w-12 h-12 bg-center bg-cover border rounded-full" alt="Satya Nadella">
                                    <div>
                                        <h3 class="text-lg font-bold text-white ">Satya Nadella</h3>
                                        <p class=" text-white text-md">CEO of Microsoft</p>
                                    </div>
                                </div>
                                <p class="leading-normal text-white text-md">Tortor dignissim convallis aenean et
                                    tortor at. At ultrices mi tempus imperdiet nulla malesuada. Id cursus metus aliquam
                                    eleifend mi. Quis ipsum suspendisse ultrices gravida dictum fusce ut.</p>
                            </div>
                        </a>
                    </div>
                </li>
                <li class="text-sm leading-6">
                    <div class="relative group">
                        <div
                            class="absolute transition rounded-lg opacity-25 -inset-1 bg-gradient-to-r from-purple-600 to-pink-600 blur duration-400 group-hover:opacity-100 group-hover:duration-200">
                        </div><a href="https://twitter.com/dan_schulman" class="cursor-pointer">
                            <div
                                class="relative p-6 space-y-6 leading-none rounded-lg  bg-[#2e297d] ring-1 ring-gray-900/5">
                                <div class="flex items-center space-x-4"><img
                                        src="https://pbs.twimg.com/profile_images/516916920482672641/3jCeLgFb_400x400.jpeg"
                                        class="w-12 h-12 bg-center bg-cover border rounded-full" alt="Dan Schulman">
                                    <div>
                                        <h3 class="text-lg font-bold text-white ">Dan Schulman</h3>
                                        <p class=" text-white text-md">CEO of PayPal</p>
                                    </div>
                                </div>
                                <p class="leading-normal text-white text-md">Quam pellentesque nec nam aliquam sem
                                    et tortor consequat id. Enim sit amet venenatis urna cursus.</p>
                            </div>
                        </a>
                    </div>
                </li>
            </ul> -->


        </div>
    </div>
</section>

    </div>




</template>
