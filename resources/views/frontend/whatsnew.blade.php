@extends('frontend.layouts.arrivals_products_master_new')
@section('content')
<main class="main-content">
<style>
.page-header-area{
        margin-top: -5px !important;
    }
  .round-button {
    background-color: #fff;
    border-radius: 50%;
    width: 40px; 
    height: 40px;
    padding: 0;
    text-align: center;
    display: flex; 
    align-items: center;
    justify-content: center;
    border: 2px solid #000; 
}
.noUi-handle{
    width:15px!important;
}

/* Flexbox for filter widgets */
.product-sidebar-widget {
    display: flex;
    flex-direction: column;
    justify-content: flex-start;
    align-items: flex-start;
    padding: 15px;
    position:relative;
    top:25px;
}

.product-widget {
    margin-bottom: 20px;
    width: 75%;
}

.product-widget-category {
    list-style: none;
    padding: 0;
    margin: 0;
}

.product-widget-category li {
    display: flex;
    align-items: center;
    margin-bottom: 10px;
}

.product-widget-category li input {
    margin-right: 10px;
}

.round-button {
    background-color: #fff;
    border-radius: 50%;
    width: 40px; 
    height: 40px;
    padding: 0;
    text-align: center;
    display: flex; 
    align-items: center;
    justify-content: center;
    border: 2px solid #000;
    margin-right: 10px;
    margin-bottom: 10px;
}

/* Ensure proper alignment for product size buttons */
.size-buttons-size-buttons {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 1px;
}

.product-widget-title {
    font-weight: bold;
    margin-bottom: 15px;
}

/* Mobile filter button close */
.mobile-product-filter-btn-close {
    position: absolute;
    top: 10px;
    right: 10px;
    background-color: transparent;
    border: none;
    font-size: 20px;
    cursor: pointer;
}

/* Ensure proper widths */
.product-widget {
    max-width: 100%;
    width: 75%;
}
section{
    top: -1030px;
    margin-left:20%;
}
section.browse-list-section.mobviewsecone {
    display: none;
}

/* For mobile view, set the product columns to display 2 per row */
@media (max-width: 767px) {
    .col-12.col-sm-6.col-md-3.col-lg-3 {
        width: 50%; /* 2 products per row */
    }
}

/* For tablets and larger devices, keep the existing layout */
@media (min-width: 768px) {
    .col-12.col-sm-6.col-md-3.col-lg-3 {
        width: 25%; /* 4 products per row */
    }
}
@media (max-width: 767px) {
    section {
        top: 0; /* Adjust to a more reasonable value for mobile */
        margin-left: 0; /* Set margin-left to 0 for mobile to prevent it from being pushed off-screen */
    }
      section.browse-list-section.mobviewsecone {
    display: block;
}
.topnavnewmega {
    display: none;
}
}
.noUi-handle-lower {
    width: 15px !important;
}

.noUi-handle.clicked {
    width: 0px !important;
}

</style>  

 <section class="browse-list-section mobviewsecone">
        <!-- category list custom -->

    

        <div class="container">
        
            <div class="row mb-n4 mb-sm-n10 g-3 g-sm-6">
    <div id="owl-one" class="owl-carousel owl-theme">

                @php
            $category=DB::table('categories')->select('title','id','slug','photo')->where('is_parent',0)->orderBy('headerorder','asc')->where('header','active')
            ->where('status','active')->get();
            @endphp

            @foreach($category as $c)    

            
                    <div class="item">
                
                        <div class="category-item text-center">
                        <a  href="{{url('product_list').'/'.$c->slug}}" style="color:black !important;">
                            <img src="{{$c->photo}}" class="img-fluid menuimg" width="64" height="64" alt="">
                            <h5 class="title fontsiz mt-0 mb-0">{{$c->title}}</h5>
                            
                            </a>
                    </div>
                    
                    </div>
                    
                
                

                @endforeach
                </div>
            </div>
        </div>
            </div>
    </section>
    <!--== Start Page Header Area Wrapper ==-->
    <section class="page-header-area">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="page-header-st3-content">
                        <h2 class="page-header-title">New Arrivals</h2>
                    </div>
                </div>
                <div class="col-md-6 justify-content-end d-flex">
                    <div class="page-header-st3-content">
                        <ol class="breadcrumb justify-content-center justify-content-md-start">
                            <li class="breadcrumb-item"><a class="text-dark" href="{{url('index')}}">Home</a></li>
                            <li class="breadcrumb-item active text-dark" aria-current="page">New Arrivals</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== End Page Header Area Wrapper ==-->
            <div class="container ">

                <div class="row justify-content-between flex-xl-row-reverse">

                    <div class="col-xl-9">
                        <button class="mobile-product-filter-btn" type="button"><i class="fa fa-filter"></i></button>

                     <input type="hidden" id="slug" name="slug" value="{{isset($slug) ? $slug : ''}}">




