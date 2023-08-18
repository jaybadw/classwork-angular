<!-- component -->
<section class="bg-white dark:bg-gray-900 px-2">
    <div class="container px-6 py-10 mx-auto">

        <div class="grid grid-cols-1 gap-8 mt-8 md:mt-16 md:grid-cols-2">
            <!-- Loop through each restaurant -->
            @foreach ($meals as $meal)
            <div class="lg:flex">
                <img class="object-cover w-full h-56 rounded-lg lg:w-64" src="https://images.unsplash.com/photo-1515378960530-7c0da6231fb1?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" alt="">

                <div class="flex flex-col justify-between py-6 lg:mx-6">
                    <a href="{{ route('meal.show', $meal->id) }}" class="text-xl font-semibold text-gray-800 hover:underline dark:text-white ">
                        How to use sticky note for problem solving
                    </a>
                    
                    <span class="text-sm text-gray-500 dark:text-gray-300">On: 20 October 2019</span>
                </div>
            </div>
            @endforeach

            

            

           

           
            <div class="lg:flex">
                <img class="object-cover w-full h-56 rounded-lg lg:w-64" src="https://images.unsplash.com/photo-1624996379697-f01d168b1a52?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" alt="">

                <div class="flex flex-col justify-between py-6 lg:mx-6">
                    <a href="#" class="text-xl font-semibold text-gray-800 hover:underline dark:text-white ">
                        What do you want to know about Blockchane
                    </a>
                    
                    <span class="text-sm text-gray-500 dark:text-gray-300">On: 20 October 2019</span>
                </div>
            </div>
        </div>
    </div>
</section>


        

<!-- Card List Section -->
<section x-data="xData()" class="bg-gray-100 dark:bg-gray-900 py-10 px-12">
    <!-- Card Grid -->
    <div
        class="grid grid-flow-row gap-8 text-neutral-600 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
        <template x-for="post in posts">
            <!-- Card Item -->
            <div
                class="my-8 rounded shadow-lg shadow-gray-200 dark:shadow-gray-900 bg-white dark:bg-gray-800 duration-300 hover:-translate-y-1"
                x-for="(post, index) in posts">
                <!-- Clickable Area -->
                <a _href="link" class="cursor-pointer">
                    <figure>
                        <!-- Image -->
                        <img
                            :src="post.image + '?auto=format&fit=crop&w=400&q=50'"
                            class="rounded-t h-72 w-full object-cover" />

                        <figcaption class="p-4">
                            <!-- Title -->
                            <p
                                class="text-lg mb-4 font-bold leading-relaxed text-gray-800 dark:text-gray-300"
                                x-text="post.title">
                                <!-- Post Title -->
                            </p>

                            <!-- Description -->
                            <small
                                class="leading-5 text-gray-500 dark:text-gray-400"
                                x-text="post.description">
                                <!-- Post Description -->
                            </small>
                        </figcaption>
                    </figure>
                </a>
            </div>
        </template>
    </div>
</section>
