{{-- <footer class="footer">
  <div class="container">
    <p class="float-start">
      愛で世界を変える <span style="color: #e27575;font-size: 14px;">❤</span>
      <a class="p2" href="{{ route('about') }}">About Me</a>
    </p>

    <p class="float-end">
      <!-- Authentication Links -->
      @guest
      <a class="p-2" href="{{ route('login') }}">ログイン</a>
      <a class="p-2" href="{{ route('register') }}">新規登録 </a>
      @else
      @can('manage_contents')
      <a class="p-2" href="{{ url(config('administrator.uri')) }}">
        <i class="fas fa-tachometer-alt mr-2"></i>
        管理后台
      </a>
      @endcan

      <a class="p-2" href="{{ route('users.show', Auth::id()) }}">
        <i class="far fa-user mr-2"></i>
        個人ページ
      </a>
      <a class="p-2" href="{{ route('users.edit', Auth::id()) }}">
        <i class="far fa-edit mr-2"></i>
        プロフィールの編集
      </a>
      <a class="p-2"
        onclick="if(confirm('Are You Sure ?') != false )document.getElementById('logoutForm').submit(); return false;"
        name="button">ログアウト</button>
        <form action="{{ route('logout') }}" method="POST" id="logoutForm">
          {{ csrf_field() }}
        </form>
        @endguest

    </p>
  </div>
</footer> --}}


<footer class="footer">
  <div class="container">
    <p class="float-start">
      愛で世界を変える <span style="color: #e27575;font-size: 14px;">❤</span>
    </p>

    <p class="float-end">
      <a class="p2" href="{{ route('about') }}">About Me</a>
      @guest
      <a class="p2" href="{{ route('login') }}">ログイン</a>
      @else
      <a class="p2" href="{{ route('users.show', Auth::id()) }}">
        個人ページ
      </a>
      <a class="p2" href="{{ route('users.edit', Auth::id()) }}">
        プロフィールの編集
      </a>
      <a class="p2"
        onclick="if(confirm('Are You Sure ?') != false )document.getElementById('logoutForm').submit(); return false;"
        name="button">ログアウト</a>
    <form action="{{ route('logout') }}" method="POST" id="logoutForm">
      {{ csrf_field() }}
    </form>
    @endguest
    </p>
  </div>
</footer>