<!DOCTYPE html>
<html lang="ar">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>موقع منظمي</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="css/themify-icons.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- endinject -->
	<!-- الايقونة اللي بالتاب-->
  <link rel="shortcut icon" href="images/ourlogo.svg"/>
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-right py-5 px-4 px-sm-5">
              <div class="brand-logo">
				  <!-- اللوقو-->
                <img src="images/ourlogo.svg" alt="logo">
              </div>
              <h2>مستخدم جديد؟</h2>
              <h6 class="font-weight-light">&nbsp;</h6>
              <form class="pt-3" method="POST" action="SigninHandler.php">
                <!-- Username field -->
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg text-right" id="exampleInputUsername1" name="Username" placeholder="اسم المستخدم" required>
                </div>
                <!-- Email field  -->
                <div class="form-group">
                  <input type="email" class="form-control form-control-lg text-right" id="exampleInputEmail1" name="Email" placeholder="البريد الالكتروني" required>
                </div>
                <!-- User type field  -->
                <h5>هل انت؟</h5>
                <div dir="rtl" class="form-group">
                  <input name="UserType" type="radio" value="Student">        طالب        
                  <input name="UserType" type="radio" value="Librarian">       أمين المكتبة       
                  <input name="UserType" type="radio" value="Manager">        إداري       
                </div>
                <!-- Password field -->
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg text-right"  name="Password" placeholder="كلمة المرور" 
                  minlength="8" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="يجب ان تحتوي كلمة المرور كحد ادنى على رقم واحد و حرف كبير وحرف صغير وبمجموع 8 خانات على الأقل" required>
                </div>
                <!-- PhoneNumber field  -->
                <div class="form-group">
                  <input type="tel" minlength="10" maxlength="10" class="form-control form-control-lg text-right" name="PhoneNumber" placeholder="رقم الهاتف مثال: 0555555555 / أختياري" >
                </div>
                <!-- Address field  -->
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg text-right" name="Address" placeholder="العنوان / أختياري">
                </div>
                <!-- check box for conditions agreement -->
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input" required>انا اوافق على الشروط والاحكام 
                    </label><br>
                  </div>
                
                <!-- submit button  -->
					      <input type="submit" class="btn btn-primary btn-lg btn-block" value="سجل">

                <!-- Link if the user already registered -->
                <div class="text-right mt-4 font-weight-light">
                      هل لديك حساب مسبقا؟
				          <a href="login.php" class="text-primary">
				              	تسجيل دخول</a>
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
