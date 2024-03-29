@extends('layouts.app') @section('content')


<div class="content-header">
    <div class="container-fluid lead text-center">
        <h1 class="m-0 text-dark" x-text="rpt"></h1>
        <p x-text="rptdm"></p> 
        <a class="btn btn-success btn-lg" x-text="xpr" href="{{ route('reports.sales') }}"> Export Report Details </a> @if(isset($_SESSION['deleted']))
        <div class="alert alert-success"> Success</div> @endif
    </div>
</div>

<div class="content">
    <div class="container-fluid lead text-center">
        <div class="row"> @foreach($sales as $sale)
            <div class="col-sm-12 col-md-4 p-3 p-md-5 text-center">
                <div class="card-body bg-dark text-white"> 
                    <svg class="bi bi-cart3" width="4em" height="4em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg"> 
                        <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/> 
                    </svg>
                    <hr class="bg-white">Customer : {{ $sale->client->name }}
                    <h4>Total: <br/>bath.<strong>{{ $sale->total }}</strong></h4>
                    <p class="card-text"> Date: {{ date_format($sale->created_at, 'd-M-Y') }}</p> 
                    <a href="{{ route('sales.show', $sale) }}" class="btn btn-info btn-block"> View </a> <br/>
                    <form action="{{ route('sales.destroy', $sale) }}" method="POST" > @csrf @method('DELETE') 
                        <input onclick="return confirm('Delete ' + '??');" type="submit" value="Delete" class="btn btn-danger btn-block">
                    </form>
                </div>
            </div> @endforeach
        </div> {{ $sales->links() }}
    </div>
</div> @endsection