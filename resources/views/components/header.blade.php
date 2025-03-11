<header class="bg-white shadow-md">
  <div class="mx-auto max-w-screen-xl px-4 sm:px-6 lg:px-8">
      <div class="flex h-16 items-center justify-between">
          <!-- Logo -->
          <a href="{{route('index')}}" class="flex items-center">
              <img src="{{asset('asset/img/logo.jpg')}}" alt="Logo" class="h-12 w-24 md:w-32">
          </a>
          
          <!-- Desktop Navigation -->
          <nav class="hidden md:flex items-center gap-6 text-sm">
              <a class="text-gray-700 hover:text-sky-500" href="{{route('index')}}">Home</a>
              <a class="text-gray-700 hover:text-sky-500" href="{{route('about')}}">About</a>
              
              <!-- Services Dropdown -->
              <div class="relative group">
                  <button id="desktopDropdownButton" class="flex items-center text-gray-700 hover:text-sky-600">
                      Services
                      <svg class="w-4 h-4 ml-1 transition-transform transform" id="desktopDropdownIcon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                      </svg>
                  </button>
                  
                  <!-- Dropdown Menu -->
                  <ul id="desktopDropdownMenu" class="absolute hidden bg-white shadow-lg rounded-lg mt-2 w-48 border border-gray-200 z-45">
                      <li><a href="{{route('servicero')}}" class="block px-4 py-2 text-gray-700 hover:bg-sky-100">RO Services</a></li>
                      <li><a href="{{route('camservice')}}" class="block px-4 py-2 text-gray-700 hover:bg-sky-100">CCTV Services</a></li>
                    
                    </ul>
              </div>
              
              <a class="text-gray-700 hover:text-sky-500" href="{{route('blog')}}">Blog</a>
              {{-- <a class="text-gray-700 hover:text-sky-600" href="#">Projects</a> --}}
              <a class="text-gray-700 hover:text-sky-600" href="{{route('contact')}}">Contact</a>
          </nav>
          
          <!-- Login/Register & Mobile Menu Button -->
          <div class="flex items-center gap-4">
              <div class="hidden md:flex gap-4">
                  <a class="rounded-md bg-sky-600 hover:bg-sky-800 px-5 py-2 text-sm font-medium text-white" href="#">Call Now</a>
                  {{-- <a class="rounded-md bg-gray-100 px-5 py-2 text-sm font-medium text-sky-600" href="#">Register</a>
               --}}
                </div>
              
              <!-- Mobile Menu Button -->
              <button id="menu-btn" class="md:hidden p-2 text-gray-600 transition hover:text-gray-800">
                  <svg id="menu-icon" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                  </svg>
              </button>
          </div>
      </div>
  </div>
  
  <!-- Mobile Menu -->
  <nav id="mobile-menu" class="hidden md:hidden bg-white shadow-md absolute w-full left-0 top-16 z-50 transition-all">
      <ul class="text-center space-y-4 p-4">
          <li><a class="block text-gray-700 hover:text-sky-600" href="{{route('index')}}">Home</a></li>
          <li><a class="block text-gray-700 hover:text-sky-600" href="{{route('about')}}">About</a></li>
          
          <!-- Mobile Services Dropdown -->
          <li class="relative">
              <button id="mobileDropdownButton" class="block w-full text-gray-700 hover:text-sky-600">Services</button>
              <ul id="mobileDropdownMenu" class="hidden mt-2 space-y-2 bg-gray-50 p-2 rounded-md">
                  <li><a class="block px-4 py-2 text-gray-700 hover:bg-sky-100" href="{{route('servicero')}}">RO Service</a></li>
                  <li><a class="block px-4 py-2 text-gray-700 hover:bg-sky-100" href="{{route('camservice')}}">CCTV Service</a></li>
                 
                </ul>
          </li>
          
          <li><a class="block text-gray-700 hover:text-sky-600" href="{{route('blog')}}">Blog</a></li>
          {{-- <li><a class="block text-gray-700 hover:text-sky-600" href="#">Projects</a></li> --}}
          <li><a class="block text-gray-700 hover:text-sky-600" href="{{route('contact')}}">Contact</a></li>
      </ul>
  </nav>
</header>

<script>
  document.addEventListener("DOMContentLoaded", () => {
      // Mobile Menu Toggle
      const menuBtn = document.getElementById("menu-btn");
      const mobileMenu = document.getElementById("mobile-menu");
      menuBtn.addEventListener("click", () => {
          mobileMenu.classList.toggle("hidden");
      });

      // Desktop Dropdown Menu
      const desktopDropdownButton = document.getElementById("desktopDropdownButton");
      const desktopDropdownMenu = document.getElementById("desktopDropdownMenu");
      desktopDropdownButton.addEventListener("click", (event) => {
          event.stopPropagation();
          desktopDropdownMenu.classList.toggle("hidden");
      });

      // Mobile Dropdown Menu
      const mobileDropdownButton = document.getElementById("mobileDropdownButton");
      const mobileDropdownMenu = document.getElementById("mobileDropdownMenu");
      mobileDropdownButton.addEventListener("click", () => {
          mobileDropdownMenu.classList.toggle("hidden");
      });

      // Close dropdowns when clicking outside
      document.addEventListener("click", (event) => {
          if (!desktopDropdownButton.contains(event.target) && !desktopDropdownMenu.contains(event.target)) {
              desktopDropdownMenu.classList.add("hidden");
          }
      });
  });
</script>
