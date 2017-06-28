<?php

//All the elements that you want to show on the page
$agenda = new view('bekijken/agenda');

//Import the page-layout
$page_layout = new view('bekijken/page_layout');
$page_layout->agenda = $agenda;

// set thte title of the page
presenter::setTitle('Agenda');

// give the layout to the presenter to present
presenter::present($page_layout);