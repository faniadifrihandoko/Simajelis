@extends('layouts.app')

@section('title', 'Data Galeri')

@section('content')

<div class="container">
    <a href="/admin/galeris" class="btn btn-primary mb-3">Kembali</a>
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('galeris.update', $galeri->id) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
            @csrf
            <div class="form-group">
                <label for=" ">Judul</label>
                <input type="text" class="form-control" name="title" placeholder="judul" value="{{$galeri->title}}">
            </div>
            @error('title')
            <small style="color:red">{{$message}}</small>
            @enderror
            <div class="form-group">
                <label for=" ">Deskripsi</label>
                <textarea name="description" id="" cols="30" rows="10" class="form-control" placeholder="deskripsi">{{$galeri->description}} </textarea>
            </div>
            @error('description')
            <small style="color:red">{{$message}}</small>
            @enderror
            <img src="/image/{{$galeri->image}}" alt="" class="img-fluid">
            <div class="form-group">
                <label for=" ">gambar</label>
                <input type="file" class="form-control" name="image">
            </div>
            @error('image')
            <small style="color:red">{{$message}}</small>
            @enderror
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Submit</button>
            </div>
            </form>
        </div>
    </div>
</div>
    
@endsection