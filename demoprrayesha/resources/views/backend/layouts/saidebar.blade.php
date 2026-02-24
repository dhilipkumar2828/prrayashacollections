
<div class="left side-menu">
    <button type="button" class="button-menu-mobile button-menu-mobile-topbar open-left waves-effect">
        <i class="ion-close"></i>
    </button>

    <div class="left-side-logo d-block d-lg-none">
        <div class="text-center">

            <a href="{{route('admin')}}" class="logo"><img src="/frontend/img/Prrayasha Collection LOGO.jpeg" height="50px" alt="logo"></a>
        </div>
    </div>

<div class="sidebar-inner slimscrollleft">

    <div id="sidebar-menu">
        <ul>
            <li class="menu-title">Main</li>

            <li>
                <a href="{{route('admin')}}" class="waves-effect">
                    <i class="dripicons-meter"></i>
                    <span> Dashboard <span class="badge badge-success badge-pill float-right"></span></span>
                </a>
            </li>


    @if(auth()->user()->can('banner-view') or auth()->user()->can('banner-add') or auth()->user()->can('banner-edit') or auth()->user()->can('banner-delete') or auth()->user()->can('homepage-sorting') or auth()->user()->can('headerpage-sorting'))

       <li class="has_sub">
            <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-cubes"></i><span>  Appearence</span> <span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                <ul class="list-unstyled">
                     {{--
                    @if(auth()->user()->can('Offer Banner Edit') or auth()->user()->can('Offer Banner Delete') or auth()->user()->can('Offer Banner View') or auth()->user()->can('Offer Banner Create'))
                    <li>
                        <a href="{{route('deals.store')}}" class="waves-effect"><span> Offer banners </span></a>
                    </li>x
                    @endif --}}

                    @if(auth()->user()->can('banner-view') or auth()->user()->can('banner-add') or auth()->user()->can('banner-edit') or auth()->user()->can('banner-delete'))
                    <li>
                        <a href="{{route('banner.index')}}" class="waves-effect" ><span> Banner </span></a>
                    </li>
                    @endif
                    
                    <li>
                        <a href="{{route('categorytag.index')}}" class="waves-effect" ><span> Category Tag </span></a>
                    </li>

                    @if(auth()->user()->can('banner-view') or auth()->user()->can('advertisement-add') or auth()->user()->can('advertisement-edit') or auth()->user()->can('advertisement-delete'))
                    <li>
                        <a href="{{route('advertisement.index')}}" class="waves-effect" ><span> Advertisement </span></a>
                    </li>
                    @endif

                    @if(auth()->user()->can('banner-view') or auth()->user()->can('youtube-add') or auth()->user()->can('youtube-edit') or auth()->user()->can('youtube-delete'))
                    <li>
                        <a href="{{route('youtube.index')}}" class="waves-effect" ><span> youtube </span></a>
                    </li>
                    @endif

                {{--<li>
                    <a href="{{url('view_feedback')}}" class="waves-effect" ><span> Client Feedbacks </span></a>
                </li> --}}


                {{-- <li>
                    <a href="{{url('view_hotoffer')}}" class="waves-effect" ><span>Hot offer </span></a>
                </li> --}}



                {{-- <li>
                    <a href="{{route('promo.index')}}" class="waves-effect"><span> Promo </span></a>
                </li> --}}

                <li class="has_sub">
                    @if(auth()->user()->can('homepage-sorting') or auth()->user()->can('headerpage-sorting'))
                    <a href="javascript:" class="waves-effect"><i class="fa fa-cubes"></i><span>  Category Sorting</span> <span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="list-unstyled">
                                <li>
                                    @if(auth()->user()->can('homepage-sorting'))
                                    <a href="{{url('category_sorting/homepage')}}">Homepage Sorting</a>
                                    @endif
                                    @if(auth()->user()->can('headerpage-sorting') )
                                    <a href="{{url('category_sorting/headerpage')}}">Headerpage Sorting</a>
                                    @endif
                                </li>
                            </ul>
                    @endif
                        </li>
                    </ul>
                </li>
        </li>
        @endif

        @if(auth()->user()->can('category-view') or auth()->user()->can('category-add') or auth()->user()->can('category-edit') or auth()->user()->can('category-delete') or auth()->user()->can('products-view') or auth()->user()->can('products-add') or auth()->user()->can('products-edit') or auth()->user()->can('products-delete')or auth()->user()->can('tax-view') or auth()->user()->can('tax-add') or auth()->user()->can('tax-edit') or auth()->user()->can('tax-delete') or auth()->user()->can('product_review-view') or auth()->user()->can('product_review-edit'))

            <li class="has_sub">
                <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-product-hunt"></i><span>  Catalogs</span> <span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                <ul class="list-unstyled">

                    @if(auth()->user()->can('category-view') or auth()->user()->can('category-add') or auth()->user()->can('category-edit') or auth()->user()->can('category-delete'))
                    <li>
                        <a href="{{route('category.index')}}">Categories</a>
                    </li>
                    @endif
                 <!-- <li>
                        <a href="{{url('category_sorting')}}">Categories Sorting</a>
                    </li> -->
                    <!-- <li>

                        {{-- <a href="{{route('brand.index')}}">Manufacturers</a> --}}

                    </li> 
                    
                     <li>

                        <a href="{{route('attribute.index')}}">Attributes</a>

                    </li>
                     -->
                    @if(auth()->user()->can('tax-view') or auth()->user()->can('tax-add') or auth()->user()->can('tax-edit') or auth()->user()->can('tax-delete'))
                    <li>

                        <a href="{{route('tax.index')}}">Tax</a>

                    </li>
                    @endif
                    
                    
                    <li>

                        <a href="{{route('shippingchargesedit')}}">Shipping Info</a>

                    </li>
                    
                    @if(auth()->user()->can('products-view') or auth()->user()->can('products-add') or auth()->user()->can('products-edit') or auth()->user()->can('products-delete'))
                    <li>

                        <a href="{{route('product.index')}}">Products</a>

                    </li>
                    @endif
                    @if(auth()->user()->can('product_review-view') or auth()->user()->can('product_review-edit'))
                    <!--<li>-->

                    <!--    <a href="{{route('product.riviewes')}}">Product Reviews</a>-->

                    <!--</li>-->
                    @endif
                     @if(auth()->user()->can('product_review-view') or auth()->user()->can('product_review-edit'))
                    <li>

                        <a href="{{route('client.riviewes')}}">Client Feedback</a>

                    </li>
                    @endif


                </ul>
            </li>
        @endif




            {{-- <li class="has_sub">
                <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-users"></i><span>Vendors</span> <span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                <ul class="list-unstyled">
                    <li>
                    <a href="{{ route('vendors.index') }}">Vendor</a>
                    </li>
                </ul>
            </li> --}}




            {{-- <li class="has_sub">
                <a href="javascript:void(0);" class="waves-effect"><i class="fa fa fa-object-ungroup"></i><span>Stock</span> <span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                <ul class="list-unstyled">

                <li>

                        <a href="{{ route('warehouse.index') }}">Warehouse</a>

                    </li>
                <li>

                        <a href="{{ route('suppliers.index') }}">Suppliers</a>


                    </li>
                </ul>
                </li> --}}




            {{-- <li class="has_sub">
                <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-shopping-cart"></i><span>Purchase</span> <span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                <ul class="list-unstyled">

                    <li>
                        @can('Vendor Item List')
                        <a href="{{ route('vendoritem.index') }}">Vendor Items</a>
                        @endcan
                    </li>
                    <li>
                        @can('Purchase List')
                        <a href="{{ route('purchase.index') }}">Purchase Request</a>
                        @endcan
                    </li>
                    <li>
                        @can('Quotation List')
                        <a href="{{ route('quotation.index') }}">Quotations</a>
                        @endcan
                    </li>
                    <li>
                        @can('Purchase Order List')
                        <a href="{{ route('purchaseorder.index') }}">Purchase Order</a>
                        @endcan
                    </li>
                    <li>
                        @can('Invoice List')
                        <a href="{{ route('invoice.index') }}">Invoices</a>
                        @endcan
                    </li>
                </ul>
            </li> --}}

            @if(auth()->user()->can('inventory-view'))
            <li class="has_sub">

                <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-yelp"></i><span>Inventory</span> <span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>

                <ul class="list-unstyled">
                    <li>

                        <a href="{{ route('product.listproduct') }}">List Products</a>

                    </li>
                    
                     <li>
                    <a href="{{ route('product.stockoutproduct') }}">Stockout</a>
                    </li>

                    <li>
                    <a href="{{ route('product.inactiveproduct') }}">In Active Products</a>
                    </li>


                </ul>
            </li>
            @endif
        @if(auth()->user()->can('all_orders-view')  or auth()->user()->can('all_orders-edit') or auth()->user()->can('recieved_orders-view') or auth()->user()->can('recieved_orders-edit') or auth()->user()->can('confirmed_orders-view') or auth()->user()->can('confirmed_orders-add') or auth()->user()->can('processing_orders-view') or auth()->user()->can('processing_orders-edit') )
            <li class="has_sub">
                <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-first-order"></i><span>  Orders</span> <span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                <ul class="list-unstyled">
                    
                    @if(auth()->user()->can('all_orders-view')  or auth()->user()->can('all_orders-edit'))
                        <li>
                            <a href="{{ route('order.index') }}">
                                <?php
                                $owners = \App\Models\Order::where('status','processing')->count();
                                ?>
                                All Orders 
                                <span class="badge badge-warning">{{$owners}}</span>
                                
                                </a>
                        </li>
                        <li>
                              <a href="{{ url('order_search/paid') }}">
                                  
                                  <?php
                                $owners = \App\Models\Order::where('payment_status','paid')->where('status','!=','Delivered')->count();
                                ?>
                                  Paid Orders
                                    <span class="badge badge-warning">{{$owners}}</span>
                                  </a>
                        </li>
                        
                          <li>
                              <a href="{{ url('order_search/unpaid') }}">
                                  
                                  <?php
                                $owners = \App\Models\Order::where('payment_status','!=','paid')->count();
                                ?>
                                  Unpaid Orders
                                    <span class="badge badge-warning">{{$owners}}</span>
                                  </a>
                        </li>
                        
                       
                    @endif
                    <!-----
                    @if(auth()->user()->can('recieved_orders-view') or auth()->user()->can('recieved_orders-edit'))
                        <li>

                            <a href="{{ route('pending') }}">Received Orders</a>

                        </li>
                    @endif
                    @if(auth()->user()->can('confirmed_orders-view') or auth()->user()->can('confirmed_orders-add') or auth()->user()->can('confirmed_orders-edit') or auth()->user()->can('confirmed_orders-delete'))
                    <li>

                        <a href="{{ route('confirmed') }}">Confirmed Orders</a>
                    </li>
                    @endif
                    
                    ---->
                    
                    @if(auth()->user()->can('processing_orders-view') or auth()->user()->can('processing_orders-edit'))
                    <li>

                        <a href="{{ route('progress') }}">Unfullied Orders </a>

                    </li>
                    @endif
                    @if(auth()->user()->can('delivered_orders-view') or auth()->user()->can('delivered_orders-edit'))
                    <li>

                        <a href="{{ route('deliver') }}">Dispatched Orders</a>

                    </li>
                    @endif
                    <!----
                    <li>

                        <a href="{{ route('cancel') }}">Cancelled  Orders</a>

                    </li>
                   
                     <li>

                        <a href="{{ route('return') }}">Returned Orders</a>

                    </li>
                    ----->


                    {{-- <li>

                        <a href="{{ route('cod') }}">COD Orders</a>

                    </li> --}}

                </ul>
            </li>
        @endif


                {{-- <li>

                <a href="{{route('transactions')}}" class="waves-effect"><i class="fa fa-random"></i><span> Transactions </span></a>

                </li> --}}



            {{-- <li class="has_sub">
                <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-newspaper-o"></i><span> Payments </span> <span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                <ul class="list-unstyled">

                    <li>
                    @can('Payment Method Create')
                    <a href="{{route('payment-method')}}">Payment Method</a>
                    @endcan
                    </li>
                    <li>
                        @can('Payments List')
                        <a href="{{route('allPayments')}}">All Payments</a>
                        @endcan
                    </li>
                    <li>
                        @can('Pending Payments List')
                        <a href="{{route('payment_pending')}}">Pending Payments</a>
                        @endcan
                    </li>
                    <li>
                        @can('Approved Payments List')
                        <a href="{{route('Approved_Payments')}}">Approved Payments</a>
                        @endcan
                    </li>
                </ul>
            </li> --}}


            @if(auth()->user()->can('coupon-view') or auth()->user()->can('coupon-add') or auth()->user()->can('coupon-edit') or auth()->user()->can('coupon-delete'))
            <li class="has_sub">
                <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-gift"></i><span>  Coupon</span> <span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                <ul class="list-unstyled">
                 @if(auth()->user()->can('coupon-add'))
                    <li>
                        <a href="{{route('coupon.create')}}">Add Coupon</a>
                    </li>
                 @endif
                 @if(auth()->user()->can('coupon-view'))
                    <li>
                        <a href="{{route('coupon.index')}}">View Coupon</a>
                    </li>
                 @endif
                </ul>
            </li>
            @endif

            <!-- <li class="has_sub">
                <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-list-alt"></i><span> Suborders Category</span> <span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                <ul class="list-unstyled">

                    <li>
                        {{-- @can('Coupon create') --}}
                        {{-- <a href="{{route('suborders.suborders')}}">Suborders</a> --}}
                        {{-- @endcan --}}
                    </li>


                </ul>
            </li> -->
{{--
            <li>
                <a href="shipping.html" class="waves-effect"><i class="fa fa-ship"></i><span> Shipping

                </span></a>
            </li> --}}





            {{-- <li class="has_sub"> --}}

                {{-- <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-file"></i><span> Reports </span> <span
                        class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a> --}}
                {{-- <ul class="list-unstyled">
                     <li>
                        @can('Visitors List')
                        <a href="{{route('visitors')}}">Visitors</a>
                        @endcan
                    </li>
                    <li>
                        @can('Sales Report List')
                        <a href="{{ route('report.index') }}">Sales Report</a>
                        @endcan
                    </li>
                    <li>
                       @can('Product Sales Report List')
                        <a href="{{ route('report.productsalesreport') }}">Product Sales Report</a>
                        @endcan
                    </li>
                    <li>
                        @can('Product Purchase Report List')
                        <a href="{{ route('report.productpurchasereport') }}">Product Purchase Report</a>
                        @endcan
                    </li>
                    <li>
                        @can('Product Stock Report List')
                        <a href="{{ route('report.productstockreport') }}">Product Stock Report</a>
                        @endcan
                    </li>

                    <li>
                       @can('Expense Report List')
                        <a href="{{ route('report.expensereport') }}">Expense Report</a>
                        @endcan
                    </li>
                </ul> --}}
            {{-- </li> --}}






        @if(auth()->user()->can('user-view') or auth()->user()->can('user-add') or auth()->user()->can('user-edit') or auth()->user()->can('user-delete') or auth()->user()->can('customer-view') or auth()->user()->can('customer-add') or auth()->user()->can('customer-edit') or auth()->user()->can('customer-delete') )

            <li class="has_sub">
                <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-user"></i><span> Admin</span> <span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                <ul class="list-unstyled">

                    <li>
                        {{-- @can('User List') --}}
                        {{-- <a href="{{route('user.index')}}">User</a> --}}
                        {{-- @endcan --}}
                    </li>



                    @if(auth()->user()->can('user-view') or auth()->user()->can('user-add') or auth()->user()->can('user-edit') or auth()->user()->can('user-delete'))
                     <li>
                        <a href="{{url('user_view')}}">Users</a>
                    </li>
                    @endif
                    @if(auth()->user()->can('customer-view'))
                    <li>
                        <a href="{{route('customer.list')}}">Customers</a>
                    </li>
                    @endif

                </ul>
            </li>
        @endif

        @if(auth()->user()->can('role-view') or auth()->user()->can('role-add') or auth()->user()->can('role-edit') or auth()->user()->can('role-delete'))
            <li>
                <a href="{{url('roleview')}}" class="waves-effect">
                    <i class="dripicons-user"></i>
                    <span> Role <span class="badge badge-success badge-pill float-right"></span></span>
                </a>
            </li>
        @endif








