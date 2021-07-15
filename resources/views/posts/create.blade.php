@extends('layouts/app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card mb-3">
                <div class="card-header">
                    Crear Articulo
                </div>
                <div class="card-body">
                    @if(session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form action="{{route('post.store')}}" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Titulo *</label>
                            <input type="text" name="title" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label>Imagen</label>
                            <input type="file" name="file">
                        </div>                        

                        <div class="form-group">
                            <label>Contenido *</label>
                            <textarea name="body" id="" rows="6" class="form-control" required></textarea>
                        </div>

                        <div class="form-group">
                            <label>Contenido embebido</label>
                            <textarea name="iframe" id="" rows="6" class="form-control"></textarea>
                        </div>

                        <div class="form-group">
                            @csrf
                            <input type="submit" value="Crear" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>    
</div>    
@endsection