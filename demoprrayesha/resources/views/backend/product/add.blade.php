@extends('backend.layouts.master')

@section('content')

<style>



    .select2-selection{

        display:flex !important;

    }

    .multi-select textarea{

        border: 0px !important;

        margin-bottom: 0px !important

    }
    .note-editor.note-frame.card{
        width: 1100px !important;
    }
    

</style>

<div class="page-content-wrapper ">

    <div class="container-fluid">

        <div class="row">

            <div class="col-sm-12">

                <div class="float-right page-breadcrumb">

                    <ol class="breadcrumb">

                        <li class="breadcrumb-item"><a>Catalogs</a></li>

                        <li class="breadcrumb-item"><a href="#">Product</a></li>

                        <li class="breadcrumb-item active">Add Product</li>

                    </ol>

                </div>

                <h5 class="page-title">Catalogs</h5>

            </div>

        </div>

        <div class="card m-b-30 card-body">

            <h4 class="card-title font-20 mt-0">Create Product</h4>

            <a href="{{route('product.index')}}" id="add-btn" style="color: #ffffff;"><i class="fa fa-angle-left" aria-hidden="true"></i> Back</a>

        </div>

        <div class="row">

            <div class="col-12">

                @if($errors->any())

                <div class="alert alert-danger">

                    <ul>

                    </ul>

                </div>
                

                @endif
                @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

                <div class="card m-b-30">

                    <div class="card-body">

                        <div class="container-fluid">

                            <div class="row justify-content-center">

                                <div class="col-12 text-center p-0 mt-3 mb-2">

                                    <div class="card px-0 pt-4 pb-0 mt-3 mb-3">

                                        <!-- <h2 id="heading">Sign Up Your User </h2> -->

                                        <p>Fill all form field to go to next step</p>

                                        <form id="msform" action="{{route('product.store')}}" method="POST" >

                                            @csrf

                                            <!-- progressbar -->

                                            <ul id="progressbar">

                                                <li class="active" id="product"><strong>Product</strong></li>
                                            <!----
                                                <li id="product_attribute"><strong>Product Details</strong></li>
                                                ---->
                                                

                                               <li id="product_variant"><strong>Product Variant</strong></li> 

                                                <!-- <li id="product_image"><strong>Product Image</strong></li> -->

                                                <li id="confirm"><strong>Finish</strong></li>

                                            </ul>

                                            <!-- <div class="progress">

                                                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>

                                            </div> <br>  -->

                                               <!-- product -->

                                            <fieldset>

                                                <div class="form-card">

                                                    <div class="row">

                                                        <div class="col-7">

                                                            <h2 class="fs-title">Product Details:</h2>

                                                        </div>

                                                        <div class="col-5">

                                                            <h2 class="steps">Step 1 - 3</h2>

                                                        </div>

                                                    </div>

                                <div class="row">

                                    <div class="col-md-6">

                                        <div class="form-group row">

                                            <label for="example-text-input" class="col-sm-6 col-form-label">Name</label>

                                            <div class="col-sm-10">

                                                <input class="form-control required"  autofocus="true" type="text" placeholder="Enter Name" id="example-text-input" name="name"  value="{{ old('name') }}" required>

                                                <span class="error"></span>

                                            </div>

                                       </div>

                                </div>

                                <div class="col-md-6" style="display:none;">

                                    <div class="form-group row">

                                        <label for="example-text-input" class="col-sm-6 col-form-label">Brand Name</label>

                                        <div class="col-sm-10">

                                            <input class="form-control"  autofocus="true" type="text" placeholder="Enter Brand Name"  id="example-text-input" name="brand_name"  value="{{ old('brand_name') }}">

                                            <span class="error"></span>

                                        </div>

                                    </div>

                                </div>



                                <div class="col-md-6">

                                <div class="form-group row">

                                    <label for="example-text-input" class="col-sm-6 col-form-label">Image</label>

                                    <!-- <img src="assets/images/image.png" class="admin-image"> -->

                                    <div class="col-sm-10">

                                        <div class="input-group">

                                            <span class="input-group-btn">

                                              <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">

                                                <i class="fa fa-picture-o"></i> Choose

                                              </a>

                                            </span>

                                            <input id="thumbnail" class="form-control required" type="text" value="{{old('photo')}}" name="product_photo">

                                           <span class="error "></span>

                                           <div id="holder" style="margin-top:15px;max-height:100px; display:flex"></div>

                                        </div>



                                    </div>

                                </div>

                                </div>





                                <div class="col-md-6">

                                    <div class="form-group row">

                                        <label for="example-text-input" class="col-sm-6 col-form-label">Youtube link</label>

                                        <div class="col-sm-10">

                                            <input class="form-control"  autofocus="true" type="text" placeholder="Enter Youtube Link"  id="example-text-input" name="youtube_link"  value="{{ old('youtube_link') }}">

                                            <span class="error"></span>

                                        </div>

                                    </div>

                                </div>


                                
                                <div class="col-md-6">

                                <div class="form-group row">

                                    <label for="example-text-input" class="col-sm-6 col-form-label">Category</label>

                                    <div class="col-sm-10">


                                        <select class="form-control required category"  name='category' id="cat_id" required>

                                        <option value="">Select Category</option>

                                        @foreach ($category as $cate)

                                                <option value="{{$cate->id}}">{{$cate->title}}</option>

                                            @endforeach

                                        </select>

                                        <span class="error"></span>

                                    </div>

                                 </div>

                            </div>




                                
                               



                                <div class="col-md-6" id="sub_cat" style="display:none;">

                                    <div class="form-group row">

                                        <label for="example-text-input" class="col-sm-6 col-form-label">Sub Category</label>

                                        <div class="col-sm-10">

                                            <select class="form-control"  name='subcategory_id' id="subcat_id" >

                                            <option value="">Select Category</option>



                                            </select>

                                            <span class="error"></span>

                                        </div>

                                    </div>

                                </div>
                                <div class="col-md-6" id="child_cat" style="display:none;">

                                    <div class="form-group row">

                                        <label for="example-text-input" class="col-sm-6 col-form-label">Child Category</label>

                                        <div class="col-sm-10">

                                            <select class="form-control"  name='childcategory_id' id="childcat_id">

                                            <option value="">Select Category</option>



                                            </select>

                                            <span class="error"></span>

                                        </div>

                                    </div>

                                </div>



                                <div class="col-md-6">

                                    <div class="form-group row">

                                    <label for="example-text-input" class="col-sm-6 col-form-label">Discount Type</label>

                                            <div class="col-sm-10">

                                                <select class="form-control" name='discount_type'>

                                                    <option value="">--Select Discount Type--</option>

                                                    <option value="fixed" {{ old('type') == 'fixed' ? 'selected' : '' }}>Fixed</option>

                                                    <option value="percentage" {{ old('type') == 'percentage' ? 'selected' : '' }}>Percentage</option>

                                                </select>

                                                <span class="error"></span>

                                            </div>

                                    </div>

                                </div>



                             <div class="col-md-6">

                                    <div class="form-group row">

                                        <label for="example-text-input" class="col-sm-6 col-form-label">Discount</label>

                                        <div class="col-sm-10">

                                            <input class="form-control" type="number"  placeholder="" id="example-text-input" name="discount" value="{{ old('discount') }}">

                                            <span class="error"></span>

                                        </div>

                                    </div>

                                </div>







                                <div class="col-md-6">

                                <div class="form-group row">

                                    <label for="example-text-input" class="col-sm-6 col-form-label">Tax Id</label>

                                    <div class="col-sm-10">

                                        <select class="form-control required"  name='tax_id' id="tax_id" required>

                                        <!--<option value="">Select Tax</option>-->

                                        @foreach ($tax as $t)

                                            <option value="{{$t->id}}">{{$t->tax_name}}</option>

                                            @endforeach

                                        </select>

                                        <span class="error"></span>

                                    </div>

                                 </div>

                            </div>
                             <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="example-text-input" class="col-sm-6 col-form-label">No of Days Delivery</label>
                                        <div class="col-sm-10">
                                            <input class="form-control required"  autofocus="true" min="0" max="15" type="number"  placeholder="No of Days Delivery"  id="example-text-input" name="delivery_days"  value="{{ old('delivery_days') }}">
                                            <span class="error"></span>
                                        </div>
                                    </div>
                                </div>
                                  <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="example-text-input" class="col-sm-6 col-form-label">HSN Code</label>
                                        <div class="col-sm-10">
                                            <input class="form-control required"  autofocus="true"  type="text"  placeholder="HSN Code"  id="example-text-input" name="hsn_code"  value="{{ old('hsn_code') }}">
                                            <span class="error"></span>
                                        </div>
                                    </div>
                                </div>
                                         <div class="col-md-6">
                                            <div class="form-group row">
                <label for="tag"  class="col-sm-6 col-form-label">Tag</label>
                <div class="col-sm-10">
                    <select id="tag" name="tag" class="form-control">
                        <option value="0">-- 0 --</option>
                        <option value="LC" style="display:none;">LC</option>
                        <option value="NA">NA</option>
                        <!-- Add more options as needed -->
                    </select>
                </div>
            </div>
            </div>
                                
                            <?php 
