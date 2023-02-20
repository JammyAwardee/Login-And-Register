<x-app>
  @include('partials._welcomenav')
  <!-- Jumbotron -->
  <body class="bg-gray-200 font-sans leading-normal tracking-normal">
  
    <!--Header-->
    <!-- Jumbotron -->
    <div
    class="mt-16 px-5 py-24 text-center overflow-hidden bg-no-repeat bg-cover rounded-lg"
    style="
      background-image: url(/images/hero.jpg);
      background-attachment: fixed;
      height: 600px;
      background-size: cover;
      background-position: center
    "
  >
    <div
      class="container mx-auto w-full h-full overflow-hidden  flex justify-evenly align-middle"
      style="background: rgba( 255, 255, 255, 0.25 );
      box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
      backdrop-filter: blur( 4.5px );
      -webkit-backdrop-filter: blur( 4.5px );
      border-radius: 30px;
      border: 1px solid rgba( 255, 255, 255, 0.18 );">
      <div class="md:align-middle py-5 hidden md:flex h-full">
        <img src="{{asset('/images/flag.png')}}" alt="SP404 Logo" >
      </div>
      <div class="flex justify-center items-center h-full w-auto lg:px-5"
      >
        <div class="block text-center">
          <h2 class="font-semibold lg:text-6xl text-5xl mb-4 font-cinzel text-slate-700">Barangay SP404</h2>
          <h4 class="font-semibold lg:text-3xl md:text-2xl text-xl mb-6 text-slate-600 align-top px-5 md:px-0"><i class="fa-solid fa-quote-left"></i> Connecting, Empowering, and Innovating Together <i class="fa-solid fa-quote-right"></i></h4>
          <a
            class="inline-block px-6 py-2 mb-1 border-2 border-blue-900 text-blue-800 font-medium text-sm leading-snug uppercase hover:bg-yellow-500 hover:text-white hover:bg-opacity-6 focus:outline-none focus:ring-0 transition duration-150 ease-in-out rounded-md"
            href="#!"
            role="button"
            data-mdb-ripple="true"
            data-mdb-ripple-color="light"
            >Learn more</a
          >
        </div>
      </div>
    </div>
  </div>
      
      <!--Container-->
      <div class="container px-4 md:px-0 max-w-6xl mx-auto -mt-32">
          
          <div class="pt-20 w-full text-xl md:text-2xl text-gray-800 leading-normal rounded-t">
            
          <!--Lead Card-->
          <div class="mt-10 flex h-full bg-white rounded overflow-hidden shadow-lg">
            <div class="flex flex-wrap no-underline">
        
              <div class="w-full md:w-1/3 flex flex-col flex-grow flex-shrink">
                <header class="w-full container mx-auto">
                  <div class="flex flex-col items-center py-10">
                      <div class="mx-auto font-bold text-gray-800 uppercase text-5xl">
                          Our Barangay's Services
                      </div>
                      <p class="flex text-center pt-5 p-5 text-gray-600 mb-3 md:pb-0">
                        We take pride in providing our residents with quality services that make their lives easier. Below is a list of the services that our barangay offers:
                      </p>
                  </div>
              </header>
              </div>
            </div>
          </div>
          <!--/Lead Card-->
  
  
          <!--Posts Container-->
          <div class="flex flex-wrap justify-between pt-12 -mx-6">
  
            <!--1/3 col -->
            <div class="rounded overflow-hidden shadow-lg container mx-auto text-center break-normal" style="background-color: #004aad">
              <!--Title-->
                <p class="px-5 py-5 text-gray-800 font-bold text-3xl md:text-5xl">
                  Emergency Contact Informations
                </p>
            </div>
  
            <section class="ml-20 mb-20 text-gray-700">
              <div class="text-center md:max-w-xl lg:max-w-3xl mx-auto">
                <p class="mb-6 pt-4 pb-2 md:mb-12 md:pb-0">
                  If you or someone you know is in an emergency situation, there are several hotlines available to help.
                </p>
              </div>
            
              <div class="grid md:grid-cols-3 gap-6 text-center">
                <div>
                  <div class="block rounded-lg shadow-lg bg-white">
                    <div class="p-6">
                      <div class="overflow-hidden h-15" style="background-color: #ffde59;">
                      <h4 class="text-3xl font-semibold mb-1">PNP</h4>
                      <p class="text-lg">Philippine National Police</p>
                      <hr /> 
                     </div>
                      <p class="mt-4">
                        <dl class="max-w-md text-gray-900 divide-y divide-gray-200 dark:text-white dark:divide-gray-700">
                          <div class="flex flex-col pb-3">
                              <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Email address</dt>
                              <dd class="text-lg font-semibold">BrgySP404@PNP.com</dd>
                          </div>
                          <div class="flex flex-col py-3">
                              <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Police Station Address</dt>
                              <dd class="text-lg font-semibold">Brgy. SP404 Rd., Police Station St.</dd>
                          </div>
                          <div class="flex flex-col pt-3 pb-3">
                              <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Phone number | Hotline</dt>
                              <dd class="text-lg font-semibold">+00 123 456 789 / +12 345 678</dd>
                          </div>
                        </dl>
                      </p>
                    </div>
                  </div>
                </div>
                <div>
                  <div class="block rounded-lg shadow-lg bg-white">
                    <div class="p-6">
                      <div class="overflow-hidden h-15" style="background-color: #004aad;">
                      <h4 class="text-3xl text-gray-900 font-semibold mb-1">Barangay</h4>
                      <p class="text-lg text-gray-900">Barangay SP404</p>
                      </div>
                      <hr />
                      <p class="mt-4">
                        <dl class="max-w-md text-gray-900 divide-y divide-gray-200 dark:text-white dark:divide-gray-700">
                          <div class="flex flex-col pb-3">
                              <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Email address</dt>
                              <dd class="text-lg font-semibold">BrgySP404@PNP.com</dd>
                          </div>
                          <div class="flex flex-col py-3">
                              <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Police Station Address</dt>
                              <dd class="text-lg font-semibold">Brgy. SP404 Rd., Police Station St.</dd>
                          </div>
                          <div class="flex flex-col pt-3 pb-3">
                              <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Phone number | Hotline</dt>
                              <dd class="text-lg font-semibold">+00 123 456 789 / +12 345 678</dd>
                          </div>
                        </dl>
                      </p>
                    </div>
                  </div>
                </div>
                <div>
                  <div class="block rounded-lg shadow-lg bg-white">
                    <div class="p-6">
                      <div class="overflow-hidden h-15" style="background-color: #ff1616;">
                      <h4 class="text-3xl font-semibold mb-1">BFP</h4>
                      <p class="text-lg">Bureau of Fire Protection</p>
                      </div>
                      <hr />
                      <p class="mt-4">
                        <dl class="max-w-md text-gray-900 divide-y divide-gray-200 dark:text-white dark:divide-gray-700">
                          <div class="flex flex-col pb-3">
                              <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Email address</dt>
                              <dd class="text-lg font-semibold">BrgySP404@BFP.com</dd>
                          </div>
                          <div class="flex flex-col py-3">
                              <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">BFP Station Address</dt>
                              <dd class="text-lg font-semibold">Brgy. SP404 Rd., BFP Station St.</dd>
                          </div>
                          <div class="flex flex-col pt-3 pb-3">
                              <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Phone number | Hotline</dt>
                              <dd class="text-lg font-semibold">+00 123 456 789 / +12 345 678</dd>
                          </div>
                        </dl>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </section>
  
      <div class="rounded overflow-hidden shadow-lg container mx-auto text-center break-normal" style="background-color: #ff1616">
        <!--Title-->
          <p class="px-5 py-5 text-gray-800 font-bold text-3xl md:text-5xl">
            Education
          </p>
      </div>
      <div class="text-center md:max-w-xl lg:max-w-3xl mx-auto">
        <p class="mb-2 pt-4 pb-2 md:mb-6 md:pb-0">
          Here is the list of our schools in the Barangay and their contact information.
        </p>
      </div>
      <section class="mx-auto justify-center mt-2 py-10 bg-gray-100">
        <div class="mx-auto grid max-w-6xl grid-cols-1 gap-6 p-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
          {{-- KINDERGARTEN SCHOOL --}}
          <article class="rounded-xl bg-white p-3 shadow-lg hover:shadow-xl hover:transform hover:scale-105 duration-300 ">
            <div class="relative flex items-end overflow-hidden rounded-xl">
              <img src="{{ asset('/images/1kinder.png') }}" alt="Kindergarten">
              <div class="flex items-center space-x-1.5 rounded-lg bg-blue-500 px-4 py-1.5 text-white duration-100 hover:bg-blue-600">
              </div>
            </div>
            <div class="mt-1 p-2">
              <h2 class="text-slate-700">Kindergarten School</h2>
              <p class="mt-1 text-sm text-slate-400">Information about our Kindergarten School.</p>
    {{-- KINDERGARTEN MODAL BUTTON --}}
              <div class="mt-3 flex items-end justify-center">
                <div class="flex items-center space-x-1.5 rounded-lg bg-blue-500 px-4 py-1.5 text-white duration-100 hover:bg-blue-600">
                  <button data-modal-target="kinder" data-modal-toggle="kinder" class="text-sm">More</button>
                </div>
              </div>
            </div>
        </article>
                {{-- KINDERGARTEN MODAL --}}
                <div id="kinder" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
                  <div class="relative w-full h-full max-w-lg md:h-auto">
                      <!-- Modal content -->
                      <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                          <!-- Modal header -->
                          <div class="flex items-center justify-between p-5 border-b rounded-t dark:border-gray-600">
                              <h3 class="text-xl font-medium text-gray-900 dark:text-white">
                                  Barangay SP404 Kindergarten School
                              </h3>
                              <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="kinder">
                                  <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                  <span class="sr-only">Close modal</span> 
                              </button>
                          </div>
                          <!-- Modal body -->
                          <dl class="ml-10 max-w-md text-gray-900 divide-y divide-gray-200 dark:text-white dark:divide-gray-700">
                            <div class="flex flex-col pb-3">
                                <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Email address</dt>
                                <dd class="text-lg font-semibold">BrgySP404@Kinder.com</dd>
                            </div>
                            <div class="flex flex-col py-3">
                                <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">School Address</dt>
                                <dd class="text-lg font-semibold">Brgy. SP404 Rd., Kindergarten School St.</dd>
                            </div>
                            <div class="flex flex-col pt-3 pb-3">
                                <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Phone number | Hotline</dt>
                                <dd class="text-lg font-semibold">+00 123 456 789 / +12 345 678</dd>
                            </div>
                          </dl>
                      </div>
                   </div>
                 </div>
  
          {{-- ELEM SCHOOL --}}
          <article class="rounded-xl bg-white p-3 shadow-lg hover:shadow-xl hover:transform hover:scale-105 duration-300 ">
              <div class="relative flex items-end overflow-hidden rounded-xl">
                <img src="{{ asset('/images/2elem.png') }}" alt="Elementary" />
                <div class="flex items-center space-x-1.5 rounded-lg bg-blue-500 px-4 py-1.5 text-white duration-100 hover:bg-blue-600">
                </div>
              </div>
              <div class="mt-1 p-2">
                <h2 class="text-slate-700">Elementary School</h2>
                <p class="mt-1 text-sm text-slate-400">Information about our Elementary School</p>
      {{-- ELEM SCHOOL MODAL BUTTON --}}
                <div class="mt-3 flex items-end justify-center">
                  <div class="flex items-center space-x-1.5 rounded-lg bg-blue-500 px-4 py-1.5 text-white duration-100 hover:bg-blue-600">
                    <button data-modal-target="elem" data-modal-toggle="elem" class="text-sm">More</button>
                  </div>
                </div>
              </div>
          </article>
                  {{-- ELEM SCHOOL MODAL --}}
                  <div id="elem" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
                    <div class="relative w-full h-full max-w-lg md:h-auto">
                        <!-- Modal content -->
                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                            <!-- Modal header -->
                            <div class="flex items-center justify-between p-5 border-b rounded-t dark:border-gray-600">
                                <h3 class="text-xl font-medium text-gray-900 dark:text-white">
                                    Barangay SP404 Elementary School
                                </h3>
                                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="elem">
                                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                    <span class="sr-only">Close modal</span> 
                                </button>
                            </div>
                            <!-- Modal body -->
                            <dl class="ml-10 max-w-md text-gray-900 divide-y divide-gray-200 dark:text-white dark:divide-gray-700">
                              <div class="flex flex-col pb-3">
                                  <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Email address</dt>
                                  <dd class="text-lg font-semibold">BrgySP404@Elem.com</dd>
                              </div>
                              <div class="flex flex-col py-3">
                                  <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">School Address</dt>
                                  <dd class="text-lg font-semibold">Brgy. SP404 Rd., Elementary School St.</dd>
                              </div>
                              <div class="flex flex-col pt-3 pb-3">
                                  <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Phone number | Hotline</dt>
                                  <dd class="text-lg font-semibold">+00 123 456 789 / +12 345 678</dd>
                              </div>
                            </dl>
                        </div>
                     </div>
                   </div>
                {{------------------------------------------------- END OF ELEM ------------------------------------------------}}
  
                   {{-- JUNIOR HIGH SCHOOL --}}
                   <article class="rounded-xl bg-white p-3 shadow-lg hover:shadow-xl hover:transform hover:scale-105 duration-300 ">
                    <div class="relative flex items-end overflow-hidden rounded-xl">
                      <img src="{{ asset('/images/3junior.png') }}" alt="Junior" />
                      <div class="flex items-center space-x-1.5 rounded-lg bg-blue-500 px-4 py-1.5 text-white duration-100 hover:bg-blue-600">
                      </div>
                    </div>
                    <div class="mt-1 p-2">
                      <h2 class="text-slate-700">Junior High School</h2>
                      <p class="mt-1 text-sm text-slate-400">Contact Informations of our Junior High School</p>
            {{-- JUNIOR HIGH SCHOOL MODAL BUTTON --}}
                      <div class="mt-3 flex items-end justify-center">
                        <div class="flex items-center space-x-1.5 rounded-lg bg-blue-500 px-4 py-1.5 text-white duration-100 hover:bg-blue-600">
                          <button data-modal-target="junior" data-modal-toggle="junior" class="text-sm">More</button>
                        </div>
                      </div>
                    </div>
                </article>
                        {{-- JUNIOR HIGH SCHOOL MODAL --}}
                        <div id="junior" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
                          <div class="relative w-full h-full max-w-lg md:h-auto">
                              <!-- Modal content -->
                              <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                  <!-- Modal header -->
                                  <div class="flex items-center justify-between p-5 border-b rounded-t dark:border-gray-600">
                                      <h3 class="text-xl font-medium text-gray-900 dark:text-white">
                                          Barangay SP404 Junior High School
                                      </h3>
                                      <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="junior">
                                          <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                          <span class="sr-only">Close modal</span> 
                                      </button>
                                  </div>
                                  <!-- Modal body -->
                                  <dl class="ml-10 max-w-md text-gray-900 divide-y divide-gray-200 dark:text-white dark:divide-gray-700">
                                    <div class="flex flex-col pb-3">
                                        <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Email address</dt>
                                        <dd class="text-lg font-semibold">BrgySP404@Junior.com</dd>
                                    </div>
                                    <div class="flex flex-col py-3">
                                        <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">School Address</dt>
                                        <dd class="text-lg font-semibold">Brgy. SP404 Rd., Junior High School St.</dd>
                                    </div>
                                    <div class="flex flex-col pt-3 pb-3">
                                        <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Phone number | Hotline</dt>
                                        <dd class="text-lg font-semibold">+00 123 456 789 / +12 345 678</dd>
                                    </div>
                                  </dl>
                              </div>
                           </div>
                         </div>
                   {{------------------------------------------------- END OF JUNIOR ------------------------------------------------}}
  
                         {{-- SENIOR HIGH SCHOOL --}}
                         <article class="rounded-xl bg-white p-3 shadow-lg hover:shadow-xl hover:transform hover:scale-105 duration-300 ">
                          <div class="relative flex items-end overflow-hidden rounded-xl">
                            <img src="{{ asset('/images/4senior.png') }}" alt="Senior" />
                            <div class="flex items-center space-x-1.5 rounded-lg bg-blue-500 px-4 py-1.5 text-white duration-100 hover:bg-blue-600">
                            </div>
                          </div>
                          <div class="mt-1 p-2">
                            <h2 class="text-slate-700">Senior High School</h2>
                            <p class="mt-1 text-sm text-slate-400">Information about our Elementary School</p>
                  {{-- JUNIOR HIGH SCHOOL MODAL BUTTON --}}
                            <div class="mt-3 flex items-end justify-center">
                              <div class="flex items-center space-x-1.5 rounded-lg bg-blue-500 px-4 py-1.5 text-white duration-100 hover:bg-blue-600">
                                <button data-modal-target="senior" data-modal-toggle="senior" class="text-sm">More</button>
                              </div>
                            </div>
                          </div>
                      </article>
                              {{-- SENIOR HIGH SCHOOL MODAL --}}
                              <div id="senior" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
                                <div class="relative w-full h-full max-w-lg md:h-auto">
                                    <!-- Modal content -->
                                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                        <!-- Modal header -->
                                        <div class="flex items-center justify-between p-5 border-b rounded-t dark:border-gray-600">
                                            <h3 class="text-xl font-medium text-gray-900 dark:text-white">
                                                Barangay SP404 Senior High School
                                            </h3>
                                            <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="senior">
                                                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                                <span class="sr-only">Close modal</span> 
                                            </button>
                                        </div>
                                        <!-- Modal body -->
                                        <dl class="ml-10 max-w-md text-gray-900 divide-y divide-gray-200 dark:text-white dark:divide-gray-700">
                                          <div class="flex flex-col pb-3">
                                              <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Email address</dt>
                                              <dd class="text-lg font-semibold">BrgySP404@Senior.com</dd>
                                          </div>
                                          <div class="flex flex-col py-3">
                                              <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">School Address</dt>
                                              <dd class="text-lg font-semibold">Brgy. SP404 Rd., Senior High School St.</dd>
                                          </div>
                                          <div class="flex flex-col pt-3 pb-3">
                                              <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Phone number | Hotline</dt>
                                              <dd class="text-lg font-semibold">+00 123 456 789 / +12 345 678</dd>
                                          </div>
                                        </dl>
                                    </div>
                                 </div>
                               </div>
                 </div>
              </div>
           </section>
       
      
  
          </div>
        </div>
    <script src="https://unpkg.com/popper.js@1/dist/umd/popper.min.js"></script>
    <script src="https://unpkg.com/tippy.js@4"></script>
    <script>
      //Init tooltips
      tippy('.avatar')
    </script>
  </body>
  </html>
  
  <!-- Jumbotron -->
  @include('partials._footer')
  
  
  
  </x-app>