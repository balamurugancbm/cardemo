@extends('layouts.app')
 
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Car Application</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('cars.create') }}"> Add New Listing</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>Id</th>
			<th>Brandname</th>
			<th>Year</th>
			<th>Model</th>
			<th>Color</th>
			<th>Mileage</th>
			<th>Registration No</th>
			<th>Image</th>
			<th>Created</th>
			<th>Updated</th>
            <th width="100px">Action</th>
        </tr>
        @foreach ($cars as $car)
        <tr>
            <td>{{$car->id}}</td>
			<td>{{$car->brandname}}</td>
			<td>{{$car->year}}</td>
			<td>{{$car->model}}</td>
			<td>{{$car->color}}</td>
			<td>{{$car->mileage}}</td>
			<td>{{$car->regno}}</td>
            <td><img src="/image/{{ $car->image }}" width="100px"></td>
            <td>{{$car->created_at}}</td>
			<td>{{$car->updated_at}}</td>
            <td>
                <form action="{{ route('cars.destroy',$car->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('cars.show',$car->id) }}">Show</a>&nbsp;&nbsp;<BR>
    
                    <a class="btn btn-primary" href="{{ route('cars.edit',$car->id) }}">Edit</a>&nbsp;&nbsp;<BR>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>      
@endsection