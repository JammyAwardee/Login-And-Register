<x-app>
@include('partials._officialnav')
<main class="sm:container mx-5 sm:mx-auto sm:mt-10 pt-20 mb-16">
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

        <section class="flex flex-col break-words bg-[url('/images/lightpaperfibers.png')] border-1 rounded-md shadow-lg">

            <header class="font-semibold bg-sky-600 text-gray-50 py-5 px-6 sm:py-6 sm:px-8 rounded-t-md">
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
                          <a href="/residents/{{$resident->id}}/edit" class="inline, text-yellow-600 text-lg mr-6"><i class="fa-solid fa-pen"></i></a><button class="inline text-red-700 text-lg" role="button" data-bs-toggle="modal" data-bs-target="#exampleModalCenter" data-bs-att="/residents/{{$resident->id}}"><i class="fa-solid fa-trash-can"></i></button>
                        </td>
                      </tr>
                      <div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto" id="exampleModalCenter" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-modal="true" role="dialog">
                        <div class="modal-dialog modal-dialog-centered relative w-auto pointer-events-none">
                          <div class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
                            <div class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
                              <h5 class="text-xl font-medium leading-normal text-gray-800" id="exampleModalScrollableLabel">
                                {{ __('Delete') }} {{$resident->last_name}}, {{$resident->first_name}} {{$resident->middle_name}} {{$resident->suffix}}
                              </h5>    
                              <button type="button"
                                class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
                                data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body relative p-4">
                              <p>Are you sure you want to delete this Resident?</p>
                            </div>
                            <div
                              class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end p-4 border-t border-gray-200 rounded-b-md">
                              <button type="button"
                              class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-purple-700 hover:shadow-lg focus:bg-purple-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-purple-800 active:shadow-lg transition duration-150 ease-in-out"
                                data-bs-dismiss="modal">
                                Close
                              </button>
                              <form method="POST" action="/residents/{{$resident->id}}">
                                @csrf
                                @method('DELETE')
                              <button type="submit"
                              class="inline-block px-6 py-2.5 bg-red-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-red-900 hover:shadow-lg focus:bg-red-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-800 active:shadow-lg transition duration-150 ease-in-out ml-1">
                                Delete Resident
                              </button>
                            </form>
                            </div>
                          </div>
                        </div>
                      </div>
                      @endforeach
                      
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <div class="px-3 w-full py-3 rounded-b-md mb-5 sm:px-6 bg-[url('/images/lightpaperfibers.png')]">
            {{$residents->links()}}
          </div>
    </div>
</main>
@else <p class="text-center text-gray-800 py-10 text-xl">No residents found</p>
@endunless

@include('partials._addresidentbutton')

</x-app>