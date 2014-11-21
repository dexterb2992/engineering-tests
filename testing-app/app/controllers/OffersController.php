<?php

class OffersController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /offers
	 *
	 * @return Response
	 */
	public function index()
	{
		$user = User::all()->first();
		return View::make('frontend.index')->withUser($user);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /offers/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /offers
	 *
	 * @return Response
	 */
	public function find()
	{
		$budget = Input::get('budget');
		$location = Input::get('location');
		$guests = Input::get('guests');
		$cuisine = Input::get('cuisine');
		$time = Input::get('time');

		Session::put('budget', $budget);
		Session::put('location', $location);
		Session::put('guests', $guests);
		Session::put('cuisine', $cuisine);
		Session::put('time', $time);

		$restaurants = Restaurant::raw("(guest_max <= '.$guests.' and guest_min >= '.$guests.') 
			and (address_street like '".$location."' or address_city like '".$location."' or address_state like 
				'".$location."' or address_country like '".$location."') and is_active='1' and
			")->get();

		$restaurants_final= new \Illuminate\Database\Eloquent\Collection;
		foreach ($restaurants as $restaurant) {
			$min_price = $restaurant->meals()->min('price');
			if( $budget >= $min_price ){

				$restaurants_final->add($restaurant);
			}

		}


		return View::make('frontend.results')->withRestaurants($restaurants_final)
			->withTitle('Here are the list of restaurants you might like to try!');
	}

	public function take(){
		$restaurant_id = Input::get('offer');

		$user = User::find(1);
		$offerstaken = $user->offerstaken()->get();

		foreach ($offerstaken as $offer) {
			if( $offer->time_of_meal == Session::get('time') ){
				return Redirect::back()->withInput()->withTitle("Sorry we can't process your request right now.")
					->withErrors('You are not available at this time '.$Session::get('time'));
			}
		}
		
		$taken = new OfferTaken;
		$taken->budget = Session::get('budget');
		$taken->time_of_meal = Session::get('time');
		$taken->guests_number = Session::get('guests');
		$taken->user_id = 1;
		$taken->restaurant_id = $restaurant_id;

		if($taken->save()){
			return Redirect::to('offers-taken')->withTitle('Offers you have taken');
		}

		return Redirect::back()->withInput()->withTitle("Sorry we can't process your request right now.");


	}

	public function offerstaken(){
		$user = User::find(1);
		$offerstaken = $user->offerstaken()->get();

		return View::make('frontend.offerstaken')->withTitle('Offers you have taken')->with('offerstaken',$offerstaken);
	}

}