$description='
<hr>
<p><b>Pattern :</b> A - Line Kurti&nbsp; + Pant&nbsp; ( Cord Set ) With Side Pocket</p><p><b>Fabric :</b> Jaipur Cotton&nbsp;</p><p><b>Kurti Height :</b> 45 inch</p><p><b>Pant Length : </b>35 inch</p>
';
?>

<div class="col-12">

<div class="form-group ">

<label for="example-text-input" class="col-sm-6 col-form-label">Description</label>

	<div>

		<textarea class="summernote"  name="description" value="{{ $description }}">{{ $description }}</textarea>

		<span class="error"></span>

	</div>



</select>

<span class="error"></span>



</div>

</div>
<?php
$usage='<p><b><span style="font-size: 18px;">Wash Care:</span></b></p><p>Hand Wash Or Machine wash cold with mild detergent, tumble dry low, iron if needed.</p><p><b>Note : </b>The color of the real product may slightly differ from the image displayed&nbsp; on the screen , owning to screen resolution and photography effects.</p>'
?>
<div class="col-12" style="display:none;">

<div class="form-group ">

<label for="example-text-input" class="col-sm-6 col-form-label">Usage</label>

	<div class="col-sm-10">

		<textarea class="summernote"  name="usage" value="{{ $usage }}">{{ $usage }}</textarea>

		<span class="error"></span>

	</div>



