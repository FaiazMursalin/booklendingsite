<html lang = "en">
 <head> 
       <meta charset = "utf-8"/>
       <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
       <meta name="description" content="About the site"/>
       <meta name="author" content="Author name"/>
  <title> The Title </title>

   <!---core css--->
   <link href="css/bootstrap.min.css" rel="stylesheet"/>
   <link href="css/font-awesome.min.css" rel="stylesheet"/>
   <link href="css/animate.min.css" rel="stylesheet"/>
   <link href="css/main.css" rel="stylesheet"/>

 </head>

<body>
   <section id="header">
    <div class="row">
     <div class="col-md-2" style="font-size: 30px; color: #F2674A";> BOOK LENDER </div>
     <div class="col-md-10" style= "text-align: right">
	 
	 <a href = "#"> Home </a>
	 
	 </div>
    </div> 	 
   
   </section>
   
   <section id="section1">
     <div class="title"> LOG IN </div>
	 
	 <form action="login.php" class="form_design" method="post">
	     Username: <input type="text" placeholder="Give Your Email" name="uname"> <br/>
	     Password: <input type="password" placeholder="password" name="pass"> <br/>
		 <a href="signup_form.php"> Don't Have an account </a>| <a href="change.php"> Change Password</a></br></br>
		 
         <input type="submit" value="Log In"/>		 
	 
	 </form>
   </section>
   
   <section id="footer">

   </section>
   
   <script src="js/jquery.js"></script>
   <script src="js/bootstrap.min.js"></script>
   <script src="js/jquery.isotope.min.js"></script>
   <script src="js/wow.js"></script>
</body>
</html>