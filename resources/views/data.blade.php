@extends('layouts.app') @section('content') 
<div class="masthead-followup row m-0 text-center lead"> 
                        <div class="col-12 col-md-12 p-3"> 
                            <h3 x-text="db"></h3> 
                            <p x-text="dbs"></p>
                        </div>
    
                 <div class="col-6 col-md-3 p-3"> 
                        <div class="p-3 p-md-5 bg-dark rounded text-light text-center"> 
                            <svg class="bi bi-person-circle" width="3em" height="3em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13.468 12.37C12.758 11.226 11.195 10 8 10s-4.757 1.225-5.468 2.37A6.987 6.987 0 0 0 8 15a6.987 6.987 0 0 0 5.468-2.63z"/> 
                                <path fill-rule="evenodd" d="M8 9a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/> <path fill-rule="evenodd" d="M8 1a7 7 0 1 0 0 14A7 7 0 0 0 8 1zM0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8z"/>
                            </svg>
                            
                            
                            <h3 x-text="us"></h3> 
                            <a href="{{route('register')}}" class="btn btn-light col-12 btn-lg" x-text="ads"></a> 
                        </div>
                </div>
    
    
    <div class="col-6 col-md-3 p-3">
         <div class="p-3 p-md-5 bg-dark rounded text-light text-center"> 
            <svg class="bi bi-people-fill" width="3em" height="3em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                 <path fill-rule="evenodd" d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/> 
                </svg> 
                
                
                <h3 x-text="cs"></h3>
                <a href="{{route('clients.create')}}" class="btn btn-light col-12 btn-lg" x-text="acs"></a> 
            </div>
        </div>
        
        
        <div class="col-6 col-md-3 p-3"> 
            <div class="p-3 p-md-5 bg-dark rounded text-light text-center"> 
                <svg class="bi bi-bag" width="3em" height="3em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg"> 
                    <path fill-rule="evenodd" d="M14 5H2v9a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V5zM1 4v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4H1z"/> 
                    <path d="M8 1.5A2.5 2.5 0 0 0 5.5 4h-1a3.5 3.5 0 1 1 7 0h-1A2.5 2.5 0 0 0 8 1.5z"/> 
                </svg> 
                
                
                
                <h3 x-text="ct"></h3> 
                <a href="{{route('categories.create')}}" class="btn btn-light col-12 btn-lg" x-text="acg"></a>
             </div>
            </div>
            
            
            <div class="col-6 col-md-3 p-3">
                 <div class="p-3 p-md-5 bg-dark rounded text-light text-center">
                     <svg class="bi bi-box" width="3em" height="3em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                         <path fill-rule="evenodd" d="M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5 8 5.961 14.154 3.5 8.186 1.113zM15 4.239l-6.5 2.6v7.922l6.5-2.6V4.24zM7.5 14.762V6.838L1 4.239v7.923l6.5 2.6zM7.443.184a1.5 1.5 0 0 1 1.114 0l7.129 2.852A.5.5 0 0 1 16 3.5v8.662a1 1 0 0 1-.629.928l-7.185 2.874a.5.5 0 0 1-.372 0L.63 13.09a1 1 0 0 1-.63-.928V3.5a.5.5 0 0 1 .314-.464L7.443.184z"/> 
                        </svg>
                        
                        
                        <h3 x-text="pd"></h3> <a href="{{route('products.create')}}" class="btn btn-light col-12 btn-lg" x-text="apd"></a>
                     </div>
                    </div>
                    </div>@endsection