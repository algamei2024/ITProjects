<!DOCTYPE html>
<html lang="en">

<body>
  @include('resource')
  <!-- ======= Header ======= -->
   @include('layout.header')
  <!-- ======= Sidebar ======= -->
  @include('layout.saidbar')
  <!-- End Sidebar-->
  <main id="main" class="main">
    @yield('content')
  </main>
  <!-- End #main -->
  <!-- ======= Footer ======= -->
  @include('layout.footer')
  <!-- End Footer -->
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  
  <!-- Vendor JS Files -->
  
</body>
</html>