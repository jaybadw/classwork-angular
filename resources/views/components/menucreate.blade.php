
    <body class="bg-white-400">
      
          
        
   
        <form action="{{ route('menu.store', $restaurant['id']) }}" method="POST">
            @csrf
            <script src="https://unpkg.com/tailwindcss-jit-cdn"></script>

<!-- Snippet -->

<section class="antialiased bg-gray-100 text-gray-600 min-h-screen p-4 pt-10">
    <h2 class="text-center m-5">Create Menu Items For Restaurant </h2>
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
                    

                    <!-- Card form -->
                    <div x-show="card">
                        <div class="space-y-4">
                            <!-- Card Number -->
                            
                            <!-- Expiry and CVC -->
                            <div class="flex space-x-4">
                                
                                <div class="flex-1">
                                    <label class="block text-sm font-medium mb-1" for="card-cvc">Name<span class="text-red-500">*</span></label>
                                    <input id="name" name="name"class="text-sm text-gray-800 bg-white border rounded leading-5 py-2 px-3 border-gray-200 hover:border-gray-300 focus:border-indigo-300 shadow-sm placeholder-gray-400 focus:ring-0 w-full " type="text" placeholder="enter name" />
                                </div>
                            </div>
                            
                        </div>
                        <!-- Form footer -->
                        <div class="mt-6">
                            <div class="mb-4">
                                <button class="font-medium text-sm inline-flex items-center justify-center px-3 py-2 border border-transparent rounded leading-5 shadow-sm transition duration-150 ease-in-out w-full bg-indigo-500 hover:bg-indigo-600 text-white focus:outline-none focus-visible:ring-2">Pay $253.00</button>
                            </div>
                            <div class="text-xs text-gray-500 italic text-center">submit</div>
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