 <!-- Wrapper Start -->
 
 
 
 <style>

.sticky-header {

    padding: 0 !important;
}

.dropdownn.megaa {
    display: contents;
}


.topnavnewmega ul  {
    list-style: none;
}

.topnavnewmega {
    overflow: hidden;
    background-color: #fff;
    font-family: 'Oswald', sans-serif;
    text-align: center;
    padding-top: 12px;
}

.topnavnewmega a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  margin:0%;
  text-decoration: none;
  font-size: 17px;
  transition:0.5s;
}



.topnavnewmega .icon {
  display: none;
}

.dropdownn {
  float: left;
  overflow: hidden;
  margin:0 1%;
  transition:0.5s;
}

.dropdownn .dropbtnn {
  font-size: 14px;
  border: none;
  outline: none;
  color: #111;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
  transition:0.5s;
}

.dropdownn-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdownn-content li.title {
    font-weight: 700;
    font-size: 16px;
}


/* Subcategories in a row */
.dropdownn-content > ul {
    display: flex;              /* Use flexbox to display subcategories in a row */
    flex-wrap: wrap;           /* Allow wrapping if the items exceed the width */
    list-style: none;          /* Remove default list styling */
    padding-left: 0;           /* Remove padding */
    margin: 0;  
}

.dropdownn-content > ul > li {
    margin: 0 10px;           /* Add some margin between items */
    padding: 0px 12px;        /* Add some padding */
}

.dropdownn-content > ul > li a {
    display: block;            /* Make the entire area clickable */
    text-decoration: none;     /* Remove underline from links */
    color: black;              /* Change text color */
}

/* Child subcategories in a column */
.subcategroryy-sub-menu {
    display: block;            /* Display child categories in a column */
    padding-left: 0px;       /* Add some left padding to differentiate */
}

.subcategroryy-sub-menu li {
    padding: 4px 0;           /* Add some padding between child items */
 }

.subcategroryy-sub-menu li a {
    display: block;            /* Make each child link fill its container */
    text-decoration: none;     /* Remove underline from links */
    color: #555;              /* Change text color for child items */
    font-size:14px;
}

.dropdownn-content li a:hover{
background:none;
color:#2874f0;

}

.sub-sub-menu-hii {
    padding: 4px 0;           /* Add some padding between child items */
    font-weight: bold;        /* Make the text bold */
    color: black; 
}

.mega-menu{
/*background: linear-gradient(rgba(255,255,255,.6), rgba(255,255,255,.6)), url("https://i.ibb.co/Ydng63L/001.jpg");*/
background-repeat:no-repeat;
background-size:50% 100%;
background-position:bottom right;
background-color:#fff;
position:absolute;
left:0;
min-width:100%;
}


.dropdownn-content a {
  float: none;
  color: black;
  padding: 0px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.topnavnewmega a:hover, .dropdownn:hover .dropbtnn {
  color:#2874f0;
}

.dropdownn-content a:hover {
  background-color: #ddd;
  color: black;
}

.dropdownn:hover .dropdownn-content {
  display: block;
}

@media (max-width:900px){
 .dropdownn-content ul{
width:25%;
display:inline-block;
}
}

@media (max-width:800px){
 .dropdownn-content ul{
width:40%;
display:inline-block;
}
}

@media screen and (max-width: 600px) {
  .topnavnewmega a:not(:first-child), .dropdownn .dropbtnn {
    display: none;
  }
  .topnavnewmega a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnavnewmega.responsive {position: relative;}
  .topnavnewmega.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .dropdownn-content ul{
width:90%;
display:block;
}
.dropdownn-content li:not(:first-child){
display:none;
transition:0.5s;
}

.dropdownn-content ul:hover > li{
display:block;
}
  .topnavnewmega.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
  .topnavnewmega.responsive .dropdownn {float: none;}
  .topnavnewmega.responsive .dropdownn-content {position: relative;}
  .topnavnewmega.responsive .dropdownn .dropbtnn {
    display: block;
    width: 100%;
    text-align: left;
  }
}



@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)}
  to {-webkit-transform: scale(1)}
}

@keyframes animatezoom {
  from {transform: scale(0)}
  to {transform: scale(1)}
}

.mainnaame {
    display: inline-grid;
}

img.img-fluid.menuimg {
    margin: auto;
}

