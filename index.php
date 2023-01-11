<!DOCTYPE html>

<html lang="en" dir="ltr">


  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!------<title> Website Layout | CodingLab</title>------>
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>


    <style type="text/css">
    	#myVideo {
         width: 100vw;
  height: 100vh;
  object-fit: cover;
  position: fixed;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
  z-index: -1;
}

/* Add some content at the bottom of the video/page */
.content {
  position: fixed;
  bottom: 0;
  color: #f1f1f1;
  width: 100%;
  padding: 20px;
}

/* Style the button used to pause/play the video */
#myBtn {
  width: 200px;
  font-size: 18px;
  padding: 10px;
  border: none;
  background: #000;
  color: #fff;
  cursor: pointer;
}

#myBtn:hover {
  background: #ddd;
  color: black;
}

    </style>

   </head>

<body>
	<!-- The video -->
<video autoplay muted loop id="myVideo">
  <source src="joyofbooks.mp4" type="video/mp4">
</video>

<!-- Optional: some overlay text to describe the video -->

  <nav>
    <div class="menu">
      <div class="logo">
        <a href="#">Online BookStore Management System</a>
      </div>
      <ul>
        <li><a href="http://localhost/book_store/indexHore.php?page=home">Home</a></li>
        <li><a href="http://localhost/book_store/indexHore.php?page=about">About</a></li>
        <li><a href="http://localhost/book_store/indexHore.php?page=home">Services</a></li>
        <li><a href="#">Contact</a></li>
       
      </ul>
    </div>
  </nav>
  <div class="content">
  	<div class="img"></div>
  <div class="center">
    <div style="color: #FFFF00;font-size: 55px;font-weight: 600;">“Take a good book to bed with you<br>books do not snore.”</div>
    <div style="color:#00acee;font-size: 52px;font-weight: 600;">Pure and upto date Books are Available
    </div>
    <div class="btns">
      <button><a style="text-decoration: none;" href="indexHore.php">Get Started!</a></button>
      <button>Subscribe</button>
    </div>
  </div>

 </div>
 <div>
 	<footer style=" background-color: #006400;font-size: 2rem;margin-top: 98vh;padding: 50px;">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
				<h2 style="text-align: center; color: white;font-size: 2rem;" class="mt-0 text-white">For more Information</h2>
                        <h2 style="text-align: center;color: white;font-size: 2rem;" class="mt-0 text-white">Contact us</h2>
<hr style="max-width: 3.5rem;border-width:0.2rem;box-sizing: content-box;height: 0;overflow: visible;margin-left: 50%;"/>
                    </div>
                </div>
                <div class="row">
                    <div style="margin-left: 30%;  font-size: 20px; color:whitesmoke;margin-top: 30px;" >
                        <i class="fas fa-phone fa-3x mb-3 text-muted"></i>
                        <div  class="text-white">+8801829063365</div>
                    </div>
                    <div >
                      <span style="margin-left: 56%; font-size: 20px;">
                        <i  class="fas fa-envelope fa-3x mb-3 text-muted"></i>
                        <!-- Make sure to change the email address in BOTH the anchor text and the link target below!-->
                        <a  href="#" class="d-block">khalidhajilacag@gmail.com</a></span>
                    </div>
                </div>
            </div>
            <br>
            <div style="text-align:center; font-size: 1.5rem;"class="container"><div style="color:white;" class="small text-center text-muted">Copyright © 2022 - Haji Online Book Store | <a href="https://www.khalidhajilacag.com/" target="_blank">Khalid Mohamed Abdi</a></div></div>
        </footer>
        
       <?php include('footer.php') ?>
 </footer>
 </div>

</body>
</html>
