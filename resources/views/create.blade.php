@extends('master')

@section('content')

@if($errors->any())

<div class="alert alert-danger">
	<ul>
	@foreach($errors->all() as $error)

		<li>{{ $error }}</li>

	@endforeach
	</ul>
</div>

@endif

<div class="card">
	<div class="card-header">Add Student</div>
	<div class="card-body">
		<form method="post" action="{{ route('students.store') }}" enctype="multipart/form-data">
			@csrf
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Nick</label>
				<div class="col-sm-10">
					<input type="text" name="nick" class="form-control" />
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Pet Name</label>
				<div class="col-sm-10">
					<input type="text" name="pet_name" class="form-control" />
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Race</label>
				<div class="col-sm-10">
					<select name="race" class="form-control">
						<option value="Boxer">Boxer</option>
						<option value="Bulldog">Bulldog</option>
						<option value="Labrador">Labrador</option>
						<option value="Caniche">Caniche</option>
						
					</select>
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form"> Age</label>
				<div class="col-sm-10">
					<input type="text" name="Age" class="form-control" />
				</div>
			</div>
			<div class="row mb-4">
				<label class="col-sm-2 col-label-form">Pet Gender</label>
				<div class="col-sm-10">
					<select name="pet_gender" class="form-control">
						<option value="Male">Male</option>
						<option value="Female">Female</option>
					</select>
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Color</label>
				<div class="col-sm-10">
					<input type="text" name="Color" class="form-control" />
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Human Name</label>
				<div class="col-sm-10">
					<input type="text" name="Human_name" class="form-control" />
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Phone</label>
				<div class="col-sm-10">
					<input type="text" name="Phone" class="form-control" />
				</div>
			</div>
			<div class="row mb-4">
				<label class="col-sm-2 col-label-form">pet Image</label>
				<div class="col-sm-10">
					<input type="file" name="student_image" />
				</div>
			</div>
			<div class="text-center">
				<input type="submit" class="btn btn-primary" value="Add" />
			</div>	
		</form>
	</div>
</div>

@endsection('content')
