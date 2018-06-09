@include('partials\_head')
  <body>
    @include('partials\_nav')
    <br />
    <div class="container">
      
        @yield('content')

    </div>
    @include('partials\_scripts')
   </body>
</html>