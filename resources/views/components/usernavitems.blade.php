<ul class="block sm:flex space-x-6 mx-5 text-lg">
    @auth
    <li class="hidden sm:block">
        <span class="font-bold">Welcome {{ Auth::user()->name }}</span>
    </li>
    <li>
        <a href="/users/profile" class="hover:text-laravel"
            >Profile</a
        >
    </li>
    <li>
        <form class="inline" action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit">
                </i>Logout
            </button>
        </form>
    </li>
    @else
    <li class="hidden sm:block">
        <span class="font-bold">Welcome Guest</span>
    </li>
    <li>
        <a  class="hover:text-laravel" href="{{ route('register') }}">{{ __('Register') }}</a
        >
    </li>
    <li>
        <a class="hover:text-laravel" href="{{ route('login') }}">{{ __('Login') }}</a>
    </li>
    @endauth
</ul>