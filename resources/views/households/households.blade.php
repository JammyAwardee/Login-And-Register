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
            @include('partials._householdssearch')
        </section>
        @unless(count($households) == 0)
        <div class="flex flex-col">
          <div class="overflow-x-auto">
            <div class="py-2 inline-block min-w-full">
              <div class="overflow-x-auto">
                <table class="min-w-full px-2">
                  <thead class="bg-white border-b">
                      <tr>
                        <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                          Id
                        </th>
                        <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                          Household Head
                        </th>
                        <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                          Address
                        </th>
                        <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                          Ownership
                        </th>
                        <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                          Dwelling
                        </th>
                        <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                          Water
                        </th>
                        <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                          Lighting
                        </th>
                        <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                          Toilet
                        </th>
                        <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                          Actions
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($households as $household)
                      <tr class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100">
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                            {{$household->id}}
                        </td>
                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                            {{$household->household_head}}
                        </td>
                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                            {{$household->street_address}}
                        </td>
                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                            {{$household->ownership_status}}
                        </td>
                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                            {{$household->dwelling_type}}
                        </td>
                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                            {{$household->water_source}}
                        </td>
                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                            {{$household->lighting_source}}
                        </td>
                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                            {{$household->toilet_type}}
                        </td>
                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                            <a href="/households/{{$household->id}}/edit" class="inline, text-yellow-600 text-lg mr-6"><i class="fa-solid fa-pen"></i></a><a href="" class="inline text-red-700 text-lg"><i class="fa-solid fa-trash-can"></i></a>
                        </td>
                      </tr>
                    @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          @else <p class="text-center text-gray-800 py-10 text-xl">No residents found</p>
          @endunless
          <div class="w-full py-3 rounded-b-md mb-5 sm:px-6 bg-[url('/images/lightpaperfibers.png')]">
            {{$households->links()}}
          </div>
    </div>
</main>
@include('partials._addhouseholdbutton')
<!-- Main modal -->
{{-- <div id="defaultModal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
  <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
      <!-- Modal content -->
      <div class="relative p-4 bg-white rounded-lg shadow sm:p-5">
          <!-- Modal header -->
          <div class="flex justify-between items-center pb-4 mb-4 rounded-t border-b sm:mb-5">
              <h3 class="text-lg font-semibold text-gray-900">
                  Create Household
              </h3>
              <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" data-modal-toggle="defaultModal">
                  <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                  <span class="sr-only">Close modal</span>
              </button>
          </div>
          <!-- Modal body -->
          <form action="/households/create" method="POST">
              @csrf
              <div class="grid gap-4 mb-4 sm:grid-cols-2">
                  <div>
                      <label for="province" class="block mb-2 text-sm font-medium text-gray-900 ">Province</label>
                      <input type="text" name="province" id="province" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" value="NCR" required="">
                  </div>
                  <div>
                      <label for="city" class="block mb-2 text-sm font-medium text-gray-900">City</label>
                      <input type="text" name="city" id="city" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" value="Kodego" required="">
                  </div>
                  <div>
                      <label for="barangay" class="block mb-2 text-sm font-medium text-gray-900">Barangay</label>
                      <input type="text" name="barangay" id="barangay" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" value="SP404" required="">
                  </div>
                  <div>
                      <label for="streetaddress" class="block mb-2 text-sm font-medium text-gray-900 ">Street Address</label>
                      <input type="text" name="street_addresss" id="streetaddress"class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Enter your street address..." required="">
                  </div>
                  <div>
                    <label for="ownership_status" class="block mb-2 text-sm font-medium text-gray-900 ">Ownership Status</label>
                    <select id="ownership_status" name="ownership_status" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5">
                        <option selected="">Select Ownership Status</option>
                        <option value="Owned">Owned</option>
                        <option value="Leased">Leased</option>
                        <option value="Rented">Rented</option>
                    </select>
                  </div>
                  <div>
                    <label for="dwelling_type" class="block mb-2 text-sm font-medium text-gray-900 ">Dwelling Type</label>
                    <select id="dwelling_type" name="dwelling_type" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5">
                        <option selected="">Select Dwelling Type</option>
                        <option value="Concrete">Concrete</option>
                        <option value="Light Materials">Light Materials</option>
                        <option value="Wooden">Wooden</option>
                    </select>
                </div>
                <div>
                  <label for="water_source" class="block mb-2 text-sm font-medium text-gray-900 ">Water Source</label>
                  <select id="water_source" name="water_source" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5">
                      <option selected="">Select Water Source</option>
                      <option value="Deep Well">Deep Well</option>
                      <option value="Faucet">Faucet</option>
                      <option value="Open Well">Open Well</option>
                  </select>
                </div>
                <div>
                  <label for="lighting_source" class="block mb-2 text-sm font-medium text-gray-900 ">Lighting Source</label>
                  <select id="lighting_source" name="lighting_source" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5">
                      <option selected="">Select Lighting Source</option>
                      <option value="Electric">Electric</option>
                      <option value="Solar Powered">Solar Powered</option>
                      <option value="Fuel Lamp">Fuel Lamp</option>
                  </select>
                </div>
                <div>
                  <label for="toilet_type" class="block mb-2 text-sm font-medium text-gray-900 ">Toilet Type</label>
                  <select id="toilet_type" name="toilet_type" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5">
                      <option selected="">Select Toilet Type</option>
                      <option value="Water Sealed">Water Sealed</option>
                      <option value="Open Pit">Open Pit</option>
                      <option value="Closed Pit">Closed Pit</option>
                  </select>
                </div>
              </div>
              <button type="submit" class="mt-2 text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                  <svg class="mr-1 -ml-1 w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                  Create Household
              </button>
          </form>
      </div>
  </div>
</div> --}}
</x-app>