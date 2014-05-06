@extends('housing/searchBar')

@section('xtraContent')

<div class="panel" style="padding: 5px 100px; margin-top: -30px;">
	
	@foreach ($housing_listings as $listing)
	<div class="row">
		<h4>
			<?php $pic = json_decode($listing->images->first(), true); ?>
			@if ($pic != null)
			<img src="{{URL::asset( 'images/' . $pic['filename'] ); }}" width="50px"/>
			@endif
			
			<a href="{{ action('HousingController@viewListing', $listing->id) }}">{{ $listing->title }}</a> - ${{ $listing->rent }} / {{ $listing->bedrooms }}br ({{ $listing->city }}, GA)
			
			@if ($pic != null)
			<label style="color: orange;">pic</label>
			@endif
		</h4>
	</div>
	@endforeach
	
	{{ $housing_listings->links() }}
	
</div>

@stop