{{--
            <li class="has_sub">
                <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-cog"></i><span> Role</span> <span

                        class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                <ul class="list-unstyled">
                     <li>
                        @can('permission group list')
                            <a href="{{route('permission_group.index')}}" class="waves-effect"><i class="fa fa-cubes"></i><span> Permission Group   </span></a>

                        @endcan
                    </li>
                    <li>
                        @can('permission list')
                            <a href="{{route('permission.index')}}" class="waves-effect"><i class="fa fa-cubes"></i><span> Permission </span></a>

                         @endcan
                    </li>

                    <li>
                        @can('Role List')

                        @endcan
                    </li>
                    <li>
                        @can('Assign User Role List')
                            <a href="{{route('Assign_role_user.index')}}" class="waves-effect"><i class="fa fa-cubes"></i><span> Assigned User Role  </span></a>
                        @endcan

                    </li>

                </ul>
            </li> --}}




            {{-- <li class="has_sub">
                <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-cog"></i><span> Settings</span> <span

                    class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                <ul class="list-unstyled">

                     <li>
                        @can('Permission Group List')
                            <a href="{{route('permission_group.index')}}" class="waves-effect"><span> Permission Group   </span></a>

                        @endcan
                    </li>
                    <li>
                        @can('Permission List')
                            <a href="{{route('permission.index')}}" class="waves-effect"><span> Permission </span></a>

                         @endcan
                    </li>
                <li>
                @can('Role List')

                @endcan

            </li> --}}


            {{-- <li>

                @can('Assign User Role List')
                    <a href="{{route('Assign_role_user.index')}}" class="waves-effect">Assigned User Role</a>
                @endcan

            </li> --}}

            {{-- <li>
                @can('System Setting')
                    <a href="{{route('user.edit',Auth::user()->roles[0]->id)}}" class="waves-effect">System Settings</a>
                @endcan

            </li> --}}
                {{-- <li >
                    <a href="javascript:void(0);"><span>Site Settings</span><span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="sub-menu">


                    <li>
                        @can('About Us List')
                        <a href="{{route('about.index')}}">About Us</a>
                        @endcan
                    </li>
                    <li>
                        @can('Privacy List')
                        <a href="{{route('privacy.index')}}">Privacy & Policy</a>
                        @endcan
                    </li>
                    <li>
                        @can('Terms List')
                        <a href="{{route('terms.index')}}">Terms</a>
                        @endcan
                    </li>
                    <li>
                        @can('FAQS List')
                        <a href="{{route('faqs.index')}}">Faqs</a>
                        @endcan
                    </li>
                    <li>
                        @can('Contact List')
                        <a href="{{route('contact.index')}}">Contact</a>
                        @endcan
                    </li>
                    <li>
                        @can('Blog List')
                        <a href="{{route('blog.index')}}">Blog</a>
                        @endcan
                    </li>
                    <li>
                        @can('Delivery List')
                        <a href="{{route('delivery.index')}}">Delivery</a>
                        @endcan
                    </li>
                    </ul>
                </li>

                    @can('Enquiry List')
                    <li><a href="{{route('contactlist.index')}}">Enquiry List</a></li>
                    @endcan

                </ul>
            </li> --}}


            {{-- @if(auth()->user()->can('role-view') or auth()->user()->can('role-add') or auth()->user()->can('role-edit') or auth()->user()->can('role-delete'))
            <li>
                <a href="{{url('roleview')}}" class="waves-effect">
                    <i class="dripicons-user"></i>
                    <span> Role <span class="badge badge-success badge-pill float-right"></span></span>
                </a>
            </li>
            @endif --}}


            {{-- <li>
                <a href="{{url('rolepermissionview')}}" class="waves-effect">
                    <i class="dripicons-briefcase"></i>
                    <span> Permission <span class="badge badge-success badge-pill float-right"></span></span>
                </a>
            </li> --}}






        </ul>
    </div>
    <div class="clearfix"></div>
</div> <!-- end sidebarinner -->
</div>