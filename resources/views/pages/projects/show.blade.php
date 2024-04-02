@extends('layouts.app')

@section('content')
<div class="container">

    <h1 class="text-center">{{$project->project_name}}</h1>
    <div class="row justify-content-center">
        @if ($project->image)
        <img class="w-50 d-block my-3 border border-success" src="{{asset('storage/'.$project->image)}}" alt="project's image">
      @endif
      <p class="text-center">
          {{$project->description}}
      </p>
    </div>

</div>

@endsection
