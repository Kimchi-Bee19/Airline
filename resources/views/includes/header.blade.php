<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
    @vite('resources/css/app.css')
    <script>
        //Toggle Menu
        function toggleMenu() {
            const menu = document.getElementById('mobile-menu');
            const button = document.getElementById('mobile-menu-button');

            //Toggle visibility
            menu.classList.toggle('hidden');
            button.setAttribute('aria-expanded', menu.classList.contains('hidden') ? 'false' : 'true');
        }

        //Toggle Theme
        function toggleTheme() {
            const html = document.documentElement;
            const isDarkMode = html.classList.toggle('dark');
            const button = document.getElementById('theme-toggle-button');

            //Update button aria-label and icon
            button.setAttribute('aria-label', isDarkMode ? 'Switch to light mode' : 'Switch to dark mode');
            button.querySelector('.moon-icon').classList.toggle('hidden', isDarkMode);
            button.querySelector('.sun-icon').classList.toggle('hidden', !isDarkMode);
        }
    </script>
</head>
  <body>
    <nav class="w-screen bg-gray-50 dark:bg-gray-800 drop-shadow-md">
      <div class="mx-auto max-w-7xl px-4 sm:px-8 md:px-12 lg:px-8">
        <div class="relative flex h-16 items-center justify-between">
          
          <!-- Mobile menu button -->
          <div class="absolute inset-y-0 left-0 flex items-center pr-2 sm:hidden">
            <button id="mobile-menu-button" onclick="toggleMenu()" type="button" class="relative inline-flex items-center justify-center rounded-md p-2 text-green-800 hover:bg-gray-100 hover:text-green-900 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-green-900 dark:text-gray-300 dark:hover:text-gray-100 dark:hover:bg-gray-700 dark:focus:ring-gray-500" aria-controls="mobile-menu" aria-expanded="false">
              <span class="absolute -inset-0.5"></span>
              <span class="sr-only">Open main menu</span>
              <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
              </svg>
              <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
              </svg>
            </button>
          </div>

          <div class="flex flex-1 items-center justify-center sm:justify-between sm:text-center">
            <!-- Logo -->
            <div class="flex flex-shrink-0 items-center sm:text-center">
              <h1 class="text-2xl font-bold text-green-800">Airline</h1>
            </div>
            <div class="hidden sm:block flex-1 text-center">
              <div class="flex justify-center space-x-4">
                <a href="/flights" class="block rounded-md px-3 py-2 text-md font-bold text-green-800 hover:bg-green-700 hover:text-white dark:text-gray-300 dark:hover:bg-gray-700">Flights</a>
              </div>
            </div>
          </div>

          <!-- Theme Toggle Icon -->
          <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
            <button id="theme-toggle-button" onclick="toggleTheme()" type="button" class="relative rounded-full bg-gray-100 p-1 text-green-700 hover:text-green-800 focus:outline-none focus:ring-2 focus:ring-green-900 focus:ring-offset-2 focus:ring-offset-gray-100 dark:bg-gray-700 dark:text-gray-300 dark:hover:text-gray-100">
              <span class="absolute -inset-1.5"></span>
              <span class="sr-only">Toggle theme</span>
              <!-- Light Mode Icon -->
              <svg class="sun-icon h-7 w-7 hidden dark:block" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 2.25a.75.75 0 0 1 .75.75v2.25a.75.75 0 0 1-1.5 0V3a.75.75 0 0 1 .75-.75ZM7.5 12a4.5 4.5 0 1 1 9 0 4.5 4.5 0 0 1-9 0ZM18.894 6.166a.75.75 0 0 0-1.06-1.06l-1.591 1.59a.75.75 0 1 0 1.06 1.061l1.591-1.59ZM21.75 12a.75.75 0 0 1-.75.75h-2.25a.75.75 0 0 1 0-1.5H21a.75.75 0 0 1 .75.75ZM17.834 18.894a.75.75 0 0 0 1.06-1.06l-1.59-1.591a.75.75 0 1 0-1.061 1.06l1.59 1.591ZM12 18a.75.75 0 0 1 .75.75V21a.75.75 0 0 1-1.5 0v-2.25A.75.75 0 0 1 12 18ZM7.758 17.303a.75.75 0 0 0-1.061-1.06l-1.591 1.59a.75.75 0 0 0 1.06 1.061l1.591-1.59ZM6 12a.75.75 0 0 1-.75.75H3a.75.75 0 0 1 0-1.5h2.25A.75.75 0 0 1 6 12ZM6.697 7.757a.75.75 0 0 0 1.06-1.06l-1.59-1.591a.75.75 0 0 0-1.061 1.06l1.59 1.591Z" />
              </svg>
              <!-- Dark Mode Icon -->
              <svg class="moon-icon h-7 w-7 dark:hidden" fill="currentColor" viewBox="0 0 24 24">
                <path fill-rule="evenodd" d="M9.528 1.718a.75.75 0 0 1 .162.819A8.97 8.97 0 0 0 9 6a9 9 0 0 0 9 9 8.97 8.97 0 0 0 3.463-.69.75.75 0 0 1 .981.98 10.503 10.503 0 0 1-9.694 6.46c-5.799 0-10.5-4.7-10.5-10.5 0-4.368 2.667-8.112 6.46-9.694a.75.75 0 0 1 .818.162Z" clip-rule="evenodd" />
              </svg>
            </button>
          </div>
        </div>
      </div>

      <!-- Mobile menu, show/hide based on menu state. -->
      <div class="sm:hidden hidden" id="mobile-menu">
        <div class="space-y-1 px-2 pb-3 pt-2">
          <a href="/flights" class="block rounded-md px-3 py-2 text-md font-bold text-green-800 hover:bg-green-700 hover:text-white dark:text-gray-300 dark:hover:bg-gray-700">Flights</a>
        </div>
      </div>
    </nav>
  </body>
</html>