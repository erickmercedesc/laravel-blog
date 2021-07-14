@extends('layouts/app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="card shadow">
                    <img class="card-img-top" src="holder.js/100x180/" alt="">
                    <div class="card-body">
                        <p class="text-muted">
                            {{$post->user->name}} &ndash; {{$post->created_at->format('d M Y')}}
                        </p>                        
                        <h4 class="card-title">{{$post->title}}</h4>
                        <p class="card-text">
                            {{$post->body}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection