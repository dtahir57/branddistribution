<?php

Route::get('calculator', function(){
	echo 'Hello from the calculator package!';
});

Route::get('add/{a}/{b}', 'Fanbox\Calculator\CalculatorController@add');
Route::get('subtract/{a}/{b}', 'Fanbox\Calculator\CalculatorController@subtract');