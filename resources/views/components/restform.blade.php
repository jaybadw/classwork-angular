<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        @vite('resources/css/app.css')
    </head>
<!-- component -->
<!-- component -->
<div class="relative min-h-screen flex items-center justify-center bg-center bg-gray-50 py-12 px-4 sm:px-6 lg:px-8 bg-gray-500 bg-no-repeat bg-cover relative items-center"
style="background-image: url(https://images.pexels.com/photos/246327/pexels-photo-246327.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2);">
<div class="absolute bg-black opacity-60 inset-0 z-0"></div>
<div class="max-w-md w-full space-y-8 p-10 bg-white rounded-xl shadow-lg z-10">
<div class="grid  gap-8 grid-cols-1">
<div class="flex flex-col ">
        <div class="flex flex-col sm:flex-row items-center">
            <h2 class="font-semibold text-lg mr-auto">Shop Info</h2>
            <div class="w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                @if(session('success'))
            <div class="alert alert-success">
                    {{ session('success') }}
           </div>
            @endif
            </div>
        </div>
        <div class="mt-5">
            <form action="{{ route('restaurant.store') }}" method="post" enctype="multipart/form-data">
                @csrf
            <div class="form">
                <div class="md:space-y-2 mb-3">
                    <label class="text-xs font-semibold text-gray-600 py-2">Company Logo<abbr class="hidden" title="required">*</abbr></label>
                    <div class="flex items-center py-6">
                        <div class="w-12 h-12 mr-4 flex-none rounded-xl border overflow-hidden">
                            <img class="w-12 h-12 mr-4 object-cover" src="https://images.unsplash.com/photo-1611867967135-0faab97d1530?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=1352&amp;q=80" alt="Avatar Upload">
            </div>
                            <label class="cursor-pointer ">
              <span class="focus:outline-none text-white text-sm py-2 px-4 rounded-full bg-green-400 hover:bg-green-500 hover:shadow-lg">Browse</span>
              <input type="file" class="hidden" :multiple="multiple" :accept="accept" name="restaurant_image" id="restaurant_image">
            </label>
                        </div>
                    </div>
                    <div class="md:flex flex-row md:space-x-4 w-full text-xs">
                        <div class="mb-3 space-y-2 w-full text-xs">
                            <label class="font-semibold text-gray-600 py-2">Company  Name <abbr title="required">*</abbr></label>
                            <input placeholder="Company Name" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4" required="required" type="text" name="restaurant_name" id="restaurant_name">
                            <p class="text-red text-xs hidden">Please fill out this field.</p>
                    </div>
                                        
                        @error('restaurant_name')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <div class="mb-3 space-y-2 w-full text-xs">
                            <label class="font-semibold text-gray-600 py-2">Company  phone <abbr title="required">*</abbr></label>
                            <input placeholder="Email ID" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4" required="required" type="text" name="phone" id="phone">
                            <p class="text-red text-xs hidden">Please fill out this field.</p>
                            @error('phone')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        </div>
                        <div class="mb-3 space-y-2 w-full text-xs">
                            <label class="font-semibold text-gray-600 py-2">rating<abbr title="required">*</abbr></label>
                            <input placeholder="Email ID" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4" required="required" type="text" name="rating" id="rating">
                            <p class="text-red text-xs hidden">Please fill out this field.</p>
                            @error('rating')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        </div>
                    </div>
                   
                        <div class="md:flex md:flex-row md:space-x-4 w-full text-xs">
                            <div class="w-full flex flex-col mb-3">
                                <label class="font-semibold text-gray-600 py-2">Company Address</label>
                                <input placeholder="Address" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4" type="text" name="address" id="address444z">
                            </div>
                            @error('address')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                                <div class="w-full flex flex-col mb-3">
                                    <label class="font-semibold text-gray-600 py-2">Location<abbr title="required">*</abbr></label>
                                    <select class="block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4 md:w-full " required="required" name="parish" id="parish">
              <option >Seleted location</option>
              <option value="kingston">Kingston</option>
              <option value="st.andrew">St.Andrew</option>
              <option value="portland">Portland</option>
              <option value="st.thomas">St.thomas</option>
              <option value="manchester">Gyalchester</option>
              <option value="st.elizabeth">St.Elizabeth</option>
              <option value="wetmoreland">Westmoreland</option>
              <option value="st.james">St.James</option>
              <option value="hanover">Hanover</option>
            </select>
                                    <p class="text-sm text-red-500 hidden mt-3" id="error">Please fill out this field.</p>
                                </div>
                            </div>
                   
                        <div class="md:flex md:flex-row md:space-x-4 w-full text-xs">
                            <div class="w-full flex flex-col mb-3">
                                <label class="font-semibold text-gray-600 py-2">Opening Hours</label>
                                <input placeholder="Address" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4" type="time" name="openingHours" id="openingHours">
                            </div>
                                <div class="w-full flex flex-col mb-3">
                                    <label class="font-semibold text-gray-600 py-2">Closing Hours <abbr title="required"></label>
                                    <input placeholder="Address" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4" type="time" name="closingHours" id="closingHours">

                                    <p class="text-sm text-red-500 hidden mt-3" id="error">Please fill out this field.</p>
                                </div>
                            </div>
                            <div class="flex-auto w-full mb-1 text-xs space-y-2">
                                <label class="font-semibold text-gray-600 py-2">Description</label>
                                <textarea required="" name="description" id="description" class="w-full min-h-[100px] max-h-[300px] h-28 appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg  py-4 px-4" placeholder="Enter your comapny info" spellcheck="false"></textarea>
                                <p class="text-xs text-gray-400 text-left my-3">You inserted 0 characters</p>
                            </div>
                            <p class="text-xs text-red-500 text-right my-3">Required fields are marked with an
                                asterisk <abbr title="Required field">*</abbr></p>
                            <div class="mt-5 text-right md:space-x-3 md:block flex flex-col-reverse">
                                <button class="mb-2 md:mb-0 bg-white px-5 py-2 text-sm shadow-sm font-medium tracking-wider border text-gray-600 rounded-full hover:shadow-lg hover:bg-gray-100"> Cancel </button>
                                <button class="mb-2 md:mb-0 bg-green-400 px-5 py-2 text-sm shadow-sm font-medium tracking-wider text-white rounded-full hover:shadow-lg hover:bg-green-500" type="submit">Save</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>