.dropdownn-content.mega-menu.animate {
    text-align: left;
        z-index: 111;
}



    .has-popup .popup {
    display: none;
    position: absolute;
    left: 0;
    top: 100%;
    background-color: #b00;
    padding: 10px;
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
    z-index: 10;
    width: 200px; /* Adjust the width as needed */
    border: 1px solid #ccc;
}

.has-popup:hover .popup {
    display: block;
}

.popup p {
    margin: 0;
    padding: 0;
}
.wishlist{
   position: absolute;
    right: 0px;
    top: 8px;
    background: #d91c53;
    width: 15px;
    height: 15px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    font-size: 12px;
    color: #fff; 
}


</style>
<style>



@media only screen and (max-width: 768px) {
    .nav-mobile li a {
    display: block;
    color: #333;
    width: 100%;
    font-size: 14px !important;
    height: 100%;
    text-decoration: none;
}
}


        /* Basic styling for the menu */
        .main-nav {
            list-style-type: none;
            padding: 0;
            margin: 0;
            display: flex;
            justify-content: center;
        }

        .main-nav li {
            position: relative;
        }

        .main-nav a {
            display: block;
            padding: 8px 12px;
            text-decoration: none;
            color: #333;
            background-color: #bb0000;
        }

        .main-nav a:hover {
            background-color: #ddd;
        }

        .popup {
            display: none; /* Hide popups by default */
            position: absolute;
            top: 100%;
            left: 0;
            background-color: #bb0000;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.15);
            padding: 10px;
        }

        .has-popup:hover .popup {
            display: block; /* Show popup on hover */
        }

        .popup ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        .popup ul ul {
            display: none; /* Hide nested lists by default */
            position: absolute;
            top: 0;
            right: 100%;
            width: 150px;
    border-right: 1px solid #111;
    border-bottom: 1px solid #111;
        }

        .popup ul li {
            position: relative;
        }

        .popup ul li:hover > ul {
            display: block; /* Show nested lists on hover */
            background: #fff;
        }

        .popup a {
            padding: 8px 12px;
           
            color: #333;
            text-decoration: none;
            display: block;
        }

        .popup a:hover {
            background-color: #ddd;
        }
    </style>
    
    
 <div class="wrapper">

     <!--	<div class="top-header">
 <div class="container">
    <div class="row align-items-center">
        <div class="col-lg-6 col-md-12 d-none d-lg-block">
            <ul class="header-contact-info">
                <li>Call: <a href="tel:+919191000100">+91 91910 00100</a></li>

            </ul>
        </div>

        <div class="col-lg-6 col-md-12">
            <ul class="header-top-menu">

            <li>
                @if(Auth::guard('users')->user())

                <a class="header-action-btn" href="

                {{url('customer/my_account')}}">

                    <span class="icon position-relative">

                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);transform: ;msFilter:;"><path d="M7.5 6.5C7.5 8.981 9.519 11 12 11s4.5-2.019 4.5-4.5S14.481 2 12 2 7.5 4.019 7.5 6.5zM20 21h1v-1c0-3.859-3.141-7-7-7h-4c-3.86 0-7 3.141-7 7v1h17z"></path></svg> My Account

                    </span>

                </a>

                @else

                <a class="header-action-btn" href="

                {{url('user/auth')}}">

                    <span class="icon position-relative">

                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);transform: ;msFilter:;"><path d="M7.5 6.5C7.5 8.981 9.519 11 12 11s4.5-2.019 4.5-4.5S14.481 2 12 2 7.5 4.019 7.5 6.5zM20 21h1v-1c0-3.859-3.141-7-7-7h-4c-3.86 0-7 3.141-7 7v1h17z"></path></svg> Login/Register
                    </span>

                </a>

                @endif
                <li>

                    <div class="rendered_headerwish">

                    @include('frontend.header_wishlist')

                    </div>

                    {{-- end wishlist --}}
                </li>






                </ul>

                <ul class="header-top-others-option">
                    <div class="option-item">
                        <div class="search-btn-box">
                            <i class="search-btn bx bx-search-alt"></i>
                        </div>
                    </div>


                </ul>
            </div>
        </div>
    </div>
