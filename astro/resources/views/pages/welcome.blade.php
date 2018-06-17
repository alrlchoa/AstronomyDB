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
                    <p class="h5">(Selection and Projection Query)</p>
                    {!! Form::open(['route'=>'cb.search', 'class'=>'form-inline'])!!}
                      {!! Form::number('right_ascension',null,['class'=>'form-control','placeholder'=>'right-ascension']) !!}
                      {!! Form::number('declination',null,['class'=>'form-control','placeholder'=>'declination']) !!}
                      {!! Form::submit('Explore!',['class'=>'btn btn-secondary']) !!}
                    {!! Form::close()!!}
                </div><!-- /.col-lg-6 -->
              </div><!-- /.row -->
              <br />
                <p>
                  {{Form::open()}}
                  {{Form::button('Advanced Searching',['class'=> 'btn btn-secondary btn-sm', 'data-toggle'=>'collapse', 'data-target'=>'#Advanced'])}}
                  {{Form::close()}}
                </p>           
              <div class="col-md-12 collapse" id="Advanced">
                <div class="container">
                  <p class="h4">Search by threshold brightness:</p>
                  <div class="input-group col-md-8">
                    <div class="container">  
                      {!! Form::open(['route'=>'cb.searchByThreshold'])!!}
                      {!!Form::number('amount',null,['class'=> 'form-control', 'placeholder' =>'Search all brightness &ge; threshold','step' => '0.01', 'min'=>'0'])!!}
                      {{Form::checkbox('ver', null, null, ['class'=>'form-check-input'])}}
                      {{Form::label('ver','Include non-verified Celestial Bodies')}}
                    </div>
                    {{Form::submit('Search',['class'=>'btn btn-secondary'])}}
                    {!! Form::close()!!}
                  </div><!-- /input-group -->
                </div>
                <hr>
                <div class="container">
                  <p class="h4">Search by Type:</p>
                  <div class="input-group col-md-8">
                    <div class="form-check">
                      <div class="checkbox">
                        <label class="form-check-label">
                          <p class="h5">Division Query</p>
                          {!! Form::open(['route'=>'cb.searchByType'])!!}
                          {{Form::checkbox('comet', null, null, ['class'=>'form-check-input'])}}
                          {{Form::label('comet','Comet')}}
                        </label>
                      </div>
                      <div class="checkbox">
                        <label class="form-check-label">
                          {{Form::checkbox('star', null, null, ['class'=>'form-check-input'])}}
                          {{Form::label('star','Star')}}
                        </label>
                      </div>
                      <div class="checkbox">
                        <label class="form-check-label">
                          {{Form::checkbox('planet', null, null, ['class'=>'form-check-input'])}}
                          {{Form::label('planet','Planet')}}  
                        </label>
                      </div>
                      <div class="checkbox">
                        <label class="form-check-label">
                          {{Form::checkbox('moon', null, null, ['class'=>'form-check-input'])}}
                          {{Form::label('moon','Moon')}}                        
                        </label>
                      </div>
                      <div class="checkbox">
                        <label class="form-check-label">
                          {{Form::checkbox('galaxy', null, null, ['class'=>'form-check-input'])}}
                          {{Form::label('galaxy','Galaxy')}}
                        </label>
                      </div>
                      <div class="checkbox">
                        <label class="form-check-label">
                          {{Form::checkbox('none', null, null, ['class'=>'form-check-input'])}}
                          {{Form::label('none','None Specified')}}
                        </label>
                      </div>
                      <hr>
                      <div class="checkbox">
                        <label class="form-check-label">
                          {{Form::checkbox('ver', null, null, ['class'=>'form-check-input'])}}
                          {{Form::label('ver','Include non-verified Celestial Bodies')}}
                        </label>
                      </div>
                      <br />
                      {{Form::submit('Search',['class'=>'btn btn-secondary'])}}
                      {!! Form::close()!!}
                    </div>
                  </div><!-- /input-group -->
                </div>
                <hr>
                <div class="container">
                  <!-- <p class="h4">Search by Year Range Discovered:</p>
                  <form class="form-inline">
                    {{Form::open()}}
                    {!!Form::input('number','amount',null,['class'=> 'form-control mb-2 mr-sm-2 mb-sm-0', 'placeholder' =>'From','min'=>'0','max'=>'2018','id'=>'inlineFormInput'])!!}
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                      {!!Form::input('number','amount',null,['class'=> 'form-control', 'placeholder' =>'To','min'=>'0','max'=>'2018','id'=>'inlineFormInputGroup'])!!}
                    </div>
                    <div class="form-check mb-2 mr-sm-2 mb-sm-0">
                      <label class="form-check-label">
                        {{Form::checkbox('ver', null, null, ['class'=>'form-check-input'])}}
                          {{Form::label('ver','Include non-verified Celestial Bodies')}}
                      </label>
                    </div>
                    {{Form::submit('Search',['class'=>'btn btn-secondary'])}}
                    {{Form::close()}}
                  </form>
                </div> -->
                <!-- <hr> -->
                <div class="container">
                  <p class="h4">Search by Astronomical ID:</p>
                  <div class="input-group col-md-8">
                    {!! Form::open(['route' => 'cb.searchID', 'class'=>'form-inline']) !!}
                    {!! Form::number('id',null,['class'=> 'form-control', 'placeholder' =>'Input  Astronomical ID', 'min'=>'0']) !!}
                    {!! Form::submit('Search',['class'=>'btn btn-secondary']) !!}
                    {!! Form::close() !!}  
                  </div><!-- /input-group -->
                </div>
                <hr>
                <div class="container">
                <p class="h4">Search a Specific User:</p>
                <p class="h5">(Join Query)</p>
                <div class="input-group col-md-8">
                  <div class="row">
                   {!! Form::open(['route' => 'astro.searchByUser','class'=>'form-inline'])!!}
                    {!!Form::text('username',null,['class'=> 'form-control', 'placeholder' =>'Input Username'])!!}
                    {{Form::submit('Search',['class'=>'btn btn-secondary'])}}                  
                    {!! Form::close()!!}
                    </div>                  
                </div><!-- /input-group -->
                </div>
                <hr>
                <div class="container">
                <p class="h4">Search by Institution:</p>
                <div class="input-group col-md-8">
                  <div class="row">
                    {!! Form::open(['route' => 'astro.searchByInstitution','class'=>'form-inline'])!!}
                    {!! Form::text('name',null,['class'=> 'form-control', 'placeholder' =>'Input Institution'])!!}
                    {{  Form::submit('Search',['class'=>'btn btn-secondary'])}}                  
                    {!! Form::close()!!}
                    </div>                  
                </div><!-- /input-group -->
                </div>
                <hr>
                <div class="container">
                  <p class="h4">Search Publication:</p>
                  <div class="input-group col-md-8">
                    <div class="row">
                      {!! Form::open(['route' => 'pub.searchByDOI','class'=>'form-inline'])!!}
                      {!! Form::text('name',null,['class'=> 'form-control', 'placeholder' =>'Input DOI'])!!}
                      {{  Form::submit('Search',['class'=>'btn btn-secondary'])}}                  
                      {!! Form::close()!!}
                    </div>                  
                  </div><!-- /input-group -->
                </div>
                <hr>
                <div class="container">
                  <p class="h4">Insights:</p>
                  <p class="h5">(Aggregates and Nested Aggregate via Group by)</p>
                  <div class="col-md-6">
                          {!! Form::open(['route' => 'pub.paper', 'method' => 'GET'])!!}
                          {{ Form::hidden('minmax', 1) }}
                          {{  Form::submit('Most Cited Paper',['class'=>'btn btn-primary btn-block'])}}                  
                          {!! Form::close()!!}
                          <br/>
                          {!! Form::open(['route' => 'pub.paper', 'method' => 'GET'])!!}
                          {{ Form::hidden('minmax', 0) }}
                          {{  Form::submit('Least Cited Paper',['class'=>'btn btn-primary btn-block'])}}                  
                          {!! Form::close()!!}
                          <br/>
                      {!! Html::linkroute('pub.paper', 'Institution Cited Most on Average', null,['class' => 'btn btn-primary btn-block']) !!}
                      {!! Html::linkroute('pub.paper', 'Institution Cited Least on Average', null,['class' => 'btn btn-primary btn-block']) !!}
                      {!! Html::linkroute('pub.paper', 'Institution Cited Most', null,['class' => 'btn btn-primary btn-block']) !!}
                      {!! Html::linkroute('pub.paper', 'Institution Cited Least', null,['class' => 'btn btn-primary btn-block']) !!}                
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