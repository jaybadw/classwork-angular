<!-- component -->
<!doctype html>
<html lang="id-ID">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<!---
	You may need jQuery
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	--->
	<style>
      /*
		You may need this for responsive background
		header {
			background: url('bg-425.jpg');
		}

		@media only screen and (min-width:640px) {
			header {
				background: url('bg-640.jpg');
			}
		}

		@media only screen and (min-width:768px) {
			header {
				background: url('bg-768.jpg');
			}
		}

		@media only screen and (min-width:1024px) {
			header {
				background: url('bg-1024.jpg');
			}
		}

		@media only screen and (min-width:1025px) {
			header {
				background: url('bg-max.jpg');
			}
		} */
      /* Default background by https://www.pexels.com/@knownasovan */
      header {
        background:url('https://images.pexels.com/photos/3373745/pexels-photo-3373745.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2');}
	</style>
</head>

<body>

	<nav id="nav" class="fixed inset-x-0 top-0 flex flex-row justify-between z-10 text-white bg-transparent ">

		<div class="p-4 flex parent">
            <a href=""><div class="space-y-2 px-3">
                <div class="w-8 h-0.5 bg-white"></div>
                <div class="w-8 h-0.5 bg-white"></div>
                <div class="w-8 h-0.5 bg-white"></div>
            </div> </a>
            

			<div class="font-extrabold tracking-widest text-xl"><a href="#" class="transition duration-500 hover:text-indigo-500">SWIFT</a></div>
		</div>

		<!-- Nav Items Working on Tablet & Bigger Sceen -->
		<div class="p-4 hidden md:flex flex-row justify-between font-bold">
			<a id="hide-after-click" href="{{route('restaurant.index')}}" class="mx-4 text-lg  border-b-2 border-transparent hover:border-b-2 hover:border-indigo-300 transition duration-500">restaurants </a>
			<a href="#whyus" class="mx-4 text-lg border-b-2 border-transparent hover:border-b-2 hover:border-indigo-300 transition duration-500">Why
				Us ?</a>
			<a href="#showcase" class="mx-4 text-lg border-b-2 border-transparent hover:border-b-2 hover:border-indigo-300 transition duration-500">Our
				Products</a>
		</div>

		<!-- Burger Nav Button on Mobile -->
		<div id="nav-open" class="p-4 md:hidden">
			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
			 stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu">
				<line x1="3" y1="12" x2="21" y2="12"></line>
				<line x1="3" y1="6" x2="21" y2="6"></line>
				<line x1="3" y1="18" x2="21" y2="18"></line>
			</svg>
		</div>
	</nav>

	<!-- Opened Nav in Mobile, you can use javascript/jQuery -->
	<div id="nav-opened" class="fixed left-0 right-0 hidden bg-white mx-2 mt-16 rounded-br rounded-bl shadow z-10">
		<div class="p-2 divide-y divide-gray-600 flex flex-col">
			<a href="#about" class="p-2 font-semibold hover:text-indigo-700">About</a>
			<a href="#whyus" class="p-2 font-semibold hover:text-indigo-700">Why Us ?</a>
			<a href="#showcase" class="p-2 font-semibold hover:text-indigo-700">Our Products</a>
		</div>
	</div>

	<header id="up" class="bg-center bg-fixed bg-no-repeat bg-center bg-cover h-screen relative">
		<!-- Overlay Background + Center Control -->
		<div class="h-screen bg-opacity-50 bg-black flex items-center justify-start" style="background:rgba(0,0,0,0.2);">
			<div class="mx-2 ml-20 text-center">
				<h1 class="text-gray-100 font-extrabold text-4xl xs:text-5xl md:text-6xl">
					<span class="text-white">Food</span> IS Life
           </h1>
          
           <div class="inline-flex">
           <button class="p-2 my-5 mx-2 bg-indigo-700 hover:bg-indigo-800 font-bold text-white rounded border-2 border-transparent hover:border-indigo-800 shadow-md transition duration-500 md:text-xl">Hire US!</button>
           <a href="#about"><button class="p-2 my-5 mx-2 bg-transparent border-2 bg-indigo-200 bg-opacity-75 hover:bg-opacity-100 border-indigo-700 rounded hover:border-indigo-800 font-bold text-indigo-800 shadow-md transition duration-500 md:text-lg">Learn More</button></a>
           </div>
        </div>
    </div>
</header>
  </body>
  <script>

  </script>
</html>