</div> -->

     <!--== Start Header Wrapper ==-->

     <header class="header-area sticky-header header_top">

         <div class="container">

             <div class="row align-items-center web-view-none">
                 <div class="col col-md-4 text-center">
                     <div class="header-logo ml-10">
                         <a href="{{url('index')}}">
                            <!-- <img class="logo-main" src="{{asset('frontend/img/Prrayasha/logo.png')}}" 
                                 alt="Logo" style="width: 70px; height: 70px;" />  -->
                                <span>P</span>RRAYASHA <span>C</span>OLLECTIONS
                         </a>
                     </div>
                 </div>
                 <div class="col col-md-4">
                     <form action="{{ url('search') }}" method="post">
                         @csrf
                         
                        @php
                            $product_name = session('product_name', '');
                        @endphp
                         <div class="aside-search-form position-relative mb-0 mobile-view-none">

                             <label for="SearchInput" class="visually-hidden">Search</label>
                             <input id="SearchInput" type="text" name="product_name" class="form-control mb-0 search-text-box"
                                 placeholder="Search entire store…" value="{{$product_name}}">
                             <button class="search-btn" type="submit"><i class="fa fa-search"></i></button>
                         </div>
                     </form>
                 </div>
                 <div class="col col-md-4">
                     <div class="header-action justify-content-end">


                         <ul class="m-0">
                             <li>
                                 @if(Auth::guard('users')->user() || Auth::guard('guest')->user())
                                 <div class="dropdown logoutheader">
                                     <a href="{{url('customer/my_account')}}" class="dropbtn"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                             viewBox="0 0 24 24" style="fill: #000;transform: ;msFilter:;">
                                             <path
                                                 d="M7.5 6.5C7.5 8.981 9.519 11 12 11s4.5-2.019 4.5-4.5S14.481 2 12 2 7.5 4.019 7.5 6.5zM20 21h1v-1c0-3.859-3.141-7-7-7h-4c-3.86 0-7 3.141-7 7v1h17z">
                                             </path>
                                         </svg> <span class="mobile-view-none"> </span></a>
                                        
                                        @php
                                          if (Auth::guard('users')->check()) {
                                               $id=auth()->guard('users')->user()->id;
                                            } elseif (Auth::guard('guest')->check()) {
                                               $id=auth()->guard('guest')->user()->id;
                                            } else {
                                                $id ='';
                                            }  
                                        
                                        $wishlist = DB::table('wishlists')->where('customer_id', $id)->count();
                                        //$wishlist=DB::table('wishlists')->where('customer_id',$id)->get()->count;
                                        @endphp
                                        <span class="icon-1 position-relative">
                                           <a href="{{url('Wishlist')}}" class="dropbtn"><svg  viewBox="0 0 24 24" width="22" height="22" xmlns="http://www.w3.org/2000/svg"><path d="m7.234 3.004c-2.652 0-5.234 1.829-5.234 5.177 0 3.725 4.345 7.727 9.303 12.54.194.189.446.283.697.283s.503-.094.697-.283c4.977-4.831 9.303-8.814 9.303-12.54 0-3.353-2.58-5.168-5.229-5.168-1.836 0-3.646.866-4.771 2.554-1.13-1.696-2.935-2.563-4.766-2.563zm0 1.5c1.99.001 3.202 1.353 4.155 2.7.14.198.368.316.611.317.243 0 .471-.117.612-.314.955-1.339 2.19-2.694 4.159-2.694 1.796 0 3.729 1.148 3.729 3.668 0 2.671-2.881 5.673-8.5 11.127-5.454-5.285-8.5-8.389-8.5-11.127 0-1.125.389-2.069 1.124-2.727.673-.604 1.625-.95 2.61-.95z" fill-rule="nonzero"/></svg>
                                        </a> <span class="order-list order-list-res wishlist">{{$wishlist}}</span>
                                        </span>
                                         
                                        
                                       
                                      
                                    <!--     <div class="dropdown-content">
                                         <a href="{{url('customer/my_account')}}"> My Account</a>
                                         <a href="{{url('Wishlist')}}"> Wishlist</a>
                                         <a href="{{url('user/logout')}}"> Logout</a>
                                     </div>-->
                                 </div>

                                 @else
                                 <div class="dropdown logoutheader">
                                     <a href="{{url('user/auth')}}" class="dropbtn"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                             viewBox="0 0 24 24" style="fill: #000;transform: ;msFilter:;">
                                             <path
                                                 d="M7.5 6.5C7.5 8.981 9.519 11 12 11s4.5-2.019 4.5-4.5S14.481 2 12 2 7.5 4.019 7.5 6.5zM20 21h1v-1c0-3.859-3.141-7-7-7h-4c-3.86 0-7 3.141-7 7v1h17z">
                                             </path>
                                         </svg>
                                           <span class="mobile-view-none"> </span> 
                                        </a>
                                        
                                        
                                    <!--    <div class="dropdown-content">
                                         <a href="{{url('user/auth')}}">Login / Register</a>
                                         <a href="{{url('Wishlist')}}">Wishlist</a>
                                         <a href="{{url('cart')}}">Cart</a>
                                     </div> -->
                                     
                                     
                       
                                         <a href="{{url('Wishlist')}}" class="dropbtn"><svg  viewBox="0 0 24 24" width="22" height="22" xmlns="http://www.w3.org/2000/svg"><path d="m7.234 3.004c-2.652 0-5.234 1.829-5.234 5.177 0 3.725 4.345 7.727 9.303 12.54.194.189.446.283.697.283s.503-.094.697-.283c4.977-4.831 9.303-8.814 9.303-12.54 0-3.353-2.58-5.168-5.229-5.168-1.836 0-3.646.866-4.771 2.554-1.13-1.696-2.935-2.563-4.766-2.563zm0 1.5c1.99.001 3.202 1.353 4.155 2.7.14.198.368.316.611.317.243 0 .471-.117.612-.314.955-1.339 2.19-2.694 4.159-2.694 1.796 0 3.729 1.148 3.729 3.668 0 2.671-2.881 5.673-8.5 11.127-5.454-5.285-8.5-8.389-8.5-11.127 0-1.125.389-2.069 1.124-2.727.673-.604 1.625-.95 2.61-.95z" fill-rule="nonzero"/></svg>
                                        </a>
                                         
                                        
                                      
                                 </div>
                                 
                                 
                              

                                 <!-- <a class="header-action-btn" href="{{url('user/auth')}}">
                            <span class="icon position-relative">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill:  #000;transform: ;msFilter:;"><path d="M7.5 6.5C7.5 8.981 9.519 11 12 11s4.5-2.019 4.5-4.5S14.481 2 12 2 7.5 4.019 7.5 6.5zM20 21h1v-1c0-3.859-3.141-7-7-7h-4c-3.86 0-7 3.141-7 7v1h17z"></path></svg> <span class="mobile-view-none">Login/Register</span>
                            </span>
                        </a> -->
                                 @endif
                             </li>
                         </ul>
                        
                         {{-- wish list --}}
                         <div class="cart_render">
                             
                            @if(auth()->guard('users')->user() || auth()->guard('guest')->user())
                            @php
                            if (Auth::guard('users')->check()) {
                                               $id=auth()->guard('users')->user()->id;
                                            } elseif (Auth::guard('guest')->check()) {
                                               $id=auth()->guard('guest')->user()->id;
                                            } else {
                                                $id ='';
                                            }

                            $cart=DB::table('cart_tables')->where('customer_id',$id)->get();



                            @endphp
                            <button class="header-action-btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#AsideOffcanvasCart" aria-controls="AsideOffcanvasCart">
                            <span class="icon-1 position-relative">

                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M5 22h14c1.103 0 2-.897 2-2V9a1 1 0 0 0-1-1h-3V7c0-2.757-2.243-5-5-5S7 4.243 7 7v1H4a1 1 0 0 0-1 1v11c0 1.103.897 2 2 2zM9 7c0-1.654 1.346-3 3-3s3 1.346 3 3v1H9V7zm-4 3h2v2h2v-2h6v2h2v-2h2l.002 10H5V10z"></path></svg>
                                    <span class="order-list order-list-res cartcount">{{count($cart)}}  </span>
                             </span>
                            </button>
                            @else
                                @php
                                $session_cart=Session::get('cart',[]);
                                @endphp

                            <button class="header-action-btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#AsideOffcanvasCart" aria-controls="AsideOffcanvasCart">
                            <span class="icon-1 position-relative">

                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M5 22h14c1.103 0 2-.897 2-2V9a1 1 0 0 0-1-1h-3V7c0-2.757-2.243-5-5-5S7 4.243 7 7v1H4a1 1 0 0 0-1 1v11c0 1.103.897 2 2 2zM9 7c0-1.654 1.346-3 3-3s3 1.346 3 3v1H9V7zm-4 3h2v2h2v-2h6v2h2v-2h2l.002 10H5V10z"></path></svg>
                                    <span class="order-list order-list-res cartcount">{{count($session_cart)}}</span>
                             </span>
                            </button>
                            @endif

                         </div>
                         
                         <div class="hamburgerm d-none d-lg-block"><svg xmlns="http://www.w3.org/2000/svg" width="30"
                                 height="30" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                                 <path d="M4 6h16v2H4zm0 5h16v2H4zm0 5h16v2H4z"></path>
                             </svg></div>
                         <button class="header-menu-btn"
                             @inype="button" data-bs-toggle="offcanvas"
                             data-bs-target="#AsideOffcanvasMenu" aria-controls="AsideOffcanvasMenu">
                             <span></span>
                             <span></span>
                             <span></span>
                         </button>
                     </div>
                 </div>
             </div>
             
             
               <div class="row align-items-center mob-view">
                   
                   
                   
                 <div class="col col-md-8 mob-heade-logo-part">
                     
                   <ul class="nav-mobile" >
                        
                     
     
  <li class="menu-container"> 
    <input id="menu-toggle" type="checkbox">
    <label for="menu-toggle" class="menu-button">  
      <svg class="icon-open" viewBox="0 0 24 24"><path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"></path></svg>
      <svg class="icon-close" viewBox="0 0 100 100">
        <path d="M83.288 88.13c-2.114 2.112-5.575 2.112-7.69 0L53.66 66.188c-2.113-2.112-5.572-2.112-7.686 0l-21.72 21.72c-2.114 2.113-5.572 2.113-7.687 0l-4.693-4.692c-2.114-2.114-2.114-5.573 0-7.688l21.72-21.72c2.112-2.115 2.112-5.574 0-7.687L11.87 24.4c-2.114-2.113-2.114-5.57 0-7.686l4.842-4.842c2.113-2.114 5.57-2.114 7.686 0l21.72 21.72c2.114 2.113 5.572 2.113 7.688 0l21.72-21.72c2.115-2.114 5.574-2.114 7.688 0l4.695 4.695c2.112 2.113 2.112 5.57-.002 7.686l-21.72 21.72c-2.112 2.114-2.112 5.573 0 7.686L88.13 75.6c2.112 2.11 2.112 5.572 0 7.687l-4.842 4.84z"/>
      </svg> 
    </label> 
    
    
             <ul class="menu-sidebar">
    @php
    $category = DB::table('categories')
                  ->select('title', 'id', 'slug')
                  ->where('is_parent', 0)
                  ->orderBy('headerorder', 'asc')
                  ->where('header', 'active')
                  ->limit(9)
                  ->where('status', 'active')
                  ->get();
    @endphp
    @foreach($category as $c)
        @php
        $subcategory = DB::table('categories')
                         ->where('is_parent', 1)
                         ->where('parent_id', $c->id)
                         ->where('header', 'active')
                         ->get();
        @endphp

        @if($subcategory->count() > 0)
        <li>
            
              <input type="checkbox" id="sub-one-{{ $c->id }}" class="submenu-toggle" style="display: none;">

            <label class="submenu-label" for="sub-one-{{ $c->id }}">
              {{ $c->title }}
                <div class="arrow right"><a href="{{ url('product_list') . '/' . $c->slug }}">  &#8250;</a></div>
            </label>

            <ul class="menu-sub">
                <li class="menu-sub-title">
                    <label class="submenu-label" for="sub-one-{{ $c->id }}">Back</label>
                    <div class="arrow left">&#8249;</div>
                </li>

                @foreach($subcategory as $sub)
                    @php
                    $child_subcategory = DB::table('categories')
                                           ->where('is_parent', 1)
                                           ->where('parent_id', $sub->id)
                                       
                                           ->get();
                    @endphp

                    @if($child_subcategory->count() > 0)
                    <li>
                        <input type="checkbox" id="sub-two-{{ $sub->id }}" class="submenu-toggle">
                        
                        <label class="submenu-label" for="sub-two-{{ $sub->id }}">
                        {{ $sub->title }}
                        <div class="arrow right"><a href="{{ url('product_list') . '/' . $sub->slug }}">&#8250;</a> </div>
                        </label>
                        <ul class="menu-sub">
                            <li class="menu-sub-title">
                                <label class="submenu-label" for="sub-two-{{ $sub->id }}">Back</label>
                                <div class="arrow left">&#8249;</div>
                            </li>
                            @foreach($child_subcategory as $cs)
                                <li><a href="{{ url('product_list') . '/' . $cs->slug }}">{{ $cs->title }}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    @else
                    <li><a href="{{ url('product_list') . '/' . $sub->slug }}">{{ $sub->title }}</a></li>
                    @endif
                @endforeach
            </ul>
        </li>
        @else
        <li><a href="{{url('product_list').'/'.$c->slug}}">{{$c->title}}</a></li>
        @endif
    @endforeach
