@include('backend.layouts.header')

  <div id="wrapper">

    <!-- Sidebar -->
   @include('backend.layouts.sidebar')

   
    <div id="content-wrapper">

      @yield('content')
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      @include('backend.layouts.footer')

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

 @include('backend.layouts.footer_link')