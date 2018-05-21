 @include('_includes/header')
 <body>

    <!-- Navigation -->
    @include('_includes/nav')

    <!-- Page Content -->
    
      <!-- Jumbotron Header -->
      <div style="width: 100%; height:600px; margin-top: 0px " class="jumbotron my-4">
        <h1 style="background: rgba(300, 300, 400,) 0 0 3; color: #01579b;" class="display-3">Welcome To RS Phamacy</h1>
        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, ipsam, eligendi, in quo sunt possimus non incidunt odit vero aliquid similique quaerat nam nobis illo aspernatur vitae fugiat numquam repellat.</p>
        <a href="#main" class=" text-center btn btn-primary btn-lg">Check out our Drugs</a>
      </div>
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
