<?php

if ($_POST) {
	
	$last_name = request::post('last_name', '');
	$overview = new view('invoeren/overview');
	$customer = Customer_Model::getCustomerByLastName($last_name);
	$overview->customer = $customer;

	//Import the page-layout
	$page_layout2 = new view('invoeren/page_layout2');
	$page_layout2->overview = $overview;	
	

	// set thte title of the page
	presenter::setTitle('Invoeren');

	// give the layout to the presenter to present
	presenter::present($page_layout2);

}


//All the elements that you want to show on the page
$form = new view('klant/form');
$customers = Customer_Model::getAllCustomers();
var_dump($customers);

//Import the page-layout
$page_layout = new view('klant/page_layout');
$page_layout->form = $form;
$form->customers = $customers;

// set thte title of the page
presenter::setTitle('Klanten Database');

// give the layout to the presenter to present
presenter::present($page_layout);