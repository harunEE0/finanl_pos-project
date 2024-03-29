@extends('layouts.app') @section('content')

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            
        
            <div class="col-sm-12">
                <h1 class="title text-dark"> 
                    <svg class="bi bi-cart3" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg"> 
                        
                        <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/> 
                    </svg> Point Of Sale</h1>
                
            </div>
            
            
            <div class="col-12 text-center">
                <h5>Income to day: <strong>Rp.{{ $totalSalesPerDay }}</strong></h5>
            </div>
        </div> @if(session('created'))
        
        <div class="row">
            <div class="col-12">
                <div class="alert alert-success"> Transaction Success</div>
            </div>
        </div> @endif
    </div>
</div>

<div class="content">
    <div class="container-fluid lead">
        <div class="row">
            <div class="col-md-6">
                <div class="card card-dark">
                    <div class="card-body">
                        <div id="js-requests-messages"></div> @if($errors->any())
                        <div class="alert alert-danger"> @foreach($errors->all() as $error) - {{ $error }} <br> @endforeach</div> @endif
                        <form method="post" action="#" id="createSaleForm">
                            <div class="form-group"> 
                                <label for="rfc">Customer</label> 
                                <select id="rfc" name="rfc" class="form-control">
                                    <option value="">Select Customer</option> @foreach($clients as $client)
                                    <option value="{{ $client->rfc }}"> {{ $client->name }}</option> @endforeach 
                                </select>
                            </div>
                            
                            <div class="form-group">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Product</th>
                                            <th>Qty</th>
                                            <th>Set</th>
                                        </tr>
                                    </thead>
                                    <tbody id="cartTable"></tbody>
                                </table>
                            </div
                            ><div class="form-group text-right">
                                <h5>TOTAL bath.<span id="cartTotal" class="text-bold">0</span></h5>
                            </div> @csrf 
                            <button type="submit" class="btn btn-dark btn-block btn-lg">Transaction </button> 
                            <input type="hidden" id="user-id" value="{{ Auth::user()->id }}">
                        </form>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6">
                <div class="card bg-dark text-white">
                    <div class="card-header text-white">
                        <h3 class="card-title">List Product</h3>
                    </div>
                    <div class="card-body table-responsive p-0 text-white" style="height: 300px;">
                    <table class="table table-head-fixed text-nowrap text-white">
                        <thead>
                            <tr>
                                <th>Kode</th>
                                <th>Product</th>
                                <th>Add</th>
                            </tr>
                        </thead>
                        <tbody id="products-table"> @foreach($products as $product)
                            <tr>
                                <td>{{ $product->product_id }}</td>
                                <td>{{ $product->name }}</td>
                                <td> 
                                    <button class="btn btn-success btn-sm" data-name="{{ $product->name }}" data-price="{{ $product->price }}" data-id="{{ $product->product_id }}" data-left="{{ $product->product_left }}" > 
                                        <i class="fas fa-plus"></i> Add </button>
                                </td>
                            </tr> @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div></div></div></div> @endsection