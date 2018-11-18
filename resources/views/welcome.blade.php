@extends('layouts.app')

@section('content')
    <div class="container">
        @include('projects.createModel')
        @if (count($projects) > 0)
            <div class="card-deck">
                @foreach($projects as $project)
                    <div class="col-3 my-3">
                        <a href="projects/{{$project->id}}" class="card">
                            <img class="card-img-top" src="{{asset('storage/thumbs/cropped/' . $project->thumbnail)}}" alt="Card image cap">
                            <div class="card-body">
                                <h6 class="card-title text-center">{{$project->name}}</h6>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
@endsection