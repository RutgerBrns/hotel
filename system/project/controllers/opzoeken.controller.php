<?php
if ($_POST) {
	$last_name = request::post('last_name', '');
	
}

//All the elements that you want to show on the page
$form = new view('opzoeken/form');

//Import the page-layout
$page_layout = new view('opzoeken/page_layout');
$page_layout->form = $form;

// set the title of the page
presenter::setTitle('Boeking Database');

// give the layout to the presenter to present
presenter::present($page_layout);

