<!--== Start Footer Area Wrapper ==-->
<footer class="footer-area">
    <!--== Start Footer Main ==-->
    <div class="footer-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="widget-item">
                        <h4 class="widget-title">Quick Links</h4>
                        <ul class="widget-nav">
                            <li><a href="{{ url('aboutus') }}">About Us</a></li>
                               @if(Auth::guard('users')->user())
                            <li><a href="{{url('customer/my_account')}}">My Account</a></li>
                            <li><a href="{{url('cart')}}">Checkout</a></li>
                            @endif
                             <li><a href="{{url('cart')}}">Cart</a></li>
                            <li><a href="{{url('index')}}">Shop Now!</a></li>
                            <li><a href="{{ url('contactus') }}">Contact Us</a></li>
                            <!-- <li><a href="#">Customer Services</a></li>
                            <li><a href="#">Feedback</a></li> -->
                          
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="widget-item">
                        <h4 class="widget-title">Customer Support</h4>
                        <ul class="widget-nav">
                          <li><a href="{{url('termscondition')}}">Terms and Conditions</a></li>
                          
                            <li><a href="{{ url('privacypolicy') }}">Privacy Policy</a></li>
                            <li><a href="{{url('reviews')}}">Reviews</a></li>
                           
                            <!-- <li><a href="faqs.html">FAQ's</a></li> -->
                          
                          
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="widget-item">
                        <h4 class="widget-title">Information</h4>
                        <div class="widget-social no-fl">
                            <div class="foot-pad13 d-flex">
                                <svg class="me-1" xmlns="http://www.w3.org/2000/svg" width="50" height="24"
                                    viewBox="0 0 24 24" style="fill: rgb(33 61 99);transform: ;msFilter:; margin-top: 5px">
                                    <path
                                        d="M12 14c2.206 0 4-1.794 4-4s-1.794-4-4-4-4 1.794-4 4 1.794 4 4 4zm0-6c1.103 0 2 .897 2 2s-.897 2-2 2-2-.897-2-2 .897-2 2-2z">
                                    </path>
                                    <path
                                        d="M11.42 21.814a.998.998 0 0 0 1.16 0C12.884 21.599 20.029 16.44 20 10c0-4.411-3.589-8-8-8S4 5.589 4 9.995c-.029 6.445 7.116 11.604 7.42 11.819zM12 4c3.309 0 6 2.691 6 6.005.021 4.438-4.388 8.423-6 9.73-1.611-1.308-6.021-5.294-6-9.735 0-3.309 2.691-6 6-6z">
                                    </path>
                                </svg>
                                <a class="foot-link">Provident Cosmo City, DR Abdul Kalam Road, Pudhupakkam Village,
Chengalpet 603103</a>
                            </div>
<div class="foot-pad13">
<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24" height="24" viewBox="0 0 24 24" style="fill: rgb(33 61 99);transform: ;msFilter:;">
    <path d="M19.077,4.928c-2.082-2.083-4.922-3.134-7.904-2.894C7.164,2.356,3.65,5.144,2.474,8.99 c-0.84,2.748-0.487,5.617,0.881,7.987L2.059,21.28c-0.124,0.413,0.253,0.802,0.67,0.691l4.504-1.207 c1.459,0.796,3.101,1.215,4.773,1.216h0.004c4.195,0,8.071-2.566,9.412-6.541C22.728,11.563,21.762,7.616,19.077,4.928z M16.898,15.554c-0.208,0.583-1.227,1.145-1.685,1.186c-0.458,0.042-0.887,0.207-2.995-0.624c-2.537-1-4.139-3.601-4.263-3.767 c-0.125-0.167-1.019-1.353-1.019-2.581S7.581,7.936,7.81,7.687c0.229-0.25,0.499-0.312,0.666-0.312c0.166,0,0.333,0,0.478,0.006 c0.178,0.007,0.375,0.016,0.562,0.431c0.222,0.494,0.707,1.728,0.769,1.853s0.104,0.271,0.021,0.437s-0.125,0.27-0.249,0.416 c-0.125,0.146-0.262,0.325-0.374,0.437c-0.125,0.124-0.255,0.26-0.11,0.509c0.146,0.25,0.646,1.067,1.388,1.728 c0.954,0.85,1.757,1.113,2.007,1.239c0.25,0.125,0.395,0.104,0.541-0.063c0.146-0.166,0.624-0.728,0.79-0.978 s0.333-0.208,0.562-0.125s1.456,0.687,1.705,0.812c0.25,0.125,0.416,0.187,0.478,0.291 C17.106,14.471,17.106,14.971,16.898,15.554z"></path>
