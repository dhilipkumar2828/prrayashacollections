@extends('backend.layouts.master')


@section('content')


<div class="page-content-wrapper ">

    <div class="container-fluid">

        <div class="row">
            <div class="col-sm-12">
                <div class="float-right page-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Sub Category</a></li>
                        <li class="breadcrumb-item active">View Sub category</li>
                    </ol>
                </div>
                <h5 class="page-title">Sub Category</h5>

            </div>
        </div>
        <!-- end row -->
        <div class="card m-b-30 card-body">
            <h4 class="card-title font-20 mt-0">Sub category</h4>
            <a href="{{url('category')}}" id="add-btn" style="color: #ffffff;"><i class="fa fa-angle-left" aria-hidden="true"></i> Back</a>
        </div>
        <div class="row">

            <div class="col-lg-12">
                @include('backend.layouts.notification')
            </div>
            <div class="col-12">
            <div>
                <h4> </h4>
            </div>

                <div class="card m-b-30">
                    <div class="card-body">

                        <!-- <h4 class="mt-0 header-title">Textual inputs</h4>
                        <p class="text-muted m-b-30 font-14">Here are examples of <code
                                class="highlighter-rouge">.form-control</code> applied to each
                            textual HTML5 <code class="highlighter-rouge">&lt;input&gt;</code> <code
                                    class="highlighter-rouge">type</code>.</p> -->

                                    <form action="{{url('subcategory_create')}}" method="post">
                                        @csrf
                                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Category</label>
                            <div class="col-sm-10">
                              <select class="form-control" id="category" name="category">
                              
                                @foreach($subcategories as $cate)
                                   <option value="{{$cate->id}}">{{$cate->title}}</option>
                                @endforeach
                              </select>
                            </div>
                        </div> 
                        
                        
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Sub Category1</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" required placeholder="Enter Category" id="example-text-input" name="title[]">
                            </div>
                        </div>
                         <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Image1</label>
                                    <div class="col-sm-10">
                                        <div class="input-group">

                                            <span class="input-group-btn">

                                              <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">

                                                <i class="fa fa-picture-o"></i> Choose

                                              </a>

                                            </span>

                                            <input id="thumbnail" required class="form-control" type="text" value="" name="subcat_photo[]">

                                           <span class="error "></span>

                                           <div id="holder" class="category_img" style="margin-top:15px;max-height:100px; display:flex"></div>

                                        </div>



                                    </div>

                                </div>
                         <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Sub Category2</label>
                            <div class="col-sm-10">
                                
                                <input class="form-control" type="text"  placeholder="Enter Category" id="example-text-input" name="title[]">
                            </div>
                        </div>
                         <div class="form-group row">
    <label class="col-sm-2 col-form-label">Image2</label>
    <div class="col-sm-10">
        <div class="input-group">
            <span class="input-group-btn">
                <a id="lfm1" data-input="thumbnail1" data-preview="holder1" class="btn btn-primary">
                    <i class="fa fa-picture-o"></i> Choose
                </a>
            </span>
            <input id="thumbnail1" class="form-control" type="text" name="subcat_photo[]">
            <span class="error"></span>
            <div id="holder1" class="category_img1" style="margin-top:15px; max-height:100px; display:flex"></div>
        </div>
    </div>
</div>

                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Sub Category3</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text"  placeholder="Enter Category" id="example-text-input" name="title[]">
                            </div>
                        </div>
                       <div class="form-group row">
    <label class="col-sm-2 col-form-label">Image3</label>
    <div class="col-sm-10">
        <div class="input-group">
            <span class="input-group-btn">
                <a id="lfm2" data-input="thumbnail2" data-preview="holder2" class="btn btn-primary">
                    <i class="fa fa-picture-o"></i> Choose
                </a>
            </span>
            <input id="thumbnail2" class="form-control" type="text" name="subcat_photo[]">
            <span class="error"></span>
            <div id="holder2" class="category_img1" style="margin-top:15px; max-height:100px; display:flex"></div>
        </div>
    </div>
</div>
                        <div class="d-flex">
                            <button class="btn btn-primary" type="submit">Update</button>&nbsp;
                           
                        </div>
                    </form>

                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->



    </div><!-- container fluid -->

</div>


@endsection


@section('scripts')
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
$('.dltBtn').click(function(e){
    var form=$(this).closest('form');
    var dataID=$(this).data('id');
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
    $('input[name=toogle]').change(function () {
        var mode=$(this).prop('checked');
        var id=$(this).val();
        // alert(id);
        $.ajax({
            url:"{{route('category.status')}}",
            type:"POST",
            data:{
                _token:'{{csrf_token()}}',
                mode:mode,
                id:id,
            },
            success:function (response)  {
             //   console.log(response.status);
            }
        })
    });
</script>
@endsection