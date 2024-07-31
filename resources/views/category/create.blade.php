@extends('layout.layout')
@section('content')
    <div class="container mt-5 mb-5">
        <h3><a href="{{ route('category.index') }}"><i class="bi bi-arrow-left-circle text-black"></i></a> Tambah Data Siswa</h3>
        <div class="row">
            <div class="col-md-12">
                <div class="card border-10">
                    <div class="card-body">
                        <form action="{{ route('category.store') }}" method="post">
                            @csrf
                            @method('POST')
                            <div class="form-group">
                                <label for="title">Nama kategori</label>
                                <input type="text" class="form-control" id="nama" name="nama" required>
                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary">Buat Data</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection