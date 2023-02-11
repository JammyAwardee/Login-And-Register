@auth
<a @if ((Auth::user()->type) === "admin") href="/admin/home" @elseif ((Auth::user()->type) === "official") href="/official/home" @else href="/home" @endif>
<span class="font-bold hidden sm:block text-white bg-primary-700 hover:text-amber-50 focus:ring-4 focus:ring-primary-300 rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 mr-2 focus:outline-none">Dashboard</span>
</a>

@else

<a href="{{ route('login') }}" class="text-gray-200 hover:text-amber-50 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 mr-2 focus:outline-none">{{ __('Login') }}</a>
@endauth
{{-- </ul> --}}