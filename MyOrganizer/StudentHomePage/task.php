<!DOCTYPE html>
<html style="font-size: 16px;">
	<head>
		<title>قائمة المهام</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="utf-8">
		<meta name="keywords" content="">
		<meta name="description" content="">
		<meta name="page_type" content="np-template-header-footer-from-plugin">
		<meta name="generator" content="Nicepage 3.10.2, nicepage.com">
		<meta property="og:title" content="قائمة المهام">
		<meta property="og:type" content="website">
		<meta name="theme-color" content="#022cd6">
		<meta property="og:url" content="studentHome.php">
		<link rel="stylesheet" href="css/nicepage.css" media="screen">
		<link rel="stylesheet" href="css/task.css" media="screen">
		<link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
		<link rel="canonical" href="studentHome.php">
		<script src="https://kit.fontawesome.com/a076d05399.js"></script>
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
  <!-- Header of the page  -->
  <header class="u-clearfix u-custom-color-5 u-header" id="sec-8713">
      <div class="u-clearfix u-sheet u-sheet-1">
      <div w3-include-html="Components/NavBar.html"></div>
      </div>
    </header>

  <!-- The tasklist service  --> 
  <div class="wrapper" >
    <header align="right" >قائمة المهام</header>
    <div class="inputField">
      <button><i class="fas fa-plus" ></i></button>
		  <input type="text" placeholder="أضف إلى مهامك الجديدة">
    </div>
    <ul class="todoList" align="right" >
      <!-- data are comes from local storage -->
    </ul>

    <div class="footer" >
		<button>مسح الكل</button>
		<span>لديك <span class="pendingTasks"></span> مهام غير منجزة</span>
    </div>
  </div>
  
	<!-- The tasklist service  -->
	<script>
		// getting all required elements
    const inputBox = document.querySelector(".inputField input");
    const addBtn = document.querySelector(".inputField button");
    const todoList = document.querySelector(".todoList");
    const deleteAllBtn = document.querySelector(".footer button");

    // onkeyup event
    inputBox.onkeyup = ()=>{
      let userEnteredValue = inputBox.value; //getting user entered value
      if(userEnteredValue.trim() != 0){ //if the user value isn't only spaces
        addBtn.classList.add("active"); //active the add button
      }else{
        addBtn.classList.remove("active"); //unactive the add button
      }
    }

    showTasks(); //calling showTask function

    addBtn.onclick = ()=>{ //when user click on plus icon button
      let userEnteredValue = inputBox.value; //getting input field value
      let getLocalStorageData = localStorage.getItem("New Todo"); //getting localstorage
      if(getLocalStorageData == null){ //if localstorage has no data
        listArray = []; //create a blank array
      }else{
        listArray = JSON.parse(getLocalStorageData);  //transforming json string into a js object
      }
      listArray.push(userEnteredValue); //pushing or adding new value in array
      localStorage.setItem("New Todo", JSON.stringify(listArray)); //transforming js object into a json string
      showTasks(); //calling showTask function
      addBtn.classList.remove("active"); //unactive the add button once the task added
    }

    function showTasks(){
      let getLocalStorageData = localStorage.getItem("New Todo");
      if(getLocalStorageData == null){
        listArray = [];
      }else{
        listArray = JSON.parse(getLocalStorageData); 
      }
      const pendingTasksNumb = document.querySelector(".pendingTasks");
      pendingTasksNumb.textContent = listArray.length; //passing the array length in pendingtask
      if(listArray.length > 0){ //if array length is greater than 0
        deleteAllBtn.classList.add("active"); //active the delete button
      }else{
        deleteAllBtn.classList.remove("active"); //unactive the delete button
      }
      let newLiTag = "";
      listArray.forEach((element, index) => {
        newLiTag += `<li style=' background: #D4DCF8;'>${element}<span class="icon" onclick="deleteTask(${index})"><i class="fas fa-trash"></i></span></li>`;
      });
      todoList.innerHTML = newLiTag; //adding new li tag inside ul tag
      inputBox.value = ""; //once task added leave the input field blank
    }

    // delete task function
    function deleteTask(index){
      let getLocalStorageData = localStorage.getItem("New Todo");
      listArray = JSON.parse(getLocalStorageData);
      listArray.splice(index, 1); //delete or remove the li
      localStorage.setItem("New Todo", JSON.stringify(listArray));
      showTasks(); //call the showTasks function
    }

    // delete all tasks function
    deleteAllBtn.onclick = ()=>{
      listArray = []; //empty the array
      localStorage.setItem("New Todo", JSON.stringify(listArray)); //set the item in localstorage
      showTasks(); //call the showTasks function
    }
	</script>
	  
    
    
    <footer class="u-clearfix u-custom-color-12 u-footer" id="sec-76e3">
    <div w3-include-html="Components/Footer.html"></div>
    </footer>

    <script>
     includeHTML();
     </script>
  </body>
</html>