<?php

//All the elements that you want to show on the page
$form = new view('klant/form');

//Import the page-layout
$page_layout = new view('klant/page_layout');
$page_layout->form = $form;

// set thte title of the page
presenter::setTitle('Klanten Database');

// give the layout to the presenter to present
presenter::present($page_layout);