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
            <div class="btn-group btn-toggle"> 
                <button class="btn btn-default" data-toggle="collapse" data-target="#Institution">Hide</button>
                <button class="btn btn-secondary active" data-toggle="collapse" data-target="#Institution">Show</button>
            </div>
            <br />
            <div class="well collapse" id="Institution">
            <label for="inputInstitution" class="sr-only">Institution</label>
            <input type="text" id="inputInstitution" class="form-control" placeholder="Institution" required>
            </div>
            <br />
            <button class="btn btn-lg btn-secondary btn-block" type="submit">Log in</button>
            <p> Already have an account? <a href="/login">Log In</a></p>
@endsection

@section('add-scripts')
    <script>
    $('.btn-toggle').click(function() {
        $(this).find('.btn').toggleClass('active');  
        
        if ($(this).find('.btn-primary').size()>0) {
            $(this).find('.btn').toggleClass('btn-primary');
        }
        if ($(this).find('.btn-danger').size()>0) {
            $(this).find('.btn').toggleClass('btn-danger');
        }
        if ($(this).find('.btn-success').size()>0) {
            $(this).find('.btn').toggleClass('btn-success');
        }
        if ($(this).find('.btn-info').size()>0) {
            $(this).find('.btn').toggleClass('btn-info');
        }
        
        $(this).find('.btn').toggleClass('btn-default');
        
    });

    $('form').submit(function(){
        alert($(this["options"]).val());
        return false;
    });
    </script>
@endsection