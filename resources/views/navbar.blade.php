<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Sadam Corp</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item {{ ($active === 'home') ? 'active' : '' }}">
        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item {{ ($active === 'about') ? 'active' : '' }}">
        <a class="nav-link" href="/about">About</a>
      </li>
      <li class="nav-item {{ ($active === 'blog') ? 'active' : '' }}">
        <a class="nav-link" href="/blog">Blog</a>
      </li>
      <li class="nav-item {{ ($active === 'category') ? 'active' : '' }}">
        <a class="nav-link" href="/categories">Category</a>
      </li>
      <li class="nav-item {{ ($active === 'login') ? 'active' : '' }}">
        <a class="nav-link" href="/login">Login</a>
      </li>
    </ul>
  </div>
</nav>