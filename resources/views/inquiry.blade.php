@extends('home_template')

@section('page_content')
<br><br><br>
<div class="row">
	<h1 class="h1-display mx-auto">Tell us more about the project you have for us</h1>
</div>
<hr>
<div class="row">
	<h2 class="h2-responsive mx-auto">STEP-1</h2>
</div>
<center>
	<div class="col-md-4">
		<hr class="mx-auto red">
	</div>
</center>

<style type="text/css">
	.big-checkbox {
		width: 30px;
		height: 30px;
		margin: 5px;
	}
	.extra-fg {
		padding: 15px;
		border-radius: 3px;
		min-width: 300px;
		background-color: #eee;
	}
	textarea {
		min-height: 150px !important;
	}
</style>

<div class="row">
	<h4 class="h4-display mx-auto">Tell us more about your project</h4>
</div>
<br>
<div class="row">
	<form class="form-inline mx-auto" id="inquiry" method="post" action="/success">
		<input type="hidden" name="_token" value=" <?php $s = csrf_token(); echo "$s";?> "  form="inquiry">
		<div class="form-group form-check extra-fg">
			<input type="checkbox" name="c1" id="c1" value="App Development" class="big-checkbox form-check-input ">
			<label for="c1" class="form-check-label"><h6>App Development</h6></label>
			
		</div>
		<div class="form-group form-check extra-fg">
			<input type="checkbox" name="c2" id="c2" value="App Development with ASO" class="big-checkbox form-check-input">
			<label for="c2" class="form-check"><h6>App Development with ASO</h6></label>
		</div>
	</form>	
</div>
<br>
<div class="col-md-8 mx-auto">
	<div class="md-form form-group mx-auto">
		<i class="fa fa-pencil prefix"></i>
	    <textarea class="md-textarea" type ="text" id="desc" placeholder="Tell us more about your project" form="inquiry"></textarea>
	</div>
</div>
<br><br>

<hr>

<div class="row">
	<h2 class="h2-responsive mx-auto">STEP-2</h2>
</div>
<center>
	<div class="col-md-4">
		<hr class="mx-auto red">
	</div>
</center>

<div class="row">
	<h4 class="h4-display mx-auto">Tell us more about yourself</h4>
</div>

<div class="row">
	<div class="col-md-2"></div>
	<div class="col-md-4">
		<div class="md-form form-group">
			<i class="fa fa-user prefix"></i>
			<input type="text" name="name" id="name" placeholder="Please enter your Name" class="form-control text-center" form="inquiry">
		</div>
	</div>
	<div class="col-md-4">
		<div class="md-form form-group">
			<i class="fa fa-flag prefix"></i>
			<input type="text" name="country" id="country" placeholder="Please enter your Country" class="form-control text-center" form="inquiry">
		</div>
	</div>
	<div class="col-md-2"></div>
</div>
<br>
<div class="row">
	<div class="col-md-2"></div>
	<div class="col-md-4">
		<div class="md-form form-group">
			<i class="fa fa-envelope prefix"></i>
			<input type="email" name="email" id="email" placeholder="Please enter your Email" class="form-control text-center validate" form="inquiry">
		</div>
	</div>
	<div class="col-md-4">
		<div class="md-form form-group">
			<i class="fa fa-phone prefix"></i>
			<input type="text" name="phone" id="phone" placeholder="Please enter your Phone" class="form-control text-center" form="inquiry">
		</div>
	</div>
	<div class="col-md-2"></div>
</div>
<br>
<div class="row">
	<div class="col-md-2"></div>
	<div class="col-md-4">
		<div class="md-form form-group">
			<i class="fa fa-building-o prefix"></i>
			<input type="text" name="company" id="company" placeholder="Please enter your Company" class="form-control text-center" form="inquiry">
		</div>
	</div>
	<div class="col-md-4">
		<div class="md-form form-group">
			<i class="fa fa-industry prefix"></i>
			<input type="text" name="Industry" id="industry" placeholder="Please enter your Industry" class="form-control text-center" form="inquiry">
		</div>
	</div>
	<div class="col-md-2"></div>
</div>
<hr>
<br><br>

<div class="row">
	<h2 class="h2-responsive mx-auto">STEP-3</h2>
</div>
<center>
	<div class="col-md-4">
		<hr class="mx-auto red">
	</div>
</center>

<div class="row">
	<h4 class="h4-display mx-auto">How do you want to hire us?</h4>
</div>

<div class="row">
	<form class="form-inline mx-auto" id="inquiry">
		<div class="form-group form-check extra-fg">
			<input type="checkbox" name="c3" id="c3" value="Fixed Price" class="big-checkbox form-check-input" form="inquiry">
			<label for="c3" class="form-check-label"><h6>Fixed Price</h6></label>
			
		</div>
		<div class="form-group form-check extra-fg">
			<input type="checkbox" name="c4" id="c4" value="Hourly Based" class="big-checkbox form-check-input" form="inquiry">
			<label for="c4" class="form-check"><h6>Hourly Based</h6></label>
		</div>
	</form>
</div>
<br>
<div class="row">
	<form class="form-inline mx-auto" id="inquiry">
		<div class="form-group form-check extra-fg">
			<input type="checkbox" name="c5" id="c5" value="Hire Developer" class="big-checkbox form-check-input" form="inquiry">
			<label for="c5" class="form-check-label"><h6>Hire Developer</h6></label>
			
		</div>
		<div class="form-group form-check extra-fg">
			<input type="checkbox" name="c6" id="c6" value="I'm not sure" class="big-checkbox form-check-input" form="inquiry">
			<label for="c6" class="form-check"><h6>Not sure</h6></label>
		</div>
	</form>
</div>
<hr>
<br><br>
<div class="row">
	<button class="btn btn-lg btn-primary mx-auto" type="submit" form="inquiry">Submit</button>
</div>

@stop