</select>

<span class="error"></span>



</div>

</div>
                            <!----
                            <div class="col-md-6">

                                <div class="form-group row">

                                    <label for="example-text-input" class="col-sm-6 col-form-label">Size</label>

                                    <div class="col-sm-10">

                                        <select class="form-control required"  name='size' id="size" required>

                                        <option value="">Select Size</option>
                                                
                                            <option value="1">S</option>
                                            <option value="2">M</option>
                                            <option value="3">L</option>
                                            <option value="4">XL</option>
                                            <option value="5">XXL</option>
                                            <option value="6">XXXL</option>

                                        </select>

                                        <span class="error"></span>

                                    </div>

                                 </div>

                            </div>



                                                <div class="col-md-6">

                                                    <div class="form-group row">

                                                        <label for="example-text-input" class="col-sm-6 col-form-label">Regular Price(MRP)</label>

                                                        <div class="col-sm-10">

                                                            <input class="form-control required" step="any" type="text" placeholder="" required id="example-text-input" name="prod_regular_price"value="{{ old('price') }}">

                                                            <span class="error"></span>

                                                        </div>

                                                    </div>

                                                </div>



                                                <div class="col-md-6">

                                                        <div class="form-group row">

                                                            <label for="example-text-input" class="col-sm-6 col-form-label">Stock</label>

                                                            <div class="col-sm-10">

                                                                <input class="form-control required" type="number"  placeholder="" required id="example-text-input" name="prod_stock"value="{{ old('stock') }}">

                                                                <span class="error"></span>

                                                            </div>

                                                        </div>

                                                </div>
                                                
