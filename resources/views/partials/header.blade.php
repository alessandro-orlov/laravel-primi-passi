<header>
  <div class="logo">
    <img src=" {{ asset('img/logo.png') }}" alt="">
  </div>
  <nav>
    <ul>
      <li><a href="{{ route('index') }}">home</a></li>
      <li><a href="{{ route('privacy') }}">privacy policy</a></li>
      <li><a href="{{ url('/welcome') }}">welcome laravel</a></li>
      <li>
        <a class="big-btn"href="https://www.boolean.careers/iscriviti">canditati ora</a>
      </li>
    </ul>
  </nav>
</header>
