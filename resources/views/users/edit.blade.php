@extends('layouts.app')

@section('title', 'Edit user')

@section('contents')
<h1 class="mb-1">Edit Data Produk</h1>
    <hr />

    <form action="{{route('users.update', $user->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="name" value="{{$user->name}}"  class="form-control">
            </div>
            <div class="col">
                <input type="email" name="email" value="{{$user->email}}"  class="form-control">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="level" value="{{$user->level}}"  class="form-control">
            </div>
        </div>

        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </div>
    </form>

@endsection