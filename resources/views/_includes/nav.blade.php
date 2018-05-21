 <nav style="margin-bottom: 0px;" class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="{{ url('/drugs')}}">Drugs Pro</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">

            <li class="nav-item dropdown">

              <a class="nav-link  dropdown-toggle " data-toggle="dropdown"  href="#">All Drugs</a><span class="caret"></span>
              <ul class="dropdown-menu">
                @forelse($all_drugs as $drug)
                <a href="{{ route('drugs.show', ['id'=>$drug->id]) }}"><li>{{ $drug->name }}</li></a>
                @empty
                <li>No Drug recorded</li>
                @endforelse
              </ul>
            </li>
            <li class="nav-item dropdown">

              <a class="nav-link  dropdown-toggle " data-toggle="dropdown"  href="#">Services</a><span class="caret"></span>
              <ul class="dropdown-menu">
                <li>
                  <a href="{{ route('products.create') }}">Add New Drug</a>
                </li>
                <li class="nav-item">
              <a class="nav-link"  style="color: #333" href="#">Procure Drugs</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link"  style="color: #333" href="#">inventory</a>
            </li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
             @guest
            <li class="nav-item"><a class="nav-link"  href="{{ route('login') }}">Login</a></li>

            <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown nav-item">
                                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a  class="nav-link" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            <h4 style="color: #333">Logout</h4>
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
          </ul>
        </div>
      </div>
   </nav>