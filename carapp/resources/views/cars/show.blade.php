@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>View Car Details</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('cars.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Brandname:</strong>
                {{ $car->brandname }}
            </div>
        </div>
		<div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Year:</strong>
                {{ $car->year }}
            </div>
        </div>
		<div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>model:</strong>
                {{ $car->model }}
            </div>
        </div>
		<div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Color:</strong>
                {{ $car->color }}
            </div>
        </div>
		<div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Mileage:</strong>
                {{ $car->mileage }}
            </div>
        </div><div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Registration No:</strong>
                {{ $car->regno }}
            </div>
        </div>
		<div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Created:</strong>
                {{ $car->created_at }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Details:</strong>
                {{ $car->detail }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Image:</strong>
                <img src="/image/{{ $car->image }}" width="500px">
            </div>
        </div>
		<div class="col-xs-12 col-sm-12 col-md-12 text-center">&nbsp;&nbsp;</div>
    </div>
</div> 
@endsection