</svg>
    <a class="foot-link" href="tel://+91 91590 24967">+91 91590 24967</a>
</div>
<div class="foot-pad13">
    <svg class="me-1" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
        viewBox="0 0 24 24" style="fill: rgb(33 61 99);transform: ;msFilter:;">
        <path
            d="M20 4H4c-1.103 0-2 .897-2 2v12c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2V6c0-1.103-.897-2-2-2zm0 2v.511l-8 6.223-8-6.222V6h16zM4 18V9.044l7.386 5.745a.994.994 0 0 0 1.228 0L20 9.044 20.002 18H4z">
        </path>
    </svg>
    <a class="foot-link"
        href="mailto://prayashacollections@gmail.com ">prayashacollections@gmail.com </a>
</div>
</div>


                        <div class="widget-social foo-social mt-3">
                            <a href="https://www.facebook.com/people/Prrayasha-Collections/61554943980619/" target="_blank" rel="noopener"><i class="fa fa-facebook"></i></a>
                          
                            <a href="https://www.instagram.com/prrayashacollections/" target="_blank" rel="noopener"><i class="fa fa-instagram"></i></a>
                              <a href="https://www.youtube.com/@prrayashacollections" target="_blank" rel="noopener"><i class="fa fa-youtube"></i></a>
                        </div>
                        <div class="widget-social no-fls d-none">
                            <p class="text-white">To get the latest news and latest updates from us.</p>
                            <form class="newsletter-form">
                                <label>Your E-mail Address:</label>
                                <input type="email" class="input-newsletter" placeholder="Enter your email" name="EMAIL"
                                    required="" autocomplete="off">
                                <button type="submit" class=""
                                    style="pointer-events: all; cursor: pointer;">Subscribe</button>
                                <div id="validator-newsletter" class="form-result"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--== End Footer Main ==-->
    <!--== Start Aside Search Form ==-->
    <aside class="aside-search-box-wrapper offcanvas offcanvas-top" tabindex="-1" id="AsideOffcanvasSearch"
        aria-labelledby="offcanvasTopLabel">
        <div class="offcanvas-header">
            <h5 class="d-none" id="offcanvasTopLabel">Aside Search</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"><i
                    class="fa fa-close"></i></button>
        </div>
        <div class="offcanvas-body">
            <div class="container pt--0 pb--0">
                <div class="search-box-form-wrap">
                    <div class="search-note">
                        <p>Start typing and press Enter to search</p>
                    </div>
                    <form id="search_prod" action="{{ url('search_products') }}" method="post">
                        @csrf
                        <div class="aside-search-form position-relative">
                            <label for="SearchInput" class="visually-hidden">Search</label>
                            <input id="SearchInput" type="search" class="form-control"
                                placeholder="Search entire store…">
                            <button class="default-btn" id="search_products" type="submit"><i
                                    class="fa fa-search"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </aside>
    @php
