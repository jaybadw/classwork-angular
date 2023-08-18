
<body class="bg-white-400">
      
          
        
   
    <form action="{{ route('meal.store',['id' => $menu->restaurant_id, 'menuid' => $menu->id]) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <script src="https://unpkg.com/tailwindcss-jit-cdn"></script>

<!-- Snippet -->

<section class="bg-formbackground text-gray-600 min-h-screen p-4 pt-10">
<h2 class="text-center m-5">CReate Menu Items For Restaurant </h2>
<div class="h-full">
    <!-- Pay component -->
    <div>
        <!-- Card background -->
        <div class="relative px-4 sm:px-6 lg:px-8 max-w-lg mx-auto">
            <img class="rounded-t shadow-lg" src="https://preview.cruip.com/mosaic/images/pay-bg.jpg" width="460" height="180" alt="Pay background" />
        </div>
        <!-- Card body -->
        <div class="relative px-4 sm:px-6 lg:px-8 pb-8 max-w-lg mx-auto" x-data="{ card: true }">
            <div class="bg-white px-8 pb-6 rounded-b shadow-lg">

                <!-- Card header -->
                <div class="text-center mb-6">
                    <div class="mb-2">
                        <img class="-mt-8 inline-flex rounded-full" src="https://preview.cruip.com/mosaic/images/user-64-13.jpg" width="64" height="64" alt="User" />
                    </div>
                    <h1 class="text-xl leading-snug text-gray-800 font-semibold mb-2">Front-End Learning 🔥</h1>
                    <div class="text-sm">
                        Learn how to create real web apps using HTML & CSS. Code templates included.
                    </div>
                </div>

                <!-- Toggle -->
                <div class="flex justify-center mb-6">
                    <div class="relative flex w-full p-1 bg-gray-50 rounded">
                        <span class="absolute inset-0 m-1 pointer-events-none" aria-hidden="true">
                            <span class="absolute inset-0 w-1/2 bg-white rounded border border-gray-200 shadow-sm transform transition duration-150 ease-in-out" :class="card ? 'translate-x-0' : 'translate-x-full'"></span>
                        </span>
                       
                    </div>
                </div>

                <!-- Card form -->
                <div x-show="card">
                    <div class="space-y-4">
                        <!-- Card Number -->
                        
                        <!-- Expiry and CVC -->
                        <div class="flex space-x-4">
                            <div class="flex-1">
                                <p class="block text-sm font-medium mb-1" for="image1">image<span class="text-red-500">*</span></p>

                                <label class="  text-sm text-gray-800 block text-sm font-medium mb-1 rounded  border-solid border border-gray-200 py-2 shadow-sm pl-3 " for="image1">Upload FIle</label>
                                <input id="image1" name="image" class="text-sm text-gray-500 bg-white border hidden rounded leading-5 py-2 pr-3 border-gray-200 hover:border-gray-300 focus:border-indigo-300 shadow-sm placeholder-gray-400
                                 focus:ring-0 w-full" type="file" placeholder="upload file" />
                            </div>
                            <div class="flex-1">
                                <label class="block text-sm font-medium mb-1" for="card-cvc">Name<span class="text-red-500">*</span></label>
                                <input id="name" name="name"class="text-sm text-gray-800 bg-white border rounded leading-5 py-2 px-3 border-gray-200 hover:border-gray-300 focus:border-indigo-300 shadow-sm placeholder-gray-400 focus:ring-0 w-full " type="text" placeholder="enter meal cost" />
                            </div>
                        </div>
                        <div>
                            <label class="block text-sm font-medium mb-1" for="card-nr">Price <span class="text-red-500">*</span></label>
                            <input id="price" name="price" class="text-sm text-gray-800 bg-white border rounded leading-5 py-2 px-3 border-gray-200 hover:border-gray-300 focus:border-indigo-300 shadow-sm placeholder-gray-400 focus:ring-0 w-full" type="text" placeholder="average meal prep time " />
                        </div>
                        <div>
                            <label class="block text-sm font-medium mb-1" for="card-nr">Flavour<span class="text-red-500">*</span></label>
                            <input id="flavour_id" name="flavour_id" class="text-sm text-gray-800 bg-white border rounded leading-5 py-2 px-3 border-gray-200 hover:border-gray-300 focus:border-indigo-300 shadow-sm placeholder-gray-400 focus:ring-0 w-full" type="text" placeholder="average meal prep time " />
                        </div>
                        <!-- Name on Card -->
                        <div>
                            <label class="block text-sm font-medium mb-1" for="card-name">Description<span class="text-red-500">*</span></label>
                            <input id="description" name="description" class="text-sm text-gray-800 bg-white border rounded leading-5 py-2 px-3 border-gray-200 hover:border-gray-300 focus:border-indigo-300 shadow-sm placeholder-gray-400 focus:ring-0 w-full" type="text" placeholder="enter meal name" />
                        </div>
                        <!-- Email -->
                       
                    </div>
                    <!-- Form footer -->
                    <div class="mt-6">
                        <div class="mb-4">
                            <button class="font-medium text-sm inline-flex items-center justify-center px-3 py-2 border border-transparent rounded leading-5 shadow-sm transition duration-150 ease-in-out w-full bg-indigo-500 hover:bg-indigo-600 text-white focus:outline-none focus-visible:ring-2">Pay $253.00</button>
                        </div>
                        <div class="text-xs text-gray-500 italic text-center">You'll be charged $253, including $48 for VAT in Italy</div>
                    </div>
                </div>

                <!-- PayPal form -->
          
            </div>
        </div>
    </div>
</div>
</section>

<!-- More components -->

    </form>


</body>