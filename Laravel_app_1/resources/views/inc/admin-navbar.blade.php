{{-- <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
  <a class="navbar-brand" href="/">{{config('app.name','SCIT')}}</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  <div class="collapse navbar-collapse" id="navbarCollapse">
    
    {{-- <form class="form-inline mt-2 mt-md-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form> --}}
    {{-- <ul class="nav navbar-nav navbar-right">
      <li class="nav-item"><a class="nav-link" href="/posts/create">Add Post</a></li>
    </ul>
  </div>
</nav> --}} 
{{-- <nav class="navbar navbar-expand-md navbar-light navbar-laravel"> --}}
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
  <div class="container">
      <a class="navbar-brand" href="{{ url('/') }}">
          {{ config('app.name', 'Laravel') }}
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
          <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        
          <!-- Right Side Of Navbar -->
          <ul class="navbar-nav ml-auto">
              <!-- Authentication Links -->
              <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
              <li class="nav-item"><a class="nav-link" href="/about">About</a></li>
              <li class="nav-item"><a class="nav-link" href="/service">Service</a></li>
              <li class="nav-item"><a class="nav-link" href="/posts">Blog</a></li>
          </ul>
      </div>
      
  </div>
</nav>
<hr>