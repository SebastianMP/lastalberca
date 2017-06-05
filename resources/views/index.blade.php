@extends('layouts.principal')
@section('content')
	<div class="container">
      <div class="row">
        <div class="col-sm-8">
            @include('pool/pool')
        </div>
        <div class="col-sm-4">
            @include('mainoption/options')                
        </div>
      </div>
		<br>
		<br>
		<br>
	</div>
@stop