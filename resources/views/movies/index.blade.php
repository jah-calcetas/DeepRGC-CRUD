@extends('movies.layouts.app')
@section('content')
    <div class="container">
        <div class="jumbotron">
        <h1 class="display-4 text-center m-5">Movies</h1>
        
        <div class="d-flex justify-content-center text-white mb-5">
            <a href="/movies/create">
                <button type="button" class="btn gradient-button">
                    Add Movies
                </button>
            </a>   
        </div> 
        </div>
        <div class="row">

            @foreach ( $movies as $movie)

                <div class="col-md-4 d-flex">
                    
                        <div class="card border-light m-3 shadow"> 
                            <div class="card-header text-white" style="background-color: #003E5C">

                                <h4>{{  $movie->title }} </h4>

                            </div>

                            <div class="card-body" >
                                <span>
                                    <b>Release: </b> 
                                    {{ $movie->published }} 
                                    &#10148; {{ $movie->country }}
                                </span>

                                <br>

                                <b>Synopsis: </b>
                                <p>{{ $movie->synopsis }}</p>  
                            </div>  

                            <div class="d-flex justify-content-center" >
                                <a href="/movies/{{ $movie->id}}/edit">
                                    <button type="button" class="btn gradient-button mr-1">
                                        Edit  {{ $movie->title  }}
                                    </button>
                                </a>
                                <form action="/movies/{{ $movie->id }}" method="POST">
                                    @csrf
                                    @method('delete')
                                        <button type="submit" class="btn btn-danger ">
                                            Delete
                                        </button>
                                </form>
                            </div>
                        </div>  
                    
                </div>
            @endforeach

        </div>
    </div>


@endsection