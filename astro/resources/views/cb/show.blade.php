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
            <p><b>Discoverer:</b> {{ $discoverer->first_name }} {{ $discoverer->last_name }}</p>
            @if (!empty($comet))
                <p><b>Comet's Speed:</b> {{$comet->speed}}</p>
                <div class="col-md-6">        
                            {!! Form::open(['route'=>['rel.relation',$cb->id], 'method' => 'GET'])!!}
                            {!! Form::submit('Add Relation',['class'=>'btn btn-secondary btn-block']) !!}
                            {!! Form::close() !!}
                        </div>
            @endif

            @if (!empty($galaxy))
                <p><b>Galaxy's Brightness:</b> {{$galaxy->brightness}}</p>
                <p><b>Galaxy's Redshift:</b> {{$galaxy->redshift}}</p>
                <p><b>Galaxy's Type:</b> {{$galaxy->type}}</p>
            @endif

            @if (!empty($moon))
                <p><b>Moon's Orbital Period:</b> {{$moon->orbital_period}}</p>
                <p><b>Moon's Radius:</b> {{$moon->radius}}</p>
                <p><b>Moon's Planet Id:</b> {{$moon->planet_id}}</p>
                <p><b>Planet's Orbital Period:</b> {{$planetoid->orbital_period}}</p>
                <p><b>Planet's Type:</b> {{$planetoid->planet_type}}</p>
            @endif

            @if (!empty($planet))
                <p><b>Planet's Orbital Period: </b>{{$planet->orbital_period}}</p>
                <p><b>Planet's Type: </b>{{$planet->planet_type}}</p>
                <div class="col-md-6">        
                            {!! Form::open(['route'=>['rel.relation',$cb->id], 'method' => 'GET'])!!}
                            {!! Form::submit('Add Relation',['class'=>'btn btn-secondary btn-block']) !!}
                            {!! Form::close() !!}
                        </div>
            @endif

            @if (!empty($star))
                <p><b>Star's Spectral Brightness:</b> {{$spectral->spectral_type}}</p>
                <p><b>Star's Brightness:</b> {{$spectral->brightness}}</p>
                <div class="col-md-6">        
                            {!! Form::open(['route'=>['rel.relation',$cb->id], 'method' => 'GET'])!!}
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
                                <td><a href="{{route('pub.show',$pub->id)}}" class="btn btn-outline-dark" role="button">View</a></td>
                            </tr>
                        @endforeach
            
                    </tbody>
                </table>
                <div class="row">
                    <div class="col-md-12">
                            {!! Form::open(['route'=>['cb.create_pub_relation',$cb->id], 'method' => 'GET'])!!}
                            {!! Form::submit('Edit Publications',['class'=>'btn btn-secondary btn-block']) !!}
                            {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="container bg-light">
                <p class="text-center h4">Relationships</p>
                @if (!empty($comet))
                    @if (!($starId->isEmpty()))
                        <p>Comet is zooming past Star: 
                            @foreach ($starId as $S)
                            {{$S->star_id}},
                            @endforeach
                        </p>
                    @else
                        <p>Comet is not zooming past a star</p>
                    @endif

                @elseif (!empty($galaxy))
                    <p>Galaxy's do not have any relationships</p>

                @elseif (!empty($moon))
                    @if (!($orbit->isEmpty()))
                        <p>Moon is orbiting Planet: 
                            @foreach ($orbit as $P)
                            {{$P->planet_id}},
                            @endforeach
                        </p>
                    @else
                        <p>Moon is not orbiting a planet</p>
                    @endif

                @elseif (!empty($planet))
                    
                    @if (!($orbitz->isEmpty()))
                        <p>Planet is orbiting Star: 
                            @foreach ($orbitz as $P)
                            {{$P->planet_id}},
                            @endforeach
                        </p>
                    @else
                        <p>Planet is not orbiting a star</p>
                    @endif

                @elseif (!empty($star))
                    
                    <p><h5>Planets orbiting around this Star: </h5>
                        <hr>
                        @if (!($planetz->isEmpty()))
                        <p>Planet is orbiting Star: 
                            @foreach ($planetz as $P)
                            {{$P->planet_id}},
                            @endforeach
                        </p>
                        @else
                        <p>No planets are orbiting aroung this star</p>
                        @endif
                    
                    </p>
                    <p><h5>Comets zooming past this star:</h5>
                    <hr> 
                        @if (!($cometz->isEmpty()))
                        <p>The comets zooming past this star are: 
                            @foreach ($cometz as $C)
                            {{$C->comet_id}},
                            @endforeach
                        </p>
                    @else
                        <p>There are no comets zooming past this star</p>
                    @endif
                    </p>
                
                @else
                    <strong>This Celestial body has not been classified yet!</strong>
                @endif
            </div>
        </div>
    </div>

@endsection