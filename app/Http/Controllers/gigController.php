<?php

namespace App\Http\Controllers;
use App\Models\gig;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
class gigController extends Controller
{
    // show all gigs
    public function index()
    {
       
        return view('gigs.index', [
            'Gigs' => Gig::latest()->filter(request(['tag', 'search']))->get()
        ]);
    }


    public function create()
    {
        return view('gigs.create');
    }


    //form submition validation logic
    public function store(Request $request)
    {
       
        
        $formFields = $request->validate([

            'title' => 'required',
            'company' => ['required', Rule::unique('gigs', 'company')],
            'email' => ['required', 'email', Rule::unique('gigs', 'email')],
            'location' => 'required',
            'website' => 'required',
            'description' => 'required',
            'tags' => 'required',
        ]);

       gig::create($formFields);

        return redirect('/')->with('message',' Gig created Successfully');
    }


    // show single gig
    public function show(gig $gig)
    {
        return view('gigs.show',
        ['gig' => $gig]);
    }

   
}
