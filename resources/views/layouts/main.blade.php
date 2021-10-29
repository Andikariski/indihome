@include('layouts.header')
  <body>
    <div class="flex h-screen bg-gray-50 dark:bg-gray-900" :class="{ 'overflow-hidden': isSideMenuOpen }">
      <!-- Include sidebar -->
        @include('layouts.sidebar')
      
        <!-- Include navbar -->
        @include('layouts.navbar')
      
        <!-- Main Content -->
        <main class="h-full overflow-y-auto">
          <section class="content">
            @yield('container')
        </section>
        </main>
    </div>
  </body>
  @include('sweetalert::alert')
</html>
