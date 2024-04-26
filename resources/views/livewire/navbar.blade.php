<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #516BEB;">
  <div class="container-fluid">
    <a class="navbar-brand fw-bold" href="#">Livewire Blog </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('posts.index')}}">Posts</a>
        </li>
        </li>
      </ul>
        <a class="btn btn-outline-light"  href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Log Out</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    {{ csrf_field() }}
</form>
    </div>
  </div>
</nav>
