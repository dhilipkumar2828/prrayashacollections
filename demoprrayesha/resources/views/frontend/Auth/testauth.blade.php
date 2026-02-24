<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Prrayasha Login</title>
  <link rel="icon" href="../assets/images/Prrayasha Collection LOGO.jpeg" type="image/x-icon">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../assets/css/newstyle.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Aclonica&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" rel="stylesheet">

  <style>
    .form-control::placeholder {
      color: white !important;
      opacity: 1;
    }

    .form-control:focus {
      border-bottom: 1px dotted white !important;
      box-shadow: none;
    }

    .text-start {
      text-align: start !important;
    }
    .login-card p {
    color: #fff;
    text-align: center;
    font-size: 12px;
    margin-bottom: 0px;
   


}
  </style>

</head>

<body>
  <div class="banner-section">
    <div class="login-container">
      <!-- Left Side -->
      <div class="left-sections">
        <img src="../assets/images/green-logo.jpeg" alt="PRRAYASHA COLLECTIONS Logo" class="logo-img">
      </div>

      <!-- Right Side -->
    <!-- Right Side -->
<div class="right-section d-flex flex-column justify-content-between">
  <div>
    <div class="background-image"></div>

  <div class="login-card text-start d-flex flex-column" style="height: 100%;">
  <h4 class="mb-4">Sign in</h4>

 <form action="{{route('login.sumbit')}}" class="form-horizontal" method="POST" name="mobPassForm">
     @csrf
     @php
                   $sessionError = Session::get('error');
                   Session::put('error', '');
                @endphp
                
                @if ($sessionError)
                <div class="infield" style="text-align:center;">
                    <span class="text-danger common_session_err" style="color:red;">{{ $sessionError }}</span>
                </div>
                @endif
                 <form action="{{route('verifyotp')}}"   method="POST">
        
                                                  @csrf
    <!-- Mobile Input -->
    <div class="mb-4 position-relative">
      <span class="position-absolute top-50 translate-middle-y ms-3 text-muted">
        <i class="fas fa-mobile-alt"></i>
      </span>
      <input type="tel" id="mobileInput"
        class="form-control ps-1 bg-transparent border-bottom text-white text-center"
        placeholder="Enter your mobile number"
        style="border-radius: 0; border-top: none; border-left: none; border-right: none; padding-top: 0.65rem; padding-bottom: 0.65rem;"
        required>
    </div>

    <p class="mb-3 text-info-white small">We will send you a 6 Digit Verification Code</p>

    <!-- Send OTP -->
    <div class="d-grid mb-3">
      <button class="btn btn-light rounded-pill fw-bold d-flex justify-content-center align-items-center gap-2"
        type="submit" style="color: #080a54;" id="sendOtpButton" onclick="sendotp(1)">
        SEND OTP <i class="fas fa-arrow-right"></i>
      </button>
    </div>
    
    <div class="d-grid mb-3">
    <button class="btn btn-light rounded-pill fw-bold d-flex justify-content-center align-items-center gap-2"
        type="submit" style="color: #080a54;" onclick="authVerifyOtp()"  id="verifyotpdiv" style="display:none;" >
        Verify OTP<i class="fas fa-arrow-right"></i>
      </button>
    </div>
    <!-- OTP (Initially Hidden) -->
    <div id="otpField" class="mb-4" id="verify_screen" style="display:none;">
      <input type="text" minlength="6" maxlength="6" pattern="[0-9]{6}"
        class="form-control text-center bg-transparent border-bottom text-white"
        placeholder="Enter 6-digit OTP"
        style="border-radius: 0; border-top: none; border-left: none; border-right: none; padding-top: 0.65rem; padding-bottom: 0.65rem;">
         <span class="text-danger otp_err" style="color:red;"></span>
        <p><span><a href="javascript:;" id="resentotpbtn" onclick="sendotp(1)">Resend OTP</a></span></p>
                                              <p id="some_div"></p>
    </div>
    </form>
  </form>

  <!-- Push these links to the bottom of the card -->
  <div class="mt-auto pt-5 text-center">
    <p class="text-info-white small ">Continue as a Guest Login?
      <a href="{{route('test.guestlogin')}}" class="guest-login-link">Here</a>
    </p>
    <p class="mb-0">
      <a href="{{route('test.createaccount')}}" class="guest-login-link">Create an account</a>
    </p>
  </div>
</div>

  </div>


