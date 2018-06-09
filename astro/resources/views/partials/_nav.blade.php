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
            </ul>
            <ul class ="navbar-nav navbar-right">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="https://example.com" id="dropdown07" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">My Account</a>
              <div class="dropdown-menu" aria-labelledby="dropdown07">
                <a class="dropdown-item" href="#">Log In</a>
                <a class="dropdown-item" href="#">Register</a>
                <hr>
                <a class="dropdown-item" href="#">Sign Out</a>
              </div>
            </li>
            </ul>
        </div>
      </div>
    </nav>