<?php
// This code ensures that this user is signed in, otherwise it will transform the user to the login page
session_start();
if(!isset($_SESSION["loggedUser"])){
	header('Location: ../login.php');
}
?>




<!DOCTYPE html>
<html style="font-size: 16px;">
	<head>
		<title>الصفحة الرئيسية</title>
		<meta property="og:title" content="الصفحة الرئيسية">
		<meta property="og:type" content="website">
		<meta name="theme-color" content="#022cd6">
		<meta property="og:url" content="studentHome.php">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="utf-8">
		<meta name="keywords" content="We help travelers, guide for best travel, Tours Nature &amp; Wildlife, Welcome!, Contact Us">
		<meta name="description" content="">
		<meta name="page_type" content="np-template-header-footer-from-plugin">
		<meta name="generator" content="Nicepage 3.10.2, nicepage.com">
		<link rel="canonical" href="studentHome.php">
		<link rel="stylesheet" href="css/nicepage.css" media="screen">
		<link rel="stylesheet" href="css/studentHome.css" media="screen">
		<script class="u-script" type="text/javascript" src="js/jquery.js" defer=""></script>
		<script class="u-script" type="text/javascript" src="js/nicepage.js" defer=""></script>
		<script src="Components/ComponentHandler.js" ></script>
		<!-- الايقونة اللي بالتاب-->
		<link rel="shortcut icon" href="images/ourlogo.svg" />
		<script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "Site1",
		"url": "studentHome.php",
		"sameAs": []}
		</script>
	</head>

	<body class="u-body">
		<!-- PHP code to call the information of the user  -->
		<?php
		include "../Configuration.php";

		
		$Username=$_SESSION["loggedUser"];
		$ViewUser = "SELECT * FROM users WHERE Username = '$Username'";
		$result = mysqli_query($con,$ViewUser);
		if(!$result){
			echo "Error:".mysqli_error($con);
		}
		$row = mysqli_fetch_array($result);
		$Email=$row["Email"];
		$Username=$row["Username"];
		$UserType=$row["UserType"];
		$PhoneNumber=$row["PhoneNumber"];
		$Address=$row["Address"];
		?>
			
		<!-- Header of the page  -->
		<section class="u-clearfix u-custom-color-5 u-section-1" id="sec-e041">
			<div class="u-align-left u-container-style u-expanded-width u-group u-image u-image-1" data-image-width="1114" data-image-height="398">
				<div class="u-container-layout u-valign-top u-container-layout-1">
					<!-- Welcome message an logout butto  -->
					<p style="text-align:right;  font-size:30px; color:#a2adc7; line-height: 0.85; "><?php echo $Username,"    مرحبًا "  ?><br>
					<a href="../logout.php" style="text-align:right; color:#a2adc7; font-size:20px; text-decoration-line: underline;">سجل الخروج</a><img src="../images/logout-icon.png" alt="logout icon" width="14" height="15" style="vertical-align:middle; margin:5px 0px 0px 10px;"></p>
					<img src="images/ourlogo.svg" alt="شعار منظمي" class="u-image u-image-default u-image-2 float-right">
					<h1 class="u-align-right u-custom-font u-text u-text-custom-color-4 u-title u-text-1">منظمي</h1>
				</div>
			</div>
			<br><br><br><br>
			<!-- Main services for the student  -->
			<div class="u-list u-repeater u-list-1">
				<!-- Task menu service button -->
				<div class="u-align-center u-container-style u-list-item u-opacity u-opacity-85 u-radius-30 u-repeater-item u-shape-round u-white u-list-item-1">
					<div class="u-container-layout u-similar-container u-container-layout-2">
						<span class="u-align-center u-custom-color-2 u-icon u-icon-circle u-spacing-19 u-icon-1" data-href="task.php">
							<svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 438.891 438.891" style="">
								<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-b7ae"></use>
							</svg>
							<svg class="u-svg-content" viewBox="0 0 438.891 438.891" x="0px" y="0px" id="svg-b7ae" style="enable-background:new 0 0 438.891 438.891;">
								<g>
									<g>
										<g>
											<path d="M347.968,57.503h-39.706V39.74c0-5.747-6.269-8.359-12.016-8.359h-30.824c-7.314-20.898-25.6-31.347-46.498-31.347     c-20.668-0.777-39.467,11.896-46.498,31.347h-30.302c-5.747,0-11.494,2.612-11.494,8.359v17.763H90.923     c-23.53,0.251-42.78,18.813-43.886,42.318v299.363c0,22.988,20.898,39.706,43.886,39.706h257.045     c22.988,0,43.886-16.718,43.886-39.706V99.822C390.748,76.316,371.498,57.754,347.968,57.503z M151.527,52.279h28.735     c5.016-0.612,9.045-4.428,9.927-9.404c3.094-13.474,14.915-23.146,28.735-23.51c13.692,0.415,25.335,10.117,28.212,23.51     c0.937,5.148,5.232,9.013,10.449,9.404h29.78v41.796H151.527V52.279z M370.956,399.185c0,11.494-11.494,18.808-22.988,18.808     H90.923c-11.494,0-22.988-7.314-22.988-18.808V99.822c1.066-11.964,10.978-21.201,22.988-21.42h39.706v26.645     c0.552,5.854,5.622,10.233,11.494,9.927h154.122c5.98,0.327,11.209-3.992,12.016-9.927V78.401h39.706     c12.009,0.22,21.922,9.456,22.988,21.42V399.185z"></path>
											<path d="M164.588,233.046l-33.437,31.869l-14.106-14.629c-3.919-4.131-10.425-4.363-14.629-0.522     c-4.047,4.24-4.047,10.911,0,15.151l21.42,21.943c1.854,2.076,4.532,3.224,7.314,3.135c2.756-0.039,5.385-1.166,7.314-3.135     l40.751-38.661c0.21-0.192,0.411-0.394,0.603-0.603c3.706-4.04,3.436-10.319-0.603-14.025     C175.298,229.437,168.792,229.205,164.588,233.046z"></path>
											<path d="M329.16,256.034H208.997c-5.771,0-10.449,4.678-10.449,10.449s4.678,10.449,10.449,10.449H329.16     c5.771,0,10.449-4.678,10.449-10.449S334.931,256.034,329.16,256.034z"></path>
											<path d="M329.16,172.442H208.997c-5.771,0-10.449,4.678-10.449,10.449s4.678,10.449,10.449,10.449H329.16     c5.771,0,10.449-4.678,10.449-10.449S334.931,172.442,329.16,172.442z"></path>
											<path d="M164.588,316.638l-33.437,31.869l-14.106-14.629c-3.919-4.131-10.425-4.363-14.629-0.522     c-4.047,4.24-4.047,10.911,0,15.151l21.42,21.943c1.854,2.076,4.532,3.224,7.314,3.135c2.756-0.039,5.385-1.166,7.314-3.135     l40.751-38.661c0.21-0.192,0.411-0.394,0.603-0.603c3.706-4.04,3.436-10.319-0.603-14.025     C175.298,313.029,168.792,312.797,164.588,316.638z"></path>
											<path d="M329.16,339.626H208.997c-5.771,0-10.449,4.678-10.449,10.449s4.678,10.449,10.449,10.449H329.16     c5.771,0,10.449-4.678,10.449-10.449S334.931,339.626,329.16,339.626z"></path>											
											<path d="M107.641,220.507h62.171c0.358,0.019,0.716,0.019,1.074,0c5.474-0.297,9.672-4.975,9.375-10.449v-56.424     c0-5.771-4.678-10.449-10.449-10.449h-62.171c-5.771,0-10.449,4.678-10.449,10.449v56.424c-0.019,0.358-0.019,0.716,0,1.074     C97.489,216.607,102.167,220.804,107.641,220.507z M118.09,164.083h41.273v35.526H118.09V164.083z"></path>
										</g>
									</g>
								</g>
							</svg>
						</span>
						<h4 class="u-custom-font u-font-raleway u-text u-text-palette-1-base u-text-2">
							<a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-1" href="task.php">قائمة المهام</a>
						</h4>
					</div>
				</div>

				<!-- Create schedule service button -->
				<div class="u-align-center u-container-style u-list-item u-opacity u-opacity-85 u-radius-30 u-repeater-item u-shape-round u-white u-list-item-2">
					<div class="u-container-layout u-similar-container u-container-layout-3">
						<span class="u-align-center u-custom-color-2 u-icon u-icon-circle u-spacing-19 u-text-grey-40 u-icon-2" data-href="schedule.php">
							<svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 512 512" style="">
								<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-fd54"></use>
							</svg>
							<svg class="u-svg-content" viewBox="0 0 512 512" id="svg-fd54">
								<g>
									<path d="m391.017 251.454h35.714c8.074 0 14.643-6.569 14.643-14.643v-35.714c0-8.074-6.569-14.643-14.643-14.643h-35.714c-8.074 0-14.643 6.569-14.643 14.643v35.714c0 8.074 6.569 14.643 14.643 14.643zm.357-50h35v35h-35zm-.357 145h35.714c8.074 0 14.643-6.569 14.643-14.643v-35.714c0-8.074-6.569-14.643-14.643-14.643h-35.714c-8.074 0-14.643 6.569-14.643 14.643v35.714c0 8.074 6.569 14.643 14.643 14.643zm.357-50h35v35h-35zm-102.273-45h35.714c8.074 0 14.643-6.569 14.643-14.643v-35.714c0-8.074-6.569-14.643-14.643-14.643h-35.714c-8.074 0-14.643 6.569-14.643 14.643v35.714c0 8.074 6.569 14.643 14.643 14.643zm.357-50h35v35h-35zm-168.475 170.546h-35.714c-8.074 0-14.643 6.569-14.643 14.643v35.714c0 8.074 6.569 14.643 14.643 14.643h35.714c8.074 0 14.643-6.569 14.643-14.643v-35.714c0-8.074-6.569-14.643-14.643-14.643zm-.357 50h-35v-35h35zm.357-235.546h-35.714c-8.074 0-14.643 6.569-14.643 14.643v35.714c0 8.074 6.569 14.643 14.643 14.643h35.714c8.074 0 14.643-6.569 14.643-14.643v-35.714c0-8.075-6.569-14.643-14.643-14.643zm-.357 50h-35v-35h35zm168.475 107.773h35.714c8.074 0 14.643-6.569 14.643-14.643v-35.714c0-8.074-6.569-14.643-14.643-14.643h-35.714c-8.074 0-14.643 6.569-14.643 14.643v35.714c0 8.074 6.569 14.643 14.643 14.643zm.357-50h35v35h-35zm159.365-259.953h-32.066v-11.467c0-12.576-10.231-22.807-22.807-22.807h-3.444c-12.575 0-22.806 10.231-22.806 22.807v11.467h-223.4v-11.467c0-12.576-10.231-22.807-22.807-22.807h-3.444c-12.576 0-22.807 10.231-22.807 22.807v11.467h-32.065c-20.705 0-37.55 16.845-37.55 37.55v402.676c0 20.678 16.822 37.5 37.5 37.5h385.748c20.678 0 37.5-16.822 37.5-37.5v-402.676c-.001-20.705-16.846-37.55-37.552-37.55zm-66.123-11.467c0-4.305 3.502-7.807 7.807-7.807h3.444c4.305 0 7.807 3.502 7.807 7.807v11.467h-19.058zm-272.457 0c0-4.305 3.502-7.807 7.807-7.807h3.444c4.305 0 7.807 3.502 7.807 7.807v11.467h-19.057v-11.467zm361.131 451.693c0 12.407-10.093 22.5-22.5 22.5h-385.748c-12.407 0-22.5-10.093-22.5-22.5v-.047c6.284 4.735 14.095 7.547 22.551 7.547h304.083c10.03 0 19.46-3.906 26.552-10.999l77.562-77.562zm-85.215-17.059c.588-2.427.908-4.958.908-7.563v-50.064c0-9.44 7.681-17.121 17.122-17.121h50.063c2.605 0 5.136-.32 7.563-.908zm85.215-315.987h-319.574c-4.142 0-7.5 3.358-7.5 7.5s3.358 7.5 7.5 7.5h319.574v194.118c0 9.441-7.681 17.122-17.122 17.122h-50.063c-17.712 0-32.122 14.41-32.122 32.121v50.064c0 9.441-7.681 17.122-17.121 17.122h-291.769c-12.434 0-22.55-10.116-22.55-22.551v-287.996h81.173c4.142 0 7.5-3.358 7.5-7.5s-3.358-7.5-7.5-7.5h-81.174v-69.63c0-12.434 10.116-22.55 22.55-22.55h32.066v22.052c0 12.576 10.231 22.807 22.807 22.807 4.142 0 7.5-3.358 7.5-7.5s-3.358-7.5-7.5-7.5c-4.305 0-7.807-3.502-7.807-7.807v-22.052h257.458v22.052c0 12.576 10.231 22.807 22.807 22.807 4.142 0 7.5-3.358 7.5-7.5s-3.358-7.5-7.5-7.5c-4.305 0-7.807-3.502-7.807-7.807v-22.052h66.124c12.434 0 22.55 10.116 22.55 22.55zm-350.391 137.773h-35.714c-8.074 0-14.643 6.569-14.643 14.643v35.714c0 8.074 6.569 14.643 14.643 14.643h35.714c8.074 0 14.643-6.569 14.643-14.643v-35.714c0-8.075-6.569-14.643-14.643-14.643zm-.357 50h-35v-35h35zm66.559-77.773h35.714c8.074 0 14.643-6.569 14.643-14.643v-35.714c0-8.074-6.569-14.643-14.643-14.643h-35.714c-8.074 0-14.643 6.569-14.643 14.643v35.714c0 8.074 6.569 14.643 14.643 14.643zm.357-50h35v35h-35zm101.907 220.546c-.186-3.977-3.469-7.143-7.492-7.143-4.142 0-7.5 3.358-7.5 7.5 0 8.074 6.569 14.643 14.643 14.643h35.714c8.074 0 14.643-6.569 14.643-14.643v-35.714c0-8.074-6.569-14.643-14.643-14.643h-35.714c-8.074 0-14.643 6.569-14.643 14.643v10.3c0 4.142 3.358 7.5 7.5 7.5s7.5-3.358 7.5-7.5v-9.943h35v35zm-102.264-77.773h35.714c8.074 0 14.643-6.569 14.643-14.643v-35.714c0-8.074-6.569-14.643-14.643-14.643h-35.714c-8.074 0-14.643 6.569-14.643 14.643v35.714c0 8.074 6.569 14.643 14.643 14.643zm.357-50h35v35h-35zm-.357 142.773h35.714c8.074 0 14.643-6.569 14.643-14.643v-35.714c0-8.074-6.569-14.643-14.643-14.643h-35.714c-8.074 0-14.643 6.569-14.643 14.643v35.714c0 8.074 6.569 14.643 14.643 14.643zm.357-50h35v35h-35z"></path>
								</g>
							</svg>
						</span>
						<h4 class="u-custom-font u-font-raleway u-text u-text-palette-1-base u-text-3">
							<a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-2" href="schedule.php" data-page-id="179423953">انشاء جدول</a>
						</h4>
					</div>
				</div>

				<!-- Library service button -->
				<div class="u-align-center u-container-style u-list-item u-opacity u-opacity-85 u-radius-30 u-repeater-item u-shape-round u-video-cover u-white u-list-item-3">
					<div class="u-container-layout u-similar-container u-container-layout-4">
						<span class="u-align-center u-custom-color-2 u-icon u-icon-circle u-spacing-19 u-text-grey-40 u-icon-3" data-href="library.php">
							<svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 480 480" style="">
								<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-bf93"></use>
							</svg>
							<svg class="u-svg-content" viewBox="0 0 480 480" id="svg-bf93">
								<path d="m240 0h-104c-4.417969 0-8 3.582031-8 8v56h-120c-4.417969 0-8 3.582031-8 8v400c0 4.417969 3.582031 8 8 8h232c4.417969 0 8-3.582031 8-8v-464c0-4.417969-3.582031-8-8-8zm-8 416h-88v-16h88zm-216-296h112v240h-112zm216-32h-88v-24h88zm-216 288h112v24h-112zm128 8v-280h88v280zm88-368v32h-88v-32zm-104 64v24h-112v-24zm-112 336h112v48h-112zm128 48v-32h88v32zm0 0"></path>
								<path d="m479.742188 437.984375-96-368c-.535157-2.0625-1.871094-3.824219-3.714844-4.898437-1.839844-1.070313-4.03125-1.363282-6.089844-.8125l-120 32c-4.25 1.132812-6.789062 5.484374-5.679688 9.742187l96 368c.535157 2.0625 1.875 3.824219 3.71875 4.894531 1.839844 1.066406 4.03125 1.355469 6.085938.800782l120-32c4.242188-1.132813 6.777344-5.476563 5.679688-9.726563zm-201.246094-279.441406 104.542968-27.871094 3.761719 14.398437-104.535156 27.914063zm112.34375 2.050781 46.398437 177.980469-104.503906 27.882812-46.398437-177.992187zm50.472656 193.46875 8.191406 31.394531-104.542968 27.871094-8.160157-31.382813zm-71.023438-272.261719 8.710938 33.398438-104.542969 27.863281-8.703125-33.382812zm-12.578124 380.398438-8.710938-33.398438 104.542969-27.878906 8.703125 33.382813zm0 0"></path>
								<path d="m104 144h-64c-4.417969 0-8 3.582031-8 8v64c0 4.417969 3.582031 8 8 8h64c4.417969 0 8-3.582031 8-8v-64c0-4.417969-3.582031-8-8-8zm-8 64h-48v-48h48zm0 0"></path>
							</svg>
						</span>
						<h4 class="u-custom-font u-font-raleway u-text u-text-palette-1-base u-text-4">
							<a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-3" href="library.php">المكتبة</a>
						</h4>
					</div>
				</div>

				<!-- Map service button -->
				<div class="u-align-center u-container-style u-list-item u-opacity u-opacity-85 u-radius-30 u-repeater-item u-shape-round u-video-cover u-white u-list-item-4">
					<div class="u-container-layout u-similar-container u-container-layout-5">
						<span class="u-align-center u-custom-color-2 u-icon u-icon-circle u-spacing-19 u-text-grey-40 u-icon-4" data-href="map.php" data-page-id="845330944">
							<svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 512 512" style="">
								<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-ff71"></use>
							</svg>
							<svg class="u-svg-content" viewBox="0 0 512 512" x="0px" y="0px" id="svg-ff71" style="enable-background:new 0 0 512 512;">
								<g>
									<g>
										<path d="M256,93.297c-14.021,0-27.516,4.218-39.025,12.198c-3.402,2.359-4.262,7.05-1.921,10.478    c2.342,3.428,6.998,4.294,10.4,1.936c9.004-6.243,19.566-9.543,30.546-9.543c29.754,0,53.96,24.388,53.96,54.365    c0,29.977-24.206,54.366-53.96,54.366c-29.754,0-53.96-24.389-53.96-54.366c0-8.843,2.038-17.273,6.057-25.055    c1.906-3.692,0.482-8.241-3.182-10.161c-3.665-1.919-8.178-0.486-10.085,3.206c-5.067,9.812-7.746,20.881-7.746,32.01    C187.085,201.018,218,232.166,256,232.166s68.915-31.148,68.915-69.435C324.915,124.445,294,93.297,256,93.297z"></path>
									</g>
								</g>
								<g>
									<g>
										<path d="M511.426,501.571l-73.804-178.665c-1.16-2.809-3.883-4.639-6.903-4.639h-73.547    c14.305-19.498,26.212-38.919,35.511-57.988c16.48-33.794,24.835-66.613,24.835-97.547C417.517,73.001,345.061,0,256,0    S94.483,73.001,94.483,162.731c0,30.934,8.355,63.754,24.835,97.547c9.298,19.069,21.205,38.491,35.511,57.988H81.282    c-3.02,0-5.744,1.831-6.903,4.639L24.087,444.651c-1.587,3.842,0.217,8.252,4.03,9.85c0.94,0.394,1.912,0.581,2.87,0.581    c2.93,0,5.711-1.746,6.906-4.641l7.176-17.372h50.906l-26.38,63.862H18.69l7.647-18.513c1.587-3.842-0.217-8.252-4.03-9.85    c-3.815-1.601-8.191,0.219-9.777,4.06L0.575,501.571c-0.961,2.325-0.705,4.981,0.683,7.075c1.386,2.095,3.72,3.354,6.22,3.354    h497.044c2.499,0,4.834-1.259,6.221-3.354C512.13,506.552,512.387,503.896,511.426,501.571z M109.439,162.731    c0-81.422,65.747-147.663,146.561-147.663S402.561,81.31,402.561,162.731c0,34.143-11.775,88.703-66.245,158.231    c-0.055,0.065-0.104,0.134-0.156,0.201c-2.782,3.547-5.672,7.132-8.681,10.757c-29.932,36.062-60.222,62.395-71.48,71.751    c-11.225-9.324-41.372-35.525-71.283-71.518c-3.084-3.711-6.042-7.38-8.889-11.01c-0.046-0.058-0.089-0.118-0.137-0.175    C121.222,251.445,109.439,196.887,109.439,162.731z M86.269,333.335h50.907l-18.568,44.948H67.702L86.269,333.335z     M129.997,496.932l46.741-113.148l133.014,113.148H129.997z M332.935,496.932L332.935,496.932l-154.352-131.3    c-1.822-1.551-4.27-2.132-6.584-1.566c-2.316,0.565-4.228,2.21-5.143,4.427l-53.057,128.438H85.795l28.296-68.502    c0.961-2.325,0.705-4.98-0.683-7.075c-1.386-2.095-3.721-3.354-6.221-3.354H51.296l10.182-24.65h62.118    c3.02,0,5.744-1.831,6.903-4.639l22.876-55.377h12.978c2.253,2.83,4.543,5.661,6.894,8.491    c38.585,46.43,76.578,76.239,78.177,77.486c1.348,1.051,2.962,1.575,4.576,1.575s3.229-0.525,4.576-1.575    c0.879-0.685,12.757-10.009,29.673-25.96h84.681c4.13,0,7.478-3.373,7.478-7.534s-3.348-7.534-7.478-7.534h-69.269    c10.368-10.503,21.7-22.749,33.093-36.457c2.351-2.83,4.642-5.66,6.894-8.491h80.083l18.567,44.948h-39.457    c-4.13,0-7.478,3.373-7.478,7.534s3.347,7.534,7.478,7.534h45.681l10.182,24.65h-154.07c-3.121,0-5.913,1.952-7.006,4.898    c-1.091,2.946-0.253,6.265,2.104,8.326l75.133,65.707H332.935z M399.681,496.932l-73.024-63.862H466.93l26.381,63.862H399.681z"></path>
									</g>
								</g>
							</svg>
						</span>
						<h4 class="u-custom-font u-font-raleway u-text u-text-palette-1-base u-text-5">
							<a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-4" href="map.php" data-page-id="129201000">الخريطة</a>
						</h4>
					</div>
				</div>
			</div>
		</section>
		
   		<!-- advertisement section  -->
		<section class="u-carousel u-slide u-block-5602-1" id="carousel_4282" data-interval="5000" data-u-ride="carousel">
			<ol class="u-absolute-hcenter u-carousel-indicators u-block-5602-5">
				<li data-u-target="#carousel_4282" class="u-active u-grey-30" data-u-slide-to="0"></li>
				<li data-u-target="#carousel_4282" class="u-grey-30" data-u-slide-to="1"></li>
			</ol>
			<div class="u-carousel-inner" role="listbox">
				<!-- The first advertisement -->
				<div class="u-active u-align-left u-carousel-item u-clearfix u-custom-color-5 u-section-2-1">
					<div class="u-clearfix u-sheet u-sheet-1"> 
						<div class="u-clearfix u-custom-color-12 u-expanded-width u-layout-wrap u-layout-wrap-1">
							<div class="u-layout">
								<div class="u-layout-row">
									<div class="u-container-style u-layout-cell u-right-cell u-size-60 u-layout-cell-1">
										<div class="u-container-layout u-container-layout-1">
											<h2 class="u-align-center u-text u-text-black u-text-1">ادارة الموارد البشرية</h2>
											<h5 class="u-align-center u-text u-text-black u-text-2">د. رغد المطرفي</h5>
											<p class="u-align-right u-text u-text-body-alt-color u-text-3">
												<span class="u-text-black">&nbsp;: محاور الدورة&nbsp;&nbsp;<br>المفاهيم الاساسية لادارة الموارد البشرية&nbsp;<br>اهداف واهمية ادارة الموارد البشرية<br>طرق واساليب ونماذج لتقييم اداء الموظفين&nbsp;<br>
													<br>شهادات معتمدة<br>وذلك يوم الاحد الموافق<br>&nbsp;1442/9/18 
												</span>
											</p>
											<img src="images/31.jpg" alt="" class="u-image u-image-default u-image-1" data-image-width="2048" data-image-height="1707">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- The second advertisement -->
				<div class="u-align-left u-carousel-item u-clearfix u-custom-color-5 u-section-2-2">
					<div class="u-clearfix u-sheet u-sheet-1">
						<div class="u-clearfix u-custom-color-12 u-expanded-width u-layout-wrap u-layout-wrap-1">
							<div class="u-layout">
								<div class="u-layout-row">
									<div class="u-container-style u-layout-cell u-right-cell u-size-60 u-layout-cell-1">
										<div class="u-container-layout u-container-layout-1">
											<h2 class="u-align-center u-text u-text-black u-text-1">السكرتارية الحديثة وإدارة المكاتب</h2>
											<h5 class="u-align-center u-text u-text-black u-text-2">تقديم : د.وجدان الغامدي</h5>
											<p class="u-align-right u-text u-text-body-alt-color u-text-3">
												<span class="u-text-black">&nbsp;: محاور الدورة&nbsp;&nbsp;<br>مفهوم السكرتارية وادارة المكاتب<br>مقومات السكرتارية الناجح<br>مهارات التعامل مع الجمهور واستقبال الشكاوي<br>
													<br>شهادات معتمدة<br>وذلك يوم الخميس الموافق<br>&nbsp;1442/9/15<br>&nbsp; 
												</span>
											</p>
											<img src="images/31.jpg" alt="" class="u-image u-image-default u-image-1" data-image-width="2048" data-image-height="1707">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<!-- The code that contorle advertisement movement -->
			<a class="u-carousel-control u-carousel-control-prev u-custom-color-1 u-hover-custom-color-3 u-icon-circle u-spacing-10 u-text-white u-block-5602-3" href="#carousel_4282" role="button" data-u-slide="prev">
				<span aria-hidden="true">
					<svg viewBox="0 0 129 129">
						<path d="m64.5,122.6c32,0 58.1-26 58.1-58.1s-26-58-58.1-58-58,26-58,58 26,58.1 58,58.1zm0-108c27.5,5.32907e-15 49.9,22.4 49.9,49.9s-22.4,49.9-49.9,49.9-49.9-22.4-49.9-49.9 22.4-49.9 49.9-49.9z"></path>
						<path d="m70,93.5c0.8,0.8 1.8,1.2 2.9,1.2 1,0 2.1-0.4 2.9-1.2 1.6-1.6 1.6-4.2 0-5.8l-23.5-23.5 23.5-23.5c1.6-1.6 1.6-4.2 0-5.8s-4.2-1.6-5.8,0l-26.4,26.4c-0.8,0.8-1.2,1.8-1.2,2.9s0.4,2.1 1.2,2.9l26.4,26.4z"></path>
					</svg>
				</span>
				<span class="sr-only">
					<svg viewBox="0 0 129 129">
						<path d="m64.5,122.6c32,0 58.1-26 58.1-58.1s-26-58-58.1-58-58,26-58,58 26,58.1 58,58.1zm0-108c27.5,5.32907e-15 49.9,22.4 49.9,49.9s-22.4,49.9-49.9,49.9-49.9-22.4-49.9-49.9 22.4-49.9 49.9-49.9z"></path>
						<path d="m70,93.5c0.8,0.8 1.8,1.2 2.9,1.2 1,0 2.1-0.4 2.9-1.2 1.6-1.6 1.6-4.2 0-5.8l-23.5-23.5 23.5-23.5c1.6-1.6 1.6-4.2 0-5.8s-4.2-1.6-5.8,0l-26.4,26.4c-0.8,0.8-1.2,1.8-1.2,2.9s0.4,2.1 1.2,2.9l26.4,26.4z"></path>
					</svg>
				</span>
			</a>
			<a class="u-carousel-control u-carousel-control-next u-custom-color-1 u-hover-custom-color-3 u-icon-circle u-spacing-10 u-text-white u-block-5602-4" href="#carousel_4282" role="button" data-u-slide="next">
				<span aria-hidden="true">
					<svg viewBox="0 0 129 129">
						<path d="M64.5,122.6c32,0,58.1-26,58.1-58.1S96.5,6.4,64.5,6.4S6.4,32.5,6.4,64.5S32.5,122.6,64.5,122.6z M64.5,14.6    c27.5,0,49.9,22.4,49.9,49.9S92,114.4,64.5,114.4S14.6,92,14.6,64.5S37,14.6,64.5,14.6z"></path><path d="m51.1,93.5c0.8,0.8 1.8,1.2 2.9,1.2 1,0 2.1-0.4 2.9-1.2l26.4-26.4c0.8-0.8 1.2-1.8 1.2-2.9 0-1.1-0.4-2.1-1.2-2.9l-26.4-26.4c-1.6-1.6-4.2-1.6-5.8,0-1.6,1.6-1.6,4.2 0,5.8l23.5,23.5-23.5,23.5c-1.6,1.6-1.6,4.2 0,5.8z"></path>
					</svg>
				</span>
				<span class="sr-only">
					<svg viewBox="0 0 129 129">
						<path d="M64.5,122.6c32,0,58.1-26,58.1-58.1S96.5,6.4,64.5,6.4S6.4,32.5,6.4,64.5S32.5,122.6,64.5,122.6z M64.5,14.6    c27.5,0,49.9,22.4,49.9,49.9S92,114.4,64.5,114.4S14.6,92,14.6,64.5S37,14.6,64.5,14.6z"></path>
						<path d="m51.1,93.5c0.8,0.8 1.8,1.2 2.9,1.2 1,0 2.1-0.4 2.9-1.2l26.4-26.4c0.8-0.8 1.2-1.8 1.2-2.9 0-1.1-0.4-2.1-1.2-2.9l-26.4-26.4c-1.6-1.6-4.2-1.6-5.8,0-1.6,1.6-1.6,4.2 0,5.8l23.5,23.5-23.5,23.5c-1.6,1.6-1.6,4.2 0,5.8z"></path>
					</svg>
				</span>
			</a>
		</section>

	<!-- Footer of the Page      -->
	<footer class="u-clearfix u-custom-color-12 u-footer" id="sec-76e3">
	<div w3-include-html="Components/Footer.html"></div>
    </footer>
	
	<script>
     includeHTML();
	</script>
  </body>
</html>