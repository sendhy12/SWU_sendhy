@extends('layouts.app')

@section('title', 'Edit Product')

@section('contents')
<h1 class="mb-1">Edit Data Produk</h1>
    <hr />

    <form action="{{route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="title" value="{{$product->title}}"  class="form-control">
            </div>
            <div class="col">
                <input type="text" name="product_code" value="{{$product->product_code}}"  class="form-control">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="price" value="{{$product->price}}"  class="form-control">
            </div>
            <div class="col">
                <textarea type="text" name="description" class="form-control">{{$product->description}}</textarea>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col">
                <label for="">Upload Image</label>
                <input type="file" name="image" id="inputImage" value="{{$product->image_uri}}" class="form-control @error('image') is-invalid @enderror">
                @error('image')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
    
        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </div>
    </form>

@endsection