---->




                                                <!-- <div class="col-md-6">

                                                    <div class="form-group row">

                                                        <label for="example-text-input" class="col-sm-6 col-form-label">Main Products</label>

                                                        <div class="col-sm-10">

                                                            <select class="form-control required"  name='main_products' id="main_products" required>

                                                            <option value="">Select Status</option>

                                                           <option value="active">Active</option>

                                                           <option value="in active">In Active</option>

                                                            </select>

                                                            <span class="error"></span>

                                                        </div>

                                                    </div>

                                                </div> -->



                                                {{-- <div class="col-md-6">

                                                    <div class="form-group row">

                                                        <label for="example-text-input" class="col-sm-6 col-form-label">Header</label>

                                                        <div class="col-sm-10">

                                                            <select class="form-control required"  name='header' id="header" required>

                                                            <option value="">Select Status</option>

                                                           <option value="active">Active</option>

                                                           <option value="in active">In Active</option>

                                                            </select>

                                                            <span class="error"></span>

                                                        </div>

                                                    </div>

                                                </div> --}}

                                                </div>

                                            </div>
                                                 <input type="button" name="next" onclick="selectvalidation()" class="next1 action-button old_product1" value="Next" /> 

                                                <input type="button" name="next" class="next action-button product1" value="Next" style="display:none;"/>

                                            </fieldset>

                                                <!-- product variant -->
                                           
                                           <!-----
                                            <fieldset style="display:none;">

                                            <div class="row">

                                                        <div class="col-7">

                                                            <h2 class="fs-title">Product Description:</h2>

                                                        </div>

                                                        <div class="col-5">

                                                            <h2 class="steps">Step 2 - 3</h2>

                                                        </div>

                                            </div>

                                                    <br><br>

                                            <div id="product_attribute" class="content"

                                                data-mfield-options='{"section": ".group","btnAdd":"#btnAdd-1","btnRemove":".btnRemove"}'>

                                                <div class="col-md-12">

                                                    <div class="form-group pull-right">



                                                </div>

                                            </div>



                                    <div class=" container-fluid att-box">

                                        <div class="row">

                                                <div class="col-md-12">

                                                <div class="row">   
                                                <?php 
                                                $description='
