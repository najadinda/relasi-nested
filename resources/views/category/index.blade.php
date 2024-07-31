@extends('layout.layout')
@section('content')
<h3 class="mt-3">Daftar Kategori</h3>
<a href="{{ route('category.create') }}" class="btn btn-lg-2 btn-primary mb-2">Tambah Kategori</a>

@if (session('success'))
    <div class="alert alert-success mt-2">
        {{ session('success') }}
    </div>
@endif

<table id="example" class="table table-striped w-100">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama Kategori</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
       @foreach($categories as $category)
       <tr>
        <td>{{ $category->id }}</td>
        <td>{{ $category->name }}</td>
        <td>aksi</td>
       </tr>
       @endforeach
    </tbody>
</table>
@endsection