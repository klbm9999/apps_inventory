@extends('home_template')

@section('page_content')
<br><br><br>
	<style type="text/css">
		.img-small {
			width: 15%;
			height: 30%;
		}
	</style>
	<div class="row">
		<h4 class="display-4 mx-auto">
		@yield('app_name')
		</h4>
	</div>
	<div class="row">
		<h5 class="display-5 mx-auto">
		@yield('app_maker')
		</h5>
	</div>
		<hr>
	<div class="row">
		<img src="images/@yield('app_image') " class="img-small mx-auto">
	</div>
	<br>
	<div class="row">
		<div class="col-lg-7">
			<p class="lead">About</p>
			<p class="text-justify">
				@yield('app_description')
			</p>
		</div>
		<div class="col-lg-1"></div>
		<div class="col-lg-4">
			<a href="@yield('app_link')">
				<img src="images/gplay.png" class="img-fluid">
			</a>
		</div>
	</div>

@stop