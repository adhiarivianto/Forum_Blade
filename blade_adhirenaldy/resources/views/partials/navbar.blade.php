<nav class="navbar navbar-expand-xl navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="/">
        <img src="img/{{ $logo }}" alt="web logo" width="30" height="30">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse ms-3" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Home") ? 'active': ''}}" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle {{ ($title === "Genre | Action" or $title === "Genre | Horror") ? 'active': ''}}" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Genre
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="/action">Action</a></li>
              <li><a class="dropdown-item" href="/horror">Horror</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "About") ? 'active': '' }}" href="/about">About</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
