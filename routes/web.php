<?php


use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Gigs', [

        'heading' => 'Latest Gigs',
        'Gigs' => [
            [
                'id' => 1 ,
                'title' => 'First Gig',
                'description' => 'Lorem ipsum sit dolor amet'
             ],
             [
                'id' => 2 ,
                'title' => 'seconde Gig',
                'description' => 'Lorem ipsum sit dolor amet'
            ]
        ]
    ]);
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
use Illuminate\Http\Request;
Route::get('/display', function(Request $request){
    return $request->nom . ' ' . $request->prenom;
});
*/