<hr>
<p><b>Pattern :</b> A - Line Kurti&nbsp; + Pant&nbsp; ( Cord Set ) With Side Pocket</p><p><b>Fabric :</b> Jaipur Cotton&nbsp;</p><p><b>Kurti Height :</b> 45 inch</p><p><b>Pant Length : </b>35 inch</p>
';
                                                ?>

                                                        <div class="col-12">

                                                    <div class="form-group ">

                                                       <label for="example-text-input" class="col-sm-6 col-form-label">Description</label>

                                                            <div class="col-sm-10">

                                                                <textarea class="summernote"  name="description" value="{{ $description }}">{{ $description }}</textarea>

                                                                <span class="error"></span>

                                                            </div>



                                                        </select>

                                                        <span class="error"></span>



                                                     </div>

                                                     </div>

                                                     
                                                        <?php
                                                        $usage='<p><b><span style="font-size: 18px;">Wash Care:</span></b></p><p>Hand Wash Or Machine wash cold with mild detergent, tumble dry low, iron if needed.</p><p><b>Note : </b>The color of the real product may slightly differ from the image displayed&nbsp; on the screen , owning to screen resolution and photography effects.</p>'
                                                        ?>
                                                        <div class="col-12" style="display:none;">
            
                                                     <div class="form-group ">

                                                       <label for="example-text-input" class="col-sm-6 col-form-label">Usage</label>

                                                            <div class="col-sm-10">

                                                                <textarea class="summernote"  name="usage" value="{{ $usage }}">{{ $usage }}</textarea>

                                                                <span class="error"></span>

                                                            </div>



                                                        </select>

                                                        <span class="error"></span>



                                                     </div>

                                                        </div>

                                                        <div class="col-6" style="display:none;">

                                                     <div class="form-group ">

                                                       <label for="example-text-input" class="col-sm-6 col-form-label">Benefits</label>

                                                            <div class="col-sm-10">

                                                                <textarea class="summernote"  name="benefits" value="{{ old('benefits') }}"></textarea>

                                                                <span class="error"></span>

                                                            </div>



                                                        </select>

                                                        <span class="error"></span>



                                                     </div>

                                                        </div>

                                                        <div class="col-6" style="display:none;">

                                                     <div class="form-group ">

                                                       <label for="example-text-input" class="col-sm-6 col-form-label">Ingrediants</label>

                                                            <div class="col-sm-10">

                                                                <textarea class="summernote"  name="ingrediants" value="{{ old('ingrediants') }}"></textarea>

                                                                <span class="error"></span>

                                                            </div>



                                                        </select>

                                                        <span class="error"></span>



                                                     </div>

                                                        </div>

                                                 </div>







                                            </div>

                                        </div>

                                        </div>

                                        </div>

                                                 <input type="button" name="next" class="next action-button" value="Next" /> <input type="button" name="previous" class="previous action-button-previous" value="Previous" />

                                            </fieldset>
                                            ---->
                                          

                                            <fieldset>
                                            <div class="row">
                                                        <div class="col-7">
                                                            <h2 class="fs-title">Product Attributes:</h2>
                                                        </div>
                                                        <div class="col-5">
                                                            <h2 class="steps">Step 3 - 3</h2>
                                                        </div>
                                            </div>
                                                    <br><br>
                                            <div id="product_attribute" class="content"
                                                data-mfield-options='{"section": ".group","btnAdd":"#btnAdd-1","btnRemove":".btnRemove"}'>
                                                <div class="col-md-12">
                                                    <div class="form-group pull-right">
                                                </div>
                                            </div>
                                    <div class=" container-fluid att-box">
                                        <div class="row">
                                                <div class="col-md-3">
                                                    <div class="form-group ">
                                                  
                                                    <input type="hidden" id="att_value" value="{{!empty($product_attributename) ? $product_attributename : ''}}">
                                                    <input type="hidden" id="productpage_type" value="edit">
                                                        <label for="example-text-input" class="col-form-label">Attribute
                                                            Type</label>
                                                        <select class="form-control box-dd form-control-sm cat_id attribute_val required2"
                                                            id="cat_id">
                                                            <option value="">Attribute Type</option>
                                                            <?php
                                                            
                                                                if(!empty($productattributes) && count($productattributes)){
                                                                foreach (\App\Models\Attribute::distinct()->get('attribute_type') as
                                                                $cate) { ?>
                                                                <option value="{{$cate->attribute_type}}" {{$cate->attribute_type==$product_attributename ?'selected':''}} )>{{$cate->attribute_type}}
                                                                </option>
                                                    
                                                            <?php } }else{
                                                                    foreach (\App\Models\Attribute::distinct()->get('attribute_type') as
                                                                    $cate) { ?>
                                                                    <option value="{{$cate->attribute_type}}">{{$cate->attribute_type}}
                                                                    </option>
                                                                <?php }}
                                                                                                                                                
                                                                                                                                    
                                                                        ?>
                                                        </select>
                                                        <span class="cat_error" style="color:red;"></span>
                                                        <div class="err_addprod" style="color:red;display:none">Please Add Product</div>
                                                </div>
                                            </div>
                                                <div class="col-md-3">
                                                    <div class="form-group ">
                                                        <label for="example-text-input" class="col-md-12 col-form-label"></label>
                                                        <button class="btn btn-primary addproduct" type="button"
                                                            style="margin-top:.8em;">Add Product</button>
                                                     </div>
                                                </div>
                                                <!----
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <button type="button"
                                                            class="mt-4 btn btn-sm my-2 btn-danger btnRemove">Remove</button>
                                                    </div>
                                                </div>
                                                ---->
                                                <div class=" col-md-12 product">
                                                </div>
                                                <div class="col-md-2 d-none variant1">
                                                    <div class="form-group">
                                                        <button class="btn btn-primary addvariant" type="button"
                                                            style="margin-top:.8em;" onclick="selectvarient()">Add Variant</button>
                                                            <div class="err_addvar" style="color:red;display:none">Please Add variant</div>
                                                    </div>
                                                </div>
                                                <span id="selectsize" style="color:red;"></span>
                                                <div class=" col-md-12 variant">
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                        
                                        
                                        <!--<input type="submit" name="next" class="next2 action-button old_product2" value="Submit" /> -->
                                        <input type="button" name="next" class="next2 action-button old_product2" value="Next" /> 
                                        
                                                 <input style="display:none;" type="submit" name="next" class="next action-button newbutton2" value="Submit" /> <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                                            </fieldset>

                                            <fieldset>

                                                <div class="form-card">

                                                    <div class="row">

                                                        <div class="col-7">

                                                            <h2 class="fs-title">Loading...:</h2>

                                                        </div>

                                                        <div class="col-5">

                                                            <!--<h2 class="steps">Step 4 - 3</h2>-->

                                                        </div>

                                                    </div> <br><br>

                                                    <h2 class="purple-text text-center"><strong>Loading !</strong></h2> <br>

                                                    <div class="row justify-content-center">

                                                        <!--<div class="col-3"> <img src="https://i.imgur.com/GwStPmg.png" class="fit-image"> </div>-->

                                                    </div> <br><br>

                                                    <div class="row justify-content-center">

                                                        <div class="col-7 text-center">

                                                        <!--<button type="submit" class="btn btn-primary">Submit</button>-->

                                                        </div>

                                                    </div>

                                                </div>

                                                <!--<input type="button" name="previous" class="previous action-button-previous" value="Previous" />-->

                                            </fieldset>

                                        </form>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div> <!-- end col -->

        </div> <!-- end row -->

    </div><!-- container fluid -->

