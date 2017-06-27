<?php

//All the elements that you want to show on the page
$form = new view('invoeren/form');

//Import the page-layout
$page_layout = new view('invoeren/page_layout');
$page_layout->form = $form;

// set thte title of the page
presenter::setTitle('Invoeren');

// give the layout to the presenter to present
presenter::present($page_layout);