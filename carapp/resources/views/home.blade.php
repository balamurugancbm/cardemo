@extends('layouts.app')

@section('content')
<style>
.car_title {
	font-weight: 600;
    color: #444;
}
.car_info {
    text-align: center;
    margin: 5px 2px;
    padding: 3px 5px 3px 5px;
    border-radius: 4px;
    display: inline-block;
    font-weight: 400;
    -webkit-font-smoothing: antialiased;
    -moz-font-smoothing: antialiased;
    font-smoothing: antialiased;
    color: #565656;
    font-size: 12px;
    border: 1px solid #565656;
}
.card {	
    height: 350px;
}
</style>
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h1>Welcome to Car Marketplace</h1>
				<h3>Recent Car Listings</h3>
            </div>
		</div>
    </div>
	<div class="row">
        @foreach ($cars as $car)

		<div class="col-lg-4">
			<div class="card" >
				<img src="/image/{{ $car->image }}" class="card-img-top" alt="{{$car->brandname}}" width="350px" class="img-fluid">
				<div class="card-body">
					<div class="car_title">{{$car->brandname}}</div>
					<div class="car_info">{{$car->year}}</div>
					<div class="car_info">{{$car->model}}</div>
					<div class="car_info">{{$car->color}}</div>
					<div class="car_info">{{$car->mileage}}</div>
					<div class="car_info">{{$car->regno}}</div>
				</div>
			</div>
		</div>
        @endforeach
    </table>


   </div>   
</div>

@endsection