<?php

Route::get('calculator', function(){
    echo 'Hello from the calculator package!';
});

Route::get('add/{a}/{b}', 'Datlt\Calculator\CalculatorController@add');
Route::get('subtract/{a}/{b}', 'Datlt\Calculator\CalculatorController@subtract');