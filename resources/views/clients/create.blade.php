@extends('layouts.app') @section('content')
<div class="content-header">
    <div class="container lead">
        <h1 class="text-center m-3 text-dark"> Register New Customer</h1> @if(session('created'))
        <div class="row">
            <div class="col-12">
                <div class="alert alert-success"> Success create new user</div>
            </div>
        </div> @endif
    </div>
</div>


<div class="content">
    <div class="container lead">
        <div class="row">
            <div class="col-12 col-md-3 p-3 p-md-5"></div>
            <div class="col-12 col-md-6 p-3 p-md-5">
                <form method="post" action="{{ route('clients.store') }}">
                    <div class="card-body"> @if($errors->any())
                        <div class="alert alert-danger"> @foreach($errors->all() as $error) - {{ $error }} <br> @endforeach</div> @endif
                        <div class="form-group text-center"> 
                            <label for="rfc"> 
                                <svg class="bi bi-person-circle" width="2em" height="2em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">  
                                    <path d="M13.468 12.37C12.758 11.226 11.195 10 8 10s-4.757 1.225-5.468 2.37A6.987 6.987 0 0 0 8 15a6.987 6.987 0 0 0 5.468-2.63z"/> 
                                    <path fill-rule="evenodd" d="M8 9a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/> 
                                    <path fill-rule="evenodd" d="M8 1a7 7 0 1 0 0 14A7 7 0 0 0 8 1zM0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8z"/> 
                                </svg> 
                            </label> 
                            
                            <input type="text" class="form-control" value="{{ old('rfc') }}" name="rfc" placeholder="Contact Person" required>
                        </div>
                        
                        <div class="form-group text-center"> 
                            <label for="name">
                                 <svg class="bi bi-people-fill" width="2em" height="2em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg"> 
                                    <path fill-rule="evenodd" d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/> 
                                </svg> 
                            </label> 
                            <input type="text" value="{{ old('name') }}" placeholder="Customer Name" name="name" required class="form-control"></div>
                            <div class="form-group text-center"> 
                                <label for="email"> 
                                    <svg class="bi bi-envelope-fill" width="2em" height="2em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg"> 
                                        <path fill-rule="evenodd" d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z"/> 
                                    </svg> 
                                </label> 
                                <input placeholder="email address" value="{{ old('email') }}" type="email" name="email" class="form-control">
                            </div>
                            
                            <div class="form-group text-center"> 
                                <label for="phone">
                                     <svg class="bi bi-phone" width="2em" height="2em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                         <path fill-rule="evenodd" d="M11 1H5a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H5z"/> 
                                         <path fill-rule="evenodd" d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/> 
                                        </svg>
                                     </label> 
                                     
                                <input placeholder="phone number" value="{{ old('phone') }}" type="tel" class="form-control" name="phone">
                            </div>
                            
                            <div class="form-group text-center"> 
                                <label for="address"> 
                                    <svg class="bi bi-cursor-fill" width="2em" height="2em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg"> 
                                        <path fill-rule="evenodd" d="M14.082 2.182a.5.5 0 0 1 .103.557L8.528 15.467a.5.5 0 0 1-.917-.007L5.57 10.694.803 8.652a.5.5 0 0 1-.006-.916l12.728-5.657a.5.5 0 0 1 .556.103z"/> 
                                    </svg> 
                                </label> 
                                <input placeholder="address details" value="{{ old('address') }}" type="text" class="form-control" name="address">
                            </div>
                        </div>@csrf 
                        
                        <button onclick="return confirm('Are Sure to save ?');" type="submit" class="btn btn-dark btn-block btn-lg">Save </button>
                </form>
            </div>
        </div>
    </div>
</div> @endsection