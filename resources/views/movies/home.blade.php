@extends('movies.layouts.app')
@section('content')
    <div class="container">
        <div class="jumbotron">
            <h1 class="display-4 text-center m-5">My Watched Movies</h1>
            
            <div class="d-flex justify-content-center text-white mb-5">
                <a href="/movies">
                    <button type="button" class="btn gradient-button">
                        See Movies
                    </button>
                </a>   
            </div> 
        </div>
        
    </div>


@endsection