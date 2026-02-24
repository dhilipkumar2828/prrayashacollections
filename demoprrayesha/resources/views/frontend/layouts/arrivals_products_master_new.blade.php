<!DOCTYPE html>
<html>

<head>
    
    @include('frontend.layouts.arrivals_products_head')
    
    <style>
           
   h2, h3, h4, h5, h6 {
    margin-top: 10px;
    margin-bottom: 10px;
    font-family: "Jost", sans-serif;
}
    </style>
 
<script src="https://cdn-in.pagesense.io/js/prrayashacollections/ecbfa283296f4c0ead43e9ddf0ba4302.js"></script>

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @include('backend.layouts.notification')
            </div>
        </div>
    </div>


    @include('frontend.layouts.arrivals_products_header_new')


			
		</section>
	





    @yield('content')

    @include('frontend.layouts.footer')

    @include('frontend.layouts.script')
    <script type="text/javascript">
function isNumber(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;
}

</script>
  
</body>

</html>