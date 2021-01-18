<?php   
require_once("DBconnection.php");
 session_start();  
 
 if(isset($_POST["add_to_cart"]))  
 {  
      if(isset($_SESSION["shopping_cart"]))  
      {  
           $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");  
           if(!in_array($_GET["id"], $item_array_id))  
           {  
                $count = count($_SESSION["shopping_cart"]);  
                $item_array = array(  
                     'item_id'               =>     $_GET["id"],  
                     'item_name'               =>     $_POST["hidden_name"],  
                     'item_price'          =>     $_POST["hidden_price"],  
                     'item_quantity'          =>     $_POST["quantity"]  
                );  
                $_SESSION["shopping_cart"][$count] = $item_array;  
           }  
           else  
           {  
                echo '<script>alert("Item Already Added")</script>';  
                echo '<script>window.location="chemistry.php"</script>';  
           }  
      }  
      else  
      {  
           $item_array = array(  
                'item_id'               =>     $_GET["id"],  
                'item_name'               =>     $_POST["hidden_name"],  
                'item_price'          =>     $_POST["hidden_price"],  
                'item_quantity'          =>     $_POST["quantity"]  
           );  
           $_SESSION["shopping_cart"][0] = $item_array;  
      }  
 }  
 if(isset($_GET["action"]))  
 {  
      if($_GET["action"] == "delete")  
      {  
           foreach($_SESSION["shopping_cart"] as $keys => $values)  
           {  
                if($values["item_id"] == $_GET["id"])  
                {  
                     unset($_SESSION["shopping_cart"][$keys]);  
                     echo '<script>alert("Item Removed")</script>';  
                     echo '<script>window.location="chemistry.php"</script>';  
                }  
           }  
      }  
 }  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
          <title>BOOK LENDER</title> 
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
			<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	
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
			<li><a href="first.php">Signout</a></li>
			<li>
				<form action="dekhi.php"  method="post" class="form-inline md-form form-sm mt-0">
				<i class="fas fa-search" aria-hidden="true"></i>
				<input class="form-control form-control-sm ml-3 w-75" type="text" placeholder="Search"  name="search">
				</form>
			</li>
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
        </div>
		
           <br />  
           <div class="container" style="width:700px;">  
                <h3 align="center"Chemistry Books</h3><br />  
                <?php  
                $query = "SELECT * FROM chemistry";  
                $result = mysqli_query($conn, $query);  
                if(mysqli_num_rows($result) > 0)  
                {  
                     while($row = mysqli_fetch_array($result))  
                     {  
                ?>  
                <div class="col-md-4">  
                     <form method="post" action="chemistry.php?action=add&id=<?php echo $row["chemistry_id"]; ?>">  
                          <div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">  
                              
                               <h4 class="text-info"><?php echo $row["book_name"]; ?></h4>  
                               <h4 class="text-danger">Tk. <?php echo $row["price"]; ?></h4>  
                               
                               <input type="hidden" name="hidden_name" value="<?php echo $row["book_name"]; ?>" />  
                               <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />  
                               <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />  
                          </div>  
                     </form>  
                </div>  
                <?php  
                     }  
                }  
                ?>  
                <div style="clear:both"></div>  
                <br />  
                <h3>Order Details</h3>  
                <div class="table-responsive">  
                     <table class="table table-bordered">  
                          <tr>  
                               <th width="40%">Item Name</th>  
                               <th width="10%"></th>  
                               <th width="20%">Price</th>  
                               <th width="15%">Total</th>  
                               <th width="5%">Action</th>  
                          </tr>  
                          <?php   
                          if(!empty($_SESSION["shopping_cart"]))  
                          {  
                               $total = 0;  
                               foreach($_SESSION["shopping_cart"] as $keys => $values)  
                               {  
                          ?>  
                          <tr>  
                               <td><?php echo $values["item_name"]; ?></td>  
                               <td></td>  
                               <td>Tk.<?php echo $values["item_price"]; ?></td>  
                               <td>Tk.<?php echo $values["item_price"]; ?></td>  
                               <td><a href="chemistry.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>  
                          </tr>  
                          <?php  
                                    $total = $total +  $values["item_price"];  
                               }  
                          ?>  
                          <tr>  
                               <td colspan="3" align="right">Total</td>  
                               <td align="right">Tk. <?php echo number_format($total, 2); ?></td>  
                               <td></td>  
                          </tr>  
                          <?php  
                          }  
                          ?>  
                     </table>  
                </div>  
           </div>  
           <br />  
      </div>
	   <div id="templatemo_footer">
    
	       <a href="subpage.html">Home</a> | <a href="subpage.html">Search</a> | <a href="subpage.html">Books</a> | <a href="#">New Releases</a> | <a href="#">FAQs</a> | <a href="#">Contact Us</a><br />
        Copyright © 2024 <a href="#"><strong>Your Company Name</strong></a> 

</div>
	  </body>  
 </html>