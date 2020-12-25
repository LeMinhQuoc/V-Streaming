@extends('master')
@section('content')
<?php session_start(); 
?>
<div class="p-md-3">
	<h5>Movie posting</h5>
	<hr class="hr-custom">
	<form class="addform" action="{{ route('saveFilm') }}"method="post">
		@csrf
		<input type="" name="id" hidden="" >
		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Name</label>
			<div class="col-sm-10">
				<input type="" name="name" >
			</div>
		
			<label class="col-sm-2 col-form-label">Img</label>
			<div class="col-sm-10">
				<input type="file" name="image" id="name">
			</div>
			<label class="col-sm-2 col-form-label">Director</label>
			<div class="col-sm-10">
				<input type="" name="director" >
			</div>
			<label class="col-sm-2 col-form-label">Released</label>
			<div class="col-sm-10">
				<input type="date" name="released" >
			</div>

			<label class="col-sm-2 col-form-label">Link</label>

			<div class="col-sm-10">
				<input type="" name="link" >
			</div>
			<label class="col-sm-2 col-form-label">Sumary</label>
			<div class="col-sm-10">
				
				<textarea type="" name="sumary" ></textarea>
			</div>
			<label class="col-sm-2 col-form-label">Nation</label>
			<div class="col-sm-10">
				
				<input type="" name="nation" ></input>
			</div>
			<label class="col-sm-2 col-form-label">Serie type</label>
			<div class="col-sm-10">
				
				<select name="serie">
					<option value='1'>Serie Film</option>
					<option value='0'>One Ep</option>
				</select>
			</div>
			<label class="col-sm-2 col-form-label">Type</label>
			<div class="col-sm-10">
				
				<select name="type">
					<option value='1'>Sciene fiction</option>
					<option value='2'>Horror</option>
					<option value='3'>Romantic</option>
					<option value='4'>Historical</option>
				</select>
			</div>

			<div class="col-md-2 "> 
				<button>Submit</button>
			</div>
		</div>
	</form>
</div>
@endsection