</div>
</div>
                   
                    </div>

                        <div class="col-xl-3 mobile-product-filter">

                            <div class="product-sidebar-widget ">
                                <button class="mobile-product-filter-btn-close" type="submit"><i class="fa fa-close"></i></button>

                                <!--<div class="product-widget-search ">-->

                                    <!--<form action="#">-->

                                    <!--    <input type="search" placeholder="Search Here">-->

                                    <!--    <button type="submit"><i class="fa fa-search"></i></button>-->

                                    <!--</form>-->

                                <!--</div>-->

                               

                                <div class="product-widget">

                                    <h4 class="product-widget-title">Price Filter</h4>

                                    <input type="hidden" id="highest_price" value="{{$highest_rate}}">

                                    <div class="product-widget-range-slider">

                                        <div class="slider-range" id="slider-range1"></div>

                                        <div class="slider-labels">

                                            <span id="slider-range-value1"></span>

                                            <span>—</span>

                                            <span id="slider-range-value2"></span>

                                        </div>

                                    </div>

                                </div>

                                @if(!isset($slug))

                                <div class="product-widget" style="display:none">

                                    <h4 class="product-widget-title">Categories</h4>

                                  

                                                @foreach($prod_categories as $c)

                                                

                                    <ul class="product-widget-category">        

                                        <!-- <li><a href="{{url('product_list')}}">{{$c->title}} <span>(</span></a></li> -->

                                        <li><input type="checkbox" name="cat[]" class="cat1 form-check-input" value="{{$c->id}}">&nbsp {{$c->title}} <span></li>

                                    </ul>

                                                   @endforeach

                                </div>

                                @endif

                                <div class="product-widget ">

                                    <h4 class="product-widget-title">Sort</h4>

                                    <div class="form-check">

                                        <input type="checkbox" class="form-check-input" id="discount1"

                                            name="discount" value="1" >

                                        <label class="form-check-label" for="check1">Discount</label>

                                    </div>

                                    <div class="form-check">

                                        <input type="checkbox" class="form-check-input" id="checkprice1"

                                            name="price_sort" value="1">

                                        <label class="form-check-label" for="check2">Price</label>

                                    </div>

                                    <div class="price-show" style="display:none">

                                        <input type="radio" class="form-check-input" id="radio-11" name="price_sort1" value="high-to-low">

                                        <label class="form-check-label">High to Low</label>

                                    </div>

                                    <div class="price-show" style="display:none">

                                        <input type="radio" class="form-check-input" id="radio-21" name="price_sort" value="low-to-high">

                                        <label class="form-check-label">Low to High</label>

                                    </div>

                                </div>
                                
                                
                                
                                
                                   <div class="product-widget ">

                                    <h4 class="product-widget-title">Availability</h4>

                                    <div class="form-check">

                                        <input type="radio" class="form-check-input" id="in_stock1"

                                            name="in_stock" value="1" >

                                        <label class="form-check-label" for="check1">In Stock </label>

                                    </div>

                                    <div class="form-check">

                                        <input type="radio" class="form-check-input" id="in_stock1"

                                            name="in_stock" value="2">

                                        <label class="form-check-label" for="check2">Out of Stock </label>

                                    </div>
                                    
                                <div class="form-check">

                                        <input type="radio" class="form-check-input" id="in_stock1"

                                            name="in_stock" value="3">

                                        <label class="form-check-label" for="check3">Full Stock </label>

                                    </div>
                                
                                </div>
                                
                                
                                
                                    
                                
                                   <div class="product-widget ">

                                    <h4 class="product-widget-title">Size</h4>
                                    <div class="form-check">

                                        <input type="checkbox" class="form-check-input" id="size1"

                                            name="size" value="XS" >

                                        <label class="form-check-label" for="check1">XS</label>

                                    </div>

                                    
                                         <div class="form-check">

                                        <input type="checkbox" class="form-check-input" id="size1"

                                            name="size" value="S" >

                                        <label class="form-check-label" for="check1">S</label>

                                    </div>

                                    <div class="form-check">

                                        <input type="checkbox" class="form-check-input" id="size1"

                                           name="size" value="M" >

                                        <label class="form-check-label" for="check1">M</label>

                                    </div>

                                    <div class="form-check">

                                        <input type="checkbox" class="form-check-input" id="size1"

                                            name="size" value="L" >

                                        <label class="form-check-label" for="check2">L</label>

                                    </div>
                                    
                                    
                                      <div class="form-check">

                                        <input type="checkbox" class="form-check-input" id="size1"

                                             name="size" value="XL">

                                        <label class="form-check-label" for="check2">XL</label>

                                    </div>
                                    
                                    
                                        <div class="form-check">

                                        <input type="checkbox" class="form-check-input" id="size1"

                                            name="size" value="2XL">

                                        <label class="form-check-label" for="check2">2XL</label>

                                    </div>
                                     <div class="form-check">

                                        <input type="checkbox" class="form-check-input" id="size1"

                                            name="size" value="3XL">

                                        <label class="form-check-label" for="check2">3XL</label>

                                    </div>
                                      <div class="form-check">

                                        <input type="checkbox" class="form-check-input" id="size1"

                                            name="size" value="4XL">

                                        <label class="form-check-label" for="check2">4XL</label>

                                    </div>
                                    <div class="form-check">

                                        <input type="checkbox" class="form-check-input" id="size1"

                                            name="size" value="5XL">

                                        <label class="form-check-label" for="check2">5XL</label>

                                    </div>

                                
                                </div>
                                
                                
                                
                                   

                            </div>

                        </div>

                    </div>

                </div>

   <!--== Start Product Area Wrapper ==-->
<!--== Start Product Area Wrapper ==-->
<section class="page-header-area d-none d-sm-block" style="background-color: #f8f9fa; padding: 15px 0; margin:0px;">
    <div class="container-fluid">  <!-- Full-width container -->
        <div class="row d-flex justify-content-between align-items-center">  <!-- Flex container with space-between and vertical center -->
            <div class="col-auto"> <!-- Title on the left -->
                <div class="page-header-st3-content">
                    <h2 class="page-header-title" style="font-size: 28px; padding: 5px 10px; margin-bottom: 0; color: #333;">
                        New Arrivals
                    </h2>
                </div>
            </div>

            <div class="col-auto">  <!-- Breadcrumb on the right -->
                <div class="page-header-st3-content">
                    <ol class="breadcrumb justify-content-end" style="font-size: 14px;">
                        <li class="breadcrumb-item">
                            <a class="text-dark" href="{{ url('/') }}">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a class="text-dark" href="{{ url('/products') }}">Product</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a class="text-dark" href="{{ url('/newarrival_list') }}">New Arrivals</a>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="padd-tb-10">
    <div class="container p-3">
        <div class="row">
            <div class="col-10" style="display:none">
                <div class="section-title text-center" >
                    @if(!empty($categories))
                    <span id="{{$categories[0]['title']}}"></span>
                    <h2 class="title fontsiz mt-0 " style="font-size: 30px;">{{$categories[0]['title']}}</h2>
                    <span class="slug_category" data-slug="{{$categories[0]['slug']}}">{{$categories[0]['slug']}}</span>
                    @endif
                </div>
            </div>
        </div>
        <!--<br>-->
        <!--<br>-->
        <div class="row mb-n4 mb-sm-n10 g-3 g-sm-6">
            @php $re_val=0; @endphp

            @php
                $availableProducts = [];
                $outOfStockProducts = [];
                
            @endphp
            <!--@for($i=0;$i<count($categories);$i++)-->
            @foreach($n_Products as $key=>$product)
                @php
                $product_review = DB::table('product_reviews')->select(DB::raw("SUM(rate) as price"), DB::raw("count(rate) as customer_count"))
                    ->where('status','accept')
                    ->where('product_id',$product->id)
                    ->get();
                if($product_review[0]->price != NULL && $product_review[0]->customer_count > 0){
                    $review = $product_review[0]->price / $product_review[0]->customer_count;
                } else {
                    $review = 0;
                }

                $newsizevariant = \App\Models\ProductVariant::where('product_id', $product->id)
                    ->where('status', 'active')
                    ->where('in_stock', '>', 0)
                    ->get();
                @endphp

             
                    @if(count($newsizevariant) > 0) 
                        @php
                            $availableProducts[] = compact('product', 'key', 'newsizevariant', 'review', 'product_review');
                        @endphp
                    @else
                        @php
                            $outOfStockProducts[] = compact('product', 'key', 'newsizevariant', 'review', 'product_review');
                        @endphp
                    @endif
               
            @endforeach
<!--@endfor-->
           @php
             $uniqueSlugs = [];
           @endphp
            @foreach(collect($availableProducts)->unique() as $item)

                @php
                    extract($item);
                @endphp
                
                <div class="col-12 col-sm-6 col-md-3 col-lg-3 mb-2">
                     @if(!in_array($product->categories->slug, $uniqueSlugs))
        <span class="slug_category" data-slug="{{ $product->categories->slug }}"></span>
        @php
            $uniqueSlugs[] = $product->categories->slug;
        @endphp
    @endif
                <!--<div class="col-12 col-sm-6 col-md-3 col-lg-3 mb-2" style="padding:20px;">-->
                    <!--== Start Product Item ==-->
                    <div class="product-item single-productsBox">
                        <div class="product-thumb product-image">
                            <a class="d-block" href="{{url('products').'/'.$product->slug}}">
                                <img src="{{url($n_Productvariant_photo[$key])}}" alt="Image-HasTech" class="home_product_img product-first-image">
                                <img src="{{url($ahover_image_photo[$key])}}" class="product-hover-image" alt="image">
                            </a>
                            <div class="product-action">
                                    <button type="button" data-product_id="{{$product->id}}"
                                            class="product-action-btn action-btn-wishlist wishlist_save icon_{{$product->id}} add_towishlist_modal"
                                            data-bs-toggle="modal">
                                        @if(auth()->guard('users')->user() && $iswishlist[$key] == "yes")
                                            <svg xmlns="http://www.w3.org/2000/svg" version="1.0" width="1em" height="1em" viewBox="0 0 512.000000 512.000000" preserveAspectRatio="xMidYMid meet">
                                                <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" fill="red" stroke="none">
                                                    <path d="M1220 4684 c-418 -53 -754 -260 -982 -604 -232 -350 -297 -817 -167 -1205 56 -169 155 -341 269 -470 108 -122 2125 -2157 2151 -2171 36 -18 102 -18 138 1 31 15 2073 2079 2163 2185 378 445 428 1073 128 1596 -65 113 -128 194 -231 295 -182 180 -418 304 -677 356 -109 21 -383 24 -492 4 -214 -38 -436 -141 -615 -284 -27 -22 -116 -106 -197 -186 l-147 -145 -158 155 c-162 159 -255 235 -378 306 -115 67 -258 121 -395 148 -74 15 -343 27 -410 19z"/>
                                                </g>
                                            </svg>
                                        @else
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M12 4.595a5.904 5.904 0 0 0-3.996-1.558 5.942 5.942 0 0 0-4.213 1.758c-2.353 2.363-2.352 6.059.002 8.412l7.332 7.332c.17.299.498.492.875.492a.99.99 0 0 0 .792-.409l7.415-7.415c2.354-2.354 2.354-6.049-.002-8.416a5.938 5.938 0 0 0-4.209-1.754A5.906 5.906 0 0 0 12 4.595zm6.791 1.61c1.563 1.571 1.564 4.025.002 5.588L12 18.586l-6.793-6.793c-1.562-1.563-1.561-4.017-.002-5.584.76-.756 1.754-1.172 2.799-1.172s2.035.416 2.789 1.17l.5.5a.999.999 0 0 0 1.414 0l.5-.5c1.512-1.509 4.074-1.505 5.584-.002z"></path></svg>
                                        @endif
                                    </button>
                                </div>
                        </div>
                        <div class="product-info">
                          
                            <h4 class="title"><a href="{{url('products').'/'.$product->slug}}">{{$product->name}}</a></h4>
                            <div class="prices">
                                <div class="position-relative">
                                    <div>
                                        <span class="price-old" style="display:none"> {{ number_format($product->regular_price,2,'.','') }}</span>
                                        <!--<h6><span>₹</span>{{ number_format($n_ProductSaleprice[$key],2,'.','') }}</h6>-->
                                        <h6>
                                            <span>
                                                ₹
                                            </span>
                                            {{ number_format($product->regular_price,2,'.','') }}
                                        </h6>
                                    </div>
                                    <button class="add-to-cart add_tocart_modal" type="button" data-product_id="{{$product->id}}" class="action-btn-cart" data-bs-toggle="modal" style="display:none">
                                        Add to cart
                                    </button>
                                </div>
                                <div>
                                    <div class="product-rating">
                                        <label class="rating-label" style="display:none">
                                            <p class="d-none">Ratings</p>
                                            <input class="rating" max="5"
                                                   oninput="this.style.setProperty('--value', `${this.valueAsNumber}`)" step="0.5"
                                                   style="--value:{{$review}}"  type="range" value="2.5" disabled>
                                        </label>
                                        <div class="reviews d-none">{{count($product_review)}} reviews</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Show available variants -->
                        <h6 style="color:#364958;">Available Variants</h6>
                        <div class="size-buttons-size-buttons" style="display: flex; justify-content: center; flex-wrap: wrap;">
                            @foreach($newsizevariant as $variant)
                                <div class="size-buttons-tipAndBtnContainer">
                                    <div class="size-buttons-buttonContainer">
                                        <button class="sizes-buttons-size-button new-class round-button">
                                            <p class="size-buttons-unified-size">{{$variant->variants}}</p>
                                        </button>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endforeach

            <!-- Display out-of-stock products next -->
            @foreach(collect($outOfStockProducts)->unique() as $item)
                @php
                    extract($item);
                @endphp
                <div class="col-12 col-sm-6 col-md-3 col-lg-3 mb-4 out_of_stock">
                    <!--== Start Product Item ==-->
                    <div class="product-item single-productsBox">
                        <div class="product-thumb product-image">
                            <a class="d-block" href="{{url('products').'/'.$product->slug}}">
                                <img src="{{url($n_Productvariant_photo[$key])}}" alt="Image-HasTech" class="home_product_img product-first-image">
                                <img src="{{url($ahover_image_photo[$key])}}" class="product-hover-image" alt="image">
                            </a>
                            <div class="product-action">
                                <button type="button" data-product_id="{{$product->id}}"
                                        class="product-action-btn action-btn-wishlist wishlist_save icon_{{$product->id}} add_towishlist_modal"
                                        data-bs-toggle="modal">
                                    @if(auth()->guard('users')->user() && $iswishlist[$key] == "yes")
                                        <!-- SVG icon for added to wishlist -->
                                    @else
                                        <!-- SVG icon for not in wishlist -->
                                    @endif
                                </button>
                            </div>
                        </div>
                        <div class="product-info">
                            <h4 class="title"><a href="{{url('products').'/'.$product->slug}}">{{$product->name}}</a></h4>
                            <div class="prices">
                                <div class="position-relative">
                                    <div>
                                        <span class="price-old" style="display:none"> {{ number_format($product->regular_price,2,'.','') }}</span>
                                        <!--<h6><span>₹</span>{{ number_format($n_ProductSaleprice[$key],2,'.','') }}</h6>-->
                                        <h6>
                                            <span>
                                                ₹
                                            </span>
                                            {{ number_format($product->regular_price,2,'.','') }}
                                        </h6>
                                    </div>
                                    <button class="add-to-cart add_tocart_modal" type="button" data-product_id="{{$product->id}}" class="action-btn-cart" data-bs-toggle="modal" style="display:none">
                                        Add to cart
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Show "Out of Stock" if no variants available -->
                        <div class="outofstock single" style="padding: 0px 39px; border: 1px solid #222e64; background: #222e64; color: #fff; width: 100%;">
                            <p>Out Of Stock</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="row" id="no_product" style="display:none">
                <div class="col-lg-12">
                    <div class="section-title-area ltn__section-title-2 text-center mb-5">
                        <img src="{{asset('frontend/img/no_products.png')}}" alt="no-product" style="width:100px;height:100px;">
                        <h5 class="section-title about-us-title" style="font-size: 34px;">No products found</h5>
                    </div>
                </div>
            </div>
    </div>
</section>
 <section class="d-none">

                <div class="container">

                    <!--== Start Product Category Item ==-->

                    <a href="{{url('product_list')}}" class="product-banner-item">

                        <img src="{{asset('frontend/img/shop/banner/7.webp')}}" width="1170" height="240" alt="Image-HasTech">

                    </a>

                    <!--== End Product Category Item ==-->

                </div>

            </section>
    
</main>

<script>
document.addEventListener("DOMContentLoaded", function () {
    let priceSortCheckbox = document.querySelector("input[name='price_sort']");

    if (priceSortCheckbox) {
        priceSortCheckbox.addEventListener("change", sortProductsByPrice);
    }
    document.querySelector("input[name='discount']").addEventListener("change", function () {
        let discountChecked = this.checked; // Check if the checkbox is checked
        let productCols = document.querySelectorAll(
            ".col-12.col-sm-6.col-md-3.col-lg-3.mb-2, .col-12.col-sm-6.col-md-3.col-lg-3.mb-4.out_of_stock"
        );
        let noProductDiv = document.getElementById("no_product");
        productCols.forEach(product => {
            product.style.display = discountChecked ? "none" : "block";
        });
        if(discountChecked){
            document.getElementById('no_product').style.display = "block";
        }
        else{
            document.getElementById('no_product').style.display = "none";
        }
    });
    function sortProductsByPrice() {
    let priceSortChecked = document.querySelector("input[name='price_sort']:checked") !== null;
    let productContainer = document.querySelector(".product-list-container"); // Ensure this matches your HTML structure
    let products = Array.from(document.querySelectorAll(".product-item"));

    if (!productContainer || products.length === 0) return;

    let visibleProducts = products
        .map(product => {
            let productCol = product.closest(".col-12.col-sm-6.col-md-3.col-lg-3.mb-2"); // Get the closest parent column
            let priceElement = product.querySelector(".prices h6");
            let price = priceElement ? parseFloat(priceElement.textContent.trim().replace("₹", "").replace(",", "")) : 0;

            return { element: productCol, price: price };
        })
        .filter(product => product.element && product.element.style.display !== "none"); // Sort only visible products

    // Sort products in ascending order if checked
    if (priceSortChecked) {
        visibleProducts.sort((a, b) => a.price - b.price);
    }

    // Append sorted product columns back to the container
    visibleProducts.forEach(product => productContainer.appendChild(product.element));
}



    document.getElementById("no_product").style.display = "none";
    let sizeFilters = document.querySelectorAll("input[name='size']");
    let availabilityFilters = document.querySelectorAll("input[name='in_stock']");
    let noProductDiv = document.getElementById("no_product");

    // Event listeners for filtering
    sizeFilters.forEach(filter => filter.addEventListener("change", filterProducts1));
    availabilityFilters.forEach(filter => filter.addEventListener("change", filterProducts1));

 function filterProducts1() {
    let selectedAvailability = document.querySelector("input[name='in_stock']:checked")?.value || "1"; // Default: In Stock

    let selectedSizes = Array.from(document.querySelectorAll("input[name='size']:checked"))
        .map(input => input.value);

    let products = document.querySelectorAll(".product-item");
    let visibleProductCount = 0;

    products.forEach(product => {
        let productCol = product.closest(".col-12.col-sm-6.col-md-3.col-lg-3.mb-2, .col-12.col-sm-6.col-md-3.col-lg-3.mb-4.out_of_stock");
        if (!productCol) return; // Safety check

        let sizeElements = product.querySelectorAll(".size-buttons-unified-size");
        let productSizes = Array.from(sizeElements).map(size => size.textContent.trim());

        let isOutOfStock = product.querySelector(".outofstock") !== null;
        let showProduct = true; // Default to show product

        // **Apply Availability Filter**
        if (selectedAvailability === "1" && isOutOfStock) {
            showProduct = false; // Hide Out-of-Stock when "In Stock" selected
        } else if (selectedAvailability === "2" && !isOutOfStock) {
            showProduct = false; // Hide In-Stock when "Out of Stock" selected
        } else if (selectedAvailability === "3") {
            showProduct = true; // Show all products (Both in & out of stock)
        }

        // **Apply Size Filter**
        if (selectedSizes.length > 0) {
            let hasSelectedSize = selectedSizes.some(size => productSizes.includes(size));
            if (!hasSelectedSize) {
                showProduct = false; // Hide if size doesn't match
            }
        }

        // **Show or Hide Product**
        productCol.style.display = showProduct ? "block" : "none";
        if (showProduct) visibleProductCount++;
    });

    // **Show "No Products Found" Message if No Products are Visible**
    document.getElementById("no_product").style.display = visibleProductCount === 0 ? "block" : "none";
}



    let stockFilters = document.querySelectorAll("input[name='in_stock']");
    stockFilters.forEach(filter => {
        filter.addEventListener("change", function () {
            filterProductsByStock(this.value);
        });
    });

    function filterProductsByStock(value) {
        let products = document.querySelectorAll(".product-item");

        products.forEach(product => {
            let isOutOfStock = product.querySelector(".outofstock") !== null;

            if (value === "1") { // In Stock
                if (isOutOfStock) {
                    product.parentElement.style.display = "none";
                } else {
                    product.parentElement.style.display = "block";
                }
            } else if (value === "2") { // Out of Stock
                if (isOutOfStock) {
                    product.parentElement.style.display = "block";
                } else {
                    product.parentElement.style.display = "none";
                }
            }
        });
    }
     $('.noUi-handle').on('click', function() {
   $(this).addClass('clicked');
  });
    let slider = document.getElementById("slider-range1");
    let minPriceElement = document.getElementById("slider-range-value1");
    let maxPriceElement = document.getElementById("slider-range-value2");
    let highestPrice = parseInt(document.getElementById("highest_price").value);
    var start=0;
var moneyFormat1 = wNumb({
    decimals: 0,
    thousand: ',',
    prefix: '₹'
  });
    noUiSlider.create(slider, {
        start: [0, highestPrice],
        step: 50,
        range: {
      'min': [0],
      'max': highestPrice,
    },
    format: moneyFormat1,
    connect: true
    });

  slider.noUiSlider.on('update', function(values, handle) {
    document.getElementById('slider-range-value1').innerHTML = values[0];
    document.getElementById('slider-range-value2').innerHTML = values[1];
    document.getElementsByName('min-value').value = moneyFormat1.from(
      values[0]);
    document.getElementsByName('max-value').value = moneyFormat1.from(
      values[1]);
      start +=1;
      var min=document.getElementsByName('min-value').value;
      var max=document.getElementsByName('max-value').value;
      if(start > 2){
      filterProducts(min,max);
      }
  });
    function filterProducts(minPrice, maxPrice) {
        let products = document.querySelectorAll(".product-item");
        let no_product = document.getElementById("no_product");
        products.forEach(product => {
            let priceElement = product.querySelector(".prices h6");
            if (priceElement) {
                let priceText = priceElement.textContent.trim().replace("₹", "").replace(",", "");
                let price = parseFloat(priceText);

                if (price >= minPrice && price <= maxPrice) {
                    product.parentElement.style.display = "block";
                    no_product.style.display = "none";
                } else {
                    product.parentElement.style.display = "none";
                    no_product.style.display = "block";
                }
            }
        });
    }
});
</script>
@endsection