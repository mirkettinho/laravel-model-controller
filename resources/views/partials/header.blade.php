

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"><img src="/logo.png" alt=""></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link {{Route::currentRouteName() === "home" ? "active" : ""}}" href="{{route("home")}}">Home</a>
      <a class="nav-item nav-link {{Route::currentRouteName() === "movies" ? "active" : ""}}" href="{{route("movies")}}">Movie List</a>
    </div>
  </div>
</nav>

