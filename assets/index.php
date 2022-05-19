<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grocery Hub</title>

    <!-- add icon link -->
    <link rel = "icon" href = "images/Logo.png" type = "image/x-icon">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="style.css">

</head>
<body>

<!-- header section starts  -->

<header>

    <div class="header-1">

        <a href="#" class="logo"><i class="fas fa-shopping-basket"></i>grocery hub</a>

        <form action="" class="search-box-container">
            <input type="search" id="search-box" placeholder="Search items...">
            <label for="search-box" class="fas fa-search"></label>
        </form>

    </div>

    <div class="header-2">

        <div id="menu-bar" class="fas fa-bars"></div>

        <nav class="navbar">
            <a href="#home">home</a>
            <a href="#category">category</a>
            <a href="#product">product</a>
            <a href="#deal">deal</a>
            <a href="#contact">contact</a>
        </nav>

        <div class="icons">
            <a href="#" class="fas fa-shopping-cart"></a>
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-user-circle"></a>
        </div>

    </div>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="slideshow-container">

    <div class="mySlides fade">

      <img src="images/1.jfif" alt="" width="500" height="400" class="rad">

    </div>

    <div class="mySlides fade">

      <img src="images/2.jfif" alt="" width="500" height="400" class="rad">

    </div>

    <div class="mySlides fade">

      <img src="images/home-img.png" alt="" width="500" height="400" class="rad">

    </div>

    <div class="mySlides fade">

      <img src="images/3.jpeg" alt="" width="500" height="400" class="rad">

    </div>


    <div class="mySlides fade">

      <img src="images/4.jpeg" alt="" width="500" height="400" class="rad">

    </div>


    <div class="mySlides fade">

      <img src="images/5.jpeg" alt="" width="500" height="400" class="rad">

    </div>

    <div class="mySlides fade">

      <img src="images/6.jpeg" alt="" width="500" height="400" class="rad">

    </div>


    </div>

    <br>

    <div style="text-align:center">
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
    </div>

<script>

var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}

</script>


    <div class="content">
        <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fresh and organic..</span>
        <h3>&nbsp;&nbsp;&nbsp;&nbsp;your daily need products!</h3>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" class="btn">get started</a>
    </div>

</section>

<!-- home section ends -->

<!-- banner section starts  -->

<section class="banner-container">

    <div class="banner">
        <img src="images/banner-1.jpg" alt="" class="rad">
        <div class="content">
            <h3>special offer</h3>
            <p>upto 45% off</p>
            <a href="#" class="btn">check out</a>
        </div>
    </div>

    <div class="banner">
        <img src="images/banner-2.jpg" alt="" class="rad">
        <div class="content">
            <h3>limited offer</h3>
            <p>upto 50% off</p>
            <a href="#" class="btn">check out</a>
        </div>
    </div>

</section>

<!-- banner section ends -->

<!-- category section starts  -->

<section class="category" id="category">

    <h1 class="heading">shop by <span>category</span></h1>

    <div class="box-container">

        <div class="box">
            <h3>vegetables</h3>
            <p>upto 50% off</p>
            <img src="images/category-1.png" alt="">
            <a href="vegetable.xml" class="btn" target="_blank">shop now</a>
        </div>
        <div class="box">
            <h3>juice</h3>
            <p>upto 44% off</p>
            <img src="images/category-2.png" alt="">
            <a href="juice.xml" class="btn" target="_blank">shop now</a>
        </div>
        <div class="box">
            <h3>meat</h3>
            <p>upto 35% off</p>
            <img src="images/category-3.png" alt="">
            <a href="meat.xml" class="btn" target="_blank">shop now</a>
        </div>
        <div class="box">
            <h3>fruits</h3>
            <p>upto 12% off</p>
            <img src="images/category-4.png" alt="">
            <a href="fruit.xml" class="btn" target="_blank">shop now</a>
        </div>

    </div>

</section>

<!-- category section ends -->

<!-- product section starts  -->

