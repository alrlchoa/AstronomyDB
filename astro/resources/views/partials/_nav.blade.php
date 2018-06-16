<!-- BootStrap Navigation Bar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="#">AstroDB</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample07">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item {{Request::is('/') ? "active" : ""}}">
              <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item {{Request::is('about') ? "active" : ""}}">
              <a class="nav-link" href="/about">About</a>
            </li>
            <li class="nav-item {{Request::is('team') ? "active" : ""}}">
              <a class="nav-link" href="/team">Team</a>
            </li>
            @guest
            @else
            <li class="nav-item {{Request::is('cb/create') ? "active" : ""}}">
                <a class="nav-link" href="/cb/create">Create CB</a>
            </li>
            <li class="nav-item {{Request::is('pub/create') ? "active" : ""}}">
                <a class="nav-link" href="/pub/create">Create PUB</a>
            </li>
            @endguest
            </ul>
            <ul class ="navbar-nav navbar-right">
                @guest
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                  </li>
                  @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->fname }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                              onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
      </div>
    </nav>