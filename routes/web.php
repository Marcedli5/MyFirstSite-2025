<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return "hello world";
});

/*Route::get('/valami', function () {
    return view('valami');
});*/

Route::get('/contact', function () {
    return view(view:'contact');
});


Route::get('/tomb-visszaad', function ()
{
  $tomb = ["kulcs" => "ertek"];
  return $tomb["kulcs"];
});

Route::get('udvozles',function ()
{

    $name="madar32";
    $kor=19;

    return view("udvozles",
    [
        "nev" => $name

    ],
    [
        "koor" => $kor
    ]


);

});

Route::get('/sajatBevasarloLista', function ()
{
  $tomb2 = ["tejfol","tej","liszt","chips","sor"];

  return view("sajatBevasarloLista",['bevasarloLista' =>$tomb2]);
});

Route::get('/userInput', function ()
{

    return view("userInput",
    [

         "input" => request("Felhasznalonev"),
         "vnev"=>request("vezeteknev"),
         "knev"=>request("keresztnev")

    ]);

});
