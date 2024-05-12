
<x-layout>
    @include('partials._hero')
    @include('partials._search')
   
   <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">
    @if (count($Gigs) == 0)
    <h2>No Gigs found</h2>
    @endif

     @foreach ($Gigs as $gig)
     
    <x-gig-card :gig='$gig'/>

    @endforeach 
    
    </div>
    </x-layout>
