@extends('layouts/app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            @foreach ($posts as $post)
                <div class="card mb-3">
                    <div class="card-body">
                        <p class="text-muted">
                            {{$post->user->name}} &ndash; {{$post->created_at->format('d M Y')}}
                        </p>

                        <h4 class="card-title">{{$post->title}}</h4>
                        <p class="card-text">
                            {{$post->get_excerpt}} 
                            <a href="{{$post->slug}}">Leer Mas</a> 
                        </p>
                    </div>
                </div>
            @endforeach    
        </div>    
    </div>    
</div>    
@endsection