@extends('movies.layouts.app')
@section('content')
    <div class="container">
    <h1 class="text-center m-5">Add Movies</h1>
    
    <div class="card w-50 m-auto shadow">
        <div class="card-body">
            <form action="/movies" method="POST">
                @csrf
                <div class="p-3">
                    <input class="form-control m-2" type="text" name="title" placeholder="Title">
                    <input class="form-control m-2" type="text" name="published"  placeholder="Year Published">
                    <textarea class="form-control m-2" rows="3" name="synopsis"  placeholder="Synopsis"></textarea>
                    <input class="form-control m-2" type="text" name="country"  placeholder="Country">

                    <div class="d-flex justify-content-center">
                        <button class="btn gradient-button text-center" type="submit">Submit</button>
                    </div>
                </div> 
            </form>  
        </div>
    </div>
    </div>
@endsection