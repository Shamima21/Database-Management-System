<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>CITY LIGHT CAFE</title>

<meta name="keywords" content="" />

<meta name="description" content="" />

<link href="n.css" rel="stylesheet" type="text/css" />
</head>


<div id="container_a">  
            
            <div id="Nevigation">
                     <ul>
                          <li><a class="active" href="Customer.php">Home</a></li>
                          <li class="dropdown">
                        <a href="#" class="dropbtn">Menus</a>
                        <div class="dropdown-content">
                          <a href="B_Menu.php">Breakfast</a>
                          <a href="Admin/L_Menu.php">Lunch</a>
                          <a href="Admin/D_Menu.php">Dinner</a>
                          <a href="Admin/O_Menu.php">Others</a>
                        </div>
                      </li>
                          <li><a href="News">News</a></li>
                          <li><a href="Contact">Contact</a></li>
                          <li><a href="About.php">About</a></li>
                           <li><a href="Map.php">Location</a></li>
                           <li><a href="Register.php">Register</a></li>
                     </ul>

                    </div>   
         

<div id="container_b">
<div id="imshow">
        <div id="menu">   

                          <ul>
                      <li><a href="Customer.php">Home</a></li>
                     <li class="dropdown">
                        <a href="" class="dropbtn">Menus</a>
                        <div class="dropdown-content">
                          <a href="B_Menu.php">Breakfast</a>
                          <a href="Admin/L_Menu">Lunch</a>
                          <a href="Admin/D_Menu">Dinner</a>
                          <a href="Admin/O_Menu">Others</a>
                        </div>
                      </li>

                       <li><a href="News.php">News</a></li>
                          <li><a href="Contact.php">Contact</a></li>
                          <li><a href="About.php">About</a></li>
                                        

                             <li class="dropdown">
                                        <a href="" class="dropbtn">Location</a>
                                        <div class="dropdown-content">
                                          <a href="Map.php">Map</a>
                                          
                                        </div>
                                      </li>
                                      <li><a href="Register.php">Register</a></li>
                    </ul>
            </div>


            <img class="mySlides " src="images/k1.jpg" style="width:100%">
        <img class="mySlides " src="images/k3.jpg" style="width:100%">
  <img class="mySlides" src="images/k2.jpg" style="width:100%">

<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel,2800);    
}
</script>
            


            </div>
            </div>



<div id="content_bg">
      <div id="content_2">
        <h2> CITY LIGHT CAFE RESTAURANT</h2>

      </div>
        </div>
    <div id="container_end">
  </div>
</div>


</div>





    
        











</body>

</html>