@extends('layouts.app')

@section('title', 'Data Pengajian')

@section('content')

<div class="container">
    <a href="/pengajians/create" class="btn btn-primary mb-3">Tambah Data</a>

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
                        <th>Location</th>
                        <th>Image</th>
                        <th>aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i = 1
                    @endphp
                    @foreach ($pengajians as $pengajian)
                        <td>{{ $i++ }} </td>
                        <td> {{ $pengajian->title }}</td>
                        <td> {{ $pengajian->description }}</td>
                        <td> {{ $pengajian->location }}</td>
                        <td>
                            <img src="/image/{{$pengajian->image}}" alt="" class="img-fluid" width="100">
                        </td>
                        <td>
                            <a href="{{ route('pengajians.edit', $pengajian->id)}}" class="btn btn-warning"> Edit </a>
                            <form action="{{route('pengajians.destroy', $pengajian->id)}}" method="POST">

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