@extends('layouts/principal')
	@section('content')
	<div class="container">
		<div class="row">
			<div class="col-sm-1"></div>
			<div class="col-sm-10">
				<div class="panel panel-primary">
  					<div class="panel-heading">Como inscribirte en la alberca UwU</div>
  					<div class="panel-body">
  						@include('portalviews/includes/instructions')

  					</div>
				</div>
			</div>
			<div class="col-sm-1"></div>
		</div>
	</div>
	@endsection