<?php
    $title = "Order Online";
    include_once "includes/header.php";
?>

    <?php
    date_default_timezone_set("Asia/Kuala_Lumpur");
            if(isset($_POST['submit_order_food_form']) && $_SERVER['REQUEST_METHOD'] === 'POST')
            {
                // Selected Menus

                $selected_menus = $_POST['selected_menus'];
                $number = $_POST['number'];
                
                while(($key = array_search('', $number)) !== false){
                    unset($number[$key]);
                }
                
                $number = array_values($number);

                //(Order_id, User_id, Food_id, order_time, quantity, amount)
                
                
                
                
            }
            $uname = $_SESSION['uname'];
            $getid = $conn->query("SELECT User_id 
            FROM `users` 
                WHERE user_email='".$uname."';
            ");

            $fetchname = $getid->fetch_assoc();
            $user_id = $fetchname['User_id'];

            $datey = Date("Y-m-d H:i:s");
            
            
            
    ?>

<link rel="stylesheet" href="css/form.css">
<style type="text/css">
        body
        {
            background: #f7f7f7;
        }

		.text_header
		{
			margin-bottom: 5px;
    		font-size: 18px;
    		font-weight: bold;
    		line-height: 1.5;
    		margin-top: 22px;
    		text-transform: capitalize;
		}

        .items_tab
        {
            border-radius: 4px;
            background-color: white;
            overflow: hidden;
            box-shadow: 0 0 5px 0 rgba(60, 66, 87, 0.04), 0 0 10px 0 rgba(0, 0, 0, 0.04);
        }

        .itemListElement
        {
            font-size: 14px;
            line-height: 1.29;
            border-bottom: solid 1px #e5e5e5;
            cursor: pointer;
            padding: 16px 12px 18px 12px;
        }

        .item_details
        {
            width: auto;
            display: -webkit-box;
            display: -moz-box;
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            align-items: center;
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -webkit-flex-direction: row;
            -webkit-box-pack: justify;
            -webkit-justify-content: space-between;
            -webkit-box-align: center;
            -webkit-align-items: center;
        }

        .item_label
        {
            color: #9e8a78;
            border-color: #9e8a78;
            background: white;
            font-size: 12px;
            font-weight: 700;
        }

        .btn-secondary:not(:disabled):not(.disabled).active, .btn-secondary:not(:disabled):not(.disabled):active 
        {
            color: #fff;
            background-color: #9e8a78;
            border-color: #9e8a78;
        }

        .item_select_part
        {
            display: flex;
            -webkit-box-pack: justify;
            justify-content: space-between;
            -webkit-box-align: center;
            align-items: center;
            flex-shrink: 0;
        }

        .select_item_bttn
        {
            width: 55px;
            display: flex;
            margin-left: 30px;
            -webkit-box-pack: end;
            justify-content: flex-end;
        }

        .menu_price_field
        {
            width: auto;
            display: flex;
            margin-left: 30px;
            -webkit-box-align: baseline;
            align-items: baseline;
        }

        .order_food_section
        {
            max-width: 720px;
            margin: 50px auto;
            padding: 0px 15px;
        }

        .item_label.focus,
        .item_label:focus
        {
            outline: none;
            background:initial;
            box-shadow: none;
            color: #9e8a78;
            border-color: #9e8a78;
        }

        .item_label:hover
        {
            color: #fff;
            background-color: #9e8a78;
            border-color: #9e8a78;
        }

        /* Make circles that indicate the steps of the form: */
        .step 
        {
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbbbbb;
            border: none;  
            border-radius: 50%;
            display: inline-block;
            opacity: 0.5;
        }

        .step.active 
        {
            opacity: 1;
        }

        /* Mark the steps that are finished and valid: */
        .step.finish 
        {
            background-color:#1a1a1a;

        }


        .next_prev_buttons
        {
            background-color: #4CAF50;
            color: #ffffff;
            border: none;
            padding: 10px 20px;
            font-size: 17px;
            cursor: pointer;
        }

        .client_details_tab  .form-control
        {
            background-color: #fff;
            border-radius: 0;
            padding: 25px 10px;
            box-shadow: none;
            border: 2px solid #eee;
        }

        .client_details_tab  .form-control:focus 
        {
            border-color: #ffc851;
            box-shadow: none;
            outline: none;
        }

</style>

<div class="client_details_tab order_food_tab" id="clients_tab">

<div class="main" style="background-color: none;">

                <div class="text_header">
                    <span>
                        2. Checkout
                    </span>
                </div>
                
            <?php

                $total = 0;

                $length = count($selected_menus);
                for ($i = 0; $i < $length; $i++) {
                    $price = $conn->query("SELECT food_price FROM food WHERE Food_id = '".$selected_menus[$i]."'");
                    if ($price->num_rows > 0){
                        while ($x = $price->fetch_assoc()){
                            $temp = $x['food_price'];
                        }
                    }
                    $temp *= $number[$i];
                    $order = $conn->prepare("INSERT INTO orders (User_id, Food_id, order_time, quantity, amount) VALUES (?,?,?,?,?)");
                    $order->bind_param('iisii', $user_id , $selected_menus[$i] , $datey,$number[$i], $temp);
                    $order->execute();

                    $total += $temp;
                }

                echo "Total Amount: RM" . number_format((float)$total, 2, '.', '');
            ?>
</div>                
                <div class="main" style="background-color: none;">
    
    
                <div class="text_header">
                    <span>
                        3. Payment Details
                    </span>
                </div>
    
                <div>
                    

                    <div class="box fade-in-text" style="align-items:center;flex: 0 1 500px;
                        flex: 0 1 100%;height:auto;display:grid;padding:20px;">
                        <input type="email" name="client_email" id="client_email"
                                class="form-control" placeholder="Card Number" style="width:100%">
                        </div>
                        <div class="box fade-in-text" style="align-items:center;flex: 0 1 500px;
                        flex: 0 1 100%;height:auto;display:grid;padding:20px;">
                        <input type="text" name="client_phone_number" id="client_phone_number"
                                class="form-control" onkeyup="this.value=this.value.replace(/[^0-9]/g,'');"
                                placeholder="Expiry Month" style="width:100%">
                        </div>
                        <div class="box fade-in-text" style="align-items:center;flex: 0 1 500px;
                        flex: 0 1 100%;height:auto;display:grid;padding:20px;">
                                <input type="text" name="client_delivery_address" id="client_delivery_address"
                                class="form-control" placeholder="Expiry Year" style="width:100%">
                        </div>
                        <div class="box fade-in-text" style="align-items:center;flex: 0 1 500px;
                        flex: 0 1 100%;height:auto;display:grid;padding:20px;">
                            <input type="text" name="client_delivery_address" id="client_delivery_address"
                                class="form-control" placeholder="CVC" style="width:100%">
                        </div>
                </div>
    
    
                </div>
                <div class="parent" >
            <div class="box right "style="place-content: end;float:right;">
            <div class="container-contact100-form-btn" style="margin-top: 0px;place-content: end;text-align:right;">
                
            <form method="POST" action="complete.php">
                <input type="submit" name="final" class="contact100-form-btn" value="Next">
            </form>
        </div>
            </div>
        </div>
            </div>

<?php
    include_once "includes/footer.php";
?>