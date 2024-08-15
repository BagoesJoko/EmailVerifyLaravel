<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
	<title>Bagus Joko</title>
	@vite(['resources/css/app.css','resources/js/app.js'])
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body>
	<header class="bg-transparent w-full fixed">
	  <div class="mx-auto flex h-16 max-w-screen-xl items-center gap-8 px-4 sm:px-6 lg:px-8">
	    <a class="block text-teal-600" href="{{ url('/') }}">
	      <span class="sr-only">HOME</span>
	      <svg width="40px" height="40px" viewBox="0 -26.58 365.132 365.132" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g stroke-width=".094"> <path d="M271.084.172c15.399-.2 30.699-.101 46-.101v118.5c-47.7.101-95.4 0-143.101 0-1.5 0-3 .101-4.5.301 1.8 2.1 4.3 3.3 6.601 4.899 1.899-1.2 3.6-3.3 6-3.2h44.1c3.5-.1 6.101 2.801 8.7 4.7 4-2.2 8.3-5 13.101-4.7h86.601v5.5h30.5v74.5c-.7 7.101-4.8 14.4-11.5 17.5-3.3 1.7-6.9 3.101-10.5 3.5h-30c-7.4-.3-15.5-2.899-19.5-9.5-5-7.699-3.7-17.3-3.5-26h-18.2c-.2 8.9.101 17.801-.101 26.801 9.301 1.101 18.399 7.8 19.5 17.601.2 21.1 0 42.1 0 63.199-.399 9.399-8.899 17.199-18.101 18.199-11.399 0-22.8-.1-34.199 0-5 0-9.801-2.1-13.801-5-3.899 2.602-8.199 4.9-13 4.9-11.699.1-23.399 0-35.2.1-5.899.102-11.3-2.898-15.7-6.699-4.6 4.301-10.8 7.101-17.199 6.699-11.7-.398-23.5.801-35.101-.8-4.2 1.2-8.6.7-12.899.8-14.7 0-29.4-.1-44 0-9.5.602-18.7-6.3-20.9-15.398-.2-21 0-42-.1-63-.301-5.5 2.5-10.7 6.5-14.301 4.3-4.3 10.399-5.699 16.199-6.8-4-4.2-6-10-5.699-15.7v-30c-1.7-.101-3.301-.101-5-.101v-25.699c-14.301 0-28.7-.101-43 0V47.571c.1-4.3-.5-8.699 1-12.899 3-8 10.5-14.2 19-15.3 31-.101 62 0 93 0 5.6-.2 11 2.399 15 6.3 4.899-5.101 12.199-6.601 19-6.4 10.199.2 20.5-.399 30.699.601 2.7.899 5.5-.5 8.2-.301h44.101c6.899-.199 14 1.301 19.399 5.7 5.5-5.8 14.101-6.6 21.601-6l-.001-19.1z" fill="#010101" stroke="#010101"></path> <path d="M283.384 12.372c7.5-.601 15.101-.2 22.7-.301v94c-13.7 0-27.301.101-40.9 0-5.1-.3-11.1-3.699-11.1-9.399v-56.2c.199-5.6 5.899-9 11-9.3 6-.3 12.1 0 18.199-.101.101-6.199 0-12.499.101-18.699zM11.684 40.572c.1-6 6.3-9.399 11.7-9.399 13.2-.2 26.399 0 39.6-.101.2 29.801 0 59.7.101 89.601.199 5.1-5.4 8.399-10 8.899-13.801.101-27.601 0-41.5 0 .1-5.899-.301-11.8.3-17.699 9.7-.101 19.5 0 29.2-.101v-5.6c-6.5-.4-13 .3-19.4-.4-5.2-.3-10.5-4.6-10.1-10.2-.001-18.3-.101-36.7.099-55zM72.484 31.172c12.5-.3 25.101 0 37.601-.101 4.6-.199 9.8.9 12.5 5 2.1 2.7 1.399 6.301 1.5 9.5-.101 6.301.199 12.601-.101 18.801-.5 2.8-4 3.1-6 4.199 2.3 1.101 6.101 1.7 6.101 5 .1 12.801 0 25.5 0 38.301 6.5 0 13-.101 19.399 0 .2 7 0 14.1.101 21.199 6.199.101 12.399-.1 18.5 0 5.199.101 10.699 4.101 10.699 9.7.101 22.3 0 44.7 0 67-7.5.101-15.1.101-22.699 0 0-19.601.1-39.2 0-58.7h-6.5v58.7c-7.601.101-15.2.101-22.7 0-.101-26.7-.101-53.5-.101-80.2-4.6-.3-9.8 1-14-1.6-2.699-1.5-5.399-4.1-5.199-7.3V77.57h-6.7c-.101 9.4 0 18.801-.101 28.2-7.399.5-15 .5-22.399 0-.001-24.798-.201-49.698.099-74.598z" fill="#ffffff" stroke="#ffffff"></path> <path d="M133.084 40.472c-.4-5.8 6.199-9.3 11.3-9.4 9.5-.1 19 0 28.6 0 5.4 0 11.601 3.601 11.8 9.601.101 21.8 0 43.6 0 65.399h-39.699c-4.9 0-10.801-2.5-11.9-7.6-.2-9.7 0-19.3-.1-29-.7-5.1 4.699-8.5 9-9.7 6.699-.5 13.3 0 20-.2v-10.5h-6.9c-.1 1.5-.1 3-.2 4.5h-21.899c-.002-4.4-.002-8.7-.002-13.1zM193.684 31.172c7.4-.2 14.9-.101 22.301-.101.101 1.801.101 3.601.101 5.4 5.1-4 11.699-5.3 18-5.3 4.6.1 9.899 2.8 10.899 7.5.3 22.5-.2 44.899.399 67.399h-22.5c.2-19 .3-37.899.101-56.899-2.301-.101-4.601-.101-6.899-.101-.101 19 .1 38 0 57h-22.5c-.002-24.998-.102-49.998.098-74.898z" fill="#ffffff" stroke="#ffffff"></path> <path d="M34.084 49.072h6.699c.101 13 0 26 .101 39h-6.8v-39zM94.783 49.072h6.801v10.5h-6.801c.101-3.5.101-7 0-10.5zM276.584 49.072h6.699c0 13 .101 26 0 39h-6.699v-39zM155.283 77.572h6.801v10.5h-6.7c0-3.5-.101-7-.101-10.5z" fill="#010101" stroke="#010101"></path> <path d="M72.584 114.872c6.8 0 13.6-.101 20.5 0v8.699h-20.5v-8.699zM60.384 133.372c7.5-.601 14.899-.2 22.399-.2 0 1.5.101 3.1.101 4.6 9.7.101 19.5.101 29.2 0v17.8H82.783c.101 11.5.101 23 0 34.5h6.801v-28.5h22.5c0 12.7.1 25.4-.101 38 .101 5.801-5.3 10.2-10.8 10-10.4 0-20.8.101-31.1 0-5.601-.3-9.801-5.6-9.801-11 0-14.3.101-28.6 0-43-2 0-4 0-6-.1.101-5.9.101-11.7 0-17.6 2 0 4-.101 6-.101.001-1.499.102-2.999.102-4.399zM179.783 142.472c-.3-5.4 5.399-9.1 10.301-9.3 10-.2 20-.101 30-.101 5.399-.1 11.5 3.601 11.5 9.4v37.1c-9.801 0-19.5-.1-29.301 0 0 3.5.101 7 .101 10.5h6.601c.101-1.5.101-3.1.199-4.699 7.4-.101 14.9 0 22.4-.101-.2 5.399.399 10.899-.4 16.2-1 5.6-6.8 8.6-12.1 8.399-9.601-.101-19.301.101-29-.2-5.301-.199-10.301-4.5-10.2-10-.101-19.098 0-38.098-.101-57.198zM238.584 142.472c-.2-5.4 5.5-9.1 10.5-9.4h41.3c-.101 6 0 12-.101 18h-29.199v5.4c9.8.2 19.5 0 29.3.1-.101 6-.101 12 0 18-9.8.101-19.5-.1-29.3 0-.101 11.801 0 23.5 0 35.2-7.5.101-15 .101-22.5 0v-67.3zM301.184 133.072c7.5.101 15.101 0 22.601 0 0 1.601.101 3.2.101 4.7 9.7.101 19.5.101 29.2 0v17.8c-9.7 0-19.5-.1-29.2 0-.101 11.5-.101 23 0 34.5h6.7v-28.5h22.5v39.101c-.101 4.801-4.9 7.801-9.101 8.801-10 .3-20-.2-30 .3-4.399.2-9.2-1.601-11.399-5.601-1.601-2.899-1.5-6.399-1.5-9.601 0-13-.101-26 .1-39-2 0-3.898 0-5.898-.1.1-5.9.1-11.7 0-17.6 1.898-.101 3.8-.101 5.699-.101.097-1.599.097-3.199.197-4.699z" fill="#ffffff" stroke="#ffffff"></path> <path d="M202.283 151.072h6.801v10.5h-6.801v-10.5z" fill="#010101" stroke="#010101"></path> <path d="M43.184 231.671c1.4-5 6.9-7.8 11.9-7.601 9.6.101 19.3-.1 29 .101 4.8.2 10.3 3.399 10.5 8.7v66.399c-13.5.1-27 .1-40.4 0-4.4-.2-9.5-2.399-11-6.8-.2-10.9-.2-21.801 0-32.7 2.1-3.899 6.2-7.2 10.8-7.2 6.101 0 12.3.101 18.4 0-.101-3.5 0-7-.101-10.5h-6.6c-.1 1.5-.1 3-.2 4.5H43.084c.1-4.998-.2-9.899.1-14.899zM104.084 224.072h22c0 19-.101 38 0 57 2.3 0 4.6 0 6.8.101-.101-19 0-38 0-57.101h22.2c-.101 22.801.1 45.601-.101 68.4-1.6 4.699-7.2 6.898-11.899 6.6-9.601-.1-19.301.101-29 0-4.801-.399-10.7-3.899-10-9.399v-65.601zM168.184 224.072h22.3c.101 1.601.101 3.2.199 4.7 9.7 0 19.4.101 29.101 0-.3 6-.199 12-.199 18-9.601.101-19.301 0-29 .101-.101 11.399.1 22.8-.101 34.199 2.399 0 4.8 0 7.199.101-.199-9.5 0-19-.1-28.601h22c-.101 12.301.1 24.601 0 36.9.1 5.899-6.101 9.8-11.4 9.6h-29.1c-4.4 0-9.2-2.399-10.9-6.699-.3-15.101 0-30.301-.1-45.5-1.9 0-3.801-.101-5.7-.101 0-6-.101-12 0-17.899h5.6c.101-1.601.101-3.202.201-4.801zM236.384 224.572c2.2-.699 4.5-.5 6.7-.5 9 .101 18-.1 27 0 5 .301 10.6 4 10.5 9.4v53.1c0 2.5-.101 5-1.301 7.2-2.3 3.7-6.899 5.5-11.199 5.3-9.601 0-19.301.101-29 0-4.9-.399-10.5-4-10.2-9.399-.101-18.699 0-37.5-.101-56.199-.299-4.402 3.701-7.702 7.601-8.902z" fill="#ffffff" stroke="#ffffff"></path> <path d="M251.283 242.072h6.801c-.101 13 .1 26 0 38.9-2.301.1-4.5.1-6.7.199-.2-13 0-26.099-.101-39.099zM65.584 270.572h6.8c-.101 3.5-.101 6.9.2 10.301-2.4.199-4.801.199-7.101.3.101-3.502.101-7.101.101-10.601z" fill="#010101" stroke="#010101"></path> </g> </g></svg>
	    </a>

	    <div class="flex flex-1 items-center justify-end md:justify-between">
	      <nav aria-label="Global" class="hidden md:block">
	        <ul class="flex items-center gap-6 text-sm">
	          <li>
	            <a class="text-white font-bold transition hover:text-gray-500/75" href="#"> ABOUT </a>
	          </li>

	          <li>
	            <a class="text-white font-bold transition hover:text-gray-500/75" href="{{ url('/#statistik') }}"> STATISTIK </a>
	          </li>

	          <li>
	            <a class="text-white font-bold transition hover:text-gray-500/75" href="{{ url('/#requirements') }}"> REQUREUIMENTS </a>
	          </li>

	          <li>
	            <a class="text-white font-bold transition hover:text-gray-500/75" href="{{ url('/#culture') }}"> CULTURE </a>
	          </li>

	        </ul>
	      </nav>

	      <div class="flex items-center gap-4">
	        @if(auth()->user())
	      	<div class="sm:flex sm:gap-4">
	          	<a class="block rounded-md text-white font-bold px-5 py-2.5 text-sm font-medium transition hover:bg-teal-700" href="{{ url('/home') }}">Home</a>
	        </div>
	      	@else
	        <div class="sm:flex sm:gap-4">
	          	<a class="block rounded-md text-white font-bold px-5 py-2.5 text-sm font-medium transition hover:bg-teal-700" href="{{ url('/login') }}">Login</a>
	        </div>
	      	@endif

	        <button class="block rounded bg-gray-100 p-2.5 text-gray-600 transition hover:text-gray-600/75 md:hidden" data-drawer-target="drawer-navigation" data-drawer-show="drawer-navigation" aria-controls="drawer-navigation">
	          <span class="sr-only">Toggle menu</span>
	          <svg
	            xmlns="http://www.w3.org/2000/svg"
	            class="h-5 w-5"
	            fill="none"
	            viewBox="0 0 24 24"
	            stroke="currentColor"
	            stroke-width="2">
	            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
	          </svg>
	        </button>
	      </div>
	    </div>
	  </div>
	</header>
	<!-- drawer component -->
	<div id="drawer-navigation" class="fixed top-0 left-0 z-40 h-screen p-4 overflow-y-auto transition-transform -translate-x-full bg-gray-900 w-64" tabindex="-1" aria-labelledby="drawer-navigation-label">
	    <h5 id="drawer-navigation-label" class="text-base font-semibold text-white uppercase">Menu</h5>
	    <button type="button" data-drawer-hide="drawer-navigation" aria-controls="drawer-navigation" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 absolute top-2.5 end-2.5 inline-flex items-center justify-center dark:hover:bg-gray-600 dark:hover:text-white" >
	      <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
	         <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
	      </svg>
	      <span class="sr-only">Close menu</span>
	   </button>
	  <div class="py-4 overflow-y-auto">
	      <ul class="space-y-2 font-medium">
	         <li>
	            <a href="#" class="flex items-center p-2 text-gray-200 hover:text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
	               <svg class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
	                  <path d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z"/>
	                  <path d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z"/>
	               </svg>
	               <span class="ms-3">ABOUT</span>
	            </a>
	         </li>
	         <li>
	            <a href="{{ url('/#statistik') }}" class="flex items-center p-2 text-gray-200 hover:text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
	               <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
	                  <path d="M6.143 0H1.857A1.857 1.857 0 0 0 0 1.857v4.286C0 7.169.831 8 1.857 8h4.286A1.857 1.857 0 0 0 8 6.143V1.857A1.857 1.857 0 0 0 6.143 0Zm10 0h-4.286A1.857 1.857 0 0 0 10 1.857v4.286C10 7.169 10.831 8 11.857 8h4.286A1.857 1.857 0 0 0 18 6.143V1.857A1.857 1.857 0 0 0 16.143 0Zm-10 10H1.857A1.857 1.857 0 0 0 0 11.857v4.286C0 17.169.831 18 1.857 18h4.286A1.857 1.857 0 0 0 8 16.143v-4.286A1.857 1.857 0 0 0 6.143 10Zm10 0h-4.286A1.857 1.857 0 0 0 10 11.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 18 16.143v-4.286A1.857 1.857 0 0 0 16.143 10Z"/>
	               </svg>
	               <span class="flex-1 ms-3 whitespace-nowrap">STATISTIK</span>
	            </a>
	         </li>
	         <li>
	            <a href="{{ url('/#requirements') }}" class="flex items-center p-2 text-gray-200 hover:text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
	               <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
	                  <path d="m17.418 3.623-.018-.008a6.713 6.713 0 0 0-2.4-.569V2h1a1 1 0 1 0 0-2h-2a1 1 0 0 0-1 1v2H9.89A6.977 6.977 0 0 1 12 8v5h-2V8A5 5 0 1 0 0 8v6a1 1 0 0 0 1 1h8v4a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-4h6a1 1 0 0 0 1-1V8a5 5 0 0 0-2.582-4.377ZM6 12H4a1 1 0 0 1 0-2h2a1 1 0 0 1 0 2Z"/>
	               </svg>
	               <span class="flex-1 ms-3 whitespace-nowrap">REQUREUIMENTS</span>
	            </a>
	         </li>
	         <li>
	            <a href="{{ url('/#culture') }}" class="flex items-center p-2 text-gray-200 hover:text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
	               <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
	                  <path d="M17 5.923A1 1 0 0 0 16 5h-3V4a4 4 0 1 0-8 0v1H2a1 1 0 0 0-1 .923L.086 17.846A2 2 0 0 0 2.08 20h13.84a2 2 0 0 0 1.994-2.153L17 5.923ZM7 9a1 1 0 0 1-2 0V7h2v2Zm0-5a2 2 0 1 1 4 0v1H7V4Zm6 5a1 1 0 1 1-2 0V7h2v2Z"/>
	               </svg>
	               <span class="flex-1 ms-3 whitespace-nowrap">CULTURE</span>
	            </a>
	         </li>
	         @if(auth()->user())
	         <li>
	            <a href="{{ route('logout') }}" class="flex items-center p-2 text-gray-200 hover:text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
	               <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 16">
	                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 8h11m0 0L8 4m4 4-4 4m4-11h3a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-3"/>
	               </svg>
	               <span class="flex-1 ms-3 whitespace-nowrap">Log Out</span>
	            </a>
	            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
				@csrf
				</form>
	         </li>
	         @else
	         <li>
	            <a href="{{ url('/login') }}" class="flex items-center p-2 text-gray-200 hover:text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
	               <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 16">
	                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 8h11m0 0L8 4m4 4-4 4m4-11h3a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-3"/>
	               </svg>
	               <span class="flex-1 ms-3 whitespace-nowrap">Sign In</span>
	            </a>
	         </li>
	         <li>
	            <a href="{{ url('/register') }}" class="flex items-center p-2 text-gray-200 hover:text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
	               <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
	                  <path d="M5 5V.13a2.96 2.96 0 0 0-1.293.749L.879 3.707A2.96 2.96 0 0 0 .13 5H5Z"/>
	                  <path d="M6.737 11.061a2.961 2.961 0 0 1 .81-1.515l6.117-6.116A4.839 4.839 0 0 1 16 2.141V2a1.97 1.97 0 0 0-1.933-2H7v5a2 2 0 0 1-2 2H0v11a1.969 1.969 0 0 0 1.933 2h12.134A1.97 1.97 0 0 0 16 18v-3.093l-1.546 1.546c-.413.413-.94.695-1.513.81l-3.4.679a2.947 2.947 0 0 1-1.85-.227 2.96 2.96 0 0 1-1.635-3.257l.681-3.397Z"/>
	                  <path d="M8.961 16a.93.93 0 0 0 .189-.019l3.4-.679a.961.961 0 0 0 .49-.263l6.118-6.117a2.884 2.884 0 0 0-4.079-4.078l-6.117 6.117a.96.96 0 0 0-.263.491l-.679 3.4A.961.961 0 0 0 8.961 16Zm7.477-9.8a.958.958 0 0 1 .68-.281.961.961 0 0 1 .682 1.644l-.315.315-1.36-1.36.313-.318Zm-5.911 5.911 4.236-4.236 1.359 1.359-4.236 4.237-1.7.339.341-1.699Z"/>
	               </svg>
	               <span class="flex-1 ms-3 whitespace-nowrap">Sign Up</span>
	            </a>
	         </li>
	         @endif
	      </ul>
	   </div>
	</div>

	{{-- JUMBOTRON --}}
	@yield('content')
	{{-- END JUMBOTRON --}}	


	<script type="text/javascript">
		document.addEventListener('scroll', () => {
			const header = document.querySelector('header');
			if(window.scrollY > 0){
				header.classList.add('scrolled');
			}else{
				header.classList.remove('scrolled');
			}
		});
	</script>
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<script>
	  AOS.init();
	</script>
</body>
</html>