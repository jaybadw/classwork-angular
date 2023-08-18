<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
  
  
          <x-restaurantnav/>
          <h2 class="text-xl font-semibold justify-center text-center mt-4"> National Brands</h2>
          <main class="h-screen w-screen py-6 bg-yellow-50 flex items-center justify-center flex-wrap">
              <!-- Loop through each restaurant -->
              @foreach ($restaurants as $restaurant)
                  <div class="bg-white w-72 h-96 shadow-md rounded m-3">
                      <div class="h-3/4 w-full">
                          <img class="w-full h-full object-cover rounded-t" src="{{ asset('storage/images/' . $restaurant->image) }}" alt="{{ $restaurant->name }}">
                      </div>
                      <div class="w-full h-1/4 p-3">
                          <!-- Update the href attribute dynamically -->
                          <a href="{{ route('restaurant.show', ['id' => $restaurant->id]) }}" class="hover:text-yellow-600 text-gray-700">
                              <span class="text-lg font-semibold uppercase tracking-wide">{{ $restaurant->name }}</span>
                          </a>
                          <p class="text-gray-600 text-sm leading-5 mt-1">{{ $restaurant->description }}</p>
                      </div>
                  </div>
              @endforeach
          </main>
      </body>
  </html>
  
    