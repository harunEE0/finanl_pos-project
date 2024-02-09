@extends('layouts.app') @section('content') <div class="content-header mt-5">
  <div class="container lead text-center">
    <h1 x-text="pd" class="m-0 text-dark text-center">Produck</h1>
    <p x-text="dbps">Data Produk</p>
    <a class="btn btn-dark btn-lg" x-text="cnpdt" href="{{ route('products.create') }}"> Create New Product </a>
  </div>
</div>
<div class="content">
  <div class="container-fluid lead text-center"> {{ $products->links() }}
    <div class="row"> @foreach($products as $product) <div class="col-sm-12 col-md-3 lead text-center text-white p-3 p-md-5">
        <div class="card">
        <div class="card-body bg-dark">
    <img src="{{ asset($product->picture) }}" alt="Product Picture" class="img-fluid">
    <hr class="bg-white">
    <h5 class="card-title">{{ $product->name }}</h5>
    <p class="card-text">{{ $product->get_extract }}</p>
    <hr class="bg-white">
    <a class="btn btn-warning btn-block" href="{{ route('products.edit', $product) }}">Edit</a>
    <br>
    <form action="{{ route('products.destroy', $product) }}" method="POST">
        @csrf
        @method('DELETE')
        <input onclick="return confirm('Delete Product??');" type="submit" value="Delete" class="btn btn-danger btn-block">
    </form>
</div>
        </div>
      </div> @endforeach </div> {{ $products->links() }}
  </div> @endsection