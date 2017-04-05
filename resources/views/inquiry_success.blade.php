@extends('home_template')

@section('page_content')
<br><br><br>
<div class="row">
	<div class="col-mdd-10 text-center mx-auto">
		<h1 class="h1-display">Your response has been recorded</h1>
		<h2 class="h2-display">We will get back to you shortly</h2>
		<h5>
			{{ var_dump($_POST) }}
		</h5>
	</div>
</div>
@stop