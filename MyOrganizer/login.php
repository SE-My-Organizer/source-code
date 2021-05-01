<!DOCTYPE html>
<html lang="ar">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>موقع منظمتي</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="css/themify-icons.css">
  <!-- endplugins -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- endinject -->
	<!-- الايقونة اللي بالتاب-->
  <link rel="shortcut icon" href="images/ourlogo.svg" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-right py-5 px-4 px-sm-5">
              <!-- logo  -->
              <div class="brand-logo">
              <img src="images/ourlogo.svg" alt="logo">
              </div>
              <h4> مرحبا! هيا بنا نبدأ</h4>
              <h6 class="font-weight-light">تسجيل الدخول</h6>

              <form class="pt-3" method="POST" action="LoginHandler.php">
                <!-- User name field  -->
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg text-right" name="Username" placeholder="اسم المستخدم" required>
                </div>
                <!-- Password field  -->
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg text-right" name="Password" placeholder="كلمة المرور" required>
                </div>
                
                <div class="mt-3">
                  <!-- Check box for "Keep me registered" -->
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                    <input type="checkbox" class="form-check-input"> ابقني مسجل </label>
                  </div>
                  <!-- Login button -->
                  <input type="submit" class="btn btn-primary btn-lg btn-block" value="سجل دخول">
                  
                  <!-- Link if you forgot the password  -->
                  <div class="my-2 d-flex justify-content-between align-items-center">
                    <a href="#" class="auth-link text-black">هل نسيت كلمة المرور؟</a>
                  </div>
                </div>

                <!-- Signin link for new users  -->
                <div class="text-center mt-4 font-weight-light">
                    ليس لديك حساب ؟<a href="Signin.php" class="text-primary"> انشاء جديد</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <!--script for the check box-->
  <script src="js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="js/template.js"></script>
  <!-- endinject -->
</body>
</html>