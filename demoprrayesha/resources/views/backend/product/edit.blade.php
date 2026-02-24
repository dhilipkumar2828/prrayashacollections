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
                        <li class="breadcrumb-item active">Edit Product</li>
                    </ol>
                </div>
                <h5 class="page-title">Catalogs</h5>
            </div>
        </div>
        <div class="card m-b-30 card-body">
            <h4 class="card-title font-20 mt-0">
                
                 <?php
                    if($prevProduct > 0){?>
                         <a href="/product/{{$prevProduct}}/edit" title="Previous Product"> <i class="fa fa-angle-left"
                    aria-hidden="true"></i></a>
                    <?php }
                    ?>
                    
                <?php
                if($clone){
                    echo 'Clone Product'; 
                } else {
                  echo 'Edit Product';  
                }
                
               
                ?>
                
                <?php
                    if($nextProduct > 0){?>
                         <a href="/product/{{$nextProduct}}/edit" title="Next Product"> <i class="fa fa-angle-right"
                    aria-hidden="true"></i></a>
                    <?php }
                    ?>
                &nbsp; Product Id -  {{$product_id}} (HSN - {{$Product->hsn_code}} )
                </h4>
                
            <a href="{{route('product.index')}}" id="add-btn" style="color: #ffffff;"><i class="fa fa-angle-left" aria-hidden="true"></i> Back</a>
        </div>
        <div class="row">
            <div class="col-12">
         
                <div class="card m-b-30">
                    <div class="card-body">
                        <div class="container-fluid">
                            <div class="row justify-content-center">
                                <div class="col-12 text-center p-0 mt-3 mb-2">
                                    <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                                        <!-- <h2 id="heading">Sign Up Your User </h2> -->
                                        <p>Fill all form field to go to next step</p>
                                        
                                         <?php
                if($clone){?>
                    <form id="msform" action="{{route('product.store')}}" method="POST" >
                         <input id="screen_page" type="hidden" value="1">
                <?php
                    
                } else {?>
                  <form id="msform" action="{{url('product/update').'/'.$Product->id}}" method="POST" >
                       <input id="screen_page" type="hidden" value="0">
                <?php }
                ?>
               
                
                                       
                                            @csrf
                                            <!-- progressbar -->
                                            <ul id="progressbar">
                                                <li class="active" id="product"><strong>Product</strong></li>
                                                
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
                                                <input class="form-control required"  autofocus="true" type="text" placeholder="Enter Name" id="example-text-input" name="name"  value="{{$Product->name}}" required>
                                                <span class="error"></span>
                                            </div>
                                       </div>
                                </div>
                                <div class="col-md-6" style="display:none;">
                                    <div class="form-group row">
                                        <label for="example-text-input" class="col-sm-6 col-form-label">Brand Name</label>
                                        <div class="col-sm-10">
                                            <input class="form-control required"  autofocus="true" type="text" placeholder="Enter Brand Name" required id="example-text-input" name="brand_name"  value="{{$Product->brand_name }}">
                                            <span class="error"></span>
                                        </div>
                                    </div>
                                </div>
                            @if(!empty($product_variant))
                           
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
                                            <input id="thumbnail" class="form-control" type="text"  name="product_photo" value="{{url($product_variant->photo)}}">
                                           <span class="error "></span>
                                           <div id="holder" style="margin-top:15px;max-height:100px;"></div>
                                        </div>
                                         <img src="{{url($product_variant->photo)}}" class="thumb_image_temp" alt="product image" style="max-height: 90px;max-width:120px">
                                    </div>
                                </div>
                                
                                </div>
                                @endif
                           
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="example-text-input" class="col-sm-6 col-form-label">Youtube link</label>
                                        <div class="col-sm-10">
                                            <input class="form-control"  autofocus="true" type="text" value="{{$Product->youtube_link}}" placeholder="Enter Youtube Link"  id="example-text-input" name="youtube_link"  value="{{ old('youtube_link') }}">
                                            <span class="error"></span>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-md-6">

                                <div class="form-group row">

                                    <label for="example-text-input" class="col-sm-6 col-form-label">Category</label>

                                    <div class="col-sm-10">

                                        <select class="form-control required category1"  name='category' id="cat_id" required>

                                        <option value="">Select Category</option>

                                        @foreach ($category as $cate)

                                                <option value="{{$cate->id}}" {{$Product->category==$cate->id?'selected':''}}>{{$cate->title}}</option>

                                            @endforeach

                                        </select>

                                        <span class="error"></span>

                                    </div>

                                 </div>

                            </div>
                           
                              @if($Product->subcategory_id != 0 )
                                    <div class="col-md-6" id="sub_cat">
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-6 col-form-label">Sub Category</label>
                                            <div class="col-sm-10">
                                                <select class="form-control"  name='subcategory_id' id="subcat_id">
                                                <option value="">Select Subcategory</option>
                                                @foreach ($sub_category as $cate)
                                                <option value="{{$cate->id}}" {{$Product->subcategory_id==$cate->id?'selected':''}}>{{$cate->title}}</option>
                                               @endforeach
                                                </select>
                                                <span class="error"></span>
                                            </div>
                                        </div>
                                    </div>
                                 @else
                                    <div class="col-md-6" id="sub_cat" style="display:none">
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-6 col-form-label">Sub Category</label>
                                            <div class="col-sm-10">
                                                <select class="form-control"  name='subcategory_id' id="subcat_id">
                                                <option value="">Select Subcategory</option>
                                            
                                                </select>
                                                <span class="error"></span>
                                            </div>
                                        </div>
                                    </div>
                                 @endif 
                                 @if($Product->childcategory_id != 0 )
                                    <div class="col-md-6" id="child_cat">
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-6 col-form-label">Child Category</label>
                                            <div class="col-sm-10">
                                                <select class="form-control"  name='childcategory_id' id="childcat_id">
                                                <option value="">Select Child Category</option>
                                                @foreach ($child_category as $cate)
                                                <option value="{{$cate->id}}" {{$Product->childcategory_id==$cate->id?'selected':''}}>{{$cate->title}}</option>
                                               @endforeach
                                                </select>
                                                <span class="error"></span>
                                            </div>
                                        </div>
                                    </div>
                                 @else
                                    <div class="col-md-6" id="sub_cat" style="display:none">
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-6 col-form-label">Child Category </label>
                                            <div class="col-sm-10">
                                                <select class="form-control"  name='childcategory_id' id="childcat_id">
                                                <option value="">Select Child Category</option>
                                            
                                                </select>
                                                <span class="error"></span>
                                            </div>
                                        </div>
                                    </div>
                                 @endif 
                                 <div class="col-md-6">
                                    <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-6 col-form-label">Discount Type</label>
                                            <div class="col-sm-10">
                                                <select class="form-control" name='discount_type'>
                                                    <option value="">--Select Discount Type--</option>
                                                    <option value="fixed" {{ ($Product->discount_type)== 'fixed' ? 'selected' : '' }}>Fixed</option>
                                                    <option value="percentage" {{ ($Product->discount_type)  == 'percentage' ? 'selected' : '' }}>Percentage</option>
                                                </select>
                                                <span class="error"></span>
                                            </div>
                                    </div>
                                </div>
                             <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="example-text-input" class="col-sm-6 col-form-label">Discount</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="number"  placeholder="" id="example-text-input" name="discount" value="{{$Product->discount}}">
                                            <span class="error"></span>
                                        </div>
                                    </div>
                                </div>
                              
                                <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-6 col-form-label">Tax Id</label>
                                    <div class="col-sm-10">
                                        <select class="form-control required"  name='tax_id' id="tax_id" required>
                                        <option value="">Select Tax</option>
                                        @foreach ($tax as $t )
                                              <option value="{{$t->id}}" {{$Product->tax_id==$t->id?'selected':''}}>{{$t->tax_name}}</option>
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
                                            <input class="form-control"  autofocus="true" min="0" max="15" type="number" value="{{$Product->delivery_days}}" placeholder="No of Days Delivery"  id="example-text-input" name="delivery_days"  value="{{ old('delivery_date') }}">
                                            <span class="error"></span>
                                        </div>
                                    </div>
                                </div>
                                 <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="example-text-input" class="col-sm-6 col-form-label">HSN Code</label>
                                        <div class="col-sm-10">
                                            <input class="form-control required"  autofocus="true"  type="text"  placeholder="HSN Code"  id="example-text-input" name="hsn_code"  value="{{$Product->hsn_code}}" >
                                            <span class="error"></span>
                                        </div>
                                    </div>
                                </div>
                                
                            <div class="col-md-6">

                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-6 col-form-label">Tag</label>
                                    <div class="col-sm-10">
                                        <select class="form-control"  name='tag' id="tag">

                                             <option value="">Select Tag</option>
                                            <option value="LC" style="display:none;" {{ $Product->tag == 'LC' ? 'selected' : '' }} >LC</option>
                                            <option value="NA"  {{ $Product->tag == 'NA' ? 'selected' : '' }} >NA</option>

                                        </select>

                                        <span class="error"></span>

                                    </div>

                                 </div>

                            </div>

                                
