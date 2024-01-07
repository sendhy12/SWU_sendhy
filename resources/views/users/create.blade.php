@extends('layouts.app')

@section('title', 'Index Product')

@section('contents')
    <h1 class="mb-1">Tambah Data user</h1>
    <hr />

    <form action="{{route('users.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="name" placeholder="Masukan nama user" class="form-control">
            </div>
            <div class="col">
                <input type="email" name="email" placeholder="Masukan email user" class="form-control">
            </div>
        </div>
        <div class="row mb-3">
        <div class="col">
                <input type="passsword" name="passowrd" placeholder="Masukan password" class="form-control">
            </div>
            <div class="col">
                <input type="text" name="level" placeholder="Masukan harga user" class="form-control">
            </div>
        </div>

    
        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </form>

@endsection