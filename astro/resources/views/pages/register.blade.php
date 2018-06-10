@extends('logreg')

@section('title','- Register')

@section('signin')
            <h1 class="h3 mb-3 font-weight-normal">Please Register</h1>
            <label for="inputUser" class="sr-only">Username</label>
            <input type="text" id="inputUser" class="form-control" placeholder="Username" required autofocus>
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
            <label for="inputConfPassword" class="sr-only">Confirm Password</label>
            <input type="password" id="inputConfPassword" class="form-control" placeholder="Confirm Password" required>
            <div class="radio-inline mb-3">
                <label>
                <input type="radio" name="userType" value="astronomer"> Astronomer
                <input type="radio" name="userType" value="researcher"> Researcher
                </label>
            </div>
            <label for="inputInstitution" class="sr-only">Institution</label>
            <input type="text" id="inputInstitution" class="form-control" placeholder="Institution" required>
            <br />
            <button class="btn btn-lg btn-secondary btn-block" type="submit">Log in</button>
            <p> Already have an account? <a href="/login">Log In</a></p>
@endsection