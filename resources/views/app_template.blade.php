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
			&nbsp&nbsp&nbsp&nbsp&nbsp @yield('link2')
		</div>
	</div>
	<style type="text/css">
		.row-box {
			height: 600px;
		}
	</style>
	<div class="row row-box flex-center view hm-black-strong">
		<img src="images/fwbi.jpg" class="img-fluid">
		<div class="mask flex-center">
			<div class="col-lg-4">
				<img src="@yield('img1')" class="img-fluid">
			</div>	
			<div class="col-lg-8 amber-text text-center animated fadeInUp">
				<p class="lead">
					@yield('text1')
				</p>
				<br>
				<small><a href="http://www.freepik.com">Background Designed by Makyzz / Freepik</a></small>
			</div>
		</div>	
	</div>

	<br><br>

	<div class="row row-box flex-center view hm-black-strong">
		<img src="images/fwbi.jpg" class="img-fluid">
		<div class="mask flex-center">
			<div class="col-lg-8 amber-text text-center animated fadeInUp">
				<p class="lead">
					@yield('text2')
				</p>
				<br>
				<small><a href="http://www.freepik.com">Background Designed by Makyzz / Freepik</a></small>
			</div>
			<div class="col-lg-4">
				<img src="@yield('img2')" class="img-fluid">
			</div>	
		</div>	
	</div>

	<br><br>

	<div class="row row-box flex-center view hm-black-strong">
		<img src="images/fwbi.jpg" class="img-fluid">
		<div class="mask flex-center">
			<div class="col-lg-4">
				<img src="@yield('img3')" class="img-fluid">
			</div>	
			<div class="col-lg-8 amber-text text-center animated fadeInUp">
				<p class="lead">
					@yield('text3')
				</p>
				<br>
				<small><a href="http://www.freepik.com">Background Designed by Makyzz / Freepik</a></small>
			</div>
		</div>	
	</div>

	<br><br>

	<div class="row row-box flex-center view hm-black-strong">
		<img src="images/fwbi.jpg" class="img-fluid">
		<div class="mask flex-center">
			<div class="col-lg-8 amber-text text-center animated fadeInUp">
				<p class="lead">
					@yield('text4')
				</p>
				<br>
				<small><a href="http://www.freepik.com">Background Designed by Makyzz / Freepik</a></small>
			</div>
			<div class="col-lg-4">
				<img src="@yield('img4')" class="img-fluid">
			</div>	
		</div>	
	</div>

	@yield('extra')

@stop