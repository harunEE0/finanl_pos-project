@extends('layouts.app')
@include('auth.pos')
@section('content')
@include('auth.passwords.admin') 

<script>

function printPage(id) {
    var html="<html>";html+=document.getElementById(id).innerHTML;html+="</html>";
    var printWin=window.open('','','left=0,top=0,width=600,height=600,toolbar=0,scrollbars=0,status =0');
    printWin.document.write(html);
    printWin.document.close();
    printWin.focus();
    printWin.print();
    printWin.close();}
    
</script> 

<div id="print">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Invoice No: {{ $sale->sale_id }}</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container-fluid">
            <div class="invoice p-3 mb-3">
                <div class="row">
                    <div class="col-12">
                        <h4> Z-Invoice <small class="float-right">Date: {{ date_format($sale->created_at, 'd-M-Y') }}</small> <br/> <small>https://mesinkasironline.web.app</small></h4><hr>
                    </div>
                </div>
                <div class="row invoice-info">
                    <div class="col-sm-4 invoice-col">Customer: <address> 
                                                                    <strong>{{ $sale->client->name }}</strong> 
                                                                                {{ $sale->client->rfc }}<br>
                                                                             Address: {{ $sale->client->address }}<br>
                                                                             Phone: {{ $sale->client->phone }}<br> 
                                                                            Email: {{$sale->client->email}} 
                                                                </address>
                    </div>
                    <div class="col-sm-4 invoice-col"> 
                        <b>Invoice :{{$sale->sale_id}}</b> <br> <br>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-12 table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Kode</th>
                                    <th>Product</th>
                                    <th>Qty</th>
                                    <th>Price</th>
                                </tr>
                            </thead>
                            <tbody>@include('auth.passwords.pos')
                                @foreach($carts as $cart)
                                @include('auth.passwords.transaction')
                                
                                <tr>
                                    <td>{{ $cart->product_id }}</td>
                                    <td>{{ $cart->products[0]->name}}</td>
                                    <td>{{ $cart->amount }}</td>
                                    <td>{{ $cart->products[0]->price }}</td>
                                </tr>@endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-6"></div>
                    <div class="col-6">
                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>Total:</th>
                                        <td><strong>bath.{{ $sale->total }}</strong></td>
                                    </tr>
                                 </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><hr>
    <p class="text-center">Thank you</p>
    <p class="text-center"> 
        <input type="button" class="btn text-center rounded-pill btn-light" value="Receipt Print" onclick="printPage('print');">
        </input> / For invoice print just presh ctrl + P</p>
    
</div> @endsection