<!-- 
@if(Session('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert" id="alert">
   {{session('success')}}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  @elseif(session('error'))
  <div class="alert alert-danger alert-dismissible fade show" role="alert" id="alert">
    {{Session('error')}}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  @endif -->

  


<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<link href="{{asset('frontend/css/toastr.css')}}" rel="stylesheet" type="text/css">

    @if(Session::has('success') && Session::get('success'))
    <script>
        toastr.success("{!! Session::get('success') !!}");
    </script>
    {{Session::forget('success')}}
    @endif

    @if(Session::has('info') && Session::get('info'))
    <script>
        toastr.info("{!! Session::get('info') !!}");
    </script>
    {{Session::forget('info')}}
        <!-- toastr.info("{{ Session::get('info') }}"); -->
    @endif

    @if(Session::has('warning') && Session::get('warning'))
    <script>
        toastr.warning("{!! Session::get('warning') !!}");
    </script>
    {{Session::forget('warning')}}
        <!-- toastr.warning("{{ Session::get('warning') }}"); -->
    @endif

    @if(Session::has('error') && Session::get('error'))
    <script>
        toastr.error("{!! Session::get('error') !!}");
    </script>
    {{Session::forget('error')}}
        <!-- toastr.error("{{ Session::get('error') }}"); -->
    @endif