<!--                                                                  <div class="col-md-6">-->

<!--                                         <div class="form-group row">-->
<!--    <label for="tag" class="col-sm-6 col-form-label">Tag</label>-->
<!--    <div class="col-sm-10">-->
<!--        <select id="tag" name="tag" class="form-control" required>-->
<!--            <option value="0">-- 0 --</option>-->
<!--            <option value="LC" {{ $Product->tag == 'LC' ? 'selected' : '' }} >LC</option>-->
<!--            <option value="NA"  {{ $Product->tag == 'NA' ? 'selected' : '' }} >NA</option>-->
            <!-- Add more options as needed -->
<!--        </select>-->
<!--    </div>-->
<!--</div>-->
                            <!-----
                            <div class="col-md-6">

                                <div class="form-group row">

                                    <label for="example-text-input" class="col-sm-6 col-form-label">Size</label>

                                    <div class="col-sm-10">

                                        <select class="form-control required"  name='size' id="size" required>

                                        <option value="">Select Size</option>

                                            <option value="1" {{$Product->size=='1'?'selected':''}}>Small</option>
                                            <option value="2" {{$Product->size=='2'?'selected':''}}>Medium</option>
                                            <option value="3" {{$Product->size=='3'?'selected':''}}>Large</option>
                                            <option value="4" {{$Product->size=='4'?'selected':''}}>Extra Large</option>
                                            <option value="5" {{$Product->size=='5'?'selected':''}}>Double Extra Large</option>

                                        </select>

                                        <span class="error"></span>

                                    </div>

                                 </div>

                            </div>
                            ---->
                            
                                         @if(!empty($product_variant))
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label for="example-text-input" class="col-sm-6 col-form-label">Regular Price(MRP)</label>
                                                        <div class="col-sm-10">
                                                            <input class="form-control required" readonly step="any" type="text" placeholder="" required id="example-text-input" name="prod_regular_price"value="{{ $product_variant->regular_price}}">
                                                            <span class="error"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                        <div class="form-group row">
                                                            <label for="example-text-input" class="col-sm-6 col-form-label">Stock</label>
                                                            <div class="col-sm-10">
                                                                <input class="form-control required" readonly type="number"  placeholder="" required id="example-text-input" name="prod_stock"value="{{$in_stock }}">
                                                                <span class="error"></span>
                                                            </div>
                                                        </div>
                                                </div>
                                         @endif
                                         <div class="row">
                                                <div class="col-md-12">
                                                    <div class="row">
                                                        <div class="col-12">
                                                    <div class="form-group">
                                                       <label for="example-text-input" class="col-sm-6 col-form-label">Description</label>
                                                            <div class="col-sm-6">
                                                                <textarea class="summernote"  name="description" value="{{ old('description') }}">{!! html_entity_decode($Product->description)!!}</textarea>
                                                                <span class="error"></span>
                                                            </div>
                                                             
                                                        </select>
                                                        <span class="error"></span>
                                                        
                                                     </div>
                                                     </div>
                                                     
                                                     
                                                     <div class="col-12" style="display:none;">
                                                     <div class="form-group ">
                                                       <label for="example-text-input" class="col-sm-6 col-form-label">Usage</label>
                                                            <div class="col-sm-10">
                                                                <textarea class="summernote"  name="usage"  value="{{ old('usage') }}">{!! html_entity_decode($Product->usage)!!}</textarea>
                                                                <span class="error"></span>
                                                            </div>
                                                             
                                                        </select>
                                                        <span class="error"></span>
                                                     </div>
                                                     </div>

                                                     
                                                 </div>
                                                 </div>
                                              
        
                                            </div>
                                         <!-- <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label for="example-text-input" class="col-sm-6 col-form-label">Main Products</label>
                                                        <div class="col-sm-10">
                                                            <select class="form-control required"  name='main_products' id="main_products" required>
                                                            <option value="">Select Status</option>
                                                            <option value="active" {{ $Product->main_products == 'active' ? 'selected' : '' }}>Active</option>
                                                            <option value="in active" {{ $Product->main_products == 'in active' ? 'selected' : '' }}>Inactive</option>
                                                            </select>
                                                            <span class="error"></span>
                                                        </div>
                                                    </div>
                                                </div> -->

                                                <!--<div class="col-md-6">-->
                                                <!--    <div class="form-group row">-->
                                                <!--        <label for="example-text-input" class="col-sm-6 col-form-label">Header</label>-->
                                                <!--        <div class="col-sm-10">-->
                                                <!--            <select class="form-control required"  name='header' id="header" required>-->
                                                <!--            <option value="">Select Status</option>-->
                                                <!--            <option value="active" {{ $Product->header == 'active' ? 'selected' : '' }}>Active</option>-->
                                                <!--            <option value="in active" {{ $Product->header == 'in active' ? 'selected' : '' }}>Inactive</option>-->
                                                <!--            </select>-->
                                                <!--            <span class="error"></span>-->
                                                <!--        </div>-->
                                                <!--    </div>-->
                                                <!--</div>-->
                                                </div>
                                            </div>
                                                <input type="button" name="next" class="next action-button" value="Next" />
                                            </fieldset>
                                                <!-- product variant -->
                                                
                                                <!-----
                                                <fieldset>
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
                                                        <div class="col-6">
                                                    <div class="form-group">
                                                       <label for="example-text-input" class="col-sm-6 col-form-label">Description</label>
                                                            <div class="col-sm-6">
                                                                <textarea class="summernote"  name="description" value="{{ old('description') }}">{!! html_entity_decode($Product->description)!!}</textarea>
                                                                <span class="error"></span>
                                                            </div>
                                                             
                                                        </select>
                                                        <span class="error"></span>
                                                        
                                                     </div>
                                                     </div>
                                                     <div class="col-6">
                                                     <div class="form-group">
                                                       <label for="example-text-input" class="col-sm-6 col-form-label">Benefits</label>
                                                            <div class="col-sm-6">
                                                                <textarea class="summernote"  name="benefits"  value="{{ old('benefits') }}">{!! html_entity_decode($Product->benefits)!!}</textarea>
                                                                <span class="error"></span>
                                                            </div>
                                                             
                                                        </select>
                                                        <span class="error"></span>
                                                        </div>
                                                     </div>
                                                     <div class="col-6">
                                                     <div class="form-group ">
                                                       <label for="example-text-input" class="col-sm-6 col-form-label">Usage</label>
                                                            <div class="col-sm-10">
                                                                <textarea class="summernote"  name="usage"  value="{{ old('usage') }}">{!! html_entity_decode($Product->usage)!!}</textarea>
                                                                <span class="error"></span>
                                                            </div>
                                                             
                                                        </select>
                                                        <span class="error"></span>
                                                     </div>
                                                     </div>

                                                     <div class="col-6">
                                                     <div class="form-group">
                                                       <label for="example-text-input" class="col-sm-6 col-form-label">Ingrediants</label>
                                                            <div class="col-sm-6">
                                                                <textarea class="summernote"  name="ingrediants"  value="{{ old('ingrediants') }}">{!! html_entity_decode($Product->ingrediants)!!}</textarea>
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
                                                        <span class="error"></span>
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
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <button type="button"
                                                            class="mt-4 btn btn-sm my-2 btn-danger btnRemove">Remove</button>
                                                    </div>
                                                </div>
                                                <div class=" col-md-12 product">
                                                </div>
                                                <div class="col-md-2 d-none variant1">
                                                    <div class="form-group">
                                                        <button class="btn btn-primary addvariant" type="button"
                                                            style="margin-top:.8em;">Add Variant</button>
                                                            <div class="err_addvar" style="color:red;display:none">Please Add variant</div>
                                                    </div>
                                                </div>
                                                <div class=" col-md-12 variant">
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                                 <input type="submit" name="next" class="action-button" value="Update" /> 
                                                 <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                                            </fieldset>
                                            <fieldset>
                                                <div class="form-card">
                                                    <div class="row">
                                                        <div class="col-7">
                                                            <h2 class="fs-title">Finish:</h2>
                                                        </div>
                                                        <div class="col-5">
                                                            <h2 class="steps">Step 2 - 2</h2>
                                                        </div>
                                                    </div> <br><br>
                                                    <h2 class="purple-text text-center"><strong>SUCCESS !</strong></h2> <br>
                                                    <div class="row justify-content-center">
                                                        <div class="col-3"> <img src="https://i.imgur.com/GwStPmg.png" class="fit-image"> </div>
                                                    </div> <br><br>
                                                    <div class="row justify-content-center">
                                                        <div class="col-7 text-center">
                                                        <button type="submit" class="btn btn-primary">Update</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
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
<script src="{{asset('assets/js/jquery.multifield.min.js') }}"></script>
<script src="{{asset('/vendor/laravel-filemanager/js/stand-alone-button.js')}}"></script>
<script>
$('#product_attribute').multifield();
// $('#chil_cat_id1').select2({
//     placeholder:"Select Value"
// });
</script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
$('.dltBtn').click(function(e) {
    var form = $(this).closest('form');
    var dataID = $(this).data('id');
    e.preventDefault();
    swal({
            title: "Are you sure?",
            text: "Once deleted, you will not be able to recover",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                form.submit();
                swal("Poof! Your imaginary file has been deleted!", {
                    icon: "success",
                });
            } else {
                swal("Your imaginary file is safe!");
            }
        });
});
</script>
<script>
$('input[name=toogle]').change(function() {
    var mode = $(this).prop('checked');
    var id = $(this).val();
    // alert(id);
    $.ajax({
        url: "{{ route('product.status') }}",
        type: "POST",
        data: {
            _token: '{{ csrf_token() }}',
            mode: mode,
            id: id,
        },
        success: function(response) {
         //   console.log(response.status);
        }
    })
});
</script>
<script>
function cat1(val, j) {
    var cat_id = val;
    if (cat_id != null) {
        $.ajax({
            url: "{{ route('product.attribute') }}",
            type: "POST",
            data: {
                _token: "{{csrf_token()}}",
                id: cat_id,
            },
            success: function(response) {
                var html_option = [];
                $('#chil_cat_id' + j).select2().empty();
                if (response.data) {
                    $('#child_cat_div' + j).removeClass('d-none');
                    $.each(response.data, function(id, attribute_type) {
                        html_option.push(attribute_type);
                    });
                } else {
                    $('#child_cat_div' + j).addClass('d-none');
                }
                $('#chil_cat_id' + j).select2({
                    placeholder: 'Select Value',
                    data: html_option
                });
            }
        });
    }
}
$('#btnAdd-1').click(function() {
});
</script>
<script>
var i = 2;
var data = [];
var attr = [];
function variants(cat_id,option="",attrid){//variant vakue
$('.variant1').removeClass('d-none');
        if (attr.indexOf(cat_id) == -1) {
            attr.push(cat_id);
            $.ajax({
                url: "{{ route('product.attribute') }}",
                type: "POST",
                data: {
                    _token: "{{csrf_token()}}",
                    id: cat_id,
                },
                success: function(response) {
                    let details = ' <div class="row border1" id="child' + i + '">' +
                '<div class="col-md-3">' +
                '<div class="form-group">' +
                '<label for="example-text-input" class="col-sm-12 col-form-label">Attribute Type :</label>' +
                '<label for="example-text-input" class="col-sm-12 col-form-label">' + cat_id + '</label>' +
                '<input type="hidden"  class="form-control" name="attribute_name[]" value="'+cat_id+'" style="width:100%;" >' +
                '<input type="hidden"  class="form-control" name="attribute_id[]" value="'+attrid+'" style="width:100%;" >' +
                '</div>' +
                '</div>' +
                '<div  id="child_cat_div' + i + '">' +
                '<div class="col-md-12">' +
                '<label for="example-text-input" class="col-sm-12 col-form-label">Attribute Value :</label>' +
                '<select class="chil_cat_id required attribute_values"  name="attribute_value_'+cat_id+'[]" id="chil_cat_id' + i +
                '" required placeholder="Add Attribute" style="width:100%;" multiple="multiple" ></select>' +
                '<span class="error"></span>' +
                '</div>' +
                '</div>' +
                '<div class="col-md-2">' +
                '<label for="example-text-input" class="col-sm-12 col-form-label"></label>' +
                '<button type="button" class="mt-3 btn btn-sm my-2 btn-danger" id="' + i + '|' + cat_id +
                '" onclick="removeproduct(this)">Remove</button>' +
                '</div>' +
                '</div>';
            $('.product').append(details);
                    var html_option = [];
                    $('#chil_cat_id' + (i)).select2().empty();
                    if (response.data) {
                        //$('#child_cat_div'+i).removeClass('d-none');
                        $.each(response.data, function(id, attribute_type) {
                            html_option.push(attribute_type);
                        });
                    } else {
                        //$('#child_cat_div'+i).addClass('d-none');
                    }
                    $('#chil_cat_id' + (i)).select2({
                        placeholder: 'Select Value',
                        data: html_option
                    });
                    if(option){
                        let opt=JSON.parse(option).split(',');
                   $('#chil_cat_id' + (i)).val(opt).trigger("change");
                    }
                    i++;
                }
            });
        }
}
$('.addproduct').click(function() {
    let cat_id = $('.cat_id').val();
    if (cat_id != '') {
        variants(cat_id);
    }
});
var variant = [];
$('.addvariant').click(function() {
    
    
       var tempVarientReadonly = 'readonly';
        if($('#screen_page').val()=="1"){
          
            
               tempVarientReadonly = '';
        }
                
                
    //  for(let k=2;k<=($('.chil_cat_id').length+1);k++){
    if ($('.chil_cat_id').length > 1) {
        for (let k1 = 0; k1 < ($('#chil_cat_id2').val().length); k1++) {
            for (let k2 = 0; k2 < ($('#chil_cat_id3').val().length); k2++) {
                // if (variant[$('#chil_cat_id2').val()[k1]] == undefined) {
                //     variant[$('#chil_cat_id2').val()[k1]]=[];
                // }
                let rand = 1 + Math.floor(Math.random() * 10000);
                    let vid = (k2.length == 1) ? '{{ $Product->id }}' + rand : '{{ $Product->id }}' +
                        rand;
                if (variant.indexOf(vid) == -1) {
                    //variant.push($('#chil_cat_id3').val()[k2]);
                    variant.push(vid);
                    let details = '<div class="card border1" id="vchild' + vid +
                        '" > <div class="row" >' +
                        '<div class="col-md-3">' +
                        '<div class="form-group">' +
                        '<label for="example-text-input" class="col-sm-12 col-form-label">#' + vid + ' ' + $(
                            '#chil_cat_id2').val()[k1] + '</label>' +
                        '</div>' +
                        '</div>' +
                        '<div class="col-md-3">' +
                        '<div class="form-group">' +
                        '<label for="example-text-input" class="col-sm-12 col-form-label">' + $(
                            '#chil_cat_id3').val()[k2] + '</label>' +
                        '</div>' +
                        '</div>' +
                        '<div class="col-md-6">' +
                        '<label for="example-text-input" ></label>' +
                        '<button type="button" class="tn btn-sm my-2 btn-danger pull-right mr-1" id="' +
                        vid + '|' + $('#chil_cat_id3').val()[k2] +
                        '" onclick="removevariant(this)"><i class="fa fa-trash-o"></i></button>' +
                        '<button type="button" class="tn btn-sm my-2 btn-primary pull-right mr-1"  onclick=exvariant("vo'+
                        vid + '")><i class="fa fa-expand"></i></button>' +
                        '</div>' +
                        '<div class="col-md-12"  id="vo' + vid +'">' +
                        '<div class="row" >' +
                        '<div class="col-md-3 ml-3">' +
                        '<div class="form-group">' +
                        '<label for="example-text-input" class="col-form-label">SKU<label>' +
                        '<input type="text"  class="form-control required2 add_varianterrsku add_varianterrsku'+vid+'" name="sku[]" required placeholder="SKU" style="width:100%;" >' +
                        '<div class="err_emptyval" style="color:red;display:none">This field is required</div>'+
                        '<input type="hidden"  class="form-control" name="variant_id[]" value="'+vid+'" style="width:100%;" >' +
                        '<input type="hidden"  class="form-control" name="attribute_value[]" value="'+$(
                            '#chil_cat_id2').val()[k1]+','+$(
                            '#chil_cat_id3').val()[k2]+'" style="width:100%;" >' +
                        '</div>' +
                        '</div>' +
                        '<div class="col-md-3" style="display:none;">' +
                        '<label for="example-text-input" class="col-form-label">Image888</label>' +
                        '<div class="input-group">' +
                        '<span class="input-group-btn">' +
                        '<a id="lfm" data-input="thumbnail' + vid + '" data-preview="holder' + vid + '" class="btn btn-primary lfm">' +
                        '<i class="fa fa-picture-o"></i> Choose' +
                        '</a>' +
                        '</span>' +
                        '<input id="thumbnail' + vid +
                        '"  class="form-control  add_varianterrphoto add_varianterrphoto'+vid+'" type="text" name="photo[]">' +
                        '<div class="err_emptyval" style="color:red;display:none">This field is required</div>'+
                        '    <span class="error"></span>'+
                        '</div>' +
                        '<div id="holder' + vid +
                        '" style="margin-top:15px;max-height:100px;"></div>' +
                        '</div>' +
                        '<div class="col-md-3 ml-3">' +
                        '<div class="form-group">' +
                        '<label for="example-text-input" class="col-form-label">Regular Price:</label>' +
                        '<input type="text"  class="form-control required2 add_varianterrprice add_varianterrprice'+vid+'" name="regular_price[]" required placeholder="Regular Price" style="width:100%;" >' +
                        '<div class="err_emptyval" style="color:red;display:none">This field is required</div>'+
                        '    <span class="error"></span>'+
                        '</div>' +
                        '</div>' +
                        '<div class="col-md-3 ml-3">' +
                        '<div class="form-group">' +
                        '<label for="example-text-input" class="col-form-label">Sale Price 1:</label>' +
                        '<input type="text"  class="form-control" name="sale_price[]" required placeholder="Sale Price" style="width:100%;" >' +
                        '    <span class="error"></span>'+
                        '</div>' +
                        '</div>' +
                        '<div class="col-md-3">' +
                        '<div class="form-group">' +
                        '<label for="example-text-input" class="col-form-label">Stock:</label>' +
                        '<input type="text"  class="form-control required2 add_varianterrstock add_varianterrstock'+vid+'" value="0" name="stock[]" placeholder="Stock" style="width:100%;" '+tempVarientReadonly+' >' +
                        '<div class="err_emptyval" style="color:red;display:none">This field is required</div>'+
                        '    <span class="error"></span>'+
                        '</div>' +
                        '</div>' +
                        '</div>' +
                        '</div>' +
                        '</div></div>';
                  //  $('.variant').append(details);
                    $('.lfm').filemanager('image');
                            }
            }
            //  console.log($('#chil_cat_id2').val());
        }
    } else {
        
        for (let k1 = 0; k1 < ($('#chil_cat_id2').val().length); k1++) {
            let rand = 1 + Math.floor(Math.random() * 10000);
                    let vid = (k1.length == 1) ? '{{ $Product->id }}' + rand : '{{ $Product->id }}' +
                        rand;
            if (variant.indexOf(vid) == -1) {
                    //variant.push($('#chil_cat_id3').val()[k2]);
                    variant.push(vid);
                let details = '<div class="card border1"  id="vchild' + vid + '"><div class="row">' +
                    '<div class="col-md-3">' +
                    '<div class="form-group">' +
                    '<label for="example-text-input" class="col-sm-12 col-form-label">#' + vid + ' ' + $(
                            '#chil_cat_id2').val()[k1] + '</label>' +
                    '</div>' +
                    '</div>' +
                    '<div class="col-md-6">' +
                    '<label for="example-text-input" ></label>' +
                    '<button type="button" class="tn btn-sm my-2 btn-danger pull-right mr-1" id="' + vid +
                    '|' + $('#chil_cat_id2').val()[k1] +
                    '" onclick="removevariant(this)"><i class="fa fa-trash-o"></i></button>' +
                    '<button type="button" class="tn btn-sm my-2 btn-primary pull-right mr-1"  onclick=exvariant("vo' +
                    vid + '")><i class="fa fa-expand"></i></button>' +
                    '</div>' +
                    '<div class="col-md-12" id="vo'+vid+'">' +
                        '<div class="row" >' +
                        '<div class="col-md-3 ml-3">' +
                        '<div class="form-group">' +
                        '<label for="example-text-input" class="col-form-label">SKU:</label>' +
                        '<input type="text"  class="form-control required2 add_varianterrsku add_varianterrsku'+vid+'" name="sku[]" required placeholder="SKU" style="width:100%;" >' +
                        '<div class="err_emptyval" style="color:red;display:none">This field is required</div>'+
                        '<input type="hidden"  class="form-control" name="variant_id[]" value="'+vid+'" style="width:100%;" >' +
                        '<input type="hidden"  class="form-control" name="attribute_value[]" value="'+$(
                            '#chil_cat_id2').val()[k1]+'" style="width:100%;" >' +
                        '</div>' +
                        '</div>' +
                        '<div class="col-md-3"  style="display:none;">' +
                        '<label for="example-text-input" class="col-form-label">Image55</label>' +
                        '<div class="input-group">' +
                        '<span class="input-group-btn">' +
                        '<a id="lfm" data-input="thumbnail' + vid + '" data-preview="holder' + vid + '" class="btn btn-primary lfm">' +
                        '<i class="fa fa-picture-o"></i> Choose' +
                        '</a>' +
                        '</span>' +
                        '<input id="thumbnail' + vid +
                        '"  class="form-control  add_varianterrphoto add_varianterrphoto'+vid+'" type="text" name="photo[]">' +
                        '<div class="err_emptyval" style="color:red;display:none">This field is required</div>'+
                        '</div>' +
                        '<div id="holder' + vid +
                        '" style="margin-top:15px;max-height:100px;"></div>' +
                        '</div>' +
                        '<div class="col-md-3 ml-3">' +
                        '<div class="form-group">' +
                        '<label for="example-text-input" class="col-form-label">Regular Price:</label>' +
                        '<input type="text"  class="form-control required2 add_varianterrprice add_varianterrprice'+vid+'" name="regular_price[]" required placeholder="Regular Price" style="width:100%;" >' +
                        '<div class="err_emptyval" style="color:red;display:none">This field is required</div>'+
                        '</div>' +
                        '</div>' +
                        '<div class="col-md-3 ml-3">' +
                        '<div class="form-group">' +
                        '<label for="example-text-input" class="col-form-label">Sale Price 2:</label>' +
                        '<input type="text"  class="form-control " name="sale_price[]" required placeholder="Sale Price" style="width:100%;" >' +
                        '</div>' +
                        '</div>' +
                        '<div class="col-md-3">' +
                        '<div class="form-group">' +
                        '<label for="example-text-input" class="col-form-label">Stock:</label>' +
                        '<input type="text"  class="form-control required2 add_varianterrstock add_varianterrstock'+vid+'" value="0" name="stock[]" placeholder="Stock" style="width:100%;" '+tempVarientReadonly+' >' +
                        '<div class="err_emptyval" style="color:red;display:none">This field is required</div>'+
                        '</div>' +
                        '</div>' +
                        '</div>' +
                        '</div>' +
                    '</div></div>';
                  //    $('.variant').append(details);
                    $('.lfm').filemanager('image');
                //  console.log($('#chil_cat_id2').val());
            }
        }
    }
    //   console.log($('#chil_cat_id'+k).val());
    
});
function removeproduct(d) {
    var id = d.id.split('|')[0];
    let dval = d.id.split('|')[1];
    //   var pid=d.id.split('|')[1];
    //   data=jQuery.grep(data, function(value) {
    //   return value != pid;
    // });
    attr.splice(attr.indexOf(dval), 1);
    $('#child' + id).remove();
    if (id == 1) {
        $('.variant1').addClass('d-none');
    }
    i--;
}
function removevariant(d) {
    //var id=d.id;
    var id = d.id.split('|')[0];
    let dval = d.id.split('|')[1];
    //   data=jQuery.grep(data, function(value) {
    //   return value != pid;
    // });
    //   attr.splice(attr.indexOf(dval),1);
    variant.splice(variant.indexOf(id), 1);
    $('#vchild' + id).remove();
}
function exvariant(d) {
// console.log(d);
//var id=d.id;
var id = d;
$('#'+ id).toggle();
}
function product_attribute(id){
   
$.ajax({
                url: "{{ route('product.variant') }}",
                type: "POST",
                data: {
                    _token: "{{csrf_token()}}",
                    id: id,
                },
                success: function(response) {
                  let productattribute=response.productattribute;
                  let productvariant=response.productvariant;
                $.each(productattribute,function(key,data){
                    let arrtibute_value=JSON.stringify(data.attribute_value).split(',');
                    variants(data.attribute_name,arrtibute_value,data.id);
                });
                $.each(productvariant,function(key,data){
                    
                    let arrtibute_name=JSON.stringify(data.variants).split(',');
                    if(arrtibute_name.length >= 1){
                    let arrtibute_name_len0=arrtibute_name[0].replace('"','');
                    arrtibute_name_len0=arrtibute_name_len0.replace('"','');
                    let arrtibute_name_len1=(arrtibute_name[1]) ? arrtibute_name[1].replace('"','') : '';
                    arrtibute_name_len1=(arrtibute_name[1]) ? arrtibute_name_len1.replace('"','') : '';
                //     if (variant[arrtibute_name_len0] == undefined) {
                //     variant[arrtibute_name_len0]=[];
                // }
                  var tempVarientReadonly = 'readonly';
                if($('#screen_page').val()=="1"){
                    data.photo = '';
                    
                       tempVarientReadonly = '';
                }
                
              
                if (arrtibute_name_len1 != '') {
                  //  variant.push(data.sku);
                    let details = '<div class="card border1" id="vchild' +data.sku +
                        '" > <div class="row" >' +
                        '<div class="col-md-3">' +
                        '<div class="form-group">' +
                        '<label for="example-text-input" class="col-sm-12 col-form-label">#' + data.sku + ' ' + arrtibute_name_len0 + '</label>' +
                        '</div>' +
                        '</div>' +
                        '<div class="col-md-3">' +
                        '<div class="form-group">' +
                        '<label for="example-text-input" class="col-sm-12 col-form-label">' + arrtibute_name_len1 + '</label>' +
                        '</div>' +
                        '</div>' +
                        '<div class="col-md-6">' +
                        '<label for="example-text-input" ></label>' +
                        '<button type="button" class="tn btn-sm my-2 btn-danger pull-right mr-1" id="' +
                        data.sku+ '|' + arrtibute_name_len1 +
                        '" onclick="removevariant(this)"><i class="fa fa-trash-o"></i></button>' +
                        '<button type="button" class="tn btn-sm my-2 btn-primary pull-right mr-1"  onclick=exvariant("vo'+
                        data.sku + '")><i class="fa fa-expand"></i></button>' +
                        '</div>' +
                        '<div class="col-md-12" style="display:none;" id="vo' + data.sku +'">' +
                        '<div class="row" >' +
                        '<div class="col-md-3 ml-3">' +
                        '<div class="form-group">' +
                        '<label for="example-text-input" class="col-form-label">SKU11:</label>' +
                        '<input type="text"  class="form-control required2 add_varianterrsku add_varianterrsku'+data.sku+'" name="sku[]" required placeholder="SKU" value="'+data.sku+'" style="width:100%;" >' +
                        '<input type="hidden"  class="form-control" name="variant_id[]" value="'+data.sku+'" style="width:100%;" >' +
                        '<input type="hidden"  class="form-control" name="attribute_value[]" value="'+arrtibute_name_len0+','+arrtibute_name_len1+'" style="width:100%;" >' +
                        '<div class="err_emptyval" style="color:red;display:none">This field is required</div>'+
                        '<span class="error"></span>'+
                        '</div>' +
                        '</div>' +
                        '<div class="col-md-3">' +
                        '<label for="example-text-input" class="col-form-label">Image333</label>' +
                        '<div class="input-group">' +
                        '<span class="input-group-btn">' +
                        '<a id="lfm" data-input="thumbnail' + data.sku + '" data-preview="holder' + data.sku + '" class="btn btn-primary lfm">' +
                        '<i class="fa fa-picture-o"></i> Choose' +
                        '</a>' +
                        '</span>' +
                        '<input id="thumbnail' + data.sku +
                        '"  value="'+data.photo+'" class="form-control add_varianterrphoto add_varianterrphoto'+data.sku+'" type="text" name="photo[]">' +
                        '<div class="err_emptyval" style="color:red;display:none">This field is required</div>'+
                        '<span class="error"></span>'+
                        '</div>' +
                        '<div id="holder' + data.sku +
                        '" style="margin-top:15px;max-height:100px;"><img src="'+data.photo+'" alt="promo image"style="max-height: 90px;max-width:120px"></div>' +
                        '</div>' +
                        '<div class="col-md-3 ml-3">' +
                        '<div class="form-group">' +
                        '<label for="example-text-input" class="col-form-label">Regular Price:</label>' +
                        '<input type="text"  class="form-control add_varianterrprice add_varianterrprice'+data.sku+'" value="'+data.regular_price+'" name="regular_price[]" required placeholder="Regular Price" style="width:100%;" >' +
                        '<div class="err_emptyval" style="color:red;display:none">This field is required</div>'+
                        '<span class="error"></span>'+
                        '</div>' +
                        '</div>' +
                        '<div class="col-md-3 ml-3">' +
                        '<div class="form-group">' +
                        '<label for="example-text-input" class="col-form-label">Sale Price 3:</label>' +
                        '<input type="text"  class="form-control" name="sale_price[]" value="'+data.sale_price+'" required placeholder="Sale Price" style="width:100%;" >' +
                        '</div>' +
                        '</div>' +
                        '<div class="col-md-3 ml-3">' +
                        '<div class="form-group">' +
                        '<label for="example-text-input" class="col-form-label">Stock:</label>' +
                        '<input type="text"  class="form-control add_varianterrstock add_varianterrstock'+data.sku+'" name="stock[]" value="'+data.in_stock+'" placeholder="Stock" style="width:100%;" '+tempVarientReadonly+' >' +
                        '<div class="err_emptyval" style="color:red;display:none">This field is required</div>'+
                        '<span class="error"></span>'+
                        '</div>' +
                        '</div>' +
                        '</div>' +
                        '</div>' +
                        '</div></div>';
                    $('.variant').append(details);
                    $('.lfm').filemanager('image');
                }
                else if(data.sku !=0){
                // variant.push(arrtibute_name_len0);
                // if (variant.indexOf(data.sku) == -1) {
                // }
              //  variant.push(data.sku);
                if(data.variants != "default" && productvariant.length >= 1){
                    
                   if(data.colors!=''){
                    var colorsArray = convertColorsStringToArray(data.colors);
                   }
                    
                let details = '<div class="card border1"  id="vchild' + data.sku + '"><div class="row">' +
                    '<div class="col-md-3">' +
                    '<div class="form-group">' +
                    '<label for="example-text-input" class="col-sm-12 col-form-label">#' + data.sku + ' ' + arrtibute_name_len0 + '</label>' +
                    '</div>' +
                    '</div>' +
                    '<div class="col-md-6">' +
                    '<label for="example-text-input" ></label>' +
                    '<button type="button" class="tn btn-sm my-2 btn-danger pull-right mr-1" id="' + data.sku +
                    '|' + arrtibute_name[0].replace('"','') +
                    '" onclick="removevariant(this)"><i class="fa fa-trash-o"></i></button>' +
                    '<button type="button" class="tn btn-sm my-2 btn-primary pull-right mr-1"  onclick=exvariant("vo' +
                    data.sku + '")><i class="fa fa-expand"></i></button>' +
                    '</div>' +
                    '<div class="col-md-12" id="vo' + data.sku +'">' +
                        '<div class="row" >' +
                        '<div class="col-md-3 ml-3">' +
                        '<div class="form-group">' +
                        '<label for="example-text-input" class="col-form-label">SKU:</label>' +
                        '<input type="text"  class="form-control required2 add_varianterrsku'+data.sku+' add_varianterrsku" name="sku[]" required placeholder="SKU" value="'+data.sku+'" style="width:100%;" >' +
                        '<input type="hidden"  class="form-control" name="variant_id[]" value="'+data.sku+'" style="width:100%;" >' +
                        '<input type="hidden"  class="form-control" name="attribute_value[]" value="'+arrtibute_name_len0+','+arrtibute_name_len1+'" style="width:100%;" >' +
                        '<span class="error"></span>'+
                        '</div>' +
                        '</div>' +
                        '<div class="col-md-3" style="display:none;">' +
                        '<label for="example-text-input" class="col-form-label">Image77</label>' +
                        '<div class="input-group">' +
                        '<span class="input-group-btn">' +
                        '<a id="lfm" data-input="thumbnail' + data.sku + '" data-preview="holder' + data.sku + '" class="btn btn-primary lfm">' +
                        '<i class="fa fa-picture-o"></i> Choose' +
                        '</a>' +
                        '</span>' +
                        '<input id="thumbnail' + data.sku +
                        '"  value="'+data.photo+'" class="form-control add_varianterrphoto add_varianterrphoto'+data.sku+'" type="text" name="photo[]">' +
                        '<span class="error"></span>'+
                        '</div>' +
                        '<div id="holder' + data.sku +
                        '" style="margin-top:15px;max-height:100px;"><img src="'+data.photo+'" alt="promo image"style="max-height: 90px;max-width:120px"></div>' +
                        '</div>' +
                        '<div class="col-md-3 ml-3">' +
                        '<div class="form-group">' +
                        '<label for="example-text-input" class="col-form-label">Regular Price:</label>' +
                        '<input type="text"  class="form-control add_varianterrprice add_varianterrprice'+data.sku+'" value="'+data.regular_price+'" name="regular_price[]" required placeholder="Regular Price" style="width:100%;" >' +
                        '<span class="error"></span>'+
                        '</div>' +
                        '</div>' +
                         '<div class="col-md-6 ml-6" style="display:none;" style="padding: 0px 35px;">' +
                         '<div class="form-group">' +
                         '<p>Product Colors:</p>' +
                           '<label style="padding: 5px;border-radius: 5px;color: white; background-color: red;"><input type="checkbox" value="Red" name="colors_'+data.sku+'[]" data-color="Red" style="width: 15px;height: 14px;"> Red</label>&nbsp;' +
                            '<label style="padding: 5px;border-radius: 5px;color: white; background-color: Green;"><input type="checkbox" value="Green" name="colors_'+data.sku+'[]" data-color="Green" style="width: 15px;height: 14px;"> Green</label>&nbsp;' +
                            '<label style="padding: 5px;border-radius: 5px;color: white; background-color: Blue;"><input type="checkbox" value="Blue" name="colors_'+data.sku+'[]" data-color="Blue" style="width: 15px;height: 14px;"> Blue</label>&nbsp;' +
                            '<label style="padding: 5px;border-radius: 5px;color: white; background-color: Indigo;"><input type="checkbox" value="Indigo" name="colors_'+data.sku+'[]" data-color="Indigo" style="width: 15px;height: 14px;"> Indigo</label>&nbsp;' +
                            '<label style="padding: 5px;border-radius: 5px;color: white; background-color: Orange;"><input type="checkbox" value="Orange" name="colors_'+data.sku+'[]" data-color="Orange" style="width: 15px;height: 14px;"> Orange</label>&nbsp;' +
                            '<label style="padding: 5px;border-radius: 5px;color: white; background-color: Yellow;"><input type="checkbox" value="Yellow" name="colors_'+data.sku+'[]" data-color="Yellow" style="width: 15px;height: 14px;"> Yellow</label>&nbsp;' +
                            '<label style="padding: 5px;border-radius: 5px;color: white; background-color: Violet;"><input type="checkbox" value="Violet" name="colors_'+data.sku+'[]" data-color="Violet" style="width: 15px;height: 14px;"> Violet</label>&nbsp;' +
                            '<label style="padding: 5px;border-radius: 5px;color: white; background-color: Grey;"><input type="checkbox" value="Grey" name="colors_'+data.sku+'[]" data-color="Grey" style="width: 15px;height: 14px;"> Grey</label>&nbsp;' +
                            '<label style="padding: 5px;border-radius: 5px;color: white; background-color: Maroon;"><input type="checkbox" value="Maroon" name="colors_'+data.sku+'[]" data-color="Maroon" style="width: 15px;height: 14px;"> Maroon</label>&nbsp;' +
                            '<label style="padding: 5px;border-radius: 5px;color: white; background-color: Black;"><input type="checkbox" value="Black" name="colors_'+data.sku+'[]" data-color="Black" style="width: 15px;height: 14px;"> Black</label>&nbsp;' +
                            '<label style="padding: 5px;border-radius: 5px;color: white; background-color: Olive;"><input type="checkbox" value="Olive" name="colors_'+data.sku+'[]" data-color="Olive" style="width: 15px;height: 14px;"> Olive</label>&nbsp;' +
                            '<label style="padding: 5px;border-radius: 5px;color: white; background-color: Cyan;"><input type="checkbox" value="Cyan" name="colors_'+data.sku+'[]" data-color="Cyan" style="width: 15px;height: 14px;"> Cyan</label>&nbsp;' +
                            '<label style="padding: 5px;border-radius: 5px;color: white; background-color: Pink;"><input type="checkbox" value="Pink" name="colors_'+data.sku+'[]" data-color="Pink" style="width: 15px;height: 14px;"> Pink</label>&nbsp;' +
                            '<label style="padding: 5px;border-radius: 5px;color: white; background-color: Magenta;"><input type="checkbox" value="Magenta" name="colors_'+data.sku+'[]" data-color="Magenta" style="width: 15px;height: 14px;"> Magenta</label>&nbsp;' +
                            '<label style="padding: 5px;border-radius: 5px;color: white; background-color: Tan;"><input type="checkbox" value="Tan" name="colors_'+data.sku+'[]" data-color="Tan" style="width: 15px;height: 14px;"> Tan</label>&nbsp;' +
                            '<label style="padding: 5px;border-radius: 5px;color: white; background-color: Teal;"><input type="checkbox" value="Teal" name="colors_'+data.sku+'[]" data-color="Teal" style="width: 15px;height: 14px;"> Teal</label>' +
                         '</div>' +
                         '</div>' +
                        '<div class="col-md-3 ml-3">' +
                        '<div class="form-group">' +
                        '<label for="example-text-input" class="col-form-label">Stock:</label>' +
                        '<input type="text"  class="form-control add_varianterrstock add_varianterrstock'+data.sku+'" name="stock[]" value="'+data.in_stock+'" placeholder="Stock" style="width:100%;" '+tempVarientReadonly+' >' +
                        '<span class="error"></span>'+
                        '</div>' +
                        '</div>' +
                        '</div>' +
                        '</div>' +
                    '</div></div>';
                   $('.variant').append(details);
                   if(data.colors!=''){
                    checkColorCheckboxes(data.sku,colorsArray);
                   }
                }
                 $('.lfm').filemanager('image');
                //  console.log($('#chil_cat_id2').val());
              // console.log(variant);
              
            }
        }
            });
               //
                }
            });
}
product_attribute('{{$Product->id}}');
function checkColorCheckboxes(sku, colors) {
    colors.forEach(function(color) {
        var checkbox = document.querySelector(`input[name="colors_${sku}[]"][value="${color}"]`);
        if (checkbox) {
            checkbox.checked = true;
        }
    });
}
// Convert the comma-separated colors string to an array
function convertColorsStringToArray(colorsString) {
    
    
   if (!colorsString || !colorsString.trim()) {
        return [];
    }
    return colorsString.split(',').map(function(color) {
        return color.trim();
    });
}

</script>

<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script type="text/javascript">
$(document).ready(function() {
    $('.category').select2({
    placeholder: "Select Category"
});


$("#thumbnail").change(function(e) {
    //do whatever you want here
    $('.thumb_image_temp').remove();
});




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

});


</script>
@endsection