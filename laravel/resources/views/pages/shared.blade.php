<!-- Het eerste wat je ziet als je op Shared Watchlist klikt -->
@extends('layouts.app')

@section('content')
    <h1>Shared Watchlist</h1>
    <br>
    <!--Als er posts zijn in de db-->
    @if(count($watchlist)>4)
        @foreach($watchlist as $watch)
            <div class="well">
                <div class="row">                   
                    <!--Rechts Tekst-->
                    <div class="col-md-8 col-sm-8">
                        <ul style="list-style-type:square">
                            <li>
                                <h3><a href="/sharedlist/{{$watch->id}}">{{$watch->title}}</a></h3>
                                <small>Written on {{$watch->created_at}} by {{$watch->user->name}}</small>
                            </li>
                        </ul>
                    </div>
                    
                </div>
                <br>
            </div>
        @endforeach

        <!--Creeert pagina-wissel (1,2,3 etc...) bij meer dan 10 posts -->
        {{-- {{$watchlist->links(10)}} --}}

    @else
        <p>No Movies found, you need at least 5 movies in your watchlist to share.</p>
    @endif
@endsection