</div>

    </div>
  </div>

  <script>

  </script>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
 <script>
  // public/js/otp.js



function sendotp(mtype) {
    $(".mobile_err").html('');
    $("#sendotpmessage").css('display','none');
    $(".common_session_err").html('');
    $(".otp_err").html('');
    $(".otp_mobile_err").html('');
    if (mtype == 1) {
        var mobile = document.getElementById('mobile').value;
        var emobile = '.mobile_err';
    } else {
        var mobile = document.getElementById('verifyphone').value;
        var emobile = '.otp_mobile_err';
    }
    const token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

    if (!mobile) {
        $(emobile).html('Please enter your mobile number');
        return;
    }

    $.ajax({
        
        url: "{{route('generateotp')}}",
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': token
        },
        data: {
            mobile: mobile,
        },
        success: function(data) {
            $("#sendotpmessage").css('display','block');
            $(".sentopt_screen").css('display','none');
             $(".verify_screen").css('display','block');
             $('#first_screen').hide();
             $("#verify_screen").show();
            $("#verifyphone").val(mobile)
            if(data.message =="OTP sent successfully."){
               $("#sendotpmessage").html(data.message);
               $('#verifyotpdiv').show();
               $('#sendOtpButton').hide();
            }
            timeLeft = 30;
            // clearInterval(timerId);
            // timerId = setInterval(countdown, 1000);
        },
        error: function(xhr, status, error) {
            console.error('Error:', error);
            console.log('Response:', xhr.responseText);
        }
    });
}

function guestsendotp() {
    
    $(".mobile_err1").html('');
    $("#sendotpmessage").css('display','none');
    const mobile = document.getElementById('guest_mobile').value;
    const token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

    if (!mobile) {
        $(".mobile_err1").html('Please enter your mobile number');
        return;
    }

    $.ajax({
        
        url: "{{route('guestgenerateotp')}}",
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': token
        },
        data: {
            mobile: mobile,
        },
        success: function(data) {
            $("#sendotpmessage1").css('display','block');
          
            $("#guestlogincode").css('display','block');
            if(data.message =="OTP sent successfully."){
               $("#sendotpmessage1").html(data.message);
            }
        },
        error: function(xhr, status, error) {
            console.error('Error:', error);
            console.log('Response:', xhr.responseText);
        }
    });
}

function authVerifyOtp() {
  $(".otp_err").html('');
  $(".otp_mobile_err").html('');
  const otp = document.getElementsByName('otp')[0].value;
  const token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
  const mobile = document.getElementById('verifyphone').value;

  if (!mobile) {
      $(".otp_mobile_err").html('Please enter your mobile number');
      return;
  }

  if (!otp || !otp.match(/[0-9]{6}/)) {
      $(".otp_err").html('Please enter 6 digit OTP.');
      return;
  }

  $.ajax({
    url: "{{route('verifyotp')}}",
    method: 'POST',
    headers: {
        'X-CSRF-TOKEN': token
    },
    data: {
        mobile: mobile,
        otp: otp
    },
    success: function(data) {
        if(data.hasOwnProperty('error') && data.error.hasOwnProperty('mobile')){
            $(".otp_mobile_err").html(data.error.mobile);
        }
        if(data.hasOwnProperty('error') && data.error.hasOwnProperty('otp')){
            $(".otp_err").html(data.error.otp);
        }

        if(!data.hasOwnProperty('error') && data.hasOwnProperty('cartData')){
            if (data.cartData == 1) {
              location.href = "{{route('cart')}}";
            } else {
              location.href = "{{route('index')}}";
            }
        }
    },
    error: function(xhr, status, error) {
        console.error('Error:', error);
        console.log('Response:', xhr.responseText);
    }
    });
}

function mobPassSubmit() {
    $(".mobile_err").html('');
    $(".password_err").html('');
    $(".common_session_err").html('');
  
    const mobile = document.getElementsByName('mobile')[0].value;
    const pass = document.getElementById('inputpass').value
    
    var err = 0;
    if (!mobile || !mobile.match(/[0-9]{10}/)) {
      $(".mobile_err").html('Please enter 10 digit Mobile Number.');
      err = 1;
    }
    
    if (pass.trim() == '') {
      $(".password_err").html('Please enter the Password.');
      err = 1;
    }
    
    if (!err) {
        document.getElementsByName('mobPassForm')[0].submit();    
    }
}



</script>
</body>

</html>