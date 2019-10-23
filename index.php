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
            <span class='openclose' id='opderTP'>-</span>
        </div>
        <div class="order-main-pane" Id='orderMP'>
            <div class="order-list-box" id='orderLB'>

            </div>

        </div>
    </div>

        <!--since the div with id orderMP is below the div(order-top-pane) to which we have attached onclick function, so bfore the orderMP loads we are calling onclick so it return null value-->


    

        <div class="menu-body" id="menu">

        <section class='add-modification-box'>
            Specify Modification or add-ons : 
            <input type="text" width="100%" height="100%" id='mb-text' placeholder="Eg. Toppings, Spicy etc">
            Quantity:
            <input type="number" min=1 max=10 width="0" height="100%" id='mb-quan' required>
            <button class='box-button' Id='mb-add'>Add</button>
            <button class='box-button' Id='mb-cancel'>Cancel</button>
        </section>

        <section class='login-regist-box'>
            <div class='log-reg-nav'>
                <span class='lrn-log'>Login</span>
                <span class='lrn-reg'>Register</span>
            </div>

            <div class="log-rev-main">
                <form action="" class="login-form">
                    Username:
                    <input type="text" id="username" placeholder="Eg. James" required autofocus>
                    Password:
                    <input type="password" id="password" required >
                    <button class='box-button' Id='lg-submit' type="Submit">Submit</button>
                    <button class='box-button' Id='lg-cancel'>Cancel</button>
                </form>

                <form action="" class="register-form">
                    Email-id:
                    <input type="email" id="email-id" placeholder="Eg. James@gunn.com" required autofocus>
                    Username:
                    <input type="text" id="username" placeholder="Eg. James" required autofocus>
                    Password:
                    <input type="password" id="password" required >
                    Contact No.:
                    <input type="tel" maxlength="12" id="password" required >
                    Address:
                    <input type="text" id="password" required >
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


        var currentUser='Dishank'
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

</html>