<section class="product" id="product">

    <h1 class="heading">latest <span>products</span></h1>

    <div class="box-container">

        <div class="box">
            <span class="discount">-10.40%</span>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <img src="images/product-1.png" alt="">
            <h3>organic banana</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="price"> ₹45.25 <span> ₹50.50 </span> </div>
            <div class="quantity">
                <span>quantity : </span>
                <input type="number" min="1" max="1000" value="1">
                <span> /kg </span>
            </div>
            <a href="#" class="btn">add to cart</a>
        </div>

        <div class="box">
            <span class="discount">-18.33%</span>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <img src="images/product-2.png" alt="">
            <h3>organic tomato</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="price"> ₹24.50 <span> ₹30.00 </span> </div>
            <div class="quantity">
                <span>quantity : </span>
                <input type="number" min="1" max="1000" value="1">
                <span> /kg </span>
            </div>
            <a href="#" class="btn">add to cart</a>
        </div>

        <div class="box">
            <span class="discount">-20%</span>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <img src="images/product-3.png" alt="">
            <h3>organic orange</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="price"> ₹63.00 <span> ₹78.75 </span> </div>
            <div class="quantity">
                <span>quantity : </span>
                <input type="number" min="1" max="1000" value="1">
                <span> 4pcs </span>
            </div>
            <a href="#" class="btn">add to cart</a>
        </div>

        <div class="box">
            <span class="discount">-7.9%</span>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <img src="images/product-4.png" alt="">
            <h3>tetrapack milk</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="price"> ₹64.50 <span> ₹70.00 </span> </div>
            <div class="quantity">
                <span>quantity : </span>
                <input type="number" min="1" max="1000" value="1">
                <span> /L </span>
            </div>
            <a href="#" class="btn">add to cart</a>
        </div>

        <div class="box">
            <span class="discount">-3.75%</span>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <img src="images/product-5.png" alt="">
            <h3>organic grapes</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="price"> ₹115.50 <span> ₹120.00 </span> </div>
            <div class="quantity">
                <span>quantity : </span>
                <input type="number" min="1" max="1000" value="1">
                <span> /kg </span>
            </div>
            <a href="#" class="btn">add to cart</a>
        </div>

        <div class="box">
            <span class="discount">-37.45%</span>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <img src="images/product-6.png" alt="">
            <h3>natural almonts</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="price"> ₹688.00 <span> ₹1100.00 </span> </div>
            <div class="quantity">
                <span>quantity : </span>
                <input type="number" min="1" max="1000" value="1">
                <span> /kg </span>
            </div>
            <a href="#" class="btn">add to cart</a>
        </div>

        <div class="box">
            <span class="discount">-50%</span>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <img src="images/product-7.png" alt="">
            <h3>organic apple</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="price"> ₹124.50 <span> ₹250.00 </span> </div>
            <div class="quantity">
                <span>quantity : </span>
                <input type="number" min="1" max="1000" value="1">
                <span> /kg </span>
            </div>
            <a href="#" class="btn">add to cart</a>
        </div>

        <div class="box">
            <span class="discount">-6.02%</span>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <img src="images/product-8.png" alt="">
            <h3>natural butter</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="price"> ₹234.00 <span> ₹249.00 </span> </div>
            <div class="quantity">
                <span>quantity : </span>
                <input type="number" min="1" max="1000" value="1">
                <span> /(400 gm) </span>
            </div>
            <a href="#" class="btn">add to cart</a>
        </div>

        <div class="box">
            <span class="discount">-48%</span>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <img src="images/product-9.png" alt="">
            <h3>organic carrot</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="price"> ₹23.50 <span> ₹45.20 </span> </div>
            <div class="quantity">
                <span>quantity : </span>
                <input type="number" min="1" max="1000" value="1">
                <span> /(500 gm) </span>
            </div>
            <a href="#" class="btn">add to cart</a>
        </div>

    </div>

</section>

<!-- product section ends -->

<!-- deal section starts  -->

