@extends('logreg')

@section('title','- Login')

@section('signin')
            <h1 class="h3 mb-3 font-weight-normal">Please Log in</h1>
            <label for="inputUser" class="sr-only">Username</label>
            <input type="text" id="inputUser" class="form-control" placeholder="Username" required autofocus>
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
            <div class="checkbox mb-3">
                <label>
                <input type="checkbox" value="remember-me"> Remember me
                </label>
            </div>
            <button class="btn btn-lg btn-secondary btn-block" type="submit">Log in</button>
            <p> Don't have an account? <a href="/register">Register</a></p>
@endsection