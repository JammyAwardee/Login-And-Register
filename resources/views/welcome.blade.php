<x-app>
@include('partials._welcomenav')
<!-- Jumbotron -->
<div
  class="mt-16 px-10 py-20 text-center overflow-hidden bg-no-repeat bg-cover rounded-lg"
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
    <div class="flex justify-center items-center h-full w-auto sm:px-3 lg:px-5"
    >
      <div class="block text-center">
        <img class="md:hidden h-40 mx-auto" src="{{asset('/images/flag.png')}}" alt="">
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
{{-- <div class="bg-blue-600 h-3"></div>
<div class="bg-red-600 h-3"></div> --}}
<div class="md:py-24 py-5">
  <div class="container px-8 mx-auto">
    <x-header>A Message From Our Chairman</x-header>
    <!-- Section: Design Block -->
    <section class="text-gray-800 max-w-6xl md:mx-auto mx-1">
      <div class="block rounded-lg shadow-lg bg-white">
        <div class="flex flex-wrap items-center">
          <div class="hidden lg:flex grow-0 shrink-0 basis-auto lg:w-6/12 xl:w-4/12">
            <img src={{asset('/images/chairman.jpg')}} alt="Trendy Pants and Shoes"
              class="w-full rounded-t-lg lg:rounded-tr-none lg:rounded-bl-lg" />
          </div>
          <div class="grow-0 shrink-0 basis-auto w-full lg:w-6/12 xl:w-8/12">
            <div class="px-5 py-12 md:px-12">
              <h2 class="text-2xl font-bold font-cinzel text-center mb-8">To Our Visitors</h2>
              <p class="text-gray-600 mb-6 indent-10 leading-5 text-justify">
                On behalf of the Barangay Council and the residents of our community, I extend a warm welcome to our official website. Our goal in launching this website is to provide a platform where we can share information and updates about the programs and services offered by our barangay, as well as to foster closer ties with the members of our community and visitors.
              </p>
              <p class="text-gray-600 mb-6 indent-10 leading-5 text-justify">
                Through this website, you will be able to access information about our history, achievements, and plans for the future, as well as get in touch with our office for inquiries and requests for assistance. We believe that this website will be a valuable tool for improving communication and collaboration between the barangay and the community.
              </p>
              <p class="text-gray-600 mb-6 indent-10 leading-5 text-justify">
                I invite you to explore our website and discover the many ways that we are working to make our barangay a better place to live, work, and visit. If you have any suggestions or feedback, please don't hesitate to reach out to us.
              </p>
              <p class="text-gray-800 font-cinzel text-center font-bold text-lg">
                Once again, welcome to our website!
              </p>

            </div>
          </div>
        </div>
      </div>
    </section>
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
  <!-- Section: Design Block -->

</div>
<!-- Container for demo purpose -->
  </div>
</div>
<!-- Jumbotron -->
@include('partials._footer')



</x-app>