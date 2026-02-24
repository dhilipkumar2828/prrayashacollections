
<div class="shopping-cart-form table-responsive">
    <!-- <h2 class="title text-center">Cart</h2> -->
    <form action="#" method="post">
        <table class="table text-center">
            <thead>
                <tr>
                   
                    <th class="product-thumbnail">Product</th>
                    <th class="product-name">Name</th>
                    <th class="product-name">Size </th>
                    <th class="product-price">Unit Price</th>
                    <th class="product-quantity">Quantity</th>
                    <th class="product-subtotal">Total</th>
                    <!---
                    <th class="product-remove"> </th>
                    --->
                </tr>
            </thead>
            <tbody>
                
                @foreach($carts as $key=>$aData)
               
                
                
                     @if(auth()->guard('users')->user() || auth()->guard('guest')->user())
                     
                     <?php
                     $stockOutt = false;
                     $stockOutCss = '';
                     if($aData->in_stock<$aData->product_qty){
                         $stockOutt = true;
                         $stockOutCss = 'background:lightgrey;color:red;pointer-events:none;';
                     }
                     ?>
                <tr class="tbody-item" style="{{$stockOutCss}}">
                   
                    <td class="product-thumbnail">
                        <div class="thumb">
                            <div class="image-box">
                                <img src="{{ url($productimage[$key]) }}" width="68" height="84" alt="Image-HasTech">
                              
                            </div>
                              <?php
                                if($stockOutt){
                                    echo 'Out of Stock';
                                }
                                ?>
                        </div>
                    </td>
                   <?php 
                       $in_stock = 0;
                        if( $aData->product_id){
                            $p_id =  $aData->product_id;
                             $product=DB::table('products')->where('status','active')->where('id',$p_id)->first();
                             if(!empty($product)){
                                $product_variants = DB::table('product_variants')->where('product_id',$product->id)->where('variants',$aData->arrtibute_name)->first(); 
                                if(!empty($product_variants)){
                                    $in_stock = $product_variants->in_stock;
                                }
                             }
                        }
                        ?>
                    <td class="product-name">
                        <a class="title" href="{{ url('products/').'/'.$product->slug }}">{{$aData->product_name}} </a>
                    </td>
                   
                    <td class="product-name">
                        
                        <a class="title" href="{{ url('products/').'/'.$product->slug }}">{{str_replace(",","",$aData->arrtibute_name)}} {{$aData->product_color}}</a>
                    </td>
                    <td class="product-price">
                        <span class="price">₹</span><span>{{ number_format($aData->price,2,'.','') }}</span>
                    </td>
                    <td class="product-quantity">
                        <div class="cart-page-pro-qty">
                        <input type="hidden" id="count_prod_qty{{$aData->product_varient}}" class="count_prod_qty"
                                    value="{{isset($cart_get) ? $cart_get : 01}}"
                                    data-product_id="{{$aData->product_varient}}"
                                  >

              <input type="text" id="quantity{{$aData->product_varient}}" title="Quantity"
                                    class="quantity count_prod_qty{{$aData->product_id}}"
                                    data-product_id="{{$aData->product_varient}}" 
                               
                                    value="{{$aData->product_qty}}" diabled>
                            <div class="dec qty-btn cart_rendercount" data-product_price="{{ number_format($aData->price,2,'.','') }}" data-product_id="{{$aData->product_varient}}" data-type="dec" data-product_varient_id="{{$aData->product_varient}}" data-quantity="{{$in_stock}}">-</div>
                            <div class="inc qty-btn cart_rendercount"  data-product_price="{{ number_format($aData->price,2,'.','') }}"   data-product_id="{{$aData->product_varient}}" data-type="inc" data-product_varient_id="{{$aData->product_varient}}" data-quantity="{{$in_stock}}">+</div>
                        </div>
                    </td>
                    <td class="product-subtotal">
                         <input type="hidden" id="max_qty" name="max_qty" value="{{$in_stock}}">
                        <span class="product_rate_{{$aData->product_varient}}">{{$aData->product_qty}} x <span class="price">₹</span>{{ number_format($aData->price,2,'.','') }}</span>
                    </td>
                    <!---
                    <td class="product-remove">
                        <span class="btnde">
                         <input type="hidden" name="product_id[]" class="product_id" value="{{$aData->product_id}}">
                         <input type="hidden" name="product_qty[]" class="product_qty" value="{{$aData->product_qty}}">
                            <a class="remove text-white remove cartremove"  data-product_id="{{$aData->product_varient}}" href="javascript:void(0)"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M6 7H5v13a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V7H6zm4 12H8v-9h2v9zm6 0h-2v-9h2v9zm.618-15L15 2H9L7.382 4H3v2h18V4z"></path></svg></a>
                        </span>
                    </td>
                    ---->
                </tr>

                @else
                
                  <?php 
                  /*
                   $colors ='';
                    if(!empty($carts[$key]['colors'])){
                         if (count($carts[$key]['colors'])>0) {
                             $colors = implode(',', $carts[$key]['colors']); 
                         }
                       
                    }else{
                       $colors = $carts[$key]['product_color'];
                    }
                   */
                    ?>
                    <?php 
                     if(!empty($carts[$key]['product_id'])){
                         
                         
                          
                     $stockOutt = false;
                     $stockOutCss = '';
                     if($carts[$key]['in_stock']<$carts[$key]['product_qty']){
                         $stockOutt = true;
                         $stockOutCss = 'background:lightgrey;color:red;pointer-events:none;';
                     }
                    
                     
                    ?>
                   <tr class="tbody-item" style="{{$stockOutCss}}">
                   
                    <td class="product-thumbnail">
                        <div class="thumb">
                            <img src="{{ url($productimage[$key]) }}" width="68" height="84" alt="Image-HasTech">
                        </div>
                        
                        <?php
                                if($stockOutt){
                                    echo 'Out of Stock';
                                }
                                ?>
                    </td>
                    <td class="product-name">
                        <?php 
                        $in_stock =0;
                        if(!empty($carts[$key]['product_id'])){
                            $p_id =  $carts[$key]['product_id'];
                             $product=DB::table('products')->where('status','active')->where('id',$p_id)->first();
                             if(!empty($product)){
                                $product_variants = DB::table('product_variants')->where('product_id',$product->id)->where('variants',$carts[$key]['variant'])->first(); 
                                if(!empty($product_variants)){
                                    $in_stock = $product_variants->in_stock;
                                }
                             }
                        }
                        ?>
                        <?php 
                        if(!empty($carts[$key]['product_id'])){
                        ?>
                        <a class="title" href="{{ url('products/').'/'.$product->slug }}">{{$carts[$key]['product_name']}}</a>
                        <?php } ?>
                    </td>
                   <td>
                     {{$carts[$key]['variant']}}
                   </td>
                    <td class="product-price">
                        <span class="price">₹</span><span>{{ number_format($carts[$key]['price'] ,2,'.','') }}</span>
                    </td>
                    <td class="product-quantity">
                    <div class="cart-page-pro-qty">
                        <input type="hidden" id="count_prod_qty{{$carts[$key]['product_varient']}}" class="count_prod_qty"
                                    value="{{$carts[$key]['product_qty'] }}"
                                    data-product_id="{$carts[$key]['product_varient']}}"
                                  >

              <input type="text" id="quantity{{$carts[$key]['product_varient']}}" title="Quantity"
                                    class="quantity count_prod_qty{{$carts[$key]['product_varient']}}"
                                    data-product_id="{{$carts[$key]['product_varient']}}"
                               
                                    value="{{$carts[$key]['product_qty'] }}" diabled>
                            <div class="dec qty-btn cart_rendercount" data-product_price="{{$carts[$key]['price']}}" data-product_id="{{$carts[$key]['product_varient']}}" data-type="dec" data-product_varient_id="{{$carts[$key]['product_varient']}}" data-quantity="{{$in_stock}}">-</div>
                            <div class="inc qty-btn cart_rendercount" data-product_price="{{$carts[$key]['price']}}" data-product_id="{{$carts[$key]['product_varient']}}" data-type="inc" data-product_varient_id="{{$carts[$key]['product_varient']}}" data-quantity="{{$in_stock}}">+</div>
                        </div>
                    </td>
                    <td class="product-subtotal">
                        <input type="hidden" id="max_qty" name="max_qty" value="{{$in_stock}}">
                        <input type="hidden" id="product_id" name="product_id" value="{{$carts[$key]['product_id']}}">
                        <span class="price">₹</span><span class="product_rate_{{$carts[$key]['product_varient']}}">{{$carts[$key]['product_qty']}} x {{ number_format($carts[$key]['price'],2,'.','') }}</span>
                    </td>
                   <!---
                    <td class="product-remove">
                        <span class="btnde">
                         <input type="hidden" name="product_id[]" class="product_id" value="{{$carts[$key]['product_id']}}">
                         <input type="hidden" name="product_qty[]" class="product_qty" value="{{$carts[$key]['product_qty']}}">
                            <a class="remove text-white remove cartremove" data-product_id="{{$carts[$key]['product_varient']}}" href="javascript:void(0)"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M6 7H5v13a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V7H6zm4 12H8v-9h2v9zm6 0h-2v-9h2v9zm.618-15L15 2H9L7.382 4H3v2h18V4z"></path></svg></a>
                        </span>
                    </td>
                    --->
                </tr>
                <?php } ?>
              @endif
                @endforeach
                <tr class="tbody-item-actions d-none">
                    <td colspan="6">
                        <input type="text" name="coupontotal" id="coupantotal" value="{{$sub_amt}}">
                        <button type="button" class="btn-update-cart">₹{{ $sub_amt }}</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </form>
</div>