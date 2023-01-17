@extends('layouts.admin')

@section('content')

<div id="showproj">
    <div class="container">  
        <img src="" alt="">  
        <h1>{{$project->title}}</h1>
        <p>{!! $project->description !!}</p>
    </div>
</div>
@endsection