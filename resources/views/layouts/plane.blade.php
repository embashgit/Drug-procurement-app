 @include('_includes/header')
 <body>

    <!-- Navigation -->
    @include('_includes/nav')

    <!-- Page Content -->
    
      <!-- Jumbotron Header -->
     
 <div class="container">
      <!-- Page Features -->
      <div class="row text-center">
        @yield('content')
      </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->

 @include('_includes/footer')
  </body>

</html>
