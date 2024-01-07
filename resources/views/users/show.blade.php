@extends('layouts.app')

@section('title', 'Show Product')

@section('contents')

    <h1 class="mb-1">Lihat Data Produk</h1>
        <hr />

        <div class="row mb-3">
            <div class="col">
            <label for=""> title</label>
                <input readonly type="text" name="title" value="{{$product->title}}" class="form-control">
            </div>
            <div class="col">
            <label for=""> sku</label>
                <input readonly type="text" name="sku" value="{{$product->sku}}" class="form-control">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
            <label for=""> price</label>
                <input readonly type="text" name="price" value="{{$product->price}}" class="form-control">
            </div>
            <div class="col">
            <label for=""> description</label>
                <textarea readonly type="text" name="description" value="{{$product->description}}" class="form-control"></textarea>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col">
            <label for=""> created_at</label>
                <input readonly type="text" name="price" value="{{$product->created_at}}" class="form-control">
            </div>
            <div class="col">
                <label for=""> Updated_at</label>
                <input readonly type="text" name="description" value="{{$product->updated_at}}" class="form-control">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col">
                <label for=""> Image</label>
               <img src="{{ asset($product->image_uri) }}" style="width:150px, height:150px" alt="{{$product->image_uri}}" srcset="">
            </div>
        </div>
    
    

@endsection