<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $nome = "Matheus";
    $idade = 29;
    return view('welcome', ['nome' => $nome, 'idade' => $idade, 'profissao' => "Programador"]);
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/produtos', function () {
    return view('products');
});