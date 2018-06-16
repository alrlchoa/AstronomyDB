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
    </div>
    <hr>
    <div class="row">
        <div class="col-md-6">
            <div class="container bg-light">
                <p class="text-center h4">Publications</p>
                <table class="table">
                        <thead>
                            <th>Id</th>
                            <th>DOI</th>
                            <th>Date Published</th>
                        </thead>
            
                    <tbody>
            
                        @foreach ($pubs as $pub)
                            <tr>
                                <td>{{$pub->id}}</td>
                                <td>{{$pub->doi}}</td>
                                <td>{{$pub->date_of_publication}}</td>
                                <td>
                                {!! Form::open(['route'=>['cb.destroy_pub_relation',$cb->id,$pub->id], 'method' => 'DELETE'])!!}

                                {!! Form::submit('Delete',['class'=>'btn btn-danger btn-block']) !!}

                                {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
            
                    </tbody>
                </table>
                <div class="row">
                    <div class="row col-md-12">
                            {!! Form::open(['route'=>['cb.add_pub_relation']])!!}
                            {{ Form::hidden('cb_id', $cb->id) }}
                            {{ Form::label('pub_doi', 'Publication DOI:') }}
                            {!! Form::text('pub_doi', null, ['class'=> 'form-control', 'placeholder' =>'Input Publication DOI']) !!}
                            {!! Form::submit('Add Publication',['class'=>'btn btn-secondary btn-block']) !!}

                            {!! Form::close() !!}
                    </div>
                </div>
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