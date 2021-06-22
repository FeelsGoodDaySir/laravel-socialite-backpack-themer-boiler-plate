@php
	$user = Auth::user();
	$image = $user ? ($user->image ? $user->image : 'https://ui-avatars.com/api/?name='.$user->name) : null;
@endphp

<!-- Section 1 -->
<style>
	.dropdown:focus-within .dropdown-menu {
		opacity:1;
		transform: translate(0) scale(1);
		visibility: visible;
	}
</style>
<section class="w-full px-8 text-gray-700 bg-white">
	<div class="container flex flex-col flex-wrap items-center justify-between py-5 mx-auto md:flex-row max-w-7xl">
		<div class="relative flex flex-col md:flex-row">
			@include('inc.app-logo',['attributes' => 'class="w-6 h-6"'])
			<nav class="flex flex-wrap items-center mb-5 text-base md:mb-0 md:pl-8 md:ml-8 md:border-l md:border-gray-200">
				<a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'text-yellow-500' : 'text-gray-600' }} mr-5 font-medium leading-6 hover:text-gray-900">Home</a>
				<a href="#_" class="mr-5 font-medium leading-6 text-gray-600 hover:text-gray-900">Features</a>
				<a href="#_" class="mr-5 font-medium leading-6 text-gray-600 hover:text-gray-900">Pricing</a>
				<a href="#_" class="mr-5 font-medium leading-6 text-gray-600 hover:text-gray-900">Blog</a>
				@auth
				<a href="{{ route('dashboard') }}"
					class="{{ request()->routeIs('dashboard') ? 'text-yellow-500' : 'text-gray-600 mr-5 font-medium leading-6 hover:text-gray-900' }}">
					{{ __('Dashboard') }}
				</a>
				@endauth
			</nav>
		</div>

		<!-- <div class="inline-flex items-center ml-5 space-x-6 lg:justify-end">
			@auth
				@if (Auth::user()->image)
				<img class="inline-block h-6 w-6 rounded-full ring-2 ring-white" alt="{{Auth::user()->name}}" src="{{Auth::user()->image}}"/>
				@endif
				<a href="{{ route('profile') }}"
					class="text-base font-medium leading-6 text-gray-600 whitespace-no-wrap transition duration-150 ease-in-out hover:text-gray-900">
					{{ Auth::user()->name }}
				</a>

				<a href="{{ route('logout') }}"
					class="text-base font-medium leading-6 text-gray-600 whitespace-no-wrap transition duration-150 ease-in-out hover:text-gray-900"
					onclick="event.preventDefault();
					document.getElementById('logout-form').submit();">
					{{ __('Logout') }}
				</a>
				<form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
					@csrf
				</form>
			@else
				<a href="{{ route('login') }}" class="text-base font-medium leading-6 text-gray-600 whitespace-no-wrap transition duration-150 ease-in-out hover:text-gray-900">
					Sign in
				</a>
				<a href="{{ route('register') }}" class="inline-flex items-center justify-center px-4 py-2 text-base font-medium leading-6 text-white whitespace-no-wrap border border-transparent rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-offset-2 bg-yellow-400 hover:bg-green-600 focus:ring-green-600">
					Sign up
				</a>
			@endauth
		</div> -->

		<!-- component -->
		<!-- 
			=======================================================================
			Name    :   Pure CSS Dropdown Menu
			Author  :   Surjith S M
			Twitter :   @surjithctly

			Get more components here 👉 https://web3templates.com/components

			Copyright © 2021
			=======================================================================
		-->

		<div class="inline-flex items-center ml-5 space-x-6 lg:justify-end">
			@auth
  			<div class=" relative inline-block text-left dropdown">
    			<span class="rounded-md shadow-sm">
					<button class="inline-flex justify-center w-full px-4 py-2 text-sm font-medium leading-5 text-gray-700 transition duration-150 ease-in-out bg-white border border-gray-300 rounded-md hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-50 active:text-gray-800" type="button" aria-haspopup="true" aria-expanded="true" aria-controls="headlessui-menu-items-117">
						<img class="inline-block h-6 w-6 mr-2 rounded-full ring-2 ring-white" alt="{{ $user->name }}" src="{{ $image }}"/>
							{{ $user->name }}
        				<svg class="w-5 h-5 ml-2 -mr-1" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        			</button>
				</span>
				
    			<div class="opacity-0 invisible dropdown-menu transition-all duration-300 transform origin-top-right -translate-y-2 scale-95">
      				<div class="absolute right-0 w-56 mt-2 origin-top-right bg-white border border-gray-200 divide-y divide-gray-100 rounded-md shadow-lg outline-none" aria-labelledby="headlessui-menu-button-1" id="headlessui-menu-items-117" role="menu">
						<div class="px-4 py-3">
							<p class="text-sm leading-5">Signed in as</p>
							<p class="text-sm font-medium leading-5 text-gray-900 truncate">{{ $user->email }}</p>
						</div>
						<div class="py-1">
							<a href="{{ route('profile') }}" tabindex="0" class="text-gray-700 flex justify-between w-full px-4 py-2 text-sm leading-5 text-left"  role="menuitem" >Account settings</a>
							<a href="javascript:void(0)" tabindex="1" class="text-gray-700 flex justify-between w-full px-4 py-2 text-sm leading-5 text-left"  role="menuitem" >Support</a>
							<span role="menuitem" tabindex="-1" class="flex justify-between w-full px-4 py-2 text-sm leading-5 text-left text-gray-700 cursor-not-allowed opacity-50" aria-disabled="true">New feature (soon)</span>
							<a href="javascript:void(0)" tabindex="2" class="text-gray-700 flex justify-between w-full px-4 py-2 text-sm leading-5 text-left" role="menuitem" >License</a>
							@hasanyrole('root|administrator')<a href="/admin" tabindex="2" class="text-gray-700 flex justify-between w-full px-4 py-2 text-sm leading-5 text-left" role="menuitem" >Log in as Administrator</a>@endhasanyrole
						</div>
						<div class="py-1">
							<a href="{{ route('logout') }}" tabindex="3" class="text-gray-700 flex justify-between w-full px-4 py-2 text-sm leading-5 text-left"  role="menuitem" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Sign out</a>
						</div>
						<form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
							@csrf
						</form>
					</div>
				</div>
			</div>
			@else
			<a href="{{ route('login') }}" class="text-base font-medium leading-6 text-gray-600 whitespace-no-wrap transition duration-150 ease-in-out hover:text-gray-900">
				Sign in
			</a>
			<a href="{{ route('register') }}" class="inline-flex items-center justify-center px-4 py-2 text-base font-medium leading-6 text-white whitespace-no-wrap border border-transparent rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-offset-2 bg-yellow-400 hover:bg-green-600 focus:ring-green-600">
				Sign up
			</a>
			@endauth
		</div>
	</div>

	
		
</section>


