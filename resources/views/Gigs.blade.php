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
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
      
    <h1>{{ $heading }}</h1>

    @if (count($Gigs) == 0)
    <h2>No Gigs found</h2>
    @endif

     @foreach ($Gigs as $gig)
     <h2>  {{ $gig['id'] }} </h2>
    <h3>  {{ $gig['title'] }} </h3>
    <h3>  {{ $gig['description'] }} </h3>
    @endforeach 
        
    </body>
</html>