$category=DB::table('categories')->select('title','id','slug')->where('is_parent',0)->orderBy('headerorder','asc')->where('header','active')->limit(9)->where('status','active')->get();
@endphp
    <!--== Start Aside Menu ==-->
  <aside class="off-canvas-wrapper offcanvas offcanvas-start" tabindex="-1" id="AsideOffcanvasMenu"
        aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
            <h1 class="d-none" id="offcanvasExampleLabel">Aside Menu</h1>
            <button class="btn-menu-close" data-bs-dismiss="offcanvas" aria-label="Close">menu <i
                    class="fa fa-chevron-left"></i></button>
        </div>

         <ul class="nav-mobile" class="offcanvas-body">
     
  <li class="menu-container"> 
    <input id="menu-toggle" type="checkbox">
    <label for="menu-toggle" class="menu-button">  
      <svg class="icon-open" viewBox="0 0 24 24"><path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"></path></svg>
      <svg class="icon-close" viewBox="0 0 100 100">
        <path d="M83.288 88.13c-2.114 2.112-5.575 2.112-7.69 0L53.66 66.188c-2.113-2.112-5.572-2.112-7.686 0l-21.72 21.72c-2.114 2.113-5.572 2.113-7.687 0l-4.693-4.692c-2.114-2.114-2.114-5.573 0-7.688l21.72-21.72c2.112-2.115 2.112-5.574 0-7.687L11.87 24.4c-2.114-2.113-2.114-5.57 0-7.686l4.842-4.842c2.113-2.114 5.57-2.114 7.686 0l21.72 21.72c2.114 2.113 5.572 2.113 7.688 0l21.72-21.72c2.115-2.114 5.574-2.114 7.688 0l4.695 4.695c2.112 2.113 2.112 5.57-.002 7.686l-21.72 21.72c-2.112 2.114-2.112 5.573 0 7.686L88.13 75.6c2.112 2.11 2.112 5.572 0 7.687l-4.842 4.84z"/>
      </svg> 
    </label>      
    <ul class="menu-sidebar">
      <li><a href="#">Item</a></li>
      <li><a href="#">Item</a></li>
      <li><a href="#">Item</a></li>
      <li>
        <input type="checkbox" id="sub-one" class="submenu-toggle">        
        <label class="submenu-label" for="sub-one">Category</label>
        <div class="arrow right">&#8250;</div>           
        <ul class="menu-sub">
          <li class="menu-sub-title">
            <label class="submenu-label" for="sub-one">Back</label>
            <div class="arrow left">&#8249;</div>              
          </li>        
          <li><a href="#">Sub-item</a></li>
          <li><a href="#">Sub-item</a></li>
          <li><a href="#">Sub-item</a></li>
          <li><a href="#">Sub-item</a></li>                                
        </ul>
      </li>
      
      <li>
        <input type="checkbox" id="sub-two" class="submenu-toggle">        
        <label class="submenu-label" for="sub-two">Category</label>
        <div class="arrow right">&#8250;</div> 
        <ul class="menu-sub">
          <li class="menu-sub-title">
            <label class="submenu-label" for="sub-two">Back</label>
            <div class="arrow left">&#8249;</div>              
          </li>      
          <li><a href="#">Sub-item</a></li>
          <li><a href="#">Sub-item</a></li>
          <li><a href="#">Sub-item</a></li>     
          <li><a href="#">Sub-item</a></li>                                
        </ul>              
      </li>                                         
    </ul> 
  </li>
</ul>
    
    </aside>
    <!--== End Aside Menu ==-->
    <!--== End Aside Search Form ==-->
    <!--== Start Footer Bottom ==-->
    <div class="footer-bottom">
        <div class="container pt-0 pb-0">
            <div class="footer-bottom-content">
                <p class="copyright fs-6">
                @2024 Prrayasha Collections. All Rights Reserved. Developed & Maintained by <a href="https://oceansoftwares.com/"> Ocean Softwares. </a>
                </p>
            </div>
        </div>
    </div>
    <!--== End Footer Bottom ==-->
