<header>
    <div class="menu-btn">
      <div class="btn-line"></div>
      <div class="btn-line"></div>
      <div class="btn-line"></div>
    </div>

    <nav class="menu">
      <div class="menu-branding">
        <div class="portrait">
          {{-- <img src="{{url('/images/couple.jpeg')}}" alt="Image"/> --}}
        </div>
      </div>
      <ul class="menu-nav strokeme">
        <li class="nav-item current">
        <a href="{{url('/')}}" class="nav-link">
            Home
          </a>
        </li>
        <li class="nav-item">
          <a href="{{url('/direction')}}" class="nav-link">
            Get Direction
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('programme') }}" class="nav-link">
            Event Programme
          </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('info') }}" class="nav-link">Announcement</a>            
        </li>
        <li class="nav-item">
          <a href="{{ url('/pix')}}" class="nav-link">
            Photos
          </a>
        </li>
      </ul>
    </nav>
  </header>