@extends('layout')

@section('content')

<div class="page-header">
	<h3>Post New Housing Listing</h3>
</div>

<form class="form-horizontal" action="{{ action('HousingController@handleAddPost') }}" method="post" role="form">
	<div class="form-group col-md-9" style="margin-right: 5px;">
		<label class="control-label">Title</label>
		<input type="text" class="form-control" name="title"/>
	</div>

	<div class="form-group col-md-2" style="margin-right: 5px;">
		<label class="control-label">City</label>
		<input type="text" class="form-control" name="city"/>
	</div>
	
	<div class="form-group col-md-1">
		<label class="control-label">State</label>
		<input type="text" class="form-control" value="GA" disabled="disabled"/>
	</div>

	<div class="form-group col-md-12">
		<label class="control-label">Body</label>
		<textarea class="form-control" rows="10" name="body"></textarea>
	</div>

	<div class="form-group col-md-2"  style="margin-right: 5px;">
		<label class="control-label">Rent</label>
		<input type="text" class="form-control" placeholder="$ asking" name="rent"/>
	</div>

	<div class="form-group col-md-2" style="margin-right: 5px;">
		<label class="control-label">Distance</label>
		<select class="form-control"  style="padding-left: 10px;" name="distance">
			<option value="">from GGC</option>
			<option value="5">within 5 miles</option>
			<option value="10">within 10 miles</option>
			<option value="15">within 15 miles</option>
			<option value="20">within 20 miles</option>
			<option value="25">within 25 miles</option>
		</select>
	</div>

	<div class="form-group col-md-2" style="margin-right: 5px;">
		<label class="control-label">Type</label>
		<select class="form-control" name="type">
			<option value="apartment">apartment</option>
			<option value="condo">condo</option>
			<option value="duplex">duplex</option>
			<option value="townhouse">townhouse</option>
			<option value="house">house</option>
		</select>
	</div>

	<div class="form-group col-md-2">
		<label class="control-label">Bedrooms</label>
		<select class="form-control" name="bedrooms">
			<option value="">select</option>
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="5">5</option>
		</select>
	</div>

	<div class="form-group col-md-12">
		<input type="submit" class="btn btn-primary" value="Post" />
		<a href="{{ action('HousingController@showListings') }}" class="btn btn-danger">cancel</a>
	</div>
</form>

@stop