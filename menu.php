<?php
    $title = "Menu";
    include_once 'includes/header.php'
?>

    <!-- head stuff -->
    <link rel="stylesheet" type="text/css" href="css/form.css">
    <!-- library font -->
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <style>
        body{
            font-family: 'Poppins' ;
            font-size: 20px;
            background-image:url("img/xav/home_bg.jpg");
        }
        
        .menu-container{
            display:grid;
            grid-template-columns: auto auto;
            grid-template-rows: 30vh 30vh 30vh 30vh 30vh ;
            grid-gap: 30px;
        }
        
        .menu-cont{
            display:grid;
            grid-template-columns: auto;
            grid-template-rows: 30vh 30vh 30vh 30vh 30vh;
            grid-gap: 30px;
        }

        .menu-card{
            background-color:whitesmoke; position:relative; display:flex; flex-direction:row; box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2); border-radius:10px;
        }

        .title{
            background-color:whitesmoke; margin:1vh; width:10%;text-align:center; color:#2c1e16; padding:20px;
        }

        .menu-description{
            font-size:14px;
        }

    </style>

<body>
    <!-- menu goes here -->
    
    <!-- the whole box  -->
    <div style="align-items:center; display:flex; flex-direction:column; ">
        
        <!-- to combine the menu title and menu stuff  -->
        <div style="align-items:center; display:flex; flex-direction:column; width:100%;">
            
            <!-- title  -->
            <div class="title">FOOD MENU</div>
            
            <!-- initial menu container  -->
            <div class="menu-container">
                <!--first burger-->
                <div class="menu-card">
                    <div style=" overflow: hidden;">
                        <img src="img/menu/1.jpg" style="width:100%; height:30vh; border-radius:10px 0 0 10px;">
                    </div>
                    <div style="display:flex; flex-direction:column; position:relative; justify-content: space-between;">
                        <div style=" margin-left:40px; margin-right:30px; margin-top:40px; max-width:290px;">
                            <div>BEEF BURGER</div>
                            <div>RM16.50</div>
                            <div class="menu-description">BEEF PATTY, BEEF BACON, SESAME SEEDS, LETTUCE</div>
                        </div>
                        
                        <div style="margin-left:40px; margin-bottom:50px;">

                        </div>
                    </div>
                </div>
                
                <!--second burger -->
                <div class="menu-card">
                    <div style=" overflow: hidden;">
                        <img src="img/menu/2.jpg" style="width:100%; height:30vh; border-radius:10px 0 0 10px;">
                    </div>
                    <div style="display:flex; flex-direction:column; position:relative; justify-content: space-between;">
                        <div style=" margin-left:40px; margin-right:30px; margin-top:40px; max-width:290px;">
                            <div>POLO PICCATA CHICKEN BURGER</div>
                            <div>RM17.50</div>
                            <div class="menu-description">FRIED CHICKEN PATTY, SOUR SAUCE, SOFT BUT CRISPY PATTY</div>
                        </div>
                        
                        <div style="margin-left:40px; margin-bottom:50px;">

                        </div>
                    </div>
                </div>
                
                <!-- three burger -->
                <div class="menu-card">
                    <div style=" overflow: hidden;">
                        <img src="img/menu/3.jpg" style="width:100%; height:30vh; border-radius:10px 0 0 10px;">
                    </div>
                    <div style="display:flex; flex-direction:column; position:relative; justify-content: space-between; max-width: 500px;">
                        <div style=" margin-left:40px; margin-right:30px; margin-top:40px; max-width:290px;">
                            <div>NASI LEMAK</div>
                            <div>RM10.90</div>
                            <div class="menu-description">COCONUT MILK RICE, SAMBAL, FRIED ANCHOVIES, PEANUTS, CUCUMBER</div>
                        </div>
                        
                        <div style="margin-left:40px; margin-bottom:50px;">

                        </div>
                    </div>
                </div>
                
                <!-- four burger -->
                <div class="menu-card">
                    <div style=" overflow: hidden;">
                        <img src="img/menu/4.jpg" style="width:100%; height:30vh; border-radius:10px 0 0 10px;">
                    </div>
                    <div style="display:flex; flex-direction:column; position:relative; justify-content: space-between;">
                        <div style=" margin-left:40px; margin-right:30px; margin-top:40px; max-width:290px;">
                            <div>GARLIC CHICKEN SPAGHETTI</div>
                            <div>RM16.90</div>
                            <div class="menu-description">SUN DRIED TOMATOES, SPAGHETTI, CARBONARA SAUCE, CHICKEN CHUNKS</div>
                        </div>
                        
                        <div style="margin-left:40px; margin-bottom:50px;">

                        </div>
                    </div>
                </div>
                
                <!-- five burger -->
                <div class="menu-card">
                    <div style=" overflow: hidden;">
                        <img src="img/menu/5.jpg" style="width:100%; height:30vh; border-radius:10px 0 0 10px;">
                    </div>
                    <div style="display:flex; flex-direction:column; position:relative; justify-content: space-between;">
                        <div style=" margin-left:40px; margin-right:30px; margin-top:40px; max-width:290px;">
                            <div>BEEF SOTO</div>
                            <div>RM15.90</div>
                            <div class="menu-description">BEEF STEW, MEATBALLS, SWEET SOY SAUCE, GINGER, FRIED SHALLOTS, CELERY LEAVES</div>
                        </div>
                        
                        <div style="margin-left:40px; margin-bottom:50px;">

                        </div>
                    </div>
                </div>
                
                <!-- six burger -->
                <div class="menu-card">
                    <div style=" overflow: hidden;">
                        <img src="img/menu/6.jpg" style="width:100%; height:30vh; border-radius:10px 0 0 10px;">
                    </div>
                    <div style="display:flex; flex-direction:column; position:relative; justify-content: space-between;">
                        <div style=" margin-left:40px; margin-right:30px; margin-top:40px; max-width:290px;">
                            <div>SIGNATURE MORTAR LAKSA</div>
                            <div>RM16.50</div>
                            <div class="menu-description">COCONUT MILK, SHRIMP, FISH CAKES, CURRY PASTE</div>
                        </div>
                        
                        <div style="margin-left:40px; margin-bottom:50px;">

                        </div>
                    </div>
                </div>
                
                <!-- seven burger -->
                <div class="menu-card">
                    <div style=" overflow: hidden;">
                        <img src="img/menu/7.jpg" style="width:100%; height:30vh; border-radius:10px 0 0 10px;">
                    </div>
                    <div style="display:flex; flex-direction:column; position:relative; justify-content: space-between;">
                        <div style=" margin-left:40px; margin-right:30px; margin-top:40px; max-width:290px;">
                            <div>FISH & CHIPS</div>
                            <div>RM18.50</div>
                            <div class="menu-description">POTATO FRIES, FISH FILLET, CREAMY SAUCE</div>
                        </div>
                        
                        <div style="margin-left:40px; margin-bottom:50px;">

                        </div>
                    </div>
                </div>
                
                <!-- eight burger -->
                <div class="menu-card">
                    <div style=" overflow: hidden;">
                        <img src="img/menu/8.jpg" style="width:100%; height:30vh; border-radius:10px 0 0 10px;">
                    </div>
                    <div style="display:flex; flex-direction:column; position:relative; justify-content: space-between;">
                        <div style=" margin-left:40px; margin-right:30px; margin-top:40px; max-width:290px;">
                            <div>FREID TUARAN MEE</div>
                            <div>RM12.90</div>
                            <div class="menu-description">DEEP FRIED NOODLES, BRAISED EGG, </div>
                        </div>
                        
                        <div style="margin-left:40px; margin-bottom:50px;">

                        </div>
                    </div>
                </div>
                
                <!-- nine burger -->
                <div class="menu-card">
                    <div style=" overflow: hidden;">
                        <img src="img/menu/9.jpg" style="width:100%; height:30vh; border-radius:10px 0 0 10px;">
                    </div>
                    <div style="display:flex; flex-direction:column; position:relative; justify-content: space-between;">
                        <div style=" margin-left:40px; margin-right:30px; margin-top:40px; max-width:290px;">
                            <div>OCEAN BASKET SPECIAL</div>
                            <div>RM20.50</div>
                            <div class="menu-description">FISH FILLET, CALAMARI, SHRIMP, FRENCH FRIES</div>
                        </div>
                        
                        <div style="margin-left:40px; margin-bottom:50px;">

                        </div>
                    </div>
                </div>
                
                <!-- ten burger -->
                <div class="menu-card">
                    <div style=" overflow: hidden;">
                        <img src="img/menu/10.jpg" style="width:100%; height:30vh; border-radius:10px 0 0 10px;">
                    </div>
                    <div style="display:flex; flex-direction:column; position:relative; justify-content: space-between;">
                        <div style=" margin-left:40px; margin-right:30px; margin-top:40px; max-width:290px;">
                            <div>GRILLED CHICKEN CAESAR SALAD</div>
                            <div>RM14.90</div>
                            <div class="menu-description">CHICKEN CHUNKS, SALAD DRESSING, HARD BOILED EGG</div>
                        </div>
                        
                        <div style="margin-left:40px; margin-bottom:50px;">

                        </div>
                    </div>
                </div>           
                <!-- the menu container end div-->
            </div>
            <!-- to combine the menu title and menu stuff end div -->       
        </div>
        
        <!-- to combine again-->
        <div style="align-items:center;display:flex; flex-direction:column;width:80%; margin-top:7vh;">
            <!-- title  -->
            <div class="title">DRINK MENU</div>
            
            <div class="menu-cont">
                
                <!-- one drink -->
                <div class="menu-card">
                    <div style=" overflow: hidden;">
                        <img src="img/menu/11.jpg" style="width:100%; height:30vh;border-radius:10px 0 0 10px;">
                    </div>
                    <div style="display:flex; flex-direction:column; position:relative; justify-content: space-between;">
                        <div style=" margin-left:40px; margin-right:30px; margin-top:40px;">
                            <div>MATCHA LATTE</div>
                            <div>RM12.90</div>
                            <div class="menu-description">LIGHT CREAMY MATCHA GREEN TEA</div>
                        </div>
                        
                        <div style="margin-left:40px; margin-bottom:50px;">

                        </div>
                    </div>
                </div>
                <!-- two drink -->
                <div class="menu-card">
                    <div style=" overflow: hidden;">
                        <img src="img/menu/12.jpg" style="width:100%; height:30vh;border-radius:10px 0 0 10px;">
                    </div>
                    <div style="display:flex; flex-direction:column; position:relative; justify-content: space-between;">
                        <div style=" margin-left:40px; margin-right:30px; margin-top:40px;">
                            <div>MOCHA HOT COFFEE</div>
                            <div>RM12.90</div>
                            <div class="menu-description">CHOCOLATE, COFFEE AND MILK</div>
                        </div>
                        
                        <div style="margin-left:40px; margin-bottom:50px;">

                        </div>
                    </div>
                </div>
                
                <!-- three drink -->
                <div class="menu-card">
                    <div style=" overflow: hidden;">
                        <img src="img/menu/13.jpg" style="width:100%; height:30vh;border-radius:10px 0 0 10px;">
                    </div>
                    <div style="display:flex; flex-direction:column; position:relative; justify-content: space-between;">
                        <div style=" margin-left:40px; margin-right:30px; margin-top:40px;">
                            <div>STRAWBERRY SHAKE</div>
                            <div>RM15.90</div>
                            <div class="menu-description">STRAWBERRY MILK WITH WHIPPED CREAM</div>
                        </div>
                        
                        <div style="margin-left:40px; margin-bottom:50px;">

                        </div>
                    </div>
                </div>
                
                <!-- four drink -->
                <div class="menu-card">
                    <div style=" overflow: hidden;">
                        <img src="img/menu/14.jpg" style="width:100%; height:30vh;border-radius:10px 0 0 10px;">
                    </div>
                    <div style="display:flex; flex-direction:column; position:relative; justify-content: space-between;">
                        <div style=" margin-left:40px; margin-right:30px; margin-top:40px;">
                            <div>INDIGO BLUEBERRY LAYER</div>
                            <div>RM15.90</div>
                            <div class="menu-description">BLUEBERRY SMOOTHIE</div>
                        </div>
                        
                        <div style="margin-left:40px; margin-bottom:50px;">
  
                        </div>
                    </div>
                </div>
                
                <!-- five drink -->
                <div class="menu-card">
                    <div style=" overflow: hidden;">
                        <img src="img/menu/15.jpg" style="width:100%; height:30vh;border-radius:10px 0 0 10px;">
                    </div>
                    <div style="display:flex; flex-direction:column; position:relative; justify-content: space-between;">
                        <div style=" margin-left:40px; margin-right:30px; margin-top:40px;">
                            <div>BERRY LAYER</div>
                            <div>RM15.90</div>
                            <div class="menu-description">MIXED BERRIES SMOOTHIE</div>
                        </div>
                        
                        <div style="margin-left:40px; margin-bottom:50px;">
  
                        </div>
                    </div>
                </div>
            </div>
            <!-- to combine again end div-->
        </div>
        <!-- the whole box end div -->
    </div>
    
    
</body>


        </div>
    </div>
</div>
