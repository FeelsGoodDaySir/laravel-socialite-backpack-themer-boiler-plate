<x-guest-layout>

	<section class="flex flex-col md:flex-row h-screen items-center">

		<div class="bg-indigo-600 hidden lg:block w-full md:w-1/2 xl:w-2/3 h-screen">
			<img src="https://source.unsplash.com/random" alt="" class="w-full h-full object-cover">
		</div>

		<div class="bg-white w-full md:max-w-md lg:max-w-full md:mx-auto md:mx-0 md:w-1/2 xl:w-1/3 h-screen px-6 lg:px-16 xl:px-12
			flex items-center justify-center">

		<div class="w-full h-100">

			<h1 class="text-xl md:text-2xl font-bold leading-tight mt-6">
				@include('inc.app-logo', ['attributes' => 'class="w-12 h-12"'])
			</h1>

			<h1 class="text-xl md:text-2xl font-bold leading-tight mt-6">Register your account</h1>

			<form class="mt-6" action="{{ route('register') }}" method="POST">
				@csrf
				<!-- Name -->
				<div class="mt-2">
					<label class="block text-gray-700">{{ __('Name') }}</label>
					<input type="text" name="name" id="name" placeholder="{{ __('Enter Full Name') }}" class="@error('name')  border-red-500 @enderror w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none" autofocus autocomplete="name" required value="{{ old('name') }}">
						@error('name')
						<p class="mt-1 text-xs italic text-red-500">
							{{ $message }}
						</p>
					@enderror
				</div>

				<div class="mt-2">
					<label class="block text-gray-700">{{ __('Email') }}</label>
					<input type="email" name="email" id="email" placeholder="{{ __('Enter Email Address') }}" class="@error('email') border-red-500 @enderror w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none" autocomplete="email" required value="{{ old('email') }}">
					@error('email')
                        <p class="mt-1 text-xs italic text-red-500">
                            {{ $message }}
                        </p>
                    @enderror
				</div>

				<div class="mt-2">
					<label class="block text-gray-700">{{ __('Password') }}</label>
					<input type="password" name="password" id="password" placeholder="{{ __('Enter Password') }}" minlength="6" class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500
					focus:bg-white focus:outline-none @error('password') border-red-500 @enderror" required autocomplete="new-password">
					@error('password')
                        <p class="mt-1 text-xs italic text-red-500">
                            {{ $message }}
                        </p>
                    @enderror
				</div>

				<!-- Confirm Password -->
                <div class="mt-2">
                    <label class="block text-gray-700">{{ __('Confirm Password') }}</label>
                    <input type="password" name="password_confirmation" id="password-confirm" placeholder="{{ __('Re-enter Password') }}" class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500
					focus:bg-white focus:outline-none @error('password_confirmation') border-red-500 @enderror" required autocomplete="new-password">
                </div>

				<button type="submit" class="w-full block bg-indigo-500 hover:bg-indigo-400 focus:bg-indigo-400 text-white font-semibold rounded-lg
					px-4 py-3 mt-6">{{ __('Register') }}</button>
			</form>

			<hr class="my-6 border-gray-300 w-full">

			<div class="grid grid-cols-2 gap-1">
				@include('inc.button-auth-social', [
					'url' => '/login/google',
					'provider' => 'Google',
					'icon' => '<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="w-6 h-6" viewBox="0 0 48 48"><defs><path id="a" d="M44.5 20H24v8.5h11.8C34.7 33.9 30.1 37 24 37c-7.2 0-13-5.8-13-13s5.8-13 13-13c3.1 0 5.9 1.1 8.1 2.9l6.4-6.4C34.6 4.1 29.6 2 24 2 11.8 2 2 11.8 2 24s9.8 22 22 22c11 0 21-8 21-22 0-1.3-.2-2.7-.5-4z"/></defs><clipPath id="b"><use xlink:href="#a" overflow="visible"/></clipPath><path clip-path="url(#b)" fill="#FBBC05" d="M0 37V11l17 13z"/><path clip-path="url(#b)" fill="#EA4335" d="M0 11l17 13 7-6.1L48 14V0H0z"/><path clip-path="url(#b)" fill="#34A853" d="M0 37l30-23 7.9 1L48 0v48H0z"/><path clip-path="url(#b)" fill="#4285F4" d="M48 48L17 24l-4-3 35-10z"/></svg>'
				])
				
				@include('inc.button-auth-social', [
					'url' => '/login/facebook',
					'provider' => 'Facebook',
					'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 48 48"><defs><style>.a{fill:#1877f2;}</style></defs><title>facebook</title><path class="a" d="M46.1057,24.1343a22.1057,22.1057,0,1,0-25.56,21.8371V30.5242H14.9332v-6.39H20.546v-4.87c0-5.54,3.3-8.6,8.35-8.6a33.9914,33.9914,0,0,1,4.9484.4318v5.44H31.0565c-2.7461,0-3.6025,1.704-3.6025,3.4522v4.1467h6.1309l-.98,6.39H27.454V45.9714A22.111,22.111,0,0,0,46.1057,24.1343"/></svg>'
				])

				@include('inc.button-auth-social', [
					'url' => '/login/twitter',
					'provider' => 'Twitter',
					'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 48 48"><defs><style>.a{fill:#55acee;}.b{fill:#f1f2f2;}</style></defs><title>twitter</title><circle class="a" cx="24" cy="24" r="22"/><path class="b" d="M37.4758,17.8108a10.4918,10.4918,0,0,1-3.02.827,5.2725,5.2725,0,0,0,2.3126-2.9087,10.5236,10.5236,0,0,1-3.3393,1.2757,5.263,5.263,0,0,0-8.9611,4.7971,14.9272,14.9272,0,0,1-10.8392-5.4951,5.2643,5.2643,0,0,0,1.6271,7.021,5.2213,5.2213,0,0,1-2.3817-.6584l0,.0666a5.2617,5.2617,0,0,0,4.2186,5.1559,5.28,5.28,0,0,1-2.3746.091A5.2643,5.2643,0,0,0,19.63,31.6348a10.616,10.616,0,0,1-7.7853,2.1773,14.9547,14.9547,0,0,0,23.0224-12.6c0-.2278-.0051-.4549-.0153-.68a10.6666,10.6666,0,0,0,2.6244-2.7216Z"/></svg>'
				])

				@include('inc.button-auth-social', [
					'url' => '/login/linkedin',
					'provider' => 'LinkedIn',
					'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 48 48"><defs><style>.a{fill:#007ab9;}.b{fill:#f1f2f2;}</style></defs><title>linkedin</title><circle class="a" cx="24" cy="24" r="22"/><path class="b" d="M37.1448,25.77v9.07H31.8862V26.3781c0-2.1248-.7593-3.5758-2.6633-3.5758a2.8763,2.8763,0,0,0-2.6973,1.9228,3.598,3.598,0,0,0-.1741,1.2816V34.84H21.0924s.0706-14.3323,0-15.8159h5.2594v2.2413c-.0105.0176-.0254.0349-.0349.0518h.0349v-.0518a5.2215,5.2215,0,0,1,4.7394-2.6126c3.46,0,6.0536,2.26,6.0536,7.1175ZM15.5911,11.4a2.74,2.74,0,1,0-.069,5.4657h.0341A2.7414,2.7414,0,1,0,15.5911,11.4ZM12.9278,34.84h5.2571V19.0241H12.9278Z"/></svg>'
				])

				@include('inc.button-auth-social', [
					'url' => '/login/github',
					'provider' => 'Github',
					'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 48 48"><title>github</title><path d="M16.7169,37.0932c0,.1774-.204.3194-.4613.3194-.2927.0266-.4967-.1153-.4967-.3194,0-.1774.204-.3193.4613-.3193C16.4863,36.7473,16.7169,36.8892,16.7169,37.0932Zm-2.7588-.3992c-.0621.1774.1153.3815.3814.4347a.4161.4161,0,0,0,.55-.1774c.0532-.1774-.1153-.3815-.3814-.4613a.4553.4553,0,0,0-.55.204Zm3.9209-.1508c-.2572.0621-.4346.2307-.408.4347.0266.1774.2572.2927.5234.2306.2572-.0621.4346-.2306.408-.408C18.3758,36.6319,18.1363,36.5166,17.879,36.5432ZM23.7161,2.55A21.2717,21.2717,0,0,0,2,24.1948,22.24,22.24,0,0,0,17.0363,45.4142c1.1355.204,1.5347-.4968,1.5347-1.0734,0-.55-.0266-3.5839-.0266-5.4468,0,0-6.21,1.3307-7.5138-2.6435,0,0-1.0112-2.5815-2.4661-3.2468,0,0-2.0314-1.3927.142-1.3661a4.6824,4.6824,0,0,1,3.4241,2.2887c1.9428,3.4242,5.1984,2.44,6.467,1.854a4.93,4.93,0,0,1,1.4193-2.9895c-4.9588-.55-9.9621-1.2685-9.9621-9.8024a6.7231,6.7231,0,0,1,2.0936-5.225A8.3812,8.3812,0,0,1,12.379,11.74c1.8541-.5766,6.121,2.3952,6.121,2.3952a20.9549,20.9549,0,0,1,11.1419,0s4.267-2.9807,6.121-2.3952a8.3773,8.3773,0,0,1,.2306,6.0234c1.4194,1.57,2.2888,2.7943,2.2888,5.225,0,8.5605-5.225,9.2435-10.1839,9.8024a5.2461,5.2461,0,0,1,1.5081,4.1161c0,2.9895-.0267,6.6887-.0267,7.4162,0,.5766.4081,1.2774,1.5347,1.0733A22.0354,22.0354,0,0,0,46,24.1948C46,11.8908,36.02,2.55,23.7161,2.55ZM10.6226,33.1456c-.1153.0887-.0887.2928.0621.4613.1419.142.3459.2041.4613.0887.1153-.0887.0887-.2927-.0621-.4613C10.9419,33.0924,10.7379,33.03,10.6226,33.1456Zm-.9581-.7185c-.0621.1153.0266.2572.204.346a.264.264,0,0,0,.3815-.0621c.0621-.1154-.0266-.2573-.204-.346C9.8685,32.3118,9.7266,32.3384,9.6645,32.4271Zm2.8742,3.1581c-.1419.1153-.0887.3814.1153.55.2041.204.4613.2306.5766.0887.1154-.1154.0621-.3815-.1153-.55C12.92,35.47,12.654,35.4432,12.5387,35.5852Zm-1.0113-1.3041c-.1419.0887-.1419.3194,0,.5234s.3815.2927.4968.204a.4047.4047,0,0,0,0-.55c-.1242-.204-.3548-.2927-.4968-.1774Z"/></svg>'
				])
			</div>

			<p class="mt-4">{{ __('Already registered?') }} <a href="{{ route('login') }}" class="text-blue-500 hover:text-blue-700 font-semibold">{{ __('Login with existing account') }}</a></p>


			</div>
		</div>
	</section>
</x-guest-layout>