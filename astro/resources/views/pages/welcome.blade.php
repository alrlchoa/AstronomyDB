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
              <p><button class="btn btn-secondary btn-sm" data-toggle="collapse" data-target="#Advanced">Advanced Searching</button></p>
              <div class="col-md-12 collapse" id="Advanced">
                <div class="container">
                  <p class="h4">Search by threshold brightness:</p>
                  <div class="input-group col-md-8">
                    <div class="container">
                      <input type="number" step=0.01 min=0 class="form-control" placeholder="Search all brightness &ge; threshold">
                      <div class="checkbox">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input" value="ver">
                          Include non-verified Celestial Bodies
                        </label>
                      </div>
                      <button class="btn btn-secondary" type="button">Search</button>
                    </div>
                  </div><!-- /input-group -->
                </div>
                <hr>
                <div class="container">
                  <p class="h4">Search by Type:</p>
                  <div class="input-group col-md-8">
                    <div class="form-check">
                      <div class="checkbox">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input" value="comet">
                          Comet
                        </label>
                      </div>
                      <div class="checkbox">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input" value="star">
                          Star
                        </label>
                      </div>
                      <div class="checkbox">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input" value="planet">
                          Planet
                        </label>
                      </div>
                      <div class="checkbox">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input" value="moon">
                          Moon
                        </label>
                      </div>
                      <div class="checkbox">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input" value="galaxy">
                          Galaxy
                        </label>
                      </div>
                      <div class="checkbox">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input" value="none">
                          None Specified
                        </label>
                      </div>
                      <hr>
                      <div class="checkbox">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input" value="ver">
                          Include non-verified Celestial Bodies
                        </label>
                      </div>
                      <br />
                      <button class="btn btn-secondary" type="button">Search</button>
                    </div>
                  </div><!-- /input-group -->
                </div>
                <hr>
                <div class="container">
                  <p class="h4">Search by Year Range Discovered:</p>
                  <form class="form-inline">
                    <input type="number" min=0 max=2018 class="form-control mb-2 mr-sm-2 mb-sm-0" id="inlineFormInput" placeholder="From">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                      <input type="number" min=0 max=2018 class="form-control" id="inlineFormInputGroup" placeholder="To">
                    </div>
                    <div class="form-check mb-2 mr-sm-2 mb-sm-0">
                      <label class="form-check-label">
                        <input class="form-check-input" type="checkbox"> Include non-verified Celestial Bodies
                      </label>
                    </div>

                    <button type="submit" class="btn btn-secondary">Submit</button>
                  </form>
                </div>
                <hr>
                <div class="container">
                  <p class="h4">Search by Astronomical ID:</p>
                  <div class="input-group col-md-8">
                      <input type="number" step=0.01 min=0 class="form-control" placeholder="Input  Astronomical ID">
                      <button class="btn btn-secondary" type="button">Search</button>
                  </div><!-- /input-group -->
                </div>
                <hr>
                <div class="container">
                <p class="h4">Search a Specific User:</p>
                <div class="input-group col-md-8">
                    <input type="number" step=0.01 min=0 class="form-control" placeholder="Input  Username">
                    <button class="btn btn-secondary" type="button">Search</button>
                </div><!-- /input-group -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection

@section('add-scripts')

@endsection