@extends('backend.layouts.master')

@section('content')
<div class="page-content-wrapper ">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="float-right page-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a>Catalogs</a></li>
                        <li class="breadcrumb-item"><a href="{{route('category.index')}}">Categories</a></li>
                    </ol>
                </div>
                <h5 class="page-title">Catalogs</h5>
            </div>
        </div>
        <div class="card m-b-30 card-body">
            <h4 class="card-title font-20 mt-0">Category</h4>
            @can('category-add')
            <a href="{{route('category.create')}}" id="add-btn" style="color: #ffffff;"> + ADD</a>
            @endcan
        </div>

        <div class="row">
            <div class="col-lg-12">
                @include('backend.layouts.notification')
            </div>
            <div class="col-12">
                <div>
                    <h4> Total Category : {{count($categories)}}</h4>
                </div>
                <div class="card m-b-30">
                    <div class="card-body">
                        <form id="deleteCategoriesForm" method="POST" action="{{ route('category.bulkDelete') }}">
                            @csrf
                            @method('DELETE')
                            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th><input type="checkbox" id="selectAll"></th>
                                        <th>S.No</th>
                                        <th>Category</th>
                                        @if(auth()->user()->can('category-edit'))
                                        <th>Status</th>
                                        @endif
                                        @if(auth()->user()->can('category-edit') or auth()->user()->can('category-delete') or auth()->user()->can('category-view'))
                                            <th>Actions</th>
                                        @endif
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($categories as $key => $item)
                                    @php
                                         $subcategories = DB::table('categories')->where('parent_id', '!=', null)->where('parent_id', $item->id)->orderBy('id', 'DESC')->first();
                                    @endphp
                                    <tr>
                                        <td><input type="checkbox" name="category_ids[]" value="{{ $item->id }}"></td>
                                        <td>{{$key + 1}}</td>
                                        <td> {{$item->title}}</td>
                                        @if(auth()->user()->can('category-edit'))
                                        <td><input type="checkbox" name="toogle" value="{{$item->id}}" data-toggle="switchbutton" {{$item->status=='active' ? 'checked':''}} data-onlabel="active" data-offlabel="inactive" data-size="sm" data-onstyle="success" data-offstyle="danger"></td>
                                        @endif
                                        @if(auth()->user()->can('category-edit') or auth()->user()->can('category-delete') or auth()->user()->can('category-view'))
                                        <td>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-action dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Actions</button>
                                                <div class="dropdown-menu">
                                                    @can('category-edit')
                                                    <a class="dropdown-item" href="{{route('category.edit',$item->id)}}">Edit</a>
                                                    @endcan
                                                    
                                                        @if(!empty($subcategories->parent_id))
                                                            @if($item->id == $subcategories->parent_id)
                                                            <a class="dropdown-item" href="{{url('subcategory_view'.'/'.$subcategories->parent_id)}}">View Subcategory</a>
                                                            @endif
                                                            
                                                     
                                                            
                                                        @endif
                                                         @if($item->id)
                                                            <a class="dropdown-item" href="{{url('subcategory_add'.'/'.$item->id)}}">Add Subcategory</a>
                                                            @endif
                                                        
                                                     <!---- 
                                                    @can('category-delete')
                                                    <form action="{{route('category.destroy',$item->id)}}" method="post">
                                                        @csrf
                                                        @method('delete')
                                                        <a class="dltBtn btn waves-effect waves-light" title="delete" data-id="{{$item->id}}" data-toggle="modal" data-dismiss="modal" data-target=".bs-example-modal-center">Delete</a><br>
                                                    </form>
                                                    @endcan
                                                    ---->
                                                </div>
                                            </div>
                                        </td>
                                        @endif
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <button type="submit" class="btn btn-danger">Delete Selected</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    $('#selectAll').click(function () {
        $('input[name="category_ids[]"]').prop('checked', this.checked);
    });

    $('.dltBtn').click(function (e) {
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

    $('input[name=toogle]').change(function () {
        var mode = $(this).prop('checked');
        var id = $(this).val();
        $.ajax({
            url: "{{route('category.status')}}",
            type: "POST",
            data: {
                _token: '{{csrf_token()}}',
                mode: mode,
                id: id,
            },
            success: function (response) {
                // console.log(response.status);
            }
        })
    });
</script>
@endsection
