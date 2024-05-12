<?php

namespace App\Http\Controllers;
use App\Models\gig;
use Illuminate\Http\Request;

class gigController extends Controller
{
    // show all gigs
    public function index()
    {
       
        return view('gigs.index', [
            'Gigs' => Gig::latest()->filter(request(['tag']))->get()
        ]);
    }
    // show single gig
    public function show(gig $gig)
    {
        return view('gigs.show',
        ['gig' => $gig]);
    }
}
