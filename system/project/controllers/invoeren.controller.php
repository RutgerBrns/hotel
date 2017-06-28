<?php

if ($_POST) {
	$first_name = request::post('first_name', '');
	$last_name = request::post('last_name', '');
	$email = request::post('email', '');
	$phone = request::post('phone', '');
	$address = request::post('address', '');
	$city = request::post('city', '');
	$zip = request::post('zip', '');
	$incheck_date = request::post('incheck_date', '');
	$incheck_time = request::post('incheck_time', '');
	$departure_date = request::post('departure_date', '');
	$apartment = request::post('apartment', '');
	$adults = request::post('adults', '');
	$kids = request::post('kids', '');
	$breakfast = request::post('breakfast', '');
	$comments = request::post('comments', '');

	$overview = new view('invoeren/overview');

	//Import the page-layout
	$page_layout2 = new view('invoeren/page_layout2');
	$page_layout2->overview = $overview;
	$overview->first_name = $first_name;
	$overview->last_name = $last_name;
	$overview->email = $email;
	$overview->phone = $phone;
	$overview->address = $address;
	$overview->city = $city;
	$overview->zip = $zip;
	$overview->incheck_date = $incheck_date;
	$overview->incheck_time = $incheck_time;
	$overview->departure_date = $departure_date;
	$overview->apartment = $apartment;
	$overview->adults = $adults;
	$overview->kids = $kids;
	$overview->breakfast = $breakfast;
	$overview->comments = $comments;


	// set thte title of the page
	presenter::setTitle('Invoeren');

	// give the layout to the presenter to present
	presenter::present($page_layout2);

}


if (!$_POST) {
	//All the elements that you want to show on the page
	$form = new view('invoeren/form');

	//Import the page-layout
	$page_layout = new view('invoeren/page_layout');
	$page_layout->form = $form;

	// set thte title of the page
	presenter::setTitle('Invoeren');

	// give the layout to the presenter to present
	presenter::present($page_layout);

}