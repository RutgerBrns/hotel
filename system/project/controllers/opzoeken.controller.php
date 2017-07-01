<?php
if (isset($_POST)) {
	if($_POST['last_name']){
		$last_name = request::post('last_name', '');
		$booking = Booking_Model::getBookingByCustomerLastName($last_name);

		$results = new view('opzoeken/results');

		//Import the page-layout
		$page_layout2 = new view('opzoeken/page_layout2');
		$page_layout2->results = $results;
		$results->booking = $booking;

		// $booking->checkin_date = $checkin_date;

		// set the title of the page
		presenter::setTitle('Boeking Database');

		// give the layout to the presenter to present
		presenter::present($page_layout2);

	}
	elseif ($_POST['checkin_date']) {
		$checkin_date = request::post('checkin_date', '');
		$booking = Booking_Model::getBookingByDate($checkin_date);

		$results = new view('opzoeken/results');

		//Import the page-layout
		$page_layout2 = new view('opzoeken/page_layout2');
		$page_layout2->results = $results;
		$results->booking = $booking;

		// set the title of the page
		presenter::setTitle('Boeking Database');

		// give the layout to the presenter to present
		presenter::present($page_layout2);
	}
	
}

if (!$_POST) {
//All the elements that you want to show on the page
$form = new view('opzoeken/form');

//Import the page-layout
$page_layout = new view('opzoeken/page_layout');
$page_layout->form = $form;

// set the title of the page
presenter::setTitle('Boeking Database');

// give the layout to the presenter to present
presenter::present($page_layout);

}