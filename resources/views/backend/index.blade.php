@extends('backend.layouts.master')

@section('content')


<div class="page-content-wrapper ">

    <div class="container-fluid">

        <div class="row">
            <div class="col-sm-12">
                <div class="float-right page-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Ecommerce</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
                <h5 class="page-title">Dashboard</h5>
            </div>
        </div>
        <!-- end row -->

        <div class="row">



<!--@if(auth()->user()->can('Offer Banner Edit') or auth()->user()->can('Offer Banner Delete') or auth()->user()->can('Offer Banner View') or auth()->user()->can('Offer Banner Create'))-->
<!--<div class="col-xl-3 col-md-6">-->

<!--                <div class="card mini-stat m-b-30">-->
<!--                    <div class="p-3 bg-primary text-white">-->
<!--                        <div class="mini-stat-icon">-->
<!--                            <i class="mdi mdi-cube-outline float-right mb-0"></i>-->
<!--                        </div>-->
<!--                        <h6 class="text-uppercase mb-0">Offer Banner</h6>-->
<!--                    </div>-->
<!--                    <div class="card-body">-->
<!--                        <div class="border-bottom pb-4">-->
<!--                            <span class="badge badge-success"> +11% </span> <span class="ml-2 text-muted">From previous period</span>-->

<!--                        </div>-->
<!--                        <div class="mt-4 text-muted">-->
<!--                            <div class="float-right">-->
                                <!-- <p class="m-0">Last : 1325</p> -->
<!--                            </div>-->
<!--                            <h5 class="m-0">{{\App\Models\Deals::count()}}<i class="mdi mdi-arrow-up text-success ml-2"></i></h5>-->


<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--@endif-->

<!--@if(auth()->user()->can('Banner Edit') or auth()->user()->can('Banner Delete') or auth()->user()->can('Banner View') or auth()->user()->can('Banner Create'))-->
<!--<div class="col-xl-3 col-md-6">-->

<!--                <div class="card mini-stat m-b-30">-->
<!--                    <div class="p-3 bg-primary text-white">-->
<!--                        <div class="mini-stat-icon">-->
<!--                            <i class="mdi mdi-cube-outline float-right mb-0"></i>-->
<!--                        </div>-->
<!--                        <h6 class="text-uppercase mb-0">Banner</h6>-->
<!--                    </div>-->
<!--                    <div class="card-body">-->
<!--                        <div class="border-bottom pb-4">-->
<!--                            <span class="badge badge-success"> +11% </span> <span class="ml-2 text-muted">From previous period</span>-->

<!--                        </div>-->
<!--                        <div class="mt-4 text-muted">-->
<!--                            <div class="float-right">-->
                                <!-- <p class="m-0">Last : 1325</p> -->
<!--                            </div>-->
<!--                            <h5 class="m-0">{{\App\Models\Banner::count()}}<i class="mdi mdi-arrow-up text-success ml-2"></i></h5>-->


<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--@endif-->

<!-- @if(auth()->user()->can('Client Feedback Edit') or auth()->user()->can('Client Feedback Delete') or auth()->user()->can('Client Feedback View') or auth()->user()->can('Client Feedback Create'))-->
<!--<div class="col-xl-3 col-md-6">-->

<!--                <div class="card mini-stat m-b-30">-->
<!--                    <div class="p-3 bg-primary text-white">-->
<!--                        <div class="mini-stat-icon">-->
<!--                            <i class="mdi mdi-cube-outline float-right mb-0"></i>-->
<!--                        </div>-->
<!--                        <h6 class="text-uppercase mb-0">Client Feedback</h6>-->
<!--                    </div>-->
<!--                    <div class="card-body">-->
<!--                        <div class="border-bottom pb-4">-->
<!--                            <span class="badge badge-success"> +11% </span> <span class="ml-2 text-muted">From previous period</span>-->

<!--                        </div>-->
<!--                        <div class="mt-4 text-muted">-->
<!--                            <div class="float-right">-->
                                <!-- <p class="m-0">Last : 1325</p> -->
<!--                            </div>-->
<!--                            <h5 class="m-0">{{\App\Models\Clientfeedback::count()}}<i class="mdi mdi-arrow-up text-success ml-2"></i></h5>-->


<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--@endif-->

<!--            @if(auth()->user()->can('Hot Offer Edit') or auth()->user()->can('Hot Offer Delete') or auth()->user()->can('Hot Offer View') or auth()->user()->can('Hot Offer Create'))-->
<!--<div class="col-xl-3 col-md-6">-->

