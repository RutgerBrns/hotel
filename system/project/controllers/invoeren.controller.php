<?php

if ($_POST) {
    $first_name     = request::post('first_name', '');
    $last_name      = request::post('last_name', '');
    $email          = request::post('email', '');
    $phone          = request::post('phone', '');
    $address        = request::post('address', '');
    $city           = request::post('city', '');
    $country        = request::post('country', '');
    $zip            = request::post('zip', '');
    $checkin_date   = request::post('checkin_date', '');
    $checkin_time   = request::post('checkin_time', '');
    $departure_date = request::post('departure_date', '');
    $apartment_id   = request::post('apartment_id', '');
    $adults         = request::post('adults', '');
    $kids           = request::post('kids', '');
    $breakfast      = request::post('breakfast', '');
    $comments       = request::post('comments', '');

    $overview = new view('invoeren/overview');

    //Import the page-layout
    $page_layout2             = new view('invoeren/page_layout2');
    $page_layout2->overview   = $overview;
    $overview->first_name     = $first_name;
    $overview->last_name      = $last_name;
    $overview->email          = $email;
    $overview->phone          = $phone;
    $overview->address        = $address;
    $overview->city           = $city;
    $overview->zip            = $zip;
    $overview->checkin_date   = $checkin_date;
    $overview->checkin_time   = $checkin_time;
    $overview->departure_date = $departure_date;
    $overview->apartment_id   = $apartment_id;
    $overview->adults         = $adults;
    $overview->kids           = $kids;
    $overview->breakfast      = $breakfast;
    $overview->comments       = $comments;

    // set thte title of the page
    presenter::setTitle('Invoeren');

    // give the layout to the presenter to present
    presenter::present($page_layout2);

}

if (isset($_POST['confirm'])) {
    Customer_Model::createCustomer($first_name, $last_name, $email, $phone, $address, $city, $zip, $country);
    Booking_Model::createBooking($apartment_id, $checkin_date, $checkin_time, $departure_date, $adults, $kids, $breakfast, $comments);

    // set thte title of the page
    presenter::setTitle('Invoeren');

    // give the layout to the presenter to present
    $success = new view('invoeren/success');
    presenter::present($success);
}

if (!$_POST) {
    //All the elements that you want to show on the page
    $form = new view('invoeren/form');

    //Import the page-layout
    $page_layout       = new view('invoeren/page_layout');
    $page_layout->form = $form;

    // set thte title of the page
    presenter::setTitle('Invoeren');

    // give the layout to the presenter to present
    presenter::present($page_layout);

}
