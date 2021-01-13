@extends('layouts.master')
@section('content')
                <Home></Home>

	<div class="container mt-top-10">
		<div class="btn-group" role="group" aria-label="Basic radio toggle button group">
			<input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked>
			<label class="btn btn-outline-primary" for="btnradio1">Name</label>

			<input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
			<label class="btn btn-outline-primary" for="btnradio2">Phone Number</label>

			<input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
			<label class="btn btn-outline-primary" for="btnradio3">Address</label>
		</div>



		<form action="/search" method="POST" role="search">
			{{ csrf_field() }}
			<div class="input-group">
				<input type="text" class="form-control" name="q"
					placeholder="Search By users and Address in first letter capital Like'Minhaz' or Mirpur">
					<button type="submit" class="btn btn-info">
						Search
					</button>
				
			</div>
		</form>
			@if(isset($details))
			<p> The Search results are showing <b style="color:#08c1ea"> {{ $query }} </b></p>
			<h2 align="center"> User details</h2>
			<table class="table table-striped">
				<thead>
					<tr>
						<th>ID</th>	
						<th>Name</th>
						<th>phone</th>
						<th>Address</th>
					</tr>
				</thead>
				<tbody>
					@foreach($details as $user)
					<tr>
						<td>{{$user->id}}</td>	
						<td>{{$user->name}}</td>
						<td>{{$user->phone}}</td>
						<td>{{$user->address}}</td>
					</tr>
					@endforeach
				</tbody>
			</table>
			@elseif(isset($message))
			<p>{{ $message }}</p>
			@endif

			@if(isset($moredetails))
			<a class="nav-link btn btn-info" href="#search_id" data-toggle="modal">Search By Number</a>
			<!-- Login popup menu -->
				<!-- Modal -->
				<div class="modal fade" id="search_id" tabindex="-1" aria-labelledby="login_id" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="search_id">Advencs Search By Number</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
					<form action="/search_By_number" method="POST" role="search">
						{{ csrf_field() }}
						<div class="input-group">
							<input type="number" class="form-control" name="q"
								placeholder="Search By users number">
								<button type="submit" class="btn btn-info">
									Search
								</button>
						</div>
					</form>
					</div>
					
					</div>
				</div>
				</div>
				<!-- end login popup menu -->
			@endif
	</div>
		
		
@endsection

