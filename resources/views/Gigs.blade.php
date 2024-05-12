

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel Gigs</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    
    </head>
    <body class="font-sans antialiased  dark:bg-black dark:text-white/50">
    @extends('layout')
    @section('content')
    @include('partials._hero')
    @include('partials._search')
    <h1>{{ $heading }}</h1>
   <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">
    @if (count($Gigs) == 0)
    <h2>No Gigs found</h2>
    @endif

     @foreach ($Gigs as $gig)
     
    <x-gig-card :gig='$gig'/>

    @endforeach 
    
    </div>
    @endsection 
   
    </body>
</html>
