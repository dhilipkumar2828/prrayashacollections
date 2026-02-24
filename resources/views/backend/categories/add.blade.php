@extends('backend.layouts.master')


@section('content')


<div class="page-content-wrapper ">

    <div class="container-fluid">

        <div class="row">
            <div class="col-sm-12">
                <div class="float-right page-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a>Catalogs</a></li>
                        <li class="breadcrumb-item"><a href="{{route('category.index')}}">Category</a></li>
                        <li class="breadcrumb-item active">Create Category</li>
                    </ol>
                </div>
                <h5 class="page-title">Catalogs</h5>
            </div>
        </div>
        <div class="card m-b-30 card-body">
            <h4 class="card-title font-20 mt-0">Create Category</h4>
            <a href="{{route('category.index')}}" id="add-btn" style="color: #ffffff;"><i class="fa fa-angle-left" aria-hidden="true"></i> Back</a>

        </div>
        <div class="row">
            <div class="col-12">

                <div class="card m-b-30">
                    <div class="card-body">

                        <!-- <h4 class="mt-0 header-title">Textual inputs</h4>
                        <p class="text-muted m-b-30 font-14">Here are examples of <code
                                class="highlighter-rouge">.form-control</code> applied to each
                            textual HTML5 <code class="highlighter-rouge">&lt;input&gt;</code> <code
                                    class="highlighter-rouge">type</code>.</p> -->

                                    <form action="{{route('category.store')}}" method="post" enctype="multipart/form-data">
                                        @csrf
                        <!-- <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Name *</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" placeholder="Enter Name" id="example-text-input">
                            </div>
                        </div> -->
                        <!----
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Parent Category</label>
                            <div class="col-sm-10">
                              <select class="form-control" id="parent_category" name="parent_category">
                                <option value="">Select Category</option>
                                @foreach($parent_cate as $cate)
                                   <option value="{{$cate->id}}">{{$cate->title}}</option>
                                @endforeach
                              </select>
                            </div>
                        </div>
                        ---->
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label"  id="category_title">Category</label>
                            <div class="col-sm-10">
                                <input class="form-control" required type="text" placeholder="Enter Category" id="title" name="title"value="{{ old('title') }}">
                            </div>
                        </div>
<!-- image upload custom -->
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

                                            <input id="thumbnail" required class="form-control" type="text" value="" name="photo">

                                           <span class="error "></span>

                                           <div id="holder" class="category_img" style="margin-top:15px;max-height:100px; display:flex"></div>

                                        </div>



                                    </div>

                                </div>

                        {{-- <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Slug</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" placeholder="Enter Category" id="example-text-input" name="slug"value="{{ old('slug') }}">
                            </div>
                        </div> --}}


                        <!-- <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Image</label>
                            <div class="col-sm-10">
                                <div class="input-group">
                                    <span class="input-group-btn">
                                      <a id="lfm" data-input="thumbnail" required data-preview="holder" class="btn btn-primary">
                                        <i class="fa fa-picture-o"></i> Choose
                                      </a>
                                    </span>
                                    <input id="thumbnail" class="form-control" required type="text" name="photo">
                                </div>
                                  <div id="holder" style="margin-top:15px;max-height:100px;"></div>
                            </div>
                        </div> -->



                        <div class="form-group row">
                            <label for="status" class="col-sm-2 col-form-label">Show Header</label>
                            <div class="col-sm-10">
                                <input type="checkbox" value="active" class="mt-3" name="header">
                                <!-- <select class="form-control" required name='header'>
                                    <option value="">--Status--</option>
                                    <option value="active" {{ old('status') == 'active' ? 'selected' : '' }}>Active</option>

                                    <option value="inactive" {{ old('status') == 'inactive' ? 'selected' : '' }}>Inactive</option>

                                </select> -->
                            </div>
                        </div>

                        <div class="form-group row" style="display:none">
                            <label for="status" class="col-sm-2 col-form-label">Show Homepage</label>
                            <div class="col-sm-10">
                                <input type="checkbox" value="active" class="mt-3" name="home">
                                <!-- <select class="form-control" required name='header'>
                                    <option value="">--Status--</option>
                                    <option value="active" {{ old('status') == 'active' ? 'selected' : '' }}>Active</option>

                                    <option value="inactive" {{ old('status') == 'inactive' ? 'selected' : '' }}>Inactive</option>

                                </select> -->
                            </div>
                        </div>


                        <div class="form-group row" style="display:none">
                            <label for="status" class="col-sm-2 col-form-label">Show Category</label>
                            <div class="col-sm-10">
                                <input type="checkbox" value="active" class="mt-3" name="category">
                            </div>
                        </div>

                        <div class="form-group row" style="display:none">
                            <label for="status" class="col-sm-2 col-form-label">Show Offer</label>
                            <div class="col-sm-10">
                                <input type="checkbox" value="active" class="mt-3" name="offers">
                            </div>
                        </div>

                        <!-- <div class="form-group row">
                            <label for="status" class="col-sm-2 col-form-label">Bg-color</label>
                            <div class="col-sm-10">
                            <input type="color" id="bg_color" name="bg_color">
                            </div>
                        </div> -->




                        {{-- <div class="form-group row">
                            <label for="example-search-input" class="col-sm-2 col-form-label">Meta Keywords</label>
                            <div class="col-sm-10">

                                <textarea id="elm1"name="met_keyword" value="{{ old('met_keyword') }}"></textarea>

                            </div>
                        </div> --}}


                        <div class="d-flex">
                            <button class="btn btn-primary" type="submit">Submit</button>&nbsp;
                            <button class="btn btn-secondary" id="reset" type="Reset">Cancel</button>
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

@endsection