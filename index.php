<?php
include("includes/db.php");
?>
<!DOCTYPE HTML>
<html>
    <head>
    <title> My Shop</title>
    <link rel="stylesheet" href="styles/style.css" media="all">
    </head>
    <body>
        <!-- main container start -->
        <div class="main_wrappper">
            
             <!-- headers start -->
            <div class="header_wrapper"> 
                <img src="images/online-sh.jpg"  style="float: left;  height:100px; width:200px; ">
                <img src="images/shphub.jpg"  style="float: contour;  height:100px; width:200px; ">
                <img src="images/ol.png"  style="float: contour;  height:100px; width:200px; ">
                <img src="images/Online-banner.jpg" alt="image mis" style="float: right; height:100px;width:300px;">
            </div>
             <!-- headers end -->
             
              <!-- navigation start -->
            <div id="nav"> 
            
                <ul id="menu">
                    <li><a href="#"> Home </a></li>
                    <li><a href="#"> All Products </a></li>
                    <li><a href="#"> My Account </a></li>
                    <li><a href="#"> Sign up </a></li>
                    <li><a href="#"> Shopping Cart</a></li>
                    <li><a href="#">Contact us</a></li>
                </ul>
                <div>
                    <form id="form" method="get" action="result.php" enctype="multipart/form-data">
                        <input type="text" name="user_quary" placeholder="Search a product">
                        <input type="submit" value="Search">
                    </form>
                    
                </div>
                
            </div>
             <!-- navigation end -->
             
              <!-- content start -->
              <div class="conent_wrapper">
                  
                  <div id="left-sidebar">
                      <div id="sidebar_title"> Categories</div>
                       <ul id="cats">
                           <?php
                           
                           $get_cats = "select * from categories";
                           
                           $run_cats =  mysqli_query($con, $get_cats);
                           
                           while ($row_cats =  mysqli_fetch_array($run_cats)){
                               
                               $cat_id= $row_cats['cat_id'];
                               $cat_title= $row_cats['cat_title']; 
                           echo  "<li><a href='index.php?cat=$cat_id'> $cat_title </a></li>";
                           }     
                            ?>
                </ul>
                      <div id="sidebar_title"> Brands</div>
                       <ul id="cats">
                        <?php
                           
                           $get_brands = "select * from brands";
                           
                           $run_brands =  mysqli_query($con, $get_brands);
                           
                           while ($row_brands =  mysqli_fetch_array($run_brands)){
                               
                               $brand_id= $row_brands['brand_id'];
                               $brand_title= $row_brands['brand_title']; 
                           echo  "<li><a href='index.php?brand=$brand_title'> $brand_title </a></li>";
                           }     
                                ?>
                    
                </ul>
                  </div>
                          <div id="right_content">
                             
                          </div>
              </div>
            <!-- content end -->
            
              <!-- footer start-->
              <div class="footer"> <h1 style="color:gray; padding: 4px; text-align: center; margin-top: 5px;"> &COPY;2016 By:Computer Developer    </h1> </div>
               
              <!-- footer end -->
        </div>
        <!-- main container end -->
        
        
    </body>
</html>


