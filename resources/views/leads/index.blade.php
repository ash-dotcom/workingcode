@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Laravel 8 CRUD Example </h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="" title="Create a product"> <i class="fas fa-plus-circle"></i>
            </a>
        </div>
    </div>
</div>

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p></p>
</div>
@endif

<table class="table table-bordered table-responsive-lg">
    <tr>
        <th>No</th>
        <th>Name</th>
        <th>description</th>
        <th>Price</th>
        <th>Date Created</th>
        <th>Actions</th>
    </tr>
    @foreach ($leads as $lead)
    <tr>
        <td>{{$lead->id}}</td>
        <td>{{$lead->name}}</td>
        <td>{{$lead->description}}</td>
        <td>{{$lead->price}}</td>
        <td>{{$lead->created_at}}</td>
        <td>
            <form action="{{route('leads.destroy',$lead->id)}}" method="POST">

                <a href="" title="show">
                    <i class="fas fa-eye text-success  fa-lg"></i>
                </a>

                <a href="{{route('leads.edit',$lead->id)}}">
                    <i class="fas fa-edit  fa-lg"></i>
                </a>

                @csrf
                @method('DELETE')

                <button type="submit" style="border: none; background-color:transparent;">
                    <i class="fas fa-trash fa-lg text-danger"></i>
                   
                </button>

            </form>
        </td>
    </tr>
    @endforeach
</table>

{!! $leads->links() !!}

@endsection