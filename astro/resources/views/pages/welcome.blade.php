@extends('main')

@section('content')
      <div class="row">
        <div class="col-md-12">
          <div class="jumbotron ">
            <div class="container">
              <h1 class="display-3">Hello, Universe!</h1>
              <p>If you are itching to know what thing you just found in the sky, enter the coordinates below and search it up. If you want to just explore, try the advanced searches</p>
              <div class="row"> 
                <div class="col-lg-12">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="right ascension, declination">
                    <span class="input-group-btn">
                      <button class="btn btn-secondary" type="button">Explore!</button>
                    </span>
                  </div><!-- /input-group -->
                </div><!-- /.col-lg-6 -->
              </div><!-- /.row -->
              <br />
              <p><a class="btn btn-secondary btn-sm" href="#" role="button">Advanced Searching</a></p>
            </div>
          </div>
        </div>
      </div>
@endsection