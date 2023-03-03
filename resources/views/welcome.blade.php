<x-app>
  @include('partials._welcomenav')
  
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;1,100;1,200&display=swap" rel="stylesheet" />
  
  <style>
    section {
        font-family: "Poppins", sans-serif;
    }
  </style>
  
  
  <!-- Jumbotron -->
  <div>
    <section>
      <div class="relative bg-gradient-to-r from-zinc-50 to-sky-700" style="background-position: 50%; height: 450px;"></div>
  
      <div class="container mx-auto px-6 md:px-12 xl:px-32">
        <div class="text-center text-gray-800">
          <div class="block rounded-lg px-6 py-12 shadow-lg md:py-16 md:px-12" style="margin-top: -200px; background: hsla(0, 0%, 100%, 0.7); backdrop-filter: blur(10px);">
            <h1 class="mb-4 text-4xl font-bold tracking-tight md:text-6xl xl:text-6xl">Welcome to <br /><span class="text-7xl text-blue-600">Barangay SP404</span></h1>
            <h2 class="mb-4 text-xl">“Connecting, Empowering, and Innovating Together”</h2>
            <a class="mb-2 mr-0 inline-block rounded bg-blue-600 px-7 py-3 text-sm font-medium uppercase leading-snug text-white shadow-md transition duration-150 ease-in-out hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg md:mb-0 md:mr-2" data-mdb-ripple="true" data-mdb-ripple-color="light" href="#!" role="button">Learn More</a>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  {{-- <div class="bg-blue-600 h-3"></div>
  <div class="bg-red-600 h-3"></div> --}}
    <div class="container px-8 mx-auto">
      <div class="container my-24 mx-auto px-9">
        <section class="mb-32 text-center text-gray-800">
          <div class="px-6 py-12 md:px-12">
            <div class="container mx-auto xl:px-32">
              <div class="flex grid items-center lg:grid-cols-2">
                <div class="mb-12 ml-9 pl-9 md:mt-12 lg:mt-0 lg:mb-0">
                  <div class="block rounded-lg px-6 py-12 shadow-lg md:px-14 lg:-mr-14" style="background: hsla(0, 0%, 100%, 0.55); backdrop-filter: blur(20px)">
                    <h1 class="mb-1 text-3xl font-bold">A message from our Chairman</h2> <hr>
                    <h3 class="mb-3 mt-2 text-center text-xl font-bold">To Our Visitors</h3>
                    <p class="mb-1 text-justify indent-10 leading-5 text-gray-900">On behalf of the Barangay Council and the residents of our community, I extend a warm welcome to our official website. Our goal in launching this website is to provide a platform where we can share information and updates about the programs and services offered by our barangay, as well as to foster closer ties with the members of our community and visitors.</p>
                    <p class="mb-3 text-justify indent-10 leading-5 text-gray-900">Through this website, you will be able to access information about our history, achievements, and plans for the future, as well as get in touch with our office for inquiries and requests for assistance. We believe that this website will be a valuable tool for improving communication and collaboration between the barangay and the community.</p>
                    <p class="mb-5 text-justify indent-10 leading-5 text-gray-900">I invite you to explore our website and discover the many ways that we are working to make our barangay a better place to live, work, and visit. If you have any suggestions or feedback, please don't hesitate to reach out to us.</p>
                    <p class="text-center text-lg font-bold text-gray-800">Once again, welcome to our website!</p>
                  </div>
                </div>
                <div class="md:mb-12 lg:mb-0">
                  <img src="images/chairman.jpg" class="w-full rounded-lg shadow-lg" alt="" />
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
      <!-- Section: Design Block -->
      <!-- Container for demo purpose -->
  <div class="container my-24 md:px-6 mx-auto">
  
    <!-- Section: Design Block -->
    <section class="mb-32 text-gray-800 text-center">
      <x-header>Latest articles</x-header>
      <div class="grid lg:grid-cols-3 gap-6 xl:gap-x-12">
        @foreach($newsandupdates as $newsandupdate)
        <div class="mb-6 lg:mb-0">
          <div>
            <div
              class="relative overflow-hidden bg-no-repeat bg-cover ripple shadow-lg rounded-lg mb-6"
              data-mdb-ripple="true" data-mdb-ripple-color="light">
              <img src="{{$newsandupdate->image ? asset('/storage/' . $newsandupdate->image) : asset('images/default.png')}}"
                class="w-full" alt="Article Image" />
              <a href="#!">
                <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed opacity-0 hover:opacity-100 transition duration-300 ease-in-out"
                  style="background-color: rgba(251, 251, 251, 0.2)"></div>
              </a>
            </div>
  
            <h5 class="text-lg font-bold mb-3">{{$newsandupdate->title}}</h5>
            <div class="mb-3  text-gray-900 font-medium text-xs flex items-center justify-center uppercase">
              <h5 class="border border-blue-500 text-gray-700 px-3 py-1 rounded-2xl">{{$newsandupdate->category}}</h5>  
            </div>
            <p class="text-gray-500 mb-6">
              <small>Posted <u>{{$newsandupdate->created_at}}</u> by
                <a href="" class="text-gray-900">{{$newsandupdate->user_name}}</a></small>
            </p>
            <p class="text-gray-500">
              {{$newsandupdate->sub_title}}
            </p>
          </div>
        </div>
        @endforeach
     </section>
   </div>
  </div>
  @include('partials._footer')
  
  
  
  </x-app>