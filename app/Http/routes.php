<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$app->get('/', function () use ($app) {
    return view('layout');
});

$app->get('ecv', function(){ 
        return redirect('/extended-curriculum-vitae-aug2016.pdf'); 
});

$app->get('resume', function(){ 
        return redirect('/resume-aug2016.pdf'); 
});

