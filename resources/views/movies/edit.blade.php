@extends('movies.layouts.app')
@section('content')
    <div class="container">
    <h1 class="text-center m-5">UPDATE Movies</h1>
    
    <div class="card w-50 m-auto shadow">
        <div class="card-body">
            <form action="/movies/{{ $movie->id }}" method="POST">
                @csrf
                @method('PUT')
                <div class="p-3">
                
                    <input 
                        class="form-control m-1" 
                        type="text" 
                        name="title" 
                        placeholder="Title"
                        value="{{ $movie->title }}"
                    >
                    <input 
                        class="form-control m-1" 
                        type="text" 
                        name="published"  
                        placeholder="Year Published"
                        value="{{ $movie->published }}"
                    >
                    <input 
                        class="form-control m-1" 
                        type="text" 
                        name="synopsis"  
                        placeholder="Synopsis"
                        value="{{ $movie->synopsis }}"
                    >
                    <input 
                        class="form-control m-1" 
                        type="text" 
                        name="country"  
                        placeholder="Country"
                        value="{{ $movie->country }}"
                    >

                    <div class="d-flex justify-content-center">
                        <button class="btn gradient-button text-center" type="submit">Submit</button>
                    </div>
                </div>   
        </div>
    </div>
    </div>
@endsection