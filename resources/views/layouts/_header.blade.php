{{-- @include('layouts._canvas') --}}
<header class="p-3 bg-dark text-white navbar navbar-expand-lg navbar-light bg-light navbar-static-top">
  <div class="container">
    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
      <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
        <li><a href="{{ url('/') }}" class="nav-link nav-link px-2">外国人の車関係の仕事の雑談</a></li>
        <li class="nav-item"><a class="nav-link {{ category_nav_active(1) }}"
            href="{{ route('categories.show', 1) }}">エンジン</a></li>
        <li class="nav-item"><a class="nav-link {{ category_nav_active(2) }}"
            href="{{ route('categories.show', 2) }}">シャシー </a></li>
        <li class="nav-item"><a class="nav-link {{ category_nav_active(3) }}"
            href="{{ route('categories.show', 3) }}">雑談</a></li>
        <li class="nav-item"><a class="nav-link {{ category_nav_active(4) }}"
            href="{{ route('categories.show', 4) }}">電装系</a></li>
      </ul>
    </div>
  </div>
</header>


<style>
  .nav-link {
    color: #c1c1c1;
  }

  .nav-link.active {
    color: white;
    font-weight: bolder;
  }
</style>