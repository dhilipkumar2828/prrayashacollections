

@extends('backend.layouts.master')


@section('content')




        <div class="page-content-wrapper ">

            <div class="container-fluid">

                <div class="row">
                    <div class="col-sm-12">
                        <div class="float-right page-breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Attribute</a></li>

                            </ol>
                        </div>
                        <h5 class="page-title">Attribute</h5>

                    </div>

                </div>
                <!-- end row -->
                <div class="card m-b-30 card-body">
                    <h4 class="card-title font-20 mt-0">Attribute</h4>
                   @can('Attribute Create')
                    <a href="{{route('attribute.create')}}" id="add-btn" style="color: #ffffff;"> + ADD</a>
                    @endcan
                </div>

                <div class="row">
                    
                    <div class="col-lg-12">
                        @include('backend.layouts.notification')
                    </div>
                    <div class="col-12">
                    <div>
                        <h4> Total Attribute : {{count($Attribute)}}</h4>
                    </div>
                        <div class="card m-b-30">
                            <div class="card-body">





                                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                    <tr>
                                        <th>S.No</th>
                                        {{-- <th>Category Name</th>
                                        <th>Child Category</th> --}}
                                        <th>Attribute Type</th>
                                        <th>Attribute Value</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>


                                    <tbody>

                                    @foreach ($Attribute as $item )


                                        <tr>
                                            <td>{{$loop->iteration}} </td>
                                            {{-- <td> {{$item->cat_id}}</td>
                                            <td> {{$item->child_cat_id}}</td> --}}
                                            <td> {{$item->attribute_type}}</td>
                                            <td> @php echo implode(' , ',unserialize($item->value)); @endphp</td>
                                            <td>

                                                <div class="btn-group m-b-10">
                                                    <button type="button" class="btn btn-action dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">Actions</button>
                                                    <div class="dropdown-menu">

                                                         @can('Attribute Edit')
                                                        <a class="dropdown-item" href="{{route('attribute.edit',$item->id)}}">Edit</a>
                                                        @endcan
                                                        <form action="{{route('attribute.destroy',$item->id)}}" method="post">
                                                            @csrf
                                                            @method('delete')
                                                             @can('Attribute Delete')
                                                            <a class="dltBtn btn waves-effect waves-light"title="delete" data-id="{{$item->id}}" data-toggle="modal" data-dismiss="modal" data-target=".bs-example-modal-center">Delete</a><br>
                                                            @endcan
                                                        </form>
                                                        {{-- <a class="btn waves-effect waves-light" data-toggle="modal" data-dismiss="modal"
                                                            data-target=".bs-example-modal-center1">View</a> --}}
                                                    </div>
                                                </div><!-- /btn-group -->
                                            </td>
                                        </tr>
                                        @endforeach
                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->



            </div><!-- container fluid -->

        </div> <!-- Page content Wrapper -->

    </div> <!-- content -->
{{--
    <footer class="footer">
         © 2018 - 2020<b> E-commerce<b>
    </footer> --}}

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
{{--
<script>
    $('input[name=toogle]').change(function () {
        var mode=$(this).prop('checked');
        var id=$(this).val();
        // alert(id);
        $.ajax({
            url:"{{route('banner.status')}}",
            type:"POST",
            data:{
                _token:'{{csrf_token()}}',
                mode:mode,
                id:id,
            },
            success:function (response)  {
               // console.log(response.status);
            }
        })
    });
</script> --}}
@endsection




