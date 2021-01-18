<!DOCTYPE html>
<html>
  <head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>BOOK LENDER</title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
  </head>
<body>

<div id="templatemo_container">
	<div id="templatemo_menu">
    	<ul>
            <li><a href="index.php" class="current">Home</a></li>
	 
                  
            <li><a href="lender_book_info.php">Lender?</a></li>  
            <li><a href="#">Cart</a></li>             
			<li><a href="company.html">Company</a></li> 
            <li><a href="contact.html">Contact</a></li>
			<li><a href="delete_account.php">Delete Account</a></li>
			<li><a href="first.php">Signout</a></li>
			<li><form action="dekhi.php"  method="post" class="form-inline md-form form-sm mt-0">
			<i class="fas fa-search" aria-hidden="true"></i>
			<input class="form-control form-control-sm ml-3 w-75" type="text" placeholder="Search" aria-label="Search" name="search">
			</form></li>
			
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
					<li><a href="fictions-tragedy.php">Fictional-Tragedy</a></li>
					<li><a href="math-physics.php">Math-Physics</a></li>
					<li><a href="fictions-horror.php">Fictional-Horror</li>

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

<div id="templatemo_content_right">
	
	<h1>Book Informations </h1>

	<form action="lender_book_db.php" class="form-group" method="post" style="float: left; width: 740px; padding: 10px; background-color: #171716; border: 1px solid #212120";>
	     <h3>Your User Email</h3></br>
		 <input type="text" name="lender_email"> <br/></br>
		 <h3>Book Name</h3></br>
		 <input type="text" name="bookname"> <br/></br>
	     <h3>Author</h3></br>
		 <input type="text" name="author"> <br/></br>
		 <h3>Categories</h3></br>
		 <input type="text" name="categories"> <br/></br>
		 <h3>Enter atmost 50% of the Original Price<br/><h4>(the lower; the better)</h4></h3></br>
		 <input type="text" name="price"> <br/><br/></br>
		 
         <input type="submit" value="Add Book"/>		 
	 
	 </form>
	
</div> <!-- end of content right -->

<div class="cleaner_with_height">&nbsp;</div>
</div> <!-- end of content -->

<div id="templatemo_footer">
   <a href="index.php">Home</a> | <a href="index.php">Search</a> | <a href="index.php">Books</a> | <a href="#">New Releases</a> | <a href="#">FAQs</a> | <a href="#">Contact Us</a><br />
Copyright © 2024 <a href="#"><strong>Your Company Name</strong></a> 

</div> <!-- end of footer -->
</div> <!-- end of container -->

</body>
</html>