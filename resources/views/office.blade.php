@extends('layouts.app') @section('content') 

<script src="{{asset('js/report.js')}}"></script>
  <script>
         function dis(val)
         { document.getElementById("result").value+=val }
         function solve() 
         { let x = document.getElementById("result").value
           let y = eval(x)
           document.getElementById("result").value = y }
         function clr()
         { document.getElementById("result").value = "" }
      </script>
	
<div class="masthead-followup row m-0 text-center lead">
  <div class="row p-3">
    <div class="col-md-4 col-12 p-3">
      <img class="img-fluid" alt="laravel" src="https://1.bp.blogspot.com/-0elLCXw9Zfc/YCXq_0wbpwI/AAAAAAAAJ-8/u90rnoV3UL4fsZFkXf6IKJSNSdh7CMvUACLcBGAsYHQ/s16000/lavas.png">
      <table class="table bg-dark text-light rounded p-1">
        <tr>
          <td colspan="3">
            <input type="text" id="result"></td>
            <td>
              <input class="btn btn-danger text-white col-12" type="button" value="C" onclick="clr()"></td>
        </tr>
        <tr>
          <td><input class="btn btn-light col-12" type="button" value="1" onclick='dis("1")'></td>
          <td><input class="btn btn-light col-12" type="button" value="2" onclick='dis("2")'></td>
          <td><input class="btn btn-light col-12" type="button" value="3" onclick='dis("3")'></td>
          <td><input class="btn btn-light col-12" type="button" value="/" onclick='dis("/")'></td>
        </tr>
        
        <tr>
          <td><input class="btn btn-light col-12" type="button" value="4" onclick='dis("4")'></td>
          <td><input class="btn btn-light col-12" type="button" value="5" onclick='dis("5")'></td>
          <td><input class="btn btn-light col-12" type="button" value="6" onclick='dis("6")'></td>
          <td><input class="btn btn-light col-12" type="button" value="-" onclick='dis("-")'></td>
        </tr>
        
        <tr>
          <td><input class="btn btn-light col-12" type="button" value="7" onclick='dis("7")'></td>
          <td><input class="btn btn-light col-12" type="button" value="8" onclick='dis("8")'></td>
          <td><input class="btn btn-light col-12" type="button" value="9" onclick='dis("9")'></td>
          <td><input class="btn btn-light col-12" type="button" value="+" onclick='dis("+")'></td>
        </tr>
        
        <tr>
          <td><input class="btn btn-light col-12" type="button" value="." onclick='dis(".")'></td>
          <td><input class="btn btn-light col-12" type="button" value="0" onclick='dis("0")'></td>
          <td><input class="btn btn-success col-12" type="button" value="=" onclick="solve()"></td>
          <td><input class="btn btn-light col-12" type="button" value="x" onclick='dis("*")'></td>
        </tr>
      </table>
    </div>
    
    
    <div class="col-md-8 col-12 p-3">
      <div class="row">
        <div class="col-6 col-md-4 p-3">
          <div class="p-3 p-md-5 bg-dark rounded text-light text-center">
            <svg class="bi bi-person-circle" width="3em" height="3em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path d="M13.468 12.37C12.758 11.226 11.195 10 8 10s-4.757 1.225-5.468 2.37A6.987 6.987 0 0 0 8 15a6.987 6.987 0 0 0 5.468-2.63z"/>
              <path fill-rule="evenodd" d="M8 9a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
              <path fill-rule="evenodd" d="M8 1a7 7 0 1 0 0 14A7 7 0 0 0 8 1zM0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8z"/>
            </svg>
            <h3 x-text="us"></h3>
            <a href="{{ route('users.index') }}" class="btn btn-light col-12 btn-sm" x-text="usb"></a>
          </div>
        </div>
        
        <div class="col-6 col-md-4 p-3">
          <div class="p-3 p-md-5 bg-dark rounded text-light text-center">
            <svg class="bi bi-people-fill" width="3em" height="3em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
            </svg>
            <h3 x-text="cs"></h3>
            <a href="{{ route('clients.index') }}" class="btn btn-light col-12 btn-sm" x-text="csr"></a>
          </div>
        </div>
        
        <div class="col-6 col-md-4 p-3">
          <div class="p-3 p-md-5 bg-dark rounded text-light text-center">
            <svg class="bi bi-bag" width="3em" height="3em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M14 5H2v9a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V5zM1 4v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4H1z"/>
              <path d="M8 1.5A2.5 2.5 0 0 0 5.5 4h-1a3.5 3.5 0 1 1 7 0h-1A2.5 2.5 0 0 0 8 1.5z"/>
            </svg>
            <h3 x-text="ct"></h3>
            <a href="{{ route('categories.index') }}" class="btn btn-light col-12 btn-sm" x-text="gpr"></a>
          </div>
        </div>
        <div class="col-6 col-md-4 p-3">
          <div class="p-3 p-md-5 bg-dark rounded text-light text-center">
            <svg class="bi bi-box" width="3em" height="3em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5 8 5.961 14.154 3.5 8.186 1.113zM15 4.239l-6.5 2.6v7.922l6.5-2.6V4.24zM7.5 14.762V6.838L1 4.239v7.923l6.5 2.6zM7.443.184a1.5 1.5 0 0 1 1.114 0l7.129 2.852A.5.5 0 0 1 16 3.5v8.662a1 1 0 0 1-.629.928l-7.185 2.874a.5.5 0 0 1-.372 0L.63 13.09a1 1 0 0 1-.63-.928V3.5a.5.5 0 0 1 .314-.464L7.443.184z"/>
            </svg>
            <h3 x-text="pd"></h3>
            <a href="{{ route('products.index') }}" class="btn btn-light col-12 btn-sm" x-text="pdpr">Group Report</a>
          </div>
        </div>
        
        <div class="col-6 col-md-4 p-3">
          <div class="p-3 p-md-5 bg-dark rounded text-light text-center">
            <svg class="bi bi-clipboard-data" width="3em" height="3em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"/><path fill-rule="evenodd" d="M9.5 1h-3a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"/>
              <path d="M4 11a1 1 0 1 1 2 0v1a1 1 0 1 1-2 0v-1zm6-4a1 1 0 1 1 2 0v5a1 1 0 1 1-2 0V7zM7 9a1 1 0 0 1 2 0v3a1 1 0 1 1-2 0V9z"/></svg>
              <h3 x-text="inc"></h3>
              <a href="{{ route('sales.index') }}" class="btn btn-light col-12 btn-sm" x-text="pfc">User Report</a>
            </div>
          </div>
          
          <!--<div class="col-6 col-md-4 p-3">
            <div class="p-3 p-md-5 bg-dark rounded text-light text-center">
             <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" fill="currentColor" class="bi bi-award" viewBox="0 0 16 16">
                 <path d="M9.669.864 8 0 6.331.864l-1.858.282-.842 1.68-1.337 1.32L2.6 6l-.306 1.854 1.337 1.32.842 1.68 1.858.282L8 12l1.669-.864 1.858-.282.842-1.68 1.337-1.32L13.4 6l.306-1.854-1.337-1.32-.842-1.68L9.669.864zm1.196 1.193.684 1.365 1.086 1.072L12.387 6l.248 1.506-1.086 1.072-.684 1.365-1.51.229L8 10.874l-1.355-.702-1.51-.229-.684-1.365-1.086-1.072L3.614 6l-.25-1.506 1.087-1.072.684-1.365 1.51-.229L8 1.126l1.356.702 1.509.229z"/> -->
               <!-- <path d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1 4 11.794z"/>-->
              </svg>
                <!--<h3 x-text="pro">Income</h3>-->
                <!--<a x-bind:href="papa" class="btn btn-light col-12 btn-sm" x-text="pap">Profit income</a>-->
              </div>
                    </div>
          </div>
        </div>@endsection