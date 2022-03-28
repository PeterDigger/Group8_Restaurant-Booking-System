<?php
    // Website's title
    $title = "Homepage";
    //========================================================
    include_once "includes/header.php";
    //========================================================

    // FETCH SECTION
    // fetch available car owner
    $resultCar = $conn->query("SELECT * FROM car_owner");
    
?>
<link rel="stylesheet" href="css/video.css">
<link rel="stylesheet" href="css/form.css">

<div class="parallax fade-in-text" style="
    background: url('img/interior/lounge-cafe.jpg'); 
    height:auto ; 
    filter: brightness(70%) blur(1px); 
    min-height: 700px;
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;">
</div>

<div class="parallax" style="background: none; height:auto ;">
    <div class="main">
        <div class="parent">
            <div class="box left">
            </div>
            <div class="box right">
            </div>
        </div>
    </div>

    <div class="divider" style="background-color: #333;">
        <div class="main" style="background-color: none;">
            <div class="parent">
                <div class="box fade-in-text" style="align-items:center;height:auto;display:grid;">
                    <img src="img/food/img_3.jpg" style=" border: 10px solid white;" width="100%">
                </div>
                <div class="box fade-in-text" style="align-items:center;height:auto;display:grid;">
                            <h2 style="text-align:center; font-size: 40px">FOOD MADE WITH QUALITY INGREDIENTS</h2>
                            <p style="text-align:center">Packed with lots of flavors</p>
                            <button class="contact100-form-btn" style="margin-right:2vh"><a href="menu.php" style ="color:white;">OUR MENU</a></button>
                </div>
            </div>
        </div>
    </div>
        <div class="parallax" style="background-image: url('image/bg2.jpg');height:auto ;">
            <div class="main">
                <div class="parent">
                    <div class="box fade-in-text"
                        style="background: url('img/food/img_3.jpg');display:grid; width:100%">
                        <div class="borderbox" style="background:none;backdrop-filter: blur(5px) brightness(70%);height:450px;display:grid;justify-items:center">
                            <h2 style="text-align:center; text-shadow: 2px 2px black; color: white;font-size: 40px">FIND YOUR TABLE FOR ANY OCCASION</h2>

                            <button class="contact100-form-btn" style="margin-right:2vh"><a href="table.php" style ="color:white;">RESERVE TABLE NOW</a></button>
                        </div>
                    </div>
                    <div class="box fade-in-text"
                        style="background: url('img/food/img_2.jpg');display:grid; width:100%">
                        <div class="borderbox"
                            style="background:none;backdrop-filter: blur(5px) brightness(70%);height:450px;text-shadow: 2px 2px black; color: white;display: grid; justify-items: center;">
                            <h2 style="text-align:center; font-size: 40px">ORDER ONLINE</h2>
                            <p style="text-align:center">Pick Up Your Favorite Food</p>
                            <p style="text-align:center">Don't feel like cooking today? We got you covered - order now!</p>
                            <button class="contact100-form-btn" style="margin-right:2vh"><a href="order_food.php" style ="color:white;">ORDER NOW</a></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="divider" style="background-color: #333;">
            <!--Footer-->
            <div class="main">
                <div class="parent">
                    <div class="box fade-in-text" style="height:auto;display:grid; width:100%">
                        <h2 style="font-family: 'Sedgwick Ave', cursive; font-size: 45px">Find us at:</h2>
                        <p style="text-align:center;">Bandar Labuan, 87000 Labuan, Labuan Federal Territory</p>
                    </div>
                    <div class="box fade-in-text" style="align-items:center;height:auto;display:grid;">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15891.599073514892!2d115.2460632!3d5.2783265!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xafc1262857202845!2sMortar%20Cafe%20Lounge!5e0!3m2!1sen!2smy!4v1643258742001!5m2!1sen!2smy"
                            width="600" height="450" style="border-radius:5px; border:2px solid #fff3c2"
                            allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    //========================================================
    include_once "includes/footer.php";
    //========================================================
?>