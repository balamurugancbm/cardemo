@extends('layouts.app')
   
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Car</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('cars.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
    <form action="{{ route('cars.update',$car->id) }}" method="POST" enctype="multipart/form-data"> 
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Brandname:</strong>
				<input type="text" name="brandname" class="form-control" placeholder="Brandname" required="required" maxlength="100" value="{{ $car->brandname }}" style="width: 400px;">
            </div>
        </div>
		<div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Year:</strong>

				<select id="year" class="form-control" name="year" required="required" style="width: 200px;">
					<option value="">Select Year</option>
					{{ $year = date('Y') }}
					@for ($year = 2000; $year <= 2020; $year++)

						@if ($car->year == $year)
							<option value="{{ $year }}" selected>{{ $year }}</option>
						@else
							<option value="{{ $year }}">{{ $year }}</option>
						@endif

					@endfor
				</select>
            </div>
        </div>
		<div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
			
                <strong>Model:</strong>
				{{ Form::select('model', ['' => 'Select Model', '140 D' => '140 D', '240 D' => '240 D', 'SLS CLASS' => 'SLS CLASS', 'SLK CLASS' => 'SLK CLASS', 'VIANO' => 'VIANO', 'WAGON' => 'WAGON', 'Saloon' => 'Saloon', 'GLA CLASS' => 'GLA CLASS', 'AVEO U VA' => 'AVEO U VA', 'CRUZE HATCHBACK' => 'CRUZE HATCHBACK', 'FORESTER' => 'FORESTER', 'OPTRA MAGNUM' => 'OPTRA MAGNUM', 'TRAILBLAZER' => 'TRAILBLAZER', '800' => '800',], $car->model, ['id' => 'model','required' => 'required','class'=>'form-control','style'=>'width: 200px']) }}
            </div>
        </div>
		<div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Color:</strong>
				{{ Form::select('color', ['' => 'Select Color', 'Copperhead Pearl' => 'Copperhead Pearl', 'Western Brown' => 'Western Brown', 'True Blue' => 'True Blue', 'Black Gold' => 'Black Gold', 'Prairie Pearl Coat' => 'Prairie Pearl Coat', 'Case IH Red' => 'Case IH Red', 'Construction Yellow' => 'Construction Yellow', 'Opulent Blue' => 'Opulent Blue', 'Silver Coast' => 'Silver Coast', 'Glacier Blue' => 'Glacier Blue', 'Mocha Steel' => 'Mocha Steel', 'Radiant Silver' => 'Radiant Silver', 'Sapphire Blue' => 'Sapphire Blue', 'Black Ice' => 'Black Ice'], $car->color, ['id' => 'color','required' => 'required','class'=>'form-control','style'=>'width: 200px']) }}
            </div>
        </div>
		<div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Mileage:</strong>
				<select id="mileage" class="form-control" name="mileage" required="required" style="width: 200px;">
					<option value="">Select Mileage</option>
					@for ($m = 5; $m <= 20; $m++)
						@if ($car->mileage == $m)
							<option value="{{ $m }}kmpl" selected>{{ $m }}kmpl</option>
						@else
							<option value="{{ $m }}kmpl">{{ $m }}kmpl</option>
						@endif

					@endfor
				</select>
            </div>
        </div>
		<div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Registration No:</strong>
                <input type="text" name="regno" class="form-control" placeholder="Registration No" required="required" maxlength="15" value="{{ $car->regno }}" pattern="^[A-Za-z]{2}[ -][0-9]{1,2}(?: [A-Za-z])?(?: [A-Za-z]*)? [0-9]{4}$" title="AA 01 AA 1234" style="width: 200px;">
            </div>
        </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Detail:</strong>
                    <textarea class="form-control" style="height:150px;width: 400px;" name="detail" placeholder="Detail">{{ $car->detail }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Image:</strong>
                    <input type="file" name="image" class="form-control" placeholder="image" style="width: 400px;"><BR>
                    <img src="/image/{{ $car->image }}" width="300px">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
			<div class="col-xs-12 col-sm-12 col-md-12 text-center">&nbsp;&nbsp;</div>
        </div>
   
    </form>
</div> 
@endsection