<!DOCTYPE html>
<html>
  <head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>BOOK LENDER</title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
	<link href="css/bootstrap.min.css" rel="stylesheet"/>
   <link href="css/font-awesome.min.css" rel="stylesheet"/>
   <link href="css/animate.min.css" rel="stylesheet"/>
   <link href="css/main.css" rel="stylesheet"/>
  </head>
<body>

<div id="templatemo_container">
	<div id="templatemo_menu">
    	<ul>
            <li><a href="index.php" class="current">Home</a></li>
			<!--<li><a href="#">Search</a></li>-->
            <!--<li><a href="#">Books</a></li>-->            
            <li><a href="lender_book_info.php">Lender?</a></li>  
            <li><a href="#">Cart</a></li>             
			<li><a href="company.html">Company</a></li> 
            <li><a href="contact.html">Contact</a></li>
			<li><a href="delete_account.php">Delete Account</a></li>
    	</ul>
    </div> <!-- end of menu -->
    
    <div id="templatemo_header">
    	
    </div> <!-- end of header -->
    
    <div id="templatemo_content">
    	
        <div id="templatemo_content_left">
        	<div class="templatemo_content_left_section">
            	<h1>Categories</h1>
                <ul>
                    <li><a href="chemistry.php">Chemistry</a></li>
                    <li><a href="physics.php">Physics</a></li>
                    <li><a href="math.php">Math</a></li>
                    <li><a href="fiction.php">Fictions</a></li>
                    <li><a href="tragedy.php">Tragedy</a></li>
                    <li><a href="horror.php">Horror</a></li>

            	</ul>
            </div>
			<div class="templatemo_content_left_section">
            	<h1>Bestsellers</h1>
                <ul>
                    <li><a href="#">Where The Crawdads Sing </a></li>
                    <li><a href="#">Becoming Michelle Obama</a></li>
                    <li><a href="#">Girl, Wash Your Face</a></li>
                    <li><a href="#">Fire and Fury</a></li>
                    <li><a href="#">The Wonky Donkey</a></li>
                    <li><a href="#">Dog Man and Cat Kid</a></li>
            	</ul>
            </div>
            
            <div class="templatemo_content_left_section">                
                <a href="http://validator.w3.org/check?uri=referer"><img style="border:0;width:88px;height:31px" src="http://www.w3.org/Icons/valid-xhtml10" alt="Valid XHTML 1.0 Transitional" width="88" height="31" vspace="8" border="0" /></a>
<a href="http://jigsaw.w3.org/css-validator/check/referer"><img style="border:0;width:88px;height:31px"  src="http://jigsaw.w3.org/css-validator/images/vcss-blue" alt="Valid CSS!" vspace="8" border="0" /></a>
			</div>
        </div> <!-- end of content left -->
        
       
		 <section id="section1" style="background:#000000">
     <div class="title" style="color:#FFEBCD"> CART </div>
		<div style="margin-left:10%; margin-right:10%; margin-top:50px; margin-bottom:50px; text-align:center; background:3000000">
			<div class="row" style="padding:5px">
				<div class="col-md-3" style="color:#FFEBCD; font-size:15px">Book id </div>
				<div class="col-md-3" style="color:#FFEBCD; font-size:15px">Book Name </div>
				<div class="col-md-3" style="color:#FFEBCD; font-size:15px">Price</div>
				<div class="col-md-3" style="color:#FFEBCD; font-size:15px">Lender Email </div>
		   </div>
		   
		   <?php<
		   require_once("DBconnection.php");
		   $sql = "select * from cart";
		   $result = mysqli_query($conn, $sql);
		   
		   if(mysqli_num_rows($result) != 0){
			   while($row = mysqli_fetch_array($result){
		   ?>
		   
		    <div class="row" style="padding:5px;">
				<div class="col-md-3"> <?php echo $row[0]; ?> </div>
				<div class="col-md-3"> <?php echo $row[1]; ?> </div>
				<div class="col-md-3"> <?php echo $row[2]; ?> </div>
				<div class="col-md-3"> <?php echo $row[3]; ?> </div>
			</div>
                  
	 
	 
   </section>
		
    	<div class="cleaner_with_height">&nbsp;</div>
    </div> <!-- end of content -->
    
    <div id="templatemo_footer">
    
	       <a href="subpage.html">Home</a> | <a href="subpage.html">Search</a> | <a href="subpage.html">Books</a> | <a href="#">New Releases</a> | <a href="#">FAQs</a> | <a href="#">Contact Us</a><br />
        Copyright © 2024 <a href="#"><strong>Your Company Name</strong></a> 
        <!-- Credit: www.templatemo.com -->	</div> 
    <!-- end of footer -->
<!--  Free CSS Template www.templatemo.com -->
</div> <!-- end of container -->
<!-- templatemo 086 book store -->
<!-- 
Book Store Template 
http://www.templatemo.com/preview/templatemo_086_book_store 
-->
</body>
</html>