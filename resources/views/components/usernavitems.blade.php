<ul class="flex space-x-6 mr-6 text-lg">
    @auth
    <li>
        <span class="font-bold uppercase">Welcome {{ Auth::user()->name }}</span>
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
    <li>
        <a  class="hover:text-laravel" href="{{ route('register') }}">{{ __('Register') }}</a
        >
    </li>
    <li>
        <a href="/login" class="hover:text-laravel" href="{{ route('login') }}">{{ __('Login') }}</a>
    </li>
    @endauth
</ul>