<!doctype html>
<html lang="en">

    <head>
    @include('partials\_head')
    <link rel="stylesheet" href="https://getbootstrap.com/docs/4.1/examples/sign-in/signin.css">
    </head>
    
    <body>
        <div class="container text-center">
        <form class="form-signin">
            <a href='/'><img class="mb-4" src="https://www.shareicon.net/data/128x128/2016/06/25/786459_planet_512x512.png" alt=""  width="72" height="72"></a>
            @yield('signin')
        </form>
        </div>
        @include('partials\_scripts')
    </body>
</html>