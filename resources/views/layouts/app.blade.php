<!DOCTYPE html><html lang="en"> <head> <meta charset="utf-8"> <meta name="viewport" content="width=device-width, initial-scale=1"> <meta http-equiv="x-ua-compatible" content="ie=edge"> <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script> <title>Z-Invoice by mesinkasironline.web.app</title> <link rel="stylesheet" href="{{asset('css/app.css')}}"><script src="{{asset('js/lara.js')}}" defer></script> <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous"> <style>@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap'); @import url('https://fonts.googleapis.com/css2?family=Anton&display=swap'); html,body{font-family: 'Montserrat', sans-serif;}.navbar , .title{font-family: 'Anton', sans-serif; font-size: 30px;}</style> </head>


<body class="bg-light" x-data='{
    
    ssc: "Larablog",
     ct: "Categories",
      ssc2: "Lavablog", 
      pd: "Products", 
      ssc3: "Lablog Sqlite", 
      lp: "Laravel POS", 
      ssc4: "Larapos Simple", 
      hc: "www.hockeycomputindo.com", 
      ssc5: "Laravel POS", 
      hcs: "https://www.hockeycomputindo.com", 
      ssc6: "Laravel Angular", 
      ffos: "Free open source code point of sale app present by", 
      ads: "Add User", 
      ssc6u: "https://www.hockeycomputindo.com/2021/01/cara-integrasi-laravel-angular-learn.html", 
      acs: "Add Customer", 
      lcsps: "List our source code laravel project", 
      dbps: "Databased Products", 
      ssc4u: "https://www.hockeycomputindo.com/2020/07/free-point-of-sale-laravel-pos-source.html", 
      acg: "Add Categories", 
      ssc3u: "https://www.hockeycomputindo.com/2021/12/laravel-website-cms-source-code-full.html", 
      cnpdt: " Create New Product", 
      ssc5u: "https://www.hockeycomputindo.com/2020/09/aplikasi-toko-gratis-download.html", 
      apd: "Add Products", 
      soc: "Source Code Gallery →", 
      resto: "https://www.hockeycomputindo.com/p/resto.html", 
      shp : "Retail Shop App", 
      shop: "https://www.hockeycomputindo.com/p/toko.html", 
      ssc2u: "https://www.hockeycomputindo.com/2021/02/new-laravel-blog-cms-free-download.html", 
      title: "Z-INVOICE", 
      rst: "Restaurant App", 
      and: "Android Dev", 
      opo: "Our Product", 
      ssc1u: "https://www.hockeycomputindo.com/2020/09/larablog-laravel-cms-blog-with-seo.html", 
      kasir: "POS Hardware", 
      andro: "https://android.axcora.com", 
      nav1: "Home", kasirs: "https://www.hockeycomputindo.com/p/daftar-mesin-kasir-terbaru.html", 
      sslugu1: "https://www.hockeycomputindo.com/p/lavaapp-aplikasi-toko-grosir-dan-eceran.html", 
      sslug1: "Lavapos", 
      oss: "Our Services", 
      socs: "https://www.hockeycomputindo.com/2010/12/blog-post.html", 
      sslugu2: "https://www.hockeycomputindo.com/p/resto-cafe-website-modern-aplikasi.html", 
      wbd: "Website Dev", 
      sslug2: "Dexopos Resto", 
      wbde: "https://website.axcora.com", 
      sslugu3: "https://www.hockeycomputindo.com/p/website-keren-aplikasi-toko-android.html", 
      lpor: "Laravel Pro", 
      sslug3: "Dexopos Shop", 
      sslugu4: "https://www.hockeycomputindo.com/p/new-restaurant-point-of-sale-pos-apps.html", 
      sslug4: "Mr.Resto Pos", 
      cc: "Create Categories", 
      
      ddps: "Download all source code project", 
      cn: "Categorie Name", 
      nav3: "Data", 
      cnct: "Create New Categories", 
      sv: "Save Data", 
      ctndb: "Categories databased", 
      nav4: "POS", 
      ncsa: "New Customer", 
      inc: "Income", 
      nav5: "Report", 
      pro: "PRO", 
      rpt: "Report", 
      rptdm: "Report details menu", 
     
      xpr: "Export Report", 
      pap: "Premium App", 
      db: "Database", 
      papa: "https://lava.axcora.my.id/", 
      dbs: "Register Database in here", 
      pfc: "Profit Income", 
      us: "User", 
      gpr: "Group Report",
       pdpr: "Product Report", 
       cs: "Customer", 
       nus: "Create new user", 
       usdb: "User Databased Management", 
      usb: "User Report", 
      cdmb: "Customer Databased Management", 
      csr: "Customer Report", 
      wba: "https://www.hockeycomputindo.com/p/webapp.html",}' > 
    

    
    
    
    
    
    <div class="wrapper"> 
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark text-white">
    
    
    <a class="navbar-brand" href="/" x-text='title'></a> 
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> 
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-columns-gap" viewBox="0 0 16 16"> <path d="M6 1v3H1V1h5zM1 0a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1H1zm14 12v3h-5v-3h5zm-5-1a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1h-5zM6 8v7H1V8h5zM1 7a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V8a1 1 0 0 0-1-1H1zm14-6v7h-5V1h5zm-5-1a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1h-5z"/>
        </svg> </button> 
        
        <div class="collapse navbar-collapse" id="navbarSupportedContent"> 
            <ul class="navbar-nav mr-auto p-1"> 
                <li class="nav-item active">
                     <a href="{{route('home')}}" class="nav-link" x-text="nav1"> 
                    <svg class="bi bi-grid-1x2" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg"> 
                        <path fill-rule="evenodd" d="M6 1H1v14h5V1zm9 0h-5v5h5V1zm0 9h-5v5h5v-5zM0 1a1 1 0 0 1 1-1h5a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V1zm9 0a1 1 0 0 1 1-1h5a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1h-5a1 1 0 0 1-1-1V1zm1 8a1 1 0 0 0-1 1v5a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1v-5a1 1 0 0 0-1-1h-5z"/> 
                    </svg>Home</a> 
                </li>
                
                
                <li class="nav-item active"> 
                    <a href="https://www.hockeycomputindo.com/2020/09/aplikasi-toko-gratis-download.html" x-text="nav2" class="nav-link"> 
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-display" viewBox="0 0 16 16"> 
                            <path d="M0 4s0-2 2-2h12s2 0 2 2v6s0 2-2 2h-4c0 .667.083 1.167.25 1.5H11a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1h.75c.167-.333.25-.833.25-1.5H2s-2 0-2-2V4zm1.398-.855a.758.758 0 0 0-.254.302A1.46 1.46 0 0 0 1 4.01V10c0 .325.078.502.145.602.07.105.17.188.302.254a1.464 1.464 0 0 0 .538.143L2.01 11H14c.325 0 .502-.078.602-.145a.758.758 0 0 0 .254-.302 1.464 1.464 0 0 0 .143-.538L15 9.99V4c0-.325-.078-.502-.145-.602a.757.757 0 0 0-.302-.254A1.46 1.46 0 0 0 13.99 3H2c-.325 0-.502.078-.602.145z"/>
                        </svg>Databases</a> 
                    </li>
                    
                    
                    <li class="nav-item active">
                        <a href="{{route('data')}}" class="nav-link" x-text="nav3">
                             <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-folder2-open" viewBox="0 0 16 16"> 
                                <path d="M1 3.5A1.5 1.5 0 0 1 2.5 2h2.764c.958 0 1.76.56 2.311 1.184C7.985 3.648 8.48 4 9 4h4.5A1.5 1.5 0 0 1 15 5.5v.64c.57.265.94.876.856 1.546l-.64 5.124A2.5 2.5 0 0 1 12.733 15H3.266a2.5 2.5 0 0 1-2.481-2.19l-.64-5.124A1.5 1.5 0 0 1 1 6.14V3.5zM2 6h12v-.5a.5.5 0 0 0-.5-.5H9c-.964 0-1.71-.629-2.174-1.154C6.374 3.334 5.82 3 5.264 3H2.5a.5.5 0 0 0-.5.5V6zm-.367 1a.5.5 0 0 0-.496.562l.64 5.124A1.5 1.5 0 0 0 3.266 14h9.468a1.5 1.5 0 0 0 1.489-1.314l.64-5.124A.5.5 0 0 0 14.367 7H1.633z"/>
                            </svg> </a> 
                        </li>
                        
                        
                        
                        <li class="nav-item active"> 
                            <a href="{{route('sales.create')}}" class="nav-link" x-text="nav4"> 
                                <svg class="bi bi-cart3" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg"> 
                                    <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/> 
                                </svg> Point of sale </a> 
                            </li>
                            
                            
                <li class="nav-item active"> 
                    <a href="{{route('office')}}" class="nav-link" x-text="nav5"> 
                        <svg class="bi bi-clipboard-data" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg"> 
                            <path fill-rule="evenodd" d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"/> 
                            <path fill-rule="evenodd" d="M9.5 1h-3a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"/> 
                            <path d="M4 11a1 1 0 1 1 2 0v1a1 1 0 1 1-2 0v-1zm6-4a1 1 0 1 1 2 0v5a1 1 0 1 1-2 0V7zM7 9a1 1 0 0 1 2 0v3a1 1 0 1 1-2 0V9z"/> 
                        </svg> Invoice </a> 
                </li>
                
                <li class="nav-item active"> 
                    <a x-bind:href='wba' target="blank" class="nav-link" x-text="nav6">
                         <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-controller" fill="currentColor" xmlns="http://www.w3.org/2000/svg"> 
                            <path fill-rule="evenodd" d="M11.119 2.693c.904.19 1.75.495 2.235.98.407.408.779 1.05 1.094 1.772.32.733.599 1.591.805 2.466.206.875.34 1.78.364 2.606.024.815-.059 1.602-.328 2.21a1.42 1.42 0 0 1-1.445.83c-.636-.067-1.115-.394-1.513-.773a11.307 11.307 0 0 1-.739-.809c-.126-.147-.25-.291-.368-.422-.728-.804-1.597-1.527-3.224-1.527-1.627 0-2.496.723-3.224 1.527-.119.131-.242.275-.368.422-.243.283-.494.576-.739.81-.398.378-.877.705-1.513.772a1.42 1.42 0 0 1-1.445-.83c-.27-.608-.352-1.395-.329-2.21.024-.826.16-1.73.365-2.606.206-.875.486-1.733.805-2.466.315-.722.687-1.364 1.094-1.772.486-.485 1.331-.79 2.235-.98.932-.196 2.03-.292 3.119-.292 1.089 0 2.187.096 3.119.292zm-6.032.979c-.877.185-1.469.443-1.733.708-.276.276-.587.783-.885 1.465a13.748 13.748 0 0 0-.748 2.295 12.351 12.351 0 0 0-.339 2.406c-.022.755.062 1.368.243 1.776a.42.42 0 0 0 .426.24c.327-.034.61-.199.929-.502.212-.202.4-.423.615-.674.133-.156.276-.323.44-.505C4.861 9.97 5.978 9.026 8 9.026s3.139.943 3.965 1.855c.164.182.307.35.44.505.214.25.403.472.615.674.318.303.601.468.929.503a.42.42 0 0 0 .426-.241c.18-.408.265-1.02.243-1.776a12.354 12.354 0 0 0-.339-2.406 13.753 13.753 0 0 0-.748-2.295c-.298-.682-.61-1.19-.885-1.465-.264-.265-.856-.523-1.733-.708-.85-.179-1.877-.27-2.913-.27-1.036 0-2.063.091-2.913.27z"/> 
                            <path d="M11.5 6.026a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm-1 1a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm2 0a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm-1 1a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm-7-2.5h1v3h-1v-3z"/> 
                            <path d="M3.5 6.526h3v1h-3v-1zM3.051 3.26a.5.5 0 0 1 .354-.613l1.932-.518a.5.5 0 0 1 .258.966l-1.932.518a.5.5 0 0 1-.612-.354zm9.976 0a.5.5 0 0 0-.353-.613l-1.932-.518a.5.5 0 1 0-.259.966l1.932.518a.5.5 0 0 0 .612-.354z"/> 
                        </svg>Report </a> 
                </li>
                
                
                <li class="nav-item active"> 
                    <form action="{{route('logout')}}" method="POST">@csrf 
                        <button onclick="return confirm('Yakin akan log out ?')" type="submit" class="btn btn-outline-danger"> 
                        <svg class="bi bi-exclamation-circle-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg"> 
                            <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/> 
                        </svg> Off </button> </form> 
                </li>
            </div>
        </nav> 
        
        <div class="content-wrapper">@include('auth.pos')@yield('content')@include('auth.passwords.admin')

        </div>
    </div>
    <script src="{{asset('js/bos.js')}}">

    </script> 
    <script src="{{asset('js/app.js')}}"></script>. 
    
    <!--<?php print "<div id='app'>{{message}}</div>"; ?>--> 
    
    <script src='https://cdn.jsdelivr.net/npm/vue/dist/vue.js'></script> 
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> 
    
    <!--<script src='https://mesinkasir.github.io/larapos/pos/gallerya.js'></script> -->
    
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script> 
    
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script> 


</body>

</html>