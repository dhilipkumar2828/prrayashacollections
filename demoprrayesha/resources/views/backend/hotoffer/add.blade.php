@extends('backend.layouts.master')


@section('content')

<style>
img{
    margin-left:3%;
}
</style>
<div class="page-content-wrapper ">

    <div class="container-fluid">

        <div class="row">
                <div class="col-sm-12">
                    <div class="float-right page-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a>Appearence</a></li>
                            <li class="breadcrumb-item"><a href="{{url('view_hotoffer')}}">Hotoffer</a></li>
                        <li class="breadcrumb-item active">Create Hotoffer</li>
                        </ol>
                    </div>
                    <h5 class="page-title">Appearence</h5>
                </div>
        </div>
        <div class="card m-b-30 card-body">
            <h4 class="card-title font-20 mt-0">Create Hotoffer</h4>
            <a href="{{url('view_hotoffer')}}" id="add-btn" style="color: #ffffff;"><i class="fa fa-angle-left" aria-hidden="true"></i> Back</a>

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

                                    <form action="{{url('save_hotoffer')}}" method="post">
                                        @csrf
                        <!-- <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Name *</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" placeholder="Enter Name" id="example-text-input">
                            </div>
                        </div> -->
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Title</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="title" name="title" required>
                          
                            </div>
                        </div> 



                        <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Image</label>
                                    <!-- <img src="assets/images/image.png" class="admin-image"> -->
                                    <div class="col-sm-10">
                                        <div class="input-group">
                                            <span class="input-group-btn">
                                              <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                                                <i class="fa fa-picture-o"></i> Choose
                                              </a>
                                            </span>
                                            <input id="thumbnail" class="form-control required" type="text" value="{{old('photo')}}" name="photo">        
                                           <span class="error "></span>
                                           <div id="holder" style="margin-top:15px;max-height:100px;"></div>
                                        </div>                                                                             
                                        
                                    </div>
                         </div>

                         <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Link</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="link" name="link" required>
                          
                            </div>
                        </div> 

                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-6 col-form-label">Description</label>
                                <div class="col-sm-10">
                                    <textarea class="summernote required"  name="description" required value="{{ old('description') }}"></textarea>
                                    <span class="error"></span>
                                </div>
                                    
                            </select>
                            <span class="error"></span>
                            
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
                            <button class="btn btn-secondary" type="Reset" id="reset">Cancel</button>
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
<script type="text/javascript">
$('#reset').click(function(){
    $('.summernote').summernote('reset');
})

</script>
@endsection