</div> <!-- Page content Wrapper -->

@endsection

@section('scripts')

<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>




<script type="text/javascript">
/*
$(document).ready(function() {

    $('.category').select2({

    placeholder: "Select Category",



});

});

*/

$('.category').attr('placeholder','Select Category');
$('#subcat_id').change(function(){
    var token=$('meta[name="csrf-token"]').attr('content');
     var path=$('meta[name="base_url"]').attr('content')+'/get_childproducts';
            $.ajax({
                url:path,
                type: "GET",
                data: {
                    _token: token,
                    id: $('#subcat_id').val(),
                },
                success: function(response) {
                     $("#childcat_id").empty();
                    var appenddata1 = "";
                    var childcategory=response.categories;
                    if(response.categories != ""){
                        $('#child_cat').css('display','block');
                       $("#childcat_id").addClass("required");
                       appenddata1 +="<option value = ''>Select Child Category</option>";
                       $("#childcat_id").empty(); // <<<<<< No more issue here
                        for (var i = 0; i < childcategory.length; i++) {
                            appenddata1 +="<option value = '" + childcategory[i].id +"'>"+childcategory[i].title+"</option>";
                        }
                        $("#childcat_id").html(appenddata1);
                    }else{
                        $('#child_cat').css('display','none');
                        $("#childcat_id").removeClass("required");
                        appenddata1 +="<option value = ''>Select Child Category</option>";
                        $("#childcat_id").empty(); // <<<<<< No more issue here
                        $("#childcat_id").html(appenddata1);
                    }
                }
            });

});
$(document).ready(function() {
    function selectvalidation() {
        let isValid = true;

        // Iterate through each input with class 'required'
        $('.form-control.required').each(function() {
            if ($(this).val() === '') {
                isValid = false;
                $(this).next('.error').text('This field is required.').show();
            } else {
                $(this).next('.error').text('').hide();
            }
        });

        // If form is valid, show the next button and hide the current button
        if (isValid) {
            $('.next1').hide();
            $('.product1').show();
            $('.product1').click();
        } else {
            alert('Please fill in all required fields.');
        }
    }
    
     function selectvalidation1() {
       // let isValid = true;
        if($("#cat_id").val()!=''){
             let isValid = true;
        }else{
               let isValid = false;
            $(".cat_error").html("This field is required.")
        }
       // alert($("#chil_cat_id2").val())
        if($("#chil_cat_id2").val()!=''){
             let isValid = true;
        }else{
              let isValid = false;
            $("#selectsize").html("This field is required.") 
        }
       
        // If form is valid, show the next button and hide the current button
        if (isValid) {
            $(".cat_error").html("");
            $("#selectsize").html('');
            $('.old_product2').hide();
           // $('.product2').show();
        } else {
            alert('Please fill in all required fields.');
        }
    }

    // Attach the validation function to the onclick event of the next button
    $('.next1').on('click', selectvalidation);
    
    $('.next2').on('click', selectvalidation1);
   
});

$('.addvariant').click(function() {
     $("#selectsize").html('');
     $(".cat_error").html('');
     $('.old_product2').css('display','none');
    $('.newbutton2').css('display','block');
    $('.newbutton2').show();
});

@endsection