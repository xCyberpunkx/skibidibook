<?php


use Illuminate\Support\Facades\Route;
use App\Models\Gig;

// main
Route::get('/', function () {
    return view('Gigs', [

        'heading' => 'Latest Gigs',
        'Gigs' => Gig::all()
    ]);
});

// will redirect the selected gig by its id from the gigs page 
Route::get('/Gigs/{id}', function($id){
  
    $gig = Gig::find($id); //fetching the  id from the gig model
    
  // handles the id param if sent to the url 
    
  if($gig){
    return view('gig', [
        'gig' => $gig
        
    ]);
}else
{
    abort('404');
}
});


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