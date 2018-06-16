@extends('main')

@section('title', '- Relation rel')

@section('content')
    <div class="row">
        <div class="col-md-8">
            <h1>Add Relation to Celestial Body {{ $cb->id }}</h1>
            <hr>

            <p class = "lead">{{ $cb->name }}</p>

            <p><b>Right Ascension:</b> {{ $cb->right_ascension }}</p>
            <p><b>Declination:</b> {{ $cb->declination }}</p>
            <p><b>Verification Status:</b>
                @if ($cb->verified == 1)
                    Verified
                @else
                    Not Verified
                @endif
            </p>
            @if (!empty($comet))
                <p>Comet's Speed: {{$comet->speed}}</p>
            @endif

            @if (!empty($galaxy))
                <p>Galaxy's Brightness: {{$galaxy->brightness}}</p>
                <p>Galaxy's Redshift: {{$galaxy->redshift}}</p>
                <p>Galaxy's Type: {{$galaxy->type}}</p>
            @endif

            @if (!empty($moon))
                <p>Moon's Orbital Period: {{$moon->orbital_period}}</p>
                <p>Moon's Radius: {{$moon->radius}}</p>
                <p>Moon's Planet Id: {{$moon->planet_id}}</p>
                <p>Planet's Orbital Period: {{$planetoid->orbital_period}}</p>
                <p>Planet's Type: {{$planetoid->planet_type}}</p>
            @endif

            @if (!empty($planet))
                <p><b>Planet's Orbital Period: </b>{{$planet->orbital_period}}</p>
                <p><b>Planet's Type: </b>{{$planet->planet_type}}</p>
            @endif

            @if (!empty($star))
                <p>Star's Spectral Brightness: {{$spectral->spectral_type}}</p>
                <p>Star's Brightness: {{$spectral->brightness}}</p>
            @endif
        </div>
        <div class="col-md-4">
            <div class="well">
                <div class="row">
                    <div class="col-sm-6">
                        {!! Html::linkRoute('cb.show', 'Cancel', array($cb->id), array('class' =>'btn btn-danger btn-block')) !!}
                    </div>
            </div>
        </div>
    </div>

    <hr>
    @if (!empty($planet))
                <div class="col-md-6">        
                            {!! Form::open(['route'=>'rel.store', 'method' => 'POST','class'=>'form-inline'])!!}

                            {{Form::hidden ('parent_id',$planet->id)}}
                            {{Form::hidden ('parent_type',4)}}
                            
                            <p class="h4">Planet {{ $cb->id }} Orbits:</p>
                            {!!Form::text('star_id',null,['class'=> 'form-control', 'placeholder' =>'Input Star ID'])!!}
                            
                            {{Form::submit('Confirm',['class'=>'btn btn-secondary'])}} 
                            
                            {!! Form::close() !!}
                        </div>
     @endif
     @if (!empty($comet))
                <div class="col-md-6">        
                            {!! Form::open(['route'=>'rel.store', 'method' => 'POST','class'=>'form-inline'])!!}
                            
                            {{Form::hidden ('parent_id',$comet->id)}}
                            {{Form::hidden ('parent_type',1)}}

                            <p class="h4" style="margin-right: 10px;"> Comet {{ $cb->id }} Passes By:</p>
                            
                            {!!Form::text('star_id',null,['class'=> 'form-control', 'placeholder' =>'Input Star ID'])!!}
                            
                            {{Form::submit('Confirm',['class'=>'btn btn-secondary'])}} 
                            
                            {!! Form::close() !!}
                        </div>
    @endif
    @if (!empty($star))
                <div class="col-md-8">        
                            <div class ="row">
                                <div class="col-md-4">
                                <p class="h4">Star {{ $cb->id }} is Orbited By:</p>
                                </div>
                                <div class="col-md-8">
                            {!! Form::open(['route'=>'rel.store', 'method' => 'POST','class'=>'form-inline'])!!}
                            
                            {{Form::hidden ('parent_id',$star->id)}}
                            {{Form::hidden ('parent_type',5)}}
                            {{Form::hidden ('child_type',4)}}
                            {!!Form::text('planet_id',null,['class'=> 'form-control', 'placeholder' =>'Input Planet ID'])!!}
                            {{Form::submit('Confirm',['class'=>'btn btn-secondary'])}} 
                            
                            {!! Form::close() !!}

                            {!! Form::open(['route'=>'rel.store', 'method' => 'POST','class'=>'form-inline'])!!}
                        
                            {{Form::hidden ('parent_id',$star->id)}}
                            {{Form::hidden ('parent_type',5)}}
                            {{Form::hidden ('child_type',1)}}
                            {!!Form::text('comet_id',null,['class'=> 'form-control', 'placeholder' =>'Input Comet ID'])!!}
                            {{Form::submit('Confirm',['class'=>'btn btn-secondary'])}}
                            
                            {!! Form::close() !!}

                            </div>
                            </div>
                        </div>

    @endif


@stop
