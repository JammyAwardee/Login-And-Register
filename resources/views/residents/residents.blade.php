<x-app>
@include('partials._officialnav')
<main class="sm:container sm:mx-auto sm:mt-10 pt-20">
    <div class="w-full sm:px-6">

        @if (session('status'))
                <div class="text-sm border border-t-8 rounded text-green-700 border-green-600 bg-green-100 px-3 py-4 mb-4" role="alert">
                    {{ session('status') }}
                </div>
                @elseif (session('error'))
                <div class="text-sm border border-t-8 rounded text-red-700 border-red-600 bg-red-100 px-3 py-4 mb-4" role="alert">
                    {{ session('error') }}
                </div>
                @endif

        <section class="flex flex-col break-words bg-[url('/images/lightpaperfibers.png')] sm:border-1 sm:rounded-md sm:shadow-lg">

            <header class="font-semibold bg-blue-300 text-gray-700 py-5 px-6 sm:py-6 sm:px-8 sm:rounded-t-md">
                Residents
                
            </header>
            @include('partials._search')
        </section>
        @unless (count($residents) == 0)
        <div class="flex flex-col">
            <div class="overflow-x-auto">
              <div class="py-2 inline-block min-w-full">
                <div class="overflow-x-auto">
                  <table class="min-w-full px-2">
                    <thead class="bg-white border-b">
                      <tr>
                        <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                          @sortablelink('id', 'Id')
                        </th>
                        <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                          @sortablelink('last_name', 'Full Name')
                        </th>
                        
                        <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                          @sortablelink('gender', 'Gender')
                        </th>
                        <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                          @sortablelink('b_date', 'Age')
                        </th>
                        <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                          @sortablelink('civil_status', 'Civil Status')
                        </th>
                        <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                          @sortablelink('contact_email', 'Email')
                        </th>
                        <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                          @sortablelink('contact_phone', 'Phone')
                        </th>
                        <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                          @sortablelink('updated_at', 'Updated At')
                        </th>
                        <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                          Actions
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      
                      @foreach ($residents as $resident)
                      <tr class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100">
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                          {{$resident['id']}}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                          {{$resident['last_name']}}, {{$resident['first_name']}} {{$resident['middle_name']}} {{$resident['suffix']}}
                        </td>
                        
                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                          {{$resident['gender']}}
                        </td>
                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                          {{$resident->age()}}
                        </td>
                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                          {{$resident['civil_status']}}
                        </td>
                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                          {{$resident['contact_email']}}
                        </td>
                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                          {{$resident['contact_phone']}}
                        </td>
                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                          {{$resident['updated_at']}}
                        </td>
                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                          <a href="" class="inline, text-yellow-600 text-lg mr-6"><i class="fa-solid fa-pen"></i></a><a href="" class="inline text-red-700 text-lg"><i class="fa-solid fa-trash-can"></i></a>
                        </td>
                      </tr>
                      @endforeach
                      
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <div class="w-full py-3 rounded-b-md mb-5 sm:px-6 bg-[url('/images/lightpaperfibers.png')]">
            {{$residents->links()}}
          </div>
    </div>
</main>
@else <p class="text-center text-gray-800 py-10 text-xl">No residents found</p>
@endunless

@include('partials._addresidentbutton')

</x-app>