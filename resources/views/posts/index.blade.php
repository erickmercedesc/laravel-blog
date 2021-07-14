@extends('layouts/app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card mb-3">
                <div class="card-header">
                    Articulos
                    <a href="{{ route('post.create')}}" class="btn btn-primary float-right">Crear</a>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Titulo</th>
                                <th colspan="2">&nbsp;</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($posts as $post)
                                <tr>
                                    <td>{{$post->id}}</td>
                                    <td>{{$post->title}}</td>
                                    <td>
                                        <a href="{{route('post.edit', $post)}}" class="btn btn-warning btn-sm">Editar</a>
                                    </td>
                                    <td>
                                        <form action="{{ route('post.destroy', $post) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <input type="submit" value="Eliminar" class="btn btn-danger btn-sm" onclick="return  confirm('Desea Eliminar?')">
                                        </form>                                        
                                    </td>
                                </tr>                                    
                                @endforeach

                            </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>    
</div>    
@endsection