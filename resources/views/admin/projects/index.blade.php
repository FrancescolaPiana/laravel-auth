@extends('layouts.admin')

@section('content')

    <div id="indexproj">
        <div class="container">  
            @if (session()->has('message'))
                <div class="alert alert-success">
                    {{session()->get('message')}}
                </div>
            @endif
            <h1><a class="btn btn-success" href="{{route('admin.projects.create')}}">New Project +</a></h1>  
            <ul class="gap-4  text-uppercase">
                @foreach ($projects as $project)
                    <li class="d-flex"><a class="btn font-bold" href=" {{route('admin.projects.show', $project->slug)}} ">{{$project->title}}</a> 
                        <div class="d-flex">
                            <a class="btn btn-primary" href="{{route('admin.projects.edit', $project->slug)}}">£</a>
                            <form action="{{route('admin.projects.destroy', $project->slug)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="delete-button btn btn-danger ms-3" data-item-title="{{$project->title}}">x</button>
                             </form>
                            {{-- <a class="btn btn-danger" href=""></a> --}}
                        </div></li>
                @endforeach
            </ul>
        </div>
    </div>

@endsection