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