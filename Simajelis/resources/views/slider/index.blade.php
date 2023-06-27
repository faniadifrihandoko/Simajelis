@extends('layouts.app')

@section('title', 'Data Slider')

@section('content')

<div class="container">
    <a href="/sliders/create" class="btn btn-primary mb-3">Tambah Data</a>

    @if ($message = Session::get('message'))       
    <div class="alert alert-success">
        <strong>{{$message}}</strong>
    </div>
    @endif

    <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped"> 
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Judul</th>
                        <th>Description</th>
                        <th>gambar</th>
                        <th>aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i = 1
                    @endphp
                    @foreach ($sliders as $slider)
                        <td>{{ $i++ }} </td>
                        <td> {{ $slider->title }}</td>
                        <td> {{ $slider->description }}</td>
                        <td>
                            <img src="/image/{{$slider->image}}" alt="" class="img-fluid" width="100">
                        </td>
                        <td>
                            <a href="{{ route('sliders.edit', $slider->id)}}" class="btn btn-warning"> Edit </a>
                            <form action="{{route('sliders.destroy', $slider->id)}}" method="POST">

                                @csrf
                                @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                        </td>
                    @endforeach

                </tbody>
        </table>
    </div>
</div>
    
@endsection