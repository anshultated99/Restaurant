<?php 
  include_once 'dblink.php';
  ?>


<!DOCTYPE HTML>
<html>

<head>
    <title>Home</title>

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">

    <link rel="stylesheet" href="index.css" type="text/css">


    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Pompiere" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Luckiest+Guy" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Just+Another+Hand" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Overpass" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Permanent+Marker&display=swap" rel="stylesheet">





    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>


    <!-- Navbar -->
    <nav class="white">
        <div class="nav-wrapper">
            <a href="#home" class="brand-logo">
                <p> Bouganvilla </p>
            </a>
            <a href="#" data-activates="mobile-demo" class="button-collapse"><i
                    class="material-icons black-text">menu</i></a>
            <ul class="right hide-on-med-and-down">
                <li><a href="#home">Home</a></li>
                <li><a href="#menu">Menu</a></li>
                <li><a href="#order">Order</a></li>
            </ul>
            <ul class="side-nav" id="mobile-demo">
                <li><a href="#home">Home</a></li>
                <li><a href="#menu">Menu</a></li>
                <li><a href="#order">Order</a></li>
            </ul>
        </div>
    </nav>



    <div class="slide" id="home">
        <!-- Slideshow container -->
        <center>
            <div class="slideshow-container">

                <!-- Full-width images with number and caption text -->
                <div class="mySlides fade">
                    <div class="numbertext">1 / 4</div>
                    <img src="Images/Pizza.jpg" style="width:100%">
                    <div class="text" style="color:black;  font-size: 40px; font-family: 'Permanent Marker', cursive;">
                        Pizza</div>
                </div>

                <div class="mySlides fade">
                    <div class="numbertext">2 / 4</div>
                    <img src="Images/Bruschetta.jpg" style="width:100%">
                    <div class="text" style="color:black;  font-size: 40px; font-family: 'Permanent Marker', cursive;">
                        Bruschetta</div>
                </div>

                <div class="mySlides fade">
                    <div class="numbertext">3 / 4</div>
                    <img src="Images/Pasta.jpg" style="width:100%">
                    <div class="text" style="color:black; font-size: 40px; font-family: 'Permanent Marker', cursive;">
                        Pasta</div>
                </div>

                <div class="mySlides fade">
                    <div class="numbertext">4 / 4</div>
                    <img src="Images/Lasagna.jpg" style="width:100% ; height:60% ;">
                    <div class="text" style="color:white;  font-size: 40px; font-family:'Permanent Marker', cursive;">
                        Lasagna</div>
                </div>

                <!-- Next and previous buttons -->
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
            </div>
            <br>

            <!-- The dots/circles -->
            <div style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
                <span class="dot" onclick="currentSlide(4)"></span>
            </div>


    </div>



    <div class="order-box" id="box">
        <div class="order-top-pane" >
            <!-- Your Order -->
            <span class='openclose' id='opderTP' style="cursor:pointer; font-size:15px; " >-</span>
        </div>
        <div class="order-main-pane" Id='orderMP'>
            <div class="order-list-box" id='orderLB'>

            </div>

        </div>
    </div>

        <!--since the div with id orderMP is below the div(order-top-pane) to which we have attached onclick function, so bfore the orderMP loads we are calling onclick so it return null value-->


    

        <div class="menu-body" id="menu">

        <section class='add-modification-box'>
            <p style=" font-family: 'Montserrat', cursive;  font-weight:bold">Specify Modification or add-ons : </p>
                <input type="text" width="100%" height="100%" id='mb-text' placeholder="Eg. Toppings, Spicy etc" style=" font-family: 'Montserrat', cursive; ">
            <p style=" font-family: 'Montserrat', cursive; font-weight:bold" >Quantity : </p>
                <input type="number" min=1 max=10 width="0" height="100%" id='mb-quan' required style=" font-family: 'Montserrat', cursive; ">
            <button class='box-button' Id='mb-add' style=" font-family: 'Montserrat', cursive; ">Add</button>
            <button class='box-button' Id='mb-cancel' style=" font-family: 'Montserrat', cursive; ">Cancel</button>
        </section>

        <section class='login-regist-box'>
            <div class='log-reg-nav'>
                <span class='lrn-log' style=" font-family: 'Montserrat', cursive;">Login</span>
                <span class='lrn-reg' style=" font-family: 'Montserrat', cursive; ">Register</span>
            </div>

            <div class="log-rev-main">
                <form action="" class="login-form" method="post">
                <p style=" font-family: 'Montserrat', cursive;  font-weight:bold">Username :  </p>
                    <input type="text" name="username" placeholder="Eg. James" required autofocus style=" font-family: 'Montserrat', cursive; "> 
                <p style=" font-family: 'Montserrat', cursive;  font-weight:bold"> Password : </p>
                    <input type="password" name="password" required style=" font-family: 'Montserrat', cursive; ">
                <button class='box-button' Id='lg-submit' type="Submit" name="Submit" style=" font-family: 'Montserrat', cursive; " > Submit</button>
       

                <button class='box-button' Id='lg-cancel'style=" font-family: 'Montserrat', cursive; ">Cancel</button>
                </form>

               <form action="" class="register-form">
                    <p style=" font-family: 'Montserrat', cursive;  font-weight:bold">Email : </p>
                        <input type="email" id="email-id" placeholder="Eg. James@gunn.com" required autofocus style=" font-family: 'Montserrat', cursive; ">
                    <p style=" font-family: 'Montserrat', cursive;  font-weight:bold">Username : </p>
                        <input type="text" name="username" placeholder="Eg. James" required autofocus style=" font-family: 'Montserrat', cursive; ">
                    <p style=" font-family: 'Montserrat', cursive;  font-weight:bold">Password : </p>
                        <input type="password" name="password" required  style=" font-family: 'Montserrat', cursive; ">
                    <p style=" font-family: 'Montserrat', cursive;  font-weight:bold">Contact no : </p>
                        <input type="tel" maxlength="12" id="password" required  style=" font-family: 'Montserrat', cursive; ">
                    <p style=" font-family: 'Montserrat', cursive;  font-weight:bold">Address : </p>
                        <input type="text" id="password" required  style=" font-family: 'Montserrat', cursive; ">
                    <button class='box-button' Id='lg-submit' type="Submit">Submit</button>
                    <button class='box-button' Id='lg-cancel'>Cancel</button>
                </form>
            </div>
        </section>

        <!-- Section starts: Appetizers -->
        <div class="menu-section">

            <h2 class="menu-section-title">MAIN COURSE</h2>
            <!-- starts -->

            <?php
                    $sql = "SELECT * from menu where item_cat='maincourse';";
                    $result = mysqli_query($conn,$sql);
                    $result_check = mysqli_num_rows($result);

                    echo("");
                    if($result_check>0){
                        while($row = mysqli_fetch_assoc($result)){
                            echo("<div class='menu-item'>
            
            
                            <div class='menu-item-name'>
                               ".$row['item_name']."
                            </div>
            
                            <div class='menu-item-price'>
                            Rs. ".$row['item_price']."
                            </div>
            
                            <div class='menu-item-description'>
                            ".$row['item_desc']."
                            </div>
            
                        </div>");
                        }
                    }
                    
                ?>
            


            <!-- Item ends -->

        </div>
        <!-- Section ends: Appetizers -->

        <!-- Section starts: Drinks -->

        <div class="menu-section">

            <h2 class="menu-section-title"> DESSERTS</h2>

            <!-- Item starts -->
            <?php
                    $sql = "SELECT * from menu where item_cat='desserts';";
                    $result = mysqli_query($conn,$sql);
                    $result_check = mysqli_num_rows($result);

                    echo("");
                    if($result_check>0){
                        while($row = mysqli_fetch_assoc($result)){
                            echo("<div class='menu-item'>
            
            
                            <div class='menu-item-name'>
                               ".$row['item_name']."
                            </div>
            
                            <div class='menu-item-price'>
                            Rs. ".$row['item_price']."
                            </div>
            
                            <div class='menu-item-description'>
                            ".$row['item_desc']."
                            </div>
            
                        </div>");
                        }
                    }
                    
                ?>
            <!-- Item ends -->

        </div>

    </div>

    

                
























    <script>
        $(document).ready(function () {
            console.log("ready!");
            $(".button-collapse").sideNav();
        });
    </script>

    <script>
        var slideIndex = 1;
        showSlides(slideIndex);

        // Next/previous controls
        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        // Thumbnail image controls
        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("dot");
            if (n > slides.length) { slideIndex = 1 }
            if (n < 1) { slideIndex = slides.length }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
        }


        var currentUser
        var data, name, price, quan, addMods
        var itemDetails = []
        $(document).ready(function(){
            $(".order-top-pane").click(function(){
            $("#orderMP").slideToggle(500);
            if($(".openclose").text()=="+")
                $(".openclose").text("-")
            else
            $(".openclose").text("+")

            
            
            })
            
            $(".menu-item-name").click(function(){
                if(currentUser!=null){
                    console.log(itemDetails)
                    $('.order-top-pane').append(`${currentUser}'s Order`)
                    name=$(this).attr('id')
                    console.log(checkIfExists(itemDetails,name))
                    if(checkIfExists(itemDetails,name)>=0)
                        alert('item selected axits')
                    else{
                        $('.add-modification-box').css('display','block')                    
                        //price=Number(data.substring(data.indexOf('-')+1,data.length))
                    }
                }
                else{
                    $('.login-regist-box').css('display','block')
                }
            })

            function addItem(){
                
            }

            $('#mb-cancel').click(function(){
                $('.add-modification-box').css('display','none')
            })

            function checkIfExists(detailData,keyItemname){
                return detailData.findIndex(element => element.itemName == keyItemname)
            }

            $('#mb-add').click(function(){
                quan = Number($('#mb-quan').val());
                addMods = $('#mb-text').val()
                itemDetails.push({itemName: name, itemPrice: price, itemQuantity: quan, itemAdds: addMods})
                console.log(itemDetails)
                $(".order-box").css('display','block')
                $('#orderLB').append(`<span class="order-name-box">${name}(${quan})<span class="order-name-cancel" onclick="$(this).parent().css('display','none')">x<\span></span>`)
                $('.order-top-pane').css('display','block')
                $('.order-main-pane').css('display','block')
                $('.add-modification-box').css('display','none')
            })

            $('.order-name-box').click(function(){
                
            })

            $('#lg-cancel').click(function(){
                $('.login-regist-box').css('display','none')
            })

            $('.lrn-log').click(function(){
                {$('.login-form').css('display','block');$('.register-form').css('display','none')}
            })
            $('.lrn-reg').click(function(){
                {$('.register-form').css('display','block');$('.login-form').css('display','none')}
            })
            
        })


    </script>




    
</body>
<style>
    *{
  margin: 0px;
  padding: 0px;
}
body {
  margin: 0px;
  padding: 0px;
}
/* Navbar */
nav {
  background-color: rgba(255, 255, 255, 1);
  min-height: 69px;
  position: fixed;
  top:0px;
  z-index: 2;
}

.material-icons {
  vertical-align: middle;
  margin-top: 5px;
}
nav ul li a {
  color: black;
  font-family: 'Righteous', cursive;
  font-size: 25px;
}
nav li{
  display: inline-block;
  margin-left: 30px;
  padding-top: 35px;
  margin-right: 30px;
  position: relative;
}

.brand-logo p{
  color: black;  
  padding-left:10px;
  font-family: 'Righteous', cursive;
}
nav a {
    color: black;
    text-decoration: none;
    text-transform: uppercase;
    font-size: 30px;
}
nav a:hover{
    color:black;
    background-color: rgba(0,0,0,0.0) !important
}
nav a::before{
    content:'';
    display: block;
    height: 5px;
    background-color: black;
    top: 0;
    width:0%;
}
nav a:hover::before{
    width: 100%;
    transition: all ease-in-out 100ms;
}

/* Slideshow container */
.slideshow-container {
    max-width: 1000px;
    position: relative;
    justify-content: center;
    padding-top:150px;
  }
  
  .slide{
      height:100vh;

      
  }
  /* Hide the images by default */
  .mySlides {
    display: none;
  }
  
  /* Next & previous buttons */
  .prev, .next {
    cursor: pointer;
    position: absolute;
    width: auto;
    margin-top: -22px;
    padding: 16px;
    color: white;
    font-weight: bold;
    font-size: 18px;
    transition: 0.6s ease;
    border-radius: 0 3px 3px 0;
    user-select: none;
  }
  .prev{
      left:0px;
      top:57%;
  }
  .next{
     right:0px;
     top:57%;
  }

  @media only screen and (max-width: 992px) {
    .prev , .next{
        top:65%;
        cursor: pointer;
    }
  }

  
  /* Position the "next button" to the right */
  .next {
    right: 0;
    border-radius: 3px 0 0 3px;
  }
  
  /* On hover, add a black background color with a little bit see-through */
  .prev:hover, .next:hover {
    background-color: rgba(0,0,0,0.8);
  }
  
  /* Caption text */
  .text {
    color: #f2f2f2;
    font-size: 15px;
    padding: 8px 12px;
    position: absolute;
    bottom: 8px;
    width: 100%;
    text-align: center;
  }
  
  /* Number text (1/3 etc) */
  .numbertext {
    color: #f2f2f2;
    font-size: 12px;
    padding: 8px 12px;
    position: absolute;
    top: 0;
  }
  
  /* The dots/bullets/indicators */
  .dot {
    cursor: pointer;
    height: 15px;
    width: 15px;
    margin: 0 2px;
    background-color: #bbb;
    border-radius: 50%;
    display: inline-block;
    transition: background-color 0.6s ease;
  }
  
  .active, .dot:hover {
    background-color: #717171;
  }
  
  /* Fading animation */
  .fade {
    -webkit-animation-name: fade;
    -webkit-animation-duration: 1.5s;
    animation-name: fade;
    animation-duration: 1.5s;
  }
  
  @-webkit-keyframes fade {
    from {opacity: .4}
    to {opacity: 1}
  }
  
  @keyframes fade {
    from {opacity: .4}
    to {opacity: 1}
  }
  
  .menu-body {
    max-width: 680px;
    margin: 0 auto;
    display: block;
    color: rgb(92, 92, 92);
    padding-top:150px;
  }

  @media only screen and (max-width: 992px) {
    .menu-body{
        width:90%;
    }
  }
  
  .menu-section {
    margin-bottom: 80px;
  }
  
  .menu-section-title {
    font-family: georgia;
    font-size: 50px;
    display: block;
    font-weight:normal;
    margin: 20px 0; 
    text-align: Center;
  }
  
  .menu-item {
    margin: 35px 0;
    font-size: 18px;
  }
  
  .menu-item-name{
    font-family: helvetica;
    font-weight: bold;
    border-bottom: 2px dotted rgb(213, 213, 213);
  }
  
  .menu-item-name:hover{
      cursor: pointer;
  }
  .menu-item-description {
    font-style: italic;
    font-size: .9em;
    line-height: 1.5em;
  }
  
  .menu-item-price{
    float: right;
    font-weight: bold;
    font-family: arial;
    margin-top: -22px;
  }
  
  .order-box{
      width:30%;
      
      position: fixed; 
      right:0%;
      bottom:0%;
      opacity: 1;
      display: none;
  }
  .order-top-pane{
    height: 40px;   
    border: 1px black solid;
      padding:10px;
      color:white;
      background-color: black;
      
  }
  .openclose{
    float:right;
    color:white;
    font-size:100%;
    font-family: Arial, Helvetica, sans-serif;
    font-weight:400;
  }

  .order-main-pane{
    height:50vh;
    border:1px solid black;
    background-color: white;
    display:none;
    padding:15px;
  }

  .order-list-box{
    border: 1px solid black;
    width: 100%;
    height: 25%;
    padding:10px;
  }

  .order-name-box {
    padding: 5px;
    width: auto;
    height: auto;
    background-color:lightgrey;
    color: black;
    margin-right:5px;
    border-radius:25px;
}

.order-name-cancel {
    vertical-align:18%;
    right:0%;
    color: red;
    border: 2px solid red;
    border-radius: 50%;
    padding: 2px 6px 4px 6px;
    font-size:12px;
    cursor: pointer;
}

.add-modification-box{
  width:40%;
  height:32%;
  position: fixed; 
  vertical-align:center;
  justify-content: center;
  left:30%;
  top:40%;
  opacity: 1;
  border:1px solid black;
  background-color: white;
  display:none;
  padding:10px;
  font-size:100%;
  box-shadow: 5px 6px 6px #888888;
  color:black;
}

.box-button{
  padding:5px 10px;
 background-color : #4af0c4;
  color:black;
  font-size:100%;
  font-weight:400;
  border-radius: 25px;
  border:none;
  margin-right:5px;
}
.box-button:hover{
    display: inline-block;
  vertical-align: middle;
  -webkit-transform: perspective(1px) translateZ(0);
  transform: perspective(1px) translateZ(0);
  box-shadow: 0 0 1px rgba(0, 0, 0, 0);
  -webkit-transition-duration: 0.3s;
  transition-duration: 0.3s;
  -webkit-transition-property: transform;
  transition-property: transform;
}

.box-button:hover, .box-button:focus, .box-button:active {
  -webkit-transform: scale(1.1) rotate(7deg);
  transform: scale(1.1) rotate(7deg);
  background-color: #248a6f;
}

.login-regist-box{
  width:40%;
  height:auto;
  position: fixed; 
  vertical-align:center;
  justify-content: center;
  left:30%;
  top:20%;
  opacity: 1;
  border:1px solid black;
  background-color: white;
  display:none; 
  padding:15px;
  font-size:100%;
  font-family:Arial, Helvetica, sans-serif;
  color:black;
  box-shadow: 5px 6px 6px #888888;
}

.log-reg-nav > span{
  cursor:pointer;
  border:1px solid black;
  border-bottom:none;
  z-index:1;
  opacity: 2;
  display:inline-block;
  padding:5px 10px 7px 10px;
  font-size:100%;
  font-family:Arial, Helvetica, sans-serif;
  font-weight:600;
  border-top-left-radius: 7px;
  border-top-right-radius: 7px;
  color:black;
}

.log-rev-main > form{
  border-top:1px solid black;
  font-size:100%;
  font-family:Arial, Helvetica, sans-serif;
  padding:10px 5px;
}

.register-form{
  display:none;
}
</style>

</html>