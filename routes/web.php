<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

/* NOTES ONLY DONT UNCOMMENT ANY OF THIS

Route::get('/hello', function (){
   return response("Hello World", 200);
});

//wild cards
Route::get('/posts/{id}', function($id){
    return response( 'Post ' . $id);
})->where('id' , '[0-9]+'); // regex constraint 
 
// Request Query param display?nom=John&prenom=Doe
Route::get('/display', function(Request $request){
    return $request->nom . ' ' . $request->prenom;
});
*/