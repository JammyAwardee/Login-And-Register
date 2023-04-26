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
            <h1 class="mb-4 text-4xl font-bold tracking-tight md:text-6xl xl:text-6xl">Welcome to my<br /><span class="text-7xl text-blue-600">Login Sample </span></h1>
            <h2 class="mb-4 text-xl">Jamesh Rembrandt R. Serrano</h2>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  
  </x-app>