</ul>


 
                       
                     <div class="header-logo ">
                         <a href="{{url('index')}}">
                            <!-- <img class="logo-main" src="{{asset('frontend/img/Prrayasha/logo.png')}}" 
                                 alt="Logo" style="width: 70px; height: 70px;" />  -->
                                   <span>P</span>RRAYASHA <span>C</span>OLLECTIONS
                         </a>
                     </div>
                 </div>
            
                 <div class="col col-md-4">
                     <div class="header-action justify-content-end">


                         <ul class="m-0">
                             <li>
                                 @if(Auth::guard('users')->user())
                                 <div class="dropdown logoutheader">
                                     <a href="{{url('customer/my_account')}}" class="dropbtn"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                             viewBox="0 0 24 24" style="fill: #000;transform: ;msFilter:;">
                                             <path
                                                 d="M7.5 6.5C7.5 8.981 9.519 11 12 11s4.5-2.019 4.5-4.5S14.481 2 12 2 7.5 4.019 7.5 6.5zM20 21h1v-1c0-3.859-3.141-7-7-7h-4c-3.86 0-7 3.141-7 7v1h17z">
                                             </path>
                                         </svg> <span class="mobile-view-none"> </span></a>
                                        
                                        @php
                                        if (Auth::guard('users')->check()) {
                                               $id=auth()->guard('users')->user()->id;
                                            } elseif (Auth::guard('guest')->check()) {
                                               $id=auth()->guard('guest')->user()->id;
                                            } else {
                                                $id ='';
                                            }
                                        $wishlist = DB::table('wishlists')->where('customer_id', $id)->count();
                                        //$wishlist=DB::table('wishlists')->where('customer_id',$id)->get()->count;
                                        
                                        @endphp
                                        <span class="icon-1 position-relative">
                                           <a href="{{url('Wishlist')}}" class="dropbtn"><svg  viewBox="0 0 24 24" width="22" height="22" xmlns="http://www.w3.org/2000/svg"><path d="m7.234 3.004c-2.652 0-5.234 1.829-5.234 5.177 0 3.725 4.345 7.727 9.303 12.54.194.189.446.283.697.283s.503-.094.697-.283c4.977-4.831 9.303-8.814 9.303-12.54 0-3.353-2.58-5.168-5.229-5.168-1.836 0-3.646.866-4.771 2.554-1.13-1.696-2.935-2.563-4.766-2.563zm0 1.5c1.99.001 3.202 1.353 4.155 2.7.14.198.368.316.611.317.243 0 .471-.117.612-.314.955-1.339 2.19-2.694 4.159-2.694 1.796 0 3.729 1.148 3.729 3.668 0 2.671-2.881 5.673-8.5 11.127-5.454-5.285-8.5-8.389-8.5-11.127 0-1.125.389-2.069 1.124-2.727.673-.604 1.625-.95 2.61-.95z" fill-rule="nonzero"/></svg>
                                        </a> <span class="order-list order-list-res wishlist">{{$wishlist}}</span>
                                        </span>
                                         
                                        
                                       
                                      
                                    <!--     <div class="dropdown-content">
                                         <a href="{{url('customer/my_account')}}"> My Account</a>
                                         <a href="{{url('Wishlist')}}"> Wishlist</a>
                                         <a href="{{url('user/logout')}}"> Logout</a>
                                     </div>-->
                                 </div>

                                 @else
                                 <div class="dropdown logoutheader">
                                     <a href="{{url('user/auth')}}" class="dropbtn"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                             viewBox="0 0 24 24" style="fill: #000;transform: ;msFilter:;">
                                             <path
                                                 d="M7.5 6.5C7.5 8.981 9.519 11 12 11s4.5-2.019 4.5-4.5S14.481 2 12 2 7.5 4.019 7.5 6.5zM20 21h1v-1c0-3.859-3.141-7-7-7h-4c-3.86 0-7 3.141-7 7v1h17z">
                                             </path>
                                         </svg>
                                           <span class="mobile-view-none"> </span> 
                                        </a>
                                        
                                        
                                    <!--    <div class="dropdown-content">
                                         <a href="{{url('user/auth')}}">Login / Register</a>
                                         <a href="{{url('Wishlist')}}">Wishlist</a>
                                         <a href="{{url('cart')}}">Cart</a>
                                     </div> -->
                                     
                                     
                       
                                         <a href="{{url('Wishlist')}}" class="dropbtn"><svg  viewBox="0 0 24 24" width="22" height="22" xmlns="http://www.w3.org/2000/svg"><path d="m7.234 3.004c-2.652 0-5.234 1.829-5.234 5.177 0 3.725 4.345 7.727 9.303 12.54.194.189.446.283.697.283s.503-.094.697-.283c4.977-4.831 9.303-8.814 9.303-12.54 0-3.353-2.58-5.168-5.229-5.168-1.836 0-3.646.866-4.771 2.554-1.13-1.696-2.935-2.563-4.766-2.563zm0 1.5c1.99.001 3.202 1.353 4.155 2.7.14.198.368.316.611.317.243 0 .471-.117.612-.314.955-1.339 2.19-2.694 4.159-2.694 1.796 0 3.729 1.148 3.729 3.668 0 2.671-2.881 5.673-8.5 11.127-5.454-5.285-8.5-8.389-8.5-11.127 0-1.125.389-2.069 1.124-2.727.673-.604 1.625-.95 2.61-.95z" fill-rule="nonzero"/></svg>
                                        </a>
                                         
                                        
                                      
                                 </div>
                                 
                                 
                              

                                 <!-- <a class="header-action-btn" href="{{url('user/auth')}}">
                            <span class="icon position-relative">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill:  #000;transform: ;msFilter:;"><path d="M7.5 6.5C7.5 8.981 9.519 11 12 11s4.5-2.019 4.5-4.5S14.481 2 12 2 7.5 4.019 7.5 6.5zM20 21h1v-1c0-3.859-3.141-7-7-7h-4c-3.86 0-7 3.141-7 7v1h17z"></path></svg> <span class="mobile-view-none">Login/Register</span>
                            </span>
                        </a> -->
                                 @endif
                             </li>
                         </ul>
                        
                         {{-- wish list --}}
                         <div class="cart_render">
                             
                            @if(auth()->guard('users')->user() || auth()->guard('guest')->user())
                            @php
                            if (Auth::guard('users')->check()) {
                                               $id=auth()->guard('users')->user()->id;
                                            } elseif (Auth::guard('guest')->check()) {
                                               $id=auth()->guard('guest')->user()->id;
                                            } else {
                                                $id ='';
                                            }
                            $cart=DB::table('cart_tables')->where('customer_id',$id)->get();



                            @endphp
                            <button class="header-action-btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#AsideOffcanvasCart" aria-controls="AsideOffcanvasCart">
                            <span class="icon-1 position-relative">

                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M5 22h14c1.103 0 2-.897 2-2V9a1 1 0 0 0-1-1h-3V7c0-2.757-2.243-5-5-5S7 4.243 7 7v1H4a1 1 0 0 0-1 1v11c0 1.103.897 2 2 2zM9 7c0-1.654 1.346-3 3-3s3 1.346 3 3v1H9V7zm-4 3h2v2h2v-2h6v2h2v-2h2l.002 10H5V10z"></path></svg>
                                    <span class="order-list order-list-res cartcount">{{count($cart)}}  </span>
                             </span>
                            </button>
                            @else
                                @php
                                $session_cart=Session::get('cart',[]);
                                @endphp

                            <button class="header-action-btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#AsideOffcanvasCart" aria-controls="AsideOffcanvasCart">
                            <span class="icon-1 position-relative">

                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M5 22h14c1.103 0 2-.897 2-2V9a1 1 0 0 0-1-1h-3V7c0-2.757-2.243-5-5-5S7 4.243 7 7v1H4a1 1 0 0 0-1 1v11c0 1.103.897 2 2 2zM9 7c0-1.654 1.346-3 3-3s3 1.346 3 3v1H9V7zm-4 3h2v2h2v-2h6v2h2v-2h2l.002 10H5V10z"></path></svg>
                                    <span class="order-list order-list-res cartcount">{{count($session_cart)}}</span>
                             </span>
                            </button>
                            @endif

                         </div>
                         
                    
                     </div>
                 </div>
             </div> 
             
        
         </div>
     </header>
     
     <div class="mob-search-area">
          <div class="container">
         <div class="row">
          <div class="col col-md-12 my-2 search-box-mob">
                 <form action="{{ url('search') }}" method="post">

                     @csrf
                     <div class="aside-search-form position-relative mb-0 mobile-view-only">
                         <label for="SearchInput" class="visually-hidden">Search</label>
                         <input id="SearchInput" type="text" name="product_name" class="form-control mb-0"
                             placeholder="Search entire store…">
                         <button class="search-btn" type="submit"><i class="fa fa-search"></i></button>
                     </div>
                 </form>
             </div>
             </div>
             </div>
             </div>



            <div class="topnavnewmega" id="myTopnav">


         @php
         $category=DB::table('categories')->select('title','id','slug','photo')->where('is_parent',0)->orderBy('headerorder','asc')->where('header','active')->limit(4)->where('status','active')->get();
         @endphp
        <!--<div class="dropdownn megaa">-->
        <!--    <div class="mainnaame">-->
        <!--        <img src="https://taslim.oceansoftwares.in/prrayasha/public/frontend/img/3.png" class="img-fluid menuimg" width="64" height="64" alt="">-->
        <!--        <a href="{{url('index')}}" class="dropbtnn"> All categories-->
        <!--     </a>-->
        <!--      </div>-->

        <!--    <div class="dropdownn-content mega-menu animate">-->

        <!--      <ul>-->
        <!--      @foreach($category as $c)    -->
        <!--      <li class="title">-->
        <!--             <a  href="{{url('product_list').'/'.$c->slug}}" style="color:black !important;">{{$c->title}}</a>-->
        <!--     </li>-->
        <!--      @endforeach()-->
        <!--      </ul>-->

        <!--    </div>-->
        <!--  </div>-->

          @foreach($category as $c)    
    <div class="dropdownn megaa">
        <div class="mainnaame">
            <img src="{{ $c->photo }}" class="img-fluid menuimg" width="64" height="64" alt="">
            <button class="dropbtnn">{{ $c->title }}</button>
        </div>
        <div class="dropdownn-content mega-menu animate">

        
            <ul>
                @php
                    $subcategory = DB::table('categories')->where('is_parent', 1)->where('parent_id', $c->id)->where('header', 'active')->where('status', 'active')->get();
                @endphp
                @if($subcategory->count() > 0)
                    @foreach($subcategory as $sub)
                        <li class="animate">
                            <a class="sub-sub-menu-hii" href="{{ url('product_list').'/'.$sub->slug }}">{{ $sub->title }}</a>
                            @php
                                $child_subcategory = DB::table('categories')->where('is_parent', 1)->where('sub_cate_id', $sub->id)->get();
                            @endphp
                            @if($child_subcategory->count() > 0)
                                <ul class="subcategroryy-sub-menu">
                                    @foreach($child_subcategory as $cs)
                                        <li><a class="sub-sub-menu" href="{{ url('product_list').'/'.$cs->slug }}">{{ $cs->title }}</a></li>
                                    @endforeach
                                </ul>
                            @endif
                        </li>
                    @endforeach
                @endif
            </ul>
        </div>
    </div>
