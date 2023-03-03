@auth
<a @if ((Auth::user()->type) === "admin") href="/admin/home" @elseif ((Auth::user()->type) === "official") href="/official/home" @else href="/home" @endif>
<span class="font-medium hidden sm:block text-white bg-gray-700 hover:bg-gray-400 hover:text-amber-50 focus:ring-4 focus:ring-gray-900 rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 mr-2 focus:outline-none">Dashboard</span>
</a>

@else

<a href="{{ route('login') }}" class="text-gray-700 hover:text-blue-600 focus:ring-4 focus:ring-blue-600 font-medium rounded-lg text-xl px-4 lg:px-5 py-2 lg:py-2.5 mr-2 focus:outline-none">{{ __('Login') }}</a>
@endauth
{{-- </ul> --}}