<section class="deal" id="deal">

    <div class="content">

        <h3 class="title">deal of the day</h3>
        <p>Get Exciting Discounts and Cashbacks!</p>

        <div class="count-down">
            <div class="box">
                <h3 id="day">00</h3>
                <span>day</span>
            </div>
            <div class="box">
                <h3 id="hour">00</h3>
                <span>hour</span>
            </div>
            <div class="box">
                <h3 id="minute">00</h3>
                <span>minute</span>
            </div>
            <div class="box">
                <h3 id="second">00</h3>
                <span>second</span>
            </div>
        </div>

        <a href="#" class="btn">check the deal</a>

    </div>

</section>

<!-- deal section ends -->

<!-- contact section starts  -->

<section class="contact" id="contact">

    <h1 class="heading"> <span>contact</span> us... </h1>

    <form action="process.php" method="post">

        <div class="inputBox">
            <input type="text" name="name" placeholder="Name">
            <input type="email" name="email" placeholder="Email">
        </div>

        <div class="inputBox">
            <input type="number" name="number" placeholder="Number">
            <input type="text" name="subject" placeholder="Subject">
        </div>

        <textarea placeholder="Message" name="message" id="" cols="30" rows="10"></textarea>

        <?php
        $Msg = "";
        if(isset($_GET['error']))
        {
            $Msg = " Please Fill all the fields ";
            echo '<div id="alert1">'.$Msg.'</div>';
        }

        if(isset($_GET['success']))
        {
            $Msg = " Your message has been sent ";
            echo '<div id="alert2">'.$Msg.'</div>';
        }
    ?>

        <input type="submit" name="sub" value="send message" class="btn">

    </form>

</section>

<!-- contact section ends -->

<!-- newsletter section starts  -->

<section class="newsletter">

    <h3>subscribe us for latest updates!</h3>

    <form action="process2.php" method="post">
        <input class="box" type="email" placeholder="Enter your Email" name="sub_email" >
        <input type="submit" value="subscribe" class="btn1" name="sub2">
    </form>
        <?php
        $Msg2 = "";
        if(isset($_GET['error2']))
        {
            $Msg2 = " Please enter your mail id ";
            echo '<div id="alert1">'.$Msg2.'</div>';
        }

        if(isset($_GET['success2']))
        {
            $Msg2 = " You have successfully subscribed !!! ";
            echo '<div id="alert2">'.$Msg2.'</div>';
        }
        ?>

</section>

<!-- newsletter section ends -->

<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <a href="#" class="logo"><i class="fas fa-shopping-basket"></i>grocery hub</a>
            <p>Your presence is our confidence!</p>
            <div class="share">
                <a href="#" class="btn fab fa-facebook-f"></a>
                <a href="#" class="btn fab fa-twitter"></a>
                <a href="#" class="btn fab fa-instagram"></a>
                <a href="#" class="btn fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <h3>our location</h3>
            <div class="links">
                <a href="#">banaglore</a>
                <a href="#">delhi</a>
                <a href="#">hyderabad</a>
                <a href="#">mumbai</a>
                <a href="#">kolkata</a>
            </div>
        </div>

        <div class="box">
            <h3>quick links</h3>
            <div class="links">
                <a href="#">home</a>
                <a href="#">category</a>
                <a href="#">product</a>
                <a href="#">deal</a>
                <a href="#">contact</a>
            </div>
        </div>

        <div class="box">
            <h3>speciality</h3>
            <div class="links">
                <a href="#">fruits</a>
                <a href="#">vegetables</a>
                <a href="#">liquid products</a>
                <a href="#">meat products</a>
            </div>
        </div>

    </div>

    <h1 class="credit"> designed by <span> team grocery hub </span> <a href="#" class="logo"><img src="images/Logo.png" alt="" class="delo"></a> | all rights reserved! </h1>

</section>

<!-- footer section ends -->



















<!-- custom js file link  -->
<script src="script.js"></script>

</body>
</html>
