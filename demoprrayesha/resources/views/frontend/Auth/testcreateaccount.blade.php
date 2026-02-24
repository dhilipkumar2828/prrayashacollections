<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="base_url" content="{{ url('/') }}">
  <title>Prrayasha Login | Create Account</title>
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
    /* Custom placeholder and focus styles */
    .form-control::placeholder {
      color: white !important;
      opacity: 1;

    }

    .form-control:focus {
      border-bottom: 1px dotted white !important;
      box-shadow: none;
    }
  </style>
</head>

<body>
  <div class="banner-section">
    <div class="login-container">
      <!-- Left Side -->
      <div class="left-sections">
        <img src="../assets/images/green-logo.jpeg" alt="PRRAYASHA COLLECTIONS Logo"
          class="logo-img"> 

      </div>

      <!-- Right Side -->
      <div class="right-section">
        <div class="background-image"></div>
         <!-- Close Button 
        <button class="close-button" onclick="handleClose()">
          &times;
        </button>-->
        <div class="login-card text-start">
          <h4 class="mb-4">Create Account</h4>

          <form action="{{route('register.sumbit')}}" class="form-horizontal" method="POST" >
            @csrf

            <!-- Name Input -->
            <div class="mb-3 position-relative">
              <span class="position-absolute top-50 translate-middle-y ms-3 text-muted">
                <i class="fas fa-user"></i>
              </span>
              <input type="text" class="form-control ps-1 bg-transparent border-bottom text-white"
                placeholder="Enter your name" name ="name"
                style="border-radius: 0; border-top: none; border-left: none; border-right: none;" required>
            </div>

            <!-- Email Input -->
            <div class="mb-3 position-relative">
              <span class="position-absolute top-50 translate-middle-y ms-3 text-muted">
                <i class="fas fa-envelope"></i>
              </span>
              <input type="email" class="form-control ps-1 bg-transparent border-bottom text-white"
                placeholder="Enter your email address" name="email"
                style="border-radius: 0; border-top: none; border-left: none; border-right: none;" required>
            </div>

            <!-- Mobile Number Input -->
            <div class="mb-3 position-relative">
              <span class="position-absolute top-50 translate-middle-y ms-3 text-muted">
                <i class="fas fa-mobile-alt"></i>
              </span>
              <input type="tel" class="form-control ps-1 bg-transparent border-bottom text-white"
                placeholder="Enter your mobile number" name="phone_number" id="phoneInput" onkeypress="return isNumber(event)"  
                    onpaste="handlePaste(event)" 
                    minlength="10" 
                    maxlength="10" 
                    oninput="validatePhoneNumber()" 
                    onblur="checkPhoneNumberLength()"
                style="border-radius: 0; border-top: none; border-left: none; border-right: none;" required>
            </div>

            <!-- Sign Up Button -->
            <div class="d-grid">
              <button class="btn btn-light rounded-pill fw-bold d-flex justify-content-center align-items-center gap-2"
                type="submit" style="color: #080a54;">
                Sign up <i class="fas fa-arrow-right"></i>
              </button>
            </div>

          </form>




          <p class="mt-3 text-center">
            <a href="{{route('test.login')}}" class="guest-login-link">Back to login</a>
          </p>

        </div>
      </div>

    </div>

  </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    document.getElementById('phoneInput').addEventListener('input', function (e) {
    this.value = this.value.replace(/\D/g, '');
});
</script>
</body>

</html>