@extends('layouts.app')

@section('content')

<div class="content-header">
    <div class="container lead text-center">
        <h1 class="m-0 text-dark"> New Product</h1> @if(session('created'))
        <div class="row">
            <div class="col-12">
                <div class="alert alert-success"> Success Update</div>
            </div>
        </div> @endif
    </div>
</div>


    <div class="content">
        <div class="container-fluid lead">
            <div class="row">
                <div class="col-12 col-md-3 p-3 p-md-5"></div>
                <div class="col-12 col-md-6 p-3 p-md-5">
                    <form method="post" action="{{ route('products.store') }}">
                        <div class="card-body"> @if($errors->any())
                            <div class="alert alert-danger"> @foreach($errors->all() as $error) - {{ $error }} <br> @endforeach</div> @endif
                            <div class="form-group"> 
                                <label for="name">Product</label> 
                                <input type="text" class="form-control" value="{{ old('name') }}" name="name" placeholder="Product Name" required>
                            </div>
                            
                            <div class="form-group"> 
                                <label for="category_id">Categories</label> 
                                <select required name="category_id" class="form-control">
                                    <option value="">Select Categories</option> @foreach($categories as $category)
                                    <option value="{{ $category->category_id }}"> {{ $category->name }}</option> @endforeach 
                                </select>
                            </div>
                                <div class="picture">
                                    <div class="form-group">
                                        <label for="picture">Product Picture</label>
                                        <input type="file" class="form-control-file" name="picture">
                                    </div>
                                </div>

                            <div class="form-group"> 
                                <label for="price">Sell Price</label> 
                                <input type="number" min="1" name="price" class="form-control" required>
                            </div>
                            
                            <div class="form-group"> 
                                <label for="description">Description </label>
                                <textarea class="form-control" name="description">{{ old('description') }}</textarea>
                            </div>
                            <div class="form-group"> 
                                <label for="product_left">Inventory </label> 
                                <input type="number" min="1" name="product_left" class="form-control">
                            </div>
                            
                            <div class="form-group"> 
                                <label for="cost">Cost</label> 
                                <input type="number" min="1" name="cost" class="form-control">
                            </div>@csrf 
                            <button onclick="return confirm('Save Product ?');" type="submit" class="btn btn-dark btn-block btn-lg">Save </button>
                    </form>
                </div>
            </div></div></div></div> @endsection