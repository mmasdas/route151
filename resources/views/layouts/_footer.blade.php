<form action="{{ route('logout') }}" method="POST" id="logoutForm">
  {{ csrf_field() }}
</form>
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
      <a class="p2"
        onclick="if(confirm('Are You Sure ?') != false )document.getElementById('logoutForm').submit(); return false;"
        name="button">ログアウト</a>
      @endguest
    </p>
  </div>
</footer>