</footer>
<!--== End Footer Area Wrapper ==-->
<!--== Scroll Top Button ==-->
<div id="scroll-to-top" class="scroll-to-top"><span class="fa fa-angle-up"></span></div>
<!--== Start Product Quick Wishlist Modal ==-->
<!--== End Aside Search Form ==-->
<!--== Start Aside Menu ==-->
<aside class="off-canvas-wrapper offcanvas offcanvas-start" tabindex="-1" id="AsideOffcanvasMenu"
    aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header">
        <h1 class="d-none" id="offcanvasExampleLabel">Aside Menu</h1>
        <button class="btn-menu-close" data-bs-dismiss="offcanvas" aria-label="Close">menu <i
                class="fa fa-chevron-left"></i></button>
    </div>
    @php
    $category=DB::table('categories')->select('title','id')->where('status','active')->get();
    @endphp
    <div class="offcanvas-body">
        <div id="offcanvasNav" class="offcanvas-menu-nav">
            <ul>
                <li class="offcanvas-nav-parent"><a class="offcanvas-nav-item" href="{{url('index')}}">Home</a></li>
                <!-- <li class="offcanvas-nav-parent"><a class="offcanvas-nav-item" href="#">about</a></li> -->
                <li class="offcanvas-nav-parent"><a class="offcanvas-nav-item" href="{{ url('aboutus') }}">
                        About</a></li>
                
                <li class="offcanvas-nav-parent"><a class="offcanvas-nav-item"
                        href="{{ url('product_list') }}">Products</a>
                    <ul class="submenu-nav-mega">
                    <?php
                        $sub_amt=0;
                        $categories=DB::table('categories')->where('status','active')->where('parent_id',null)->get();
                        if(auth()->guard('users')->user()){
                            $wishlists=DB::table('wishlists')->where('customer_id',auth()->guard('users')->user()->id)->where('status','active')->get();
                            $carts=DB::table('cart_tables')->where('customer_id',auth()->guard('users')->user()->id)->where('status','active')->get();
                            $islogged=true;
                            $wishlistcount=count($wishlists);
                            $cartcount=count($carts);
                        }else{
                            $carts =Session::get('cart',[]);
                            $islogged=false;
                            $cartcount=count($carts);
                            $wishlistcount=0;
                        }
                    
                        foreach($carts as $key=>$cart){
                           
                            if($islogged == true){
                                    $product = DB::table('products')->where('id', $cart->product_id)->where('status', 'active')->first();
                                    $product_variant = DB::table('product_variants')->where('product_id', $cart->product_id)->where('variants', $cart->arrtibute_name)->where('status', 'active')->first();
                                    
                                    if ($product && $product_variant) {
                                        $sale_price = Helper::fetchSalePrice($product_variant->regular_price, $product->tax_id, $product->discount, $product->discount_type);
                                        $sub_amt += ((int)$cart->product_qty * (int)$cart->price);
                                    } else {
                                        // Handle the case where product or product_variant is null
                                        // You can add some logging or set a default value
                                    }
                                } else {
                                    if (isset($carts[$key]['product_id'])) {
                                        $product = DB::table('products')->where('id', $carts[$key]['product_id'])->where('status', 'active')->first();
                                        $product_variant = DB::table('product_variants')->where('product_id', $carts[$key]['product_id'])->where('variants', $carts[$key]['variant'])->where('status', 'active')->first();
                                        
                                        if ($product && $product_variant) {
                                            $sale_price = Helper::fetchSalePrice($product_variant->regular_price, $product->tax_id, $product->discount, $product->discount_type);
                                            $sub_amt += ($carts[$key]['product_qty'] * $carts[$key]['price']);
                                        } else {
                                            // Handle the case where product or product_variant is null
                                            // You can add some logging or set a default value
                                        }
                                    }
                                }
                        }
                        ?> 
                        @foreach($category as $c)
                        @php
                        $products=DB::table('products')->where('category',$c->id)->where('status','active')->get();
                        @endphp
                        <li><a href="{{url('product_list')}}" class="mega-title">{{$c->title}}</a>
                            @foreach($products as $p)
                            <ul>
                                <li><a href="{{ url('products/?id=').$p->slug }}">{{$p->name}}</a></li>
                            </ul>
                            @endforeach
                        </li>
                        @endforeach
                        <!-- <li><a href="#/" class="mega-title">Body Care</a>
                                <ul>
                                    <li><a href="products.html">Body Wash</a></li>
                                    <li><a href="products.html">Body Gel</a></li>
                                    <li><a href="products.html">Body Scrub</a></li>
                                    <li><a href="products.html">Gel Wash</a></li>
                                </ul>
                            </li> -->
                    </ul>
                </li>
                
                <!--<li class="offcanvas-nav-parent"><a class="offcanvas-nav-item" href="offers.html">Offers</a></li>-->
                 <!--<li class="offcanvas-nav-parent"><a class="offcanvas-nav-item" href="contact.html">Contact</a></li> -->
            </ul>
        </div>
    </div>
</aside>
<!--== End Aside Menu ==-->
<div class="cart_tablerender">
    @include('frontend.pages.cart.cart_table')
</div>
<!-- Modal -->
<div class="modal right fade sidebarModal" id="contactmodal" tabindex="-1" role="dialog" aria-labelledby="contactmodal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="contactmodal">Right Sidebar</h4>
            </div>
            <div class="modal-body">
                <div class="sidebar-about-content">
                    <h3>About The Store</h3>
                    <div class="about-the-store">
                        <!-- <p>One of the most popular on the web is shopping. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p> -->
                        <ul class="sidebar-contact-info">
                            <li><i class="bx bx-map"></i> <a href="#" target="_blank">Chennai, Tamilnadu</a></li>
                            <li><i class="bx bx-phone-call"></i> <a href="tel:+91 8925048666">+91 8925048666</a></li>
                            <li><i class="bx bx-envelope"></i> <a
                                    href="mailto:gkrishnanatural@gmail.com">Gkrishnanatural@gmail.com</a></li>
                        </ul>
                    </div>
                    <ul class="social-link">
                        <li><a href="https://www.facebook.com/people/Prrayasha-Collections/61554943980619/" class="d-block" target="_blank"><i class="bx bxl-facebook"></i></a></li>
                      
                        <li><a href="https://www.instagram.com/prrayashacollections/" class="d-block" target="_blank"><i class="bx bxl-instagram"></i></a></li>
                        
                          <li><a href="https://www.youtube.com/@prrayashacollections" class="d-block" target="_blank"><i class="bx bxl-youtube"></i></a></li>
                     
                    </ul>
                </div>
            </div>
        </div><!-- modal-content -->
    </div><!-- modal-dialog -->
