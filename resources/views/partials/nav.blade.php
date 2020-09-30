<div class="container-fluid bg-light"> 
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light">
      <a class="navbar-brand" href="{{ route('home_path') }}">{{ config('app.name') }}</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item {{ set_active_route('home_path') }}">
            <a class="nav-link" href="{{ route('home_path') }}">Home</a>
          </li>
          <li class="nav-item {{ set_active_route('about_path') }}">
            <a class="nav-link" href="{{ route('about_path') }}">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Artisans</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Planet
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="https://laravel.com">Laravel.com</a>
              <a class="dropdown-item" href="https://laravel.io">Laravel.io</a>
              <a class="dropdown-item" href="https://laracasts.com">Laracasts</a>
              <a class="dropdown-item" href="https://larajobs.com">Larajobs</a>
              <a class="dropdown-item" href="https://laravel-news.com">Laravel News</a>
              <a class="dropdown-item" href="https://larachat.co">Larachat</a>
          </li>
          <li class="nav-item {{ set_active_route('contact_path') }}">
            <a class="nav-link" href="{{ route('contact_path') }}">Contacts</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <a href="#"></a>
          <div class="bouton">
            <a href="#" class="btn btn-outline-success">Login</a>
          </div>
          <div class="bouton">
            <a href="#" class="btn btn-outline-success">Register</a>
          </div>
        </form>
      </div>
    </nav>
  </div>
</div>