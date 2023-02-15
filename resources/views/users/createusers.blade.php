<x-app>
<@php
    $randompassword = substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil(10/strlen($x)) )),1,10);
@endphp
    @include('partials._officialnav')
    <main class="sm:container sm:mx-auto sm:max-w-lg pt-28">
        <div class="flex">
            <div class="w-full">
                @if (session('status'))
                <div class="text-sm border border-t-8 rounded text-green-700 border-green-600 bg-green-100 px-3 py-4 mb-4" role="alert">
                    {{ session('status') }}
                </div>
                @elseif (session('error'))
                <div class="text-sm border border-t-8 rounded text-red-700 border-red-600 bg-red-100 px-3 py-4 mb-4" role="alert">
                    {{ session('error') }}
                </div>
                @endif
                <section class="flex flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-lg">
    
                    <header class="font-semibold bg-gray-200 text-gray-700 py-5 px-6 sm:py-6 sm:px-8 sm:rounded-t-md">
                        {{ __('Create User') }}
                    </header>
    
                    <form class="w-full px-6 space-y-6 sm:px-10 sm:space-y-8" method="POST"
                        action="/users">
                        @csrf
                        <div class="flex flex-wrap">
                            <label for="name" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                                {{ __('Name') }}:
                            </label>
    
                            <input id="name" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5"
                                name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
    
                            @error('name')
                            <p class="text-red-500 text-xs italic mt-4">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>
    
                        <div class="flex flex-wrap">
                            <label for="email" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                                {{ __('E-Mail Address') }}:
                            </label>
    
                            <input id="email" type="email"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5" name="email"
                                value="{{ old('email') }}" required autocomplete="email">
    
                            @error('email')
                            <p class="text-red-500 text-xs italic mt-4">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>
    
                        <div class="flex flex-wrap">
                            <label for="password" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                                {{ __('Password') }}: <em class="text-red-700 font-normal">Please copy the random password</em>
                            </label>
    
                            <input id="password" type="password"
                                class="hidden form-input w-full @error('password') border-red-500 @enderror" name="password"
                                required autocomplete="new-password" value={{$randompassword}}>

                            <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5" disabled value="{{$randompassword}}">
    
                            @error('password')
                            <p class="text-red-500 text-xs italic mt-4">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>
                        {{-- <div class="">
                            <label for="password-confirm" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                                {{ __('Confirm Password') }}:
                            </label>
    
                            <input id="password-confirm" type="password" class="form-input w-full"
                                name="password_confirmation" required autocomplete="new-password" value="{{$randompassword}}">
                        </div> --}}
                        <div>
                            <label for="type" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">User Type</label>
                            <select id="type" name="type" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5">
                                <option value="" {{old('type') == "" ? 'selected' : ''}}></option>
                                <option value=0 {{old('type') == "0" ? 'selected' : ''}}>User</option>
                                <option value=1 {{old('type') == "1" ? 'selected' : ''}}>Official</option>
                                {{-- <option value=2 {{old('2') == "Admin" ? 'selected' : ''}}>Admin</option> --}}
                            </select>
                              @error('type')
                                  <p class="text-red-500 text-xs mt-2">
                                      {{$message}}
                                  </p>
                              @enderror
                          </div>
    
                        <div class="flex flex-wrap">
                            <button type="submit"
                                class="w-auto select-none font-bold whitespace-no-wrap p-3 rounded-lg text-base leading-normal no-underline text-gray-100 bg-blue-500 hover:bg-blue-700 sm:py-4">
                                {{ __('Create User') }}
                            </button>
                            <a href="">

                            </a>
    
                            
                        </div>
                    </form>
    
                </section>
            </div>
        </div>
    </main>
    </x-app>
    