@extends('main')

@section('title', '- View cb')

@section('content')
    <div class="row">
        <div class="col-md-8">
            <h1>Celestial Body {{ $cb->id }}</h1>
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
                <div class="col-md-6">        
                            {!! Form::open(['route'=>['cb.relation',$cb->id], 'method' => 'GET'])!!}
                            {!! Form::submit('Add Relation',['class'=>'btn btn-secondary btn-block']) !!}
                            {!! Form::close() !!}
                        </div>
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
                <div class="col-md-6">        
                            {!! Form::open(['route'=>['cb.relation',$cb->id], 'method' => 'GET'])!!}
                            {!! Form::submit('Add Relation',['class'=>'btn btn-secondary btn-block']) !!}
                            {!! Form::close() !!}
                        </div>
            @endif

            @if (!empty($star))
                <p>Star's Spectral Brightness: {{$spectral->spectral_type}}</p>
                <p>Star's Brightness: {{$spectral->brightness}}</p>
                <div class="col-md-6">        
                            {!! Form::open(['route'=>['cb.relation',$cb->id], 'method' => 'GET'])!!}
                            {!! Form::submit('Add Relation',['class'=>'btn btn-secondary btn-block']) !!}
                            {!! Form::close() !!}
                        </div>

            @endif
        </div>
        <div class="col-md-4">
            @guest
            @else
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            {!! Html::linkroute('cb.edit', 'Edit', [$cb->id], ['class' => 'btn btn-primary btn-block']) !!}
                        </div>
                    </div>
                    <div class="row" style="margin-top: 10px;">
                        <div class="col-md-12">
                            {!! Form::open(['route' => ['cb.destroy',$cb->id], 'method'=> 'DELETE']) !!}
                            {!! Form::submit('Delete', ['class' =>'btn btn-danger btn-block']) !!}
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            @endguest
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-6">
            <div class="container bg-light">
                <p class="text-center h4">Publications</p>
            </div>
        </div>
        <div class="col-md-6">
            <div class="container bg-light">
                <p class="text-center h4">Relationships</p>
                @if (!empty($comet))
                    <p>Comet is speeding past: {{$comet->speed}}</p>

                @elseif (!empty($galaxy))
                    <p>Galaxy's do not have any relationships!!!</p>

                @elseif (!empty($moon))
                    <p>Moon is orbiting around: {{$planetoid->orbital_period}}</p>

                @elseif (!empty($planet))
                    <p><b>Planet's Orbital Period: </b>{{$planet->orbital_period}}</p>
                    <p><b>Planet's Type: </b>{{$planet->planet_type}}</p>

                @elseif (!empty($star))
                    <p>Planets orbiting around this Star: {{$spectral->spectral_type}}</p>
                    <p>Comets zooming past this Star: {{$spectral->brightness}}</p>
                
                @else
                    <strong>This Celestial body has not been classified yet!</strong>
                @endif
            </div>
        </div>
    </div>

@endsection