<!--                <div class="card mini-stat m-b-30">-->
<!--                    <div class="p-3 bg-primary text-white">-->
<!--                        <div class="mini-stat-icon">-->
<!--                            <i class="mdi mdi-cube-outline float-right mb-0"></i>-->
<!--                        </div>-->
<!--                        <h6 class="text-uppercase mb-0">Hot Offer</h6>-->
<!--                    </div>-->
<!--                    <div class="card-body">-->
<!--                        <div class="border-bottom pb-4">-->
<!--                            <span class="badge badge-success"> +11% </span> <span class="ml-2 text-muted">From previous period</span>-->

<!--                        </div>-->
<!--                        <div class="mt-4 text-muted">-->
<!--                            <div class="float-right">-->
                                <!-- <p class="m-0">Last : 1325</p> -->
<!--                            </div>-->
<!--                            <h5 class="m-0">{{\App\Models\Hotoffer::count()}}<i class="mdi mdi-arrow-up text-success ml-2"></i></h5>-->


<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--@endif-->
     @if(auth()->user()->can('all_orders-view') or auth()->user()->can('all_orders-edit'))
            <div class="col-xl-3 col-md-6">
                <div class="card mini-stat m-b-30">
                    <div class="p-3 bg-primary text-white">
                        <div class="mini-stat-icon">
                            <i class="mdi mdi-cube-outline float-right mb-0"></i>
                        </div>
                        <h6 class="text-uppercase mb-0">Total Orders</h6>
                    </div>
                    <div class="card-body">
                        <div class="border-bottom pb-4">
                            <span class="badge badge-success"> +11% </span> <span class="ml-2 text-muted">From previous period</span>

                        </div>
                        <div class="mt-4 text-muted">
                            <div class="float-right">
                                <!-- <p class="m-0">Last : 1325</p> -->
                            </div>
                            <h5 class="m-0">{{\App\Models\Order::where('payment_status','paid')->count()}}<i class="mdi mdi-arrow-up text-success ml-2"></i></h5>

                        </div>
                    </div>
                </div>
            </div>
            @endif
                  @if(auth()->user()->can('all_orders-view') or auth()->user()->can('all_orders-edit'))
            <div class="col-xl-3 col-md-6">
                <div class="card mini-stat m-b-30">
                    <div class="p-3 bg-primary text-white">
                        <div class="mini-stat-icon">
                            <i class="mdi mdi-account-network float-right mb-0"></i>
                        </div>
                        <h6 class="text-uppercase mb-0">Today New Orders</h6>
                    </div>
                    <div class="card-body">
                        <div class="border-bottom pb-4">
                                <span class="badge badge-success"> +22% </span> <span class="ml-2 text-muted">From previous period</span>

                        </div>
                        <div class="mt-4 text-muted">
                            <div class="float-right">
                                <!-- <p class="m-0">Last : 3426</p> -->
                            </div>
                            <h5 class="m-0">{{\App\Models\Order::where('created_at','like','%'.date('Y-m-d').'%')->where('payment_status','paid')->count()}}<i class="mdi mdi-arrow-up text-success ml-2"></i></h5>

                        </div>
                    </div>
                </div>
            </div>
            @endif
            
                                @if(auth()->user()->can('products-edit') or auth()->user()->can('products-delete') or auth()->user()->can('products-view') or auth()->user()->can('products-add'))
            <div class="col-xl-3 col-md-6">
                <div class="card mini-stat m-b-30">
                    <div class="p-3 bg-primary text-white">
                        <div class="mini-stat-icon">
                            <i class="mdi mdi-tag-text-outline float-right mb-0"></i>
                        </div>
                        <h6 class="text-uppercase mb-0">Total Products</h6>
                    </div>
                    <div class="card-body">
                        <div class="border-bottom pb-4">
                            <span class="badge badge-success"> -02% </span> <span class="ml-2 text-muted">From previous period</span>
                        </div>
                        <div class="mt-4 text-muted">
                            <div class="float-right">
                                <!-- <p class="m-0">Last : 12    58</p> -->

                            </div>
                            <h5 class="m-0">{{\App\Models\Product::count()}}<i class="mdi mdi-arrow-up text-success ml-2"></i></h5>

                        </div>
                    </div>
                </div>
            </div>
            @endif
                  @if(auth()->user()->can('customer-view'))    
            <div class="col-xl-3 col-md-6">
                <div class="card mini-stat m-b-30">
                    <div class="p-3 bg-primary text-white">
                        <div class="mini-stat-icon">
                            <i class="mdi mdi-cube-outline float-right mb-0"></i>
                        </div>
                        <h6 class="text-uppercase mb-0">Total Customers</h6>
                    </div>
                    <div class="card-body">
                        <div class="border-bottom pb-4">
                            <span class="badge badge-success"> +11% </span> <span class="ml-2 text-muted">From previous period</span>

                        </div>
                        <div class="mt-4 text-muted">
                            <div class="float-right">
                                <!-- <p class="m-0">Last : 1325</p> -->
                            </div>
                            <h5 class="m-0">{{\App\Models\User::where('role','customer')->count()}}<i class="mdi mdi-arrow-up text-success ml-2"></i></h5>

                        </div>
                    </div>
                </div>
            </div>
            @endif
         
        </div>
        <!-- end row -->

        <!-- next row -->

        <div class="row">
                          
              @if(auth()->user()->can('category-edit') or auth()->user()->can('category-delete') or auth()->user()->can('category-view') or auth()->user()->can('category-add'))
            <div class="col-xl-3 col-md-6">
                <div class="card mini-stat m-b-30">
                    <div class="p-3 bg-primary text-white">
                        <div class="mini-stat-icon">
                            <i class="mdi mdi-account-network float-right mb-0"></i>
                        </div>
                        <h6 class="text-uppercase mb-0">Total Categories</h6>
                    </div>
                    <div class="card-body">
                        <div class="border-bottom pb-4">
                                <span class="badge badge-success"> +22% </span> <span class="ml-2 text-muted">From previous period</span>

                        </div>
                        <div class="mt-4 text-muted">
                            <div class="float-right">
                                <!-- <p class="m-0">Last : 3426</p> -->
                            </div>
                          
                            <h5 class="m-0">{{\App\Models\Category::where('parent_id',null)->count()}}<i class="mdi mdi-arrow-up text-success ml-2"></i></h5>


                        </div>
                    </div>
                </div>
            </div>
            @endif
            
              @if(auth()->user()->can('all_orders-view') or auth()->user()->can('all_orders-edit'))
             <div class="col-xl-3 col-md-6">
                <div class="card mini-stat m-b-30">
                    <div class="p-3 bg-primary text-white">
                        <div class="mini-stat-icon">
                            <i class="mdi mdi-cube-outline float-right mb-0"></i>
                        </div>
                        <h6 class="text-uppercase mb-0">Dispatched Orders</h6>
                    </div>
                    <div class="card-body">
                        <div class="border-bottom pb-4">
                            <span class="badge badge-success"> +11% </span> <span class="ml-2 text-muted">From previous period</span>

                        </div>
                        <div class="mt-4 text-muted">
                            <div class="float-right">
                                <!-- <p class="m-0">Last : 1325</p> -->
                            </div>
                            <h5 class="m-0">{{\App\Models\Order::where('status','Delivered')->count()}}<i class="mdi mdi-arrow-up text-success ml-2"></i></h5>

                        </div>
                    </div>
                </div>
            </div>
            @endif
            
              @if(auth()->user()->can('all_orders-view') or auth()->user()->can('all_orders-edit'))
             <div class="col-xl-3 col-md-6">
                <div class="card mini-stat m-b-30">
                    <div class="p-3 bg-primary text-white">
                        <div class="mini-stat-icon">
                            <i class="mdi mdi-cube-outline float-right mb-0"></i>
                        </div>
                        <h6 class="text-uppercase mb-0">Today Dispatched Orders</h6>
                    </div>
                    <div class="card-body">
                        <div class="border-bottom pb-4">
                            <span class="badge badge-success"> +11% </span> <span class="ml-2 text-muted">From previous period</span>

                        </div>
                        <div class="mt-4 text-muted">
                            <div class="float-right">
                                <!-- <p class="m-0">Last : 1325</p> -->
                            </div>
                            <h5 class="m-0">{{\App\Models\Order::where('created_at','like','%'.date('Y-m-d').'%')->where('status','Delivered')->count()}}<i class="mdi mdi-arrow-up text-success ml-2"></i></h5>

                        </div>
                    </div>
                </div>
            </div>
            @endif
             
            
             @if(auth()->user()->can('all_orders-view') or auth()->user()->can('all_orders-edit'))
             <div class="col-xl-3 col-md-6">
                <div class="card mini-stat m-b-30">
                    <div class="p-3 bg-primary text-white">
                        <div class="mini-stat-icon">
                            <i class="mdi mdi-cube-outline float-right mb-0"></i>
                        </div>
                        <h6 class="text-uppercase mb-0">Total Sales</h6>
                    </div>
                    <div class="card-body">
                        <div class="border-bottom pb-4">
                            <span class="badge badge-success"> +11% </span> <span class="ml-2 text-muted">From previous period</span>

                        </div>
                        <div class="mt-4 text-muted">
                            <div class="float-right">
                                <!-- <p class="m-0">Last : 1325</p> -->
                            </div>
                            <h5 class="m-0">₹ {{number_format(number_format(\App\Models\Order::where('status','Delivered')->sum('total'),2,'.',''))}}<i class="mdi mdi-arrow-up text-success ml-2"></i></h5>

                        </div>
                    </div>
                </div>
            </div>
            @endif
            @if(auth()->user()->can('all_orders-view') or auth()->user()->can('all_orders-edit'))
             <div class="col-xl-3 col-md-6">
                <div class="card mini-stat m-b-30">
                    <div class="p-3 bg-primary text-white">
                        <div class="mini-stat-icon">
                            <i class="mdi mdi-cube-outline float-right mb-0"></i>
                        </div>
                        <h6 class="text-uppercase mb-0">Today Sales</h6>
                    </div>
                    <div class="card-body">
                        <div class="border-bottom pb-4">
                            <span class="badge badge-success"> +11% </span> <span class="ml-2 text-muted">From previous period</span>

                        </div>
                        <div class="mt-4 text-muted">
                            <div class="float-right">
                                <!-- <p class="m-0">Last : 1325</p> -->
                            </div>
                            <h5 class="m-0">₹ {{number_format(number_format(\App\Models\Order::where('status','Delivered')->where('created_at','like','%'.date('Y-m-d').'%')->sum('total'),2,'.',''))}}<i class="mdi mdi-arrow-up text-success ml-2"></i></h5>

                        </div>
                    </div>
                </div>
            </div>
            @endif
            <!-- Sales -->
            
            @if(auth()->user()->can('all_orders-view') or auth()->user()->can('all_orders-edit'))
             <div class="col-xl-3 col-md-6">
                <div class="card mini-stat m-b-30">
                    <div class="p-3 bg-primary text-white">
                        <div class="mini-stat-icon">
                            <i class="mdi mdi-cube-outline float-right mb-0"></i>
                        </div>
                        <h6 class="text-uppercase mb-0">Total Cart Customer</h6>
                    </div>
                    <div class="card-body">
                        <div class="border-bottom pb-4">
                            <span class="badge badge-success"> +1% </span> <span class="ml-2 text-muted">From previous period</span>

                        </div>
                        <div class="mt-4 text-muted">
                            <div class="float-right">
                                <!-- <p class="m-0">Last : 1325</p> -->
                            </div>
                             <h5 class="m-0">{{count(\App\Models\CartTable::where('status','active')->select(DB::raw('count(*) as num'))->groupBy('customer_id')->get())}}<i class="mdi mdi-arrow-up text-success ml-2"></i></h5>

                        </div>
                    </div>
                </div>
            </div>
            @endif
         <!-- Cart -->
          @if(auth()->user()->can('all_orders-view') or auth()->user()->can('all_orders-edit'))
             <div class="col-xl-3 col-md-6">
                <div class="card mini-stat m-b-30">
                    <div class="p-3 bg-primary text-white">
                        <div class="mini-stat-icon">
                            <i class="mdi mdi-cube-outline float-right mb-0"></i>
                        </div>
                        <h6 class="text-uppercase mb-0">Total Unfullied Orders</h6>
                    </div>
                    <div class="card-body">
                        <div class="border-bottom pb-4">
                            <span class="badge badge-success"> +1% </span> <span class="ml-2 text-muted">From previous period</span>

                        </div>
                        <div class="mt-4 text-muted">
                            <div class="float-right">
                                <!-- <p class="m-0">Last : 1325</p> -->
                            </div>
                             <h5 class="m-0">{{\App\Models\Order::where('status','Processing')->count()}}<i class="mdi mdi-arrow-up text-success ml-2"></i></h5>

                        </div>
                    </div>
                </div>
            </div>
            @endif
         <!-- Cart -->
        </div>

        <!-- next row end -->


          @if(auth()->user()->can('all_orders-view') or auth()->user()->can('all_orders-edit'))
        <div class="row">
            <div class="col-xl-12">
                <div class="card m-b-30">
                    <div class="card-body">
                        <h4 class="mt-0 header-title mb-4">Recent Orders</h4>
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead>
                                    <tr>
                                        <th>S No</th>
                                        <th>Customer Name</th>
                                        <th>Order Transaction ID</th>
                                        <th>Payment Method</th>
                                        <th>Total Price</th>

                                    </tr>

                                </thead>
                                <tbody>

                                    @foreach($orders as $key=>$data)
                                    @php
                                    $customer=DB::table('users')->where('id',$data->customer_id)->first();

                                    @endphp
                                     <?php 
                                     $billing_address= DB::table('billing_address')->where('order_id', $data->id)->first();
                                     $fullname ='';
                                    if(!empty($billing_address)){
                                        $fullname = $billing_address->first_name.' '.$billing_address->last_name;
                                    }
                                    $phone ='';
                                    if(!empty($billing_address)){
                                        $phone = $billing_address->phone_number;
                                    }
                                   
                                    ?>
                                    <tr>
                                        <td>{{$key+1}}</td>
                                        <td>{{ $fullname }}</td>
                                        <td>{{ $data->order_id }}</td>
                                        <td>{{ $data->payment_type }}</td>
                                        <td>₹{{$data->total }}</td>

                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
    </div><!-- container fluid -->

</div> <!-- Page content Wrapper -->

@endsection
