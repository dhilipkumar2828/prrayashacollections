<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Prrayasha Guest Login</title>
  <link rel="icon" href="../assets/images/Prrayasha Collection LOGO.jpeg" type="image/x-icon">

  <!-- CSS Links -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Aclonica&family=Poppins:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../assets/css/newstyle.css">

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
    .login-card {
      color: #fff;
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
      <div class="right-section d-flex flex-column justify-content-between">
        <div class="background-image"></div>

        <!-- Login Card -->
        <div class="login-card text-start d-flex flex-column" style="height: 100%;">
          <h4 class="mb-4">Guest Login</h4>

          <form id="loginForm" onsubmit="handleSendOtp(event)">
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

              <!-- OTP Field -->
            <div id="otpField" class="mb-4 d-none">
              <input type="text" maxlength="6"
                class="form-control text-center bg-transparent border-bottom text-white"
                placeholder="Enter 6-digit OTP"
                style="border-radius: 0; border-top: none; border-left: none; border-right: none; padding-top: 0.65rem; padding-bottom: 0.65rem;">
            </div>

            <!-- <p class="mb-3 text-info-white small">You'll receive a 6-digit code</p> -->

            <!-- Send OTP -->
            <div class="d-grid mb-3">
              <button class="btn btn-light rounded-pill fw-bold d-flex justify-content-center align-items-center gap-2"
                type="submit" style="color: #080a54;">
                SEND OTP <i class="fas fa-arrow-right"></i>
              </button>
            </div>

          
          </form>

          <!-- Bottom-aligned links inside card -->
          <div class="mt-auto pt-5 text-center">
            <p class="text-info-white small">Already have an account?
              <a href="{{route('test.login')}}" class="guest-login-link">Login here</a>
            </p>
            <p class="mb-0">
              <a href="{{route('test.createaccount')}}" class="guest-login-link">Create an account</a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- JS Scripts -->
  <script>
    function handleSendOtp(event) {
      event.preventDefault();
      const mobileInput = document.getElementById('mobileInput').value.trim();
      const otpField = document.getElementById('otpField');

      if (mobileInput.length >= 10) {
        otpField.classList.remove('d-none');
      } else {
        alert("Please enter a valid mobile number.");
      }
    }
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>