@endforeach






    </div>

     <!--End Sticky Icon-->

      <!--==   <div class="icon-bar">
         <a href="https://www.facebook.com/people/Prrayasha-Collections/61554943980619/" class="facebook" target="_blank"><i
                 class="fa fa-facebook"></i></a>
         <a href="#" class="whatsapp"><i class="fa fa-whatsapp"></i></a>
         <a href="https://www.instagram.com/prrayashacollections/" class="instagram"><i class="fa fa-instagram"></i></a>
         <a href="https://www.youtube.com/@prrayashacollections" class="youtube"><i class="fa fa-youtube"></i></a>
     </div>


     <div class="adminActions">
         <input type="checkbox" name="adminToggle" class="adminToggle" />
         <a class="adminButton" href="#!"><i class="fa fa-share"></i></a>
         <div class="adminButtons">
             <a href="https://www.facebook.com/people/Prrayasha-Collections/61554943980619/" title="facebook" class="facebook"><i class="fa fa-facebook"></i></a>
             <a href="#" title="whatsapp" class="whatsapp"><i class="fa fa-whatsapp"></i></a>
             <a href="https://www.instagram.com/prrayashacollections/" title="instagram" class="instagram"><i class="fa fa-instagram"></i></a>
             <a href="https://www.youtube.com/@prrayashacollections" title="youtube" class="youtube"><i class="fa fa-youtube"></i></a>
         </div>
     </div>
  End Header Wrapper ==-->