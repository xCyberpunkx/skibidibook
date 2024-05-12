<?php

use App\Http\Controllers\gigController;
use Illuminate\Support\Facades\Route;
use App\Models\Gig;

// main
Route::get('/', [gigController::class,'index']);

// will redirect the selected gig by its id from the gigs page 
Route::get('/Gigs/{gig}',[gigController::class, 'show']);


/* NOTES ONLY DO NOT UNCOMMENT ANY OF THIS

Route::get('/hello', function (){
   return response("Hello World", 200);
});

//wild cards
Route::get('/posts/{id}', function($id){
    return response( 'Post ' . $id);
})->where('id' , '[0-9]+'); // regex constraint 
 

// Request Query param display?nom=John&prenom=Doe
use Illuminate\Http\Request;
Route::get('/display', function(Request $request){
    return $request->nom . ' ' . $request->prenom;
});
*/