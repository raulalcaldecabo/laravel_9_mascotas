@extends('master')

@section('content')

@if($message = Session::get('success'))

<div class="alert alert-success">
	{{ $message }}
</div>

@endif

<div class="card">
	<div class="card-header">
		<div class="row">
			<div class="col col-md-6"><b>Pet Data</b></div>
			<div class="col col-md-6">
				<a href="{{ route('students.create') }}" class="btn btn-success btn-sm float-end">Add</a>
			</div>
		</div>
	</div>
	<div class="card-body">
		<table class="table table-bordered">
			<tr>
				<th>Image</th>
				<th>nick</th>
				<th>pet</th>
				<th>race</th>
				<th>Age</th>
				<th>Gender</th>
				<th>color</th>
				<th>Human name</th>
				<th>phone</th>
				<th>Action</th>
			</tr>
			@if(count($data) > 0)

				@foreach($data as $row)

					<tr>
						<td><img src="{{ asset('images/' . $row->student_image) }}" width="75" /></td>
						<td>{{ $row->nick }}</td>
						<td>{{ $row->pet_name }}</td>
						<td>{{ $row->race }}</td>
						<td>{{ $row->Age }}</td>
						<td>{{ $row->pet_gender }}</td>
						<td>{{ $row->Color }}</td>
						<td>{{ $row->Human_name }}</td>
						<td>{{ $row->Phone }}</td>
						<td>
							<form method="post" action="{{ route('students.destroy', $row->id) }}">
								@csrf
								@method('DELETE')
								<input type="submit" class="btn btn-danger btn-sm" value="Delete" />
							</form>
							
						</td>
					</tr>

				@endforeach

			@else
				<tr>
					<td colspan="5" class="text-center">No Data Found</td>
				</tr>
			@endif
		</table>
		{!! $data->links() !!}
	</div>
</div>

@endsection