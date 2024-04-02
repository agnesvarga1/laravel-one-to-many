@extends('layouts.app')

@section('content')
<h2 class="text-center my-2">Project List</h2>
<div class="container">
    <a class="btn btn-success my-2 " href="{{route("dashboard.projects.create")}}">Add Project</a>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Project Name</th>
            <th scope="col">Description</th>
            <th scope="col">Slug</th>
            <th scope="col">Image Path</th>
            <th scope="col">Website URL</th>
            <th scope="col">Manage Projects</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($projects as $item )
            <tr>
                <th scope="row">{{$item->id}}</th>
                <td><a href="{{route('dashboard.projects.show',$item->slug)}}">{{$item->project_name}}</a></td>
                <td>{{$item->description}}</td>
                <td>{{$item->slug}}</td>
                <td>{{$item->image}}</td>
                <td>{{$item->website}}</td>
                <td><a href={{route('dashboard.projects.edit',$item->slug)}} class="btn btn-primary m-1">Edit</a>
                    <button type="button" class="btn btn-danger m-1" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Delete</button>
                </td>

              </tr>
            @endforeach

        </tbody>
    </table>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title fs-5" id="exampleModalLabel">Cancel</h3>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <h5>Are you sure you want to delete this project?</h5>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <form action="{{route('dashboard.projects.destroy',$item->slug)}}" method="POST">
            @csrf
            @method('Delete')
            <button type="submit" class="btn btn-danger">Delete Project</button>
          </form>

        </div>
      </div>
    </div>
  </div>
@endsection
