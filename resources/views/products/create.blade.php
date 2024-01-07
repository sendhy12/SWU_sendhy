@extends('layouts.app')

@section('title', 'Index Product')

@section('contents')
    <h1 class="mb-1">Tambah Data Produk</h1>
    <hr />

    <form action="{{route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="title" placeholder="Masukan nama produk" class="form-control">
            </div>
            <div class="col">
                <input type="text" name="product_code" placeholder="Masukan sku produk" class="form-control">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="price" placeholder="Masukan harga produk" class="form-control">
            </div>
            <div class="col">
                <textarea type="text" name="description" placeholder="Masukan deskripsi produk" class="form-control"></textarea>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col">
                <label for="">Upload Image</label>
                <input type="file" name="image" id="inputImage" placeholder="Masukan Image produk" class="form-control @error('image') is-invalid @enderror">
                @error('image')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
    
        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </form>

@endsection