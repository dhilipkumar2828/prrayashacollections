@extends('backend.layouts.master')


@section('content')

    <div class="page-content-wrapper ">

        <div class="container-fluid">

            <div class="row">
                <div class="col-sm-12">
                    <div class="float-right page-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('admin')}}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{route('attribute.index')}}">Attribute</a></li>
                            <li class="breadcrumb-item active">Edit Attribute</li>
                        </ol>
                    </div>
                    <h5 class="page-title">Edit Attribute</h5>

                </div>
            </div>
            <div class="card m-b-30 card-body">
                <h4 class="card-title font-20 mt-0">Edit Attribute</h4>
                <a href="{{route('attribute.index')}}" id="add-btn" style="color: #ffffff;"><i class="fa fa-angle-left"
                        aria-hidden="true"></i> Back</a>

            </div>
            <div class="row">
                <div class="col-md-12">
                    @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error )
                            <li>
                                {{$error}}
                            </li>

                            @endforeach
                        </ul>
                    </div>
                    @endif

                    @include('backend.layouts.notification')
                </div>
                {{-- <div class="col-12">
                    <div class="card m-b-30">
                        <div class="card-body">
                            <form action="{{route('attribute.store')}}" method="post">
                                @csrf
                                <div class="form-group row">
                                    <label for="status" class="col-sm-2 col-form-label">Category Name</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name='cat_id' id="cat_id">
                                            <option>--Category Name--</option>
                                            @foreach (\App\Models\Category::where('is_parent',1)->get() as $cate)
                                                <option value="{{$cate->id}}">{{$cate->title}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row d-none" id="child_cat_div">
                                    <label for="status" class="col-sm-2 col-form-label">  Child Category Name</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name='chil_cat_id' id="chil_cat_id">

                                        </select>
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Name</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" placeholder="Enter Name"
                                            id="example-text-input" name="name" value="{{ old('name') }}">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Value</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" placeholder="Enter Name"
                                            id="example-text-input" name="size" value="{{ old('size') }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                <div class="d-flex">
                                    <button class="btn btn-primary" type="submit">Submit</button>&nbsp;
                                    <!-- <button class="btn btn-secondary" type="submit">Cancel</button> -->
                                </div>
                </div>
                            </form>
                        </div>
                    </div>
                </div> <!-- end col --> --}}
            </div> <!-- end row -->
        </div><!-- container fluid -->

    </div> <!-- Page content Wrapper -->




    <div class="row">
        <div class="col-12">
            <div class="card m-b-30">
                <form action="{{route('attribute.update',$attribute->id)}}" method="POST">
                    @csrf
                    @method('patch')
                    <div id="attribute" class="content"data-mfield-options='{"section": ".group","btnAdd":"#btnAdd-1","btnRemove":".btnRemove"}'>
                      
                        <div class=" container-fluid row group">
                       
                            <div class="col-sm-6">
                            <label for="">Attribute Type</label>
                            <input class="form-control " name="attribute_type" value="{{$attribute->attribute_type}}" type="text">
                            </div>
                            <div class="col-sm-6">
                            <label for="">Attribute Value</label>
                            <select class="js-example-basic-single addproduct" name="value[]"  required placeholder="Add Attribute" style="width:100%;" multiple="multiple" >
                            @php 
                            $val=unserialize($attribute->value);
                            @endphp
                            @foreach($val as $v)
                            <option selected>{{$v}}</option>
                            @endforeach
         
                            </select> 
                        </div>
                           {{-- <div class="col-md-2">
                            <label for="">Offer Price</label>
                            <input class="form-control  form-control-sm"placeholder="eg.1200" step="any" name="offer_price[]" type="number">
                           </div>
                           <div class="col-md-2">
                            <label for="">Stock</label>
                            <input class="form-control  form-control-sm"placeholder="eg.1200" name="stock[]" type="text">
                           </div>
                           <div class="col-md-2">
                            <label for="">Value</label>
                            <input class="form-control form-control-sm"placeholder="eg.S" name="valus[]" type="text">
                           </div> --}}

                           {{-- <div class="col-md-4">
                            <label for="">Size</label>
                            <textarea></textarea>
                          </div> --}}
                           <div class="col-md-2">
                            <button type="button" class="mt-4 btn btn-sm my-2 btn-danger btnRemove">Remove</button>
                           </div>
                        </div>
                        <br>
                        <div class="col-md-12">
                    <button type="submit" class="btn btn btn-info ">Submit</button>
                    </div>
                    <br>
                    </div>
                   
                 
                          
                </form>



            </div>
        </div> <!-- end col -->
    </div>


@endsection
@section('scripts')
<script src="{{asset('assets/js/jquery.multifield.min.js') }}"></script>
<script>
    $('#attribute').multifield();
 
    $('.js-example-basic-single').select2({
                    tags: true,
                    placeholder: "Add Attribute"
                     
                        });
  
</script>

<script>
    $('#cat_id').change(function(){

var cat_id=$(this).val();
if(cat_id !=null){
    $.ajax({
        url:"/admin/category/"+cat_id+"/child",
        type:"POST",
        data:{
            _token:"{{csrf_token()}}",
            cat_id:cat_id,

        },
        success:function(response){
            var html_option="<option value=''>---Child Category---</option>";
            // console.log(response);
            if(response.status){
                $('#child_cat_div').removeClass('d-none');
                $.each(response.data,function(id,title){
                   html_option +="<option value='"+id+"'>"+title+"</option>"
                });
            }
            else{
                $('#.child_cat_div').addClass('d-none');
            }
             $('#chil_cat_id').html(html_option);
        }
    });
}

    });

</script>
@endsection