</div><!-- modal -->
<aside class="product-cart-view-modal modal fade" id="action-QuickViewModal" tabindex="-1"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div class="product-quick-view-content">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal">
                                        <span class="fa fa-close"></span>
                                    </button>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-6 d-flex align-items-center justify-content-center">
                                                <!--== Start Product Thumbnail Area ==-->
                                                <div class="product-single-thumb text-center">
                                                    <img src="" class="img-fluid w-50 product_img"
                                                        alt="Image-HasTech">
                                                </div>
                                                <!--== End Product Thumbnail Area ==-->
                                            </div>
                                            <div class="col-lg-6">
                                                <!--== Start Product Info Area ==-->
                                                <div class="product-details-content">
                                                    <!-- <h5 class="product-details-collection">Tulia Body Butter Moisturizer Cream</h5> -->
                                                    <h3 class="product-details-title product_name"></h3>
                                                    <div class="product-rating">
                                                        <label class="rating-label">
                                                            <p class="product_rating"></p>
                                                            <input class="rating modalrating" max="5"
                                                                oninput="this.style.setProperty('--value', `${this.valueAsNumber}`)"
                                                                step="0.5" style="--value:3" type="range"
                                                                value="2.5" disabled>
                                                        </label>
                                                    </div>
                                                    <p class="mb-6 description">
                                                    </p>
                                                    <div class="product-details-pro-qty">
                                                        <div class="pro-qty">          
                                                        <input type="hidden" class="count_prod_qty hiddenmodalcount_prod_qty" value="1"
                           >
              <input type="text" title="Quantity"
                                    class="quantity modalcount_prod_qty"
                                    value="1">
                                    <div class="dec qty-btn modal_d"  data-type="dec">-</div>
                            <div class="inc qty-btn modal_i" data-type="inc">+</div>
                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-details-pro-qty">
                                                    <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12 detail">
                                                        <div class="product-details-action">
                                                            <h4 class="price"><span>₹</span><span
                                                                    class="product_rate product_saleprice"></span>
                                                            </h4>
                                                        </div>
                                                        <input type="hidden" id="product-id">
                                                        <div class="product-details-action">
                                                            <div class="product-details-cart-wishlist">
                                                                <button type="button" data-type="multi_cart"
                                                                    class="multiple_carts add_tocart_modal btn"
                                                                    >Add to
                                                                    cart</button>
                                                            </div>
                                                            <div class="product-details-cart-wishlist">
                                                                <button type="button"
                                                                    class="btn buynowid default buy_now buy_now_size add_towishlist_modal"
                                                                    style="padding: 0px 36px!important;">Buy
                                                                    now</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--== End Product Info Area ==-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </aside>
<script type="text/javascript">
function search_products() {
    var product_name = $('#SearchInput').val();
    var token = "{{csrf_token()}}";
    $.ajax({
        type: 'POST',
        dataType: "json",
        url: "{{ url('search_products') }}",
        data: {
            product_name: product_name,
            _token: token
        },
        success: function(data) {
            // if (data.resval.success == true) {
                window.location.href = "{{url('search/?product_name=')}}" + product_name
           //}
        }
    });
}
$('#search_products').click(function() {
    search_products();
});
$(document).on('submit',"#search_prod",function(){
    search_products();
})



$(document).ready(function() {
$('#phone').focusout(function() {
  
    if ($(this).val().length != 10) {
        $(this).val('')
      alert("Please enter 10 digit Mobile Number.");
    }
  });
  $('#s-phone').focusout(function() {
  
    if ($(this).val().length != 10) {
        $(this).val('')
      alert("Please enter 10 digit Mobile Number.");
    }
  });
});
</script>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/66c1ff860cca4f8a7a775195/1i5issaov';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

<script src="https://unpkg.com/@popperjs/core@2"></script>
<script src="https://unpkg.com/tippy.js@6"></script>

<script>
    // tippy('.product-variant-size-button', {
    //     content: 'My tooltip!',
    //   });
    // tippy('.size-buttons-size-button');
    $(document).ready(function(){
      tippy('[data-product-stock]');        
    });

</script>

