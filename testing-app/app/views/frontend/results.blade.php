@extends('layouts.default')

@section('content')
	@if( count($restaurants) )
		{{ Form::open( array('action'=>'OffersController@take') ) }}
			<div class="lists">
				@foreach($restaurants as $restaurant)
					<div class="restaurant">
						<div class="name">
							<input type="checkbox" name="offer" value="{{ $restaurant->id }}" class="checkboxClass">Choose this offer<br/>
							{{ $restaurant->name }}
						</div>
						<div class="address">
							{{ $restaurant->address_street.','.$restaurant->address_state.','.$restaurant->address_city.','.$restaurant->address_country }}
						</div>
						<div class="meals">
							@foreach($restaurant->meals()->get() as $meal)
							<div class="entry">
								<div class="name">
									{{ $meal->name }}
								</div>
								<div class="price">
									<span>Price: </span>{{ $meal->price }}
								</div>
							</div>
							@endforeach
						</div>
					</div>
					<hr>
				@endforeach
			</div>
			<div class="submit">
				<input type="submit" value="Submit">
			</div>
		</form>
	@else
		<div>
			<p>Sorry, we can't give you any offer.<br> <a href="{{ URL::to('/') }}">Go Back</a> </p>
		</div>
	@endif
@stop