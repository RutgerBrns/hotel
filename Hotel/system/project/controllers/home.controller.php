<?php

//All the elements that you want to show on the page
$title = new view('home/title');

//Import the page-layout
$page_layout = new view('home/page_layout');
$page_layout->title = $title;

// set thte title of the page
presenter::setTitle('Homepage');

// give the layout to the presenter to present
presenter::present($page_layout);