<?php
    $title = "Order Online";
    include_once "includes/header.php";
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

<!-- START ORDER FOOD SECTION -->

<section class="order_food_section">

    <?php
            if(isset($_POST['submit_order_food_form']) && $_SERVER['REQUEST_METHOD'] === 'POST')
            {
                // Selected Menus

                $selected_menus = $_POST['selected_menus'];
                $number = $_POST['number'];
                
                while(($key = array_search('', $number)) !== false){
                    unset($number[$key]);
                }
                
                $number = array_values($number);

                print_r($number);

                print_r($selected_menus);

            }

        ?>

    <form method="POST" id="order_food_form" action="details.php">

        <!-- SELECT MENUS -->

        <div class="select_menus_tab order_food_tab" id="menus_tab">


            <div class="parallax" style="background: none; height:auto ;">
            <div class="main">
            <div class="box left">
                <h3>1. Choice of items</h3>
            </div>
            <div class="box right">
            </div>
            </div>
            <div>
                <?php
                $whole = $conn->query("SELECT * FROM categories");
                if ($whole->num_rows > 0 ){
                    while($rows = $whole->fetch_assoc()){
                    echo"<div class='parallax' style='background: none; height:auto ;'>";
                        echo "<div class='main'>";
                                echo "<div class='box left'>";
                                    echo "<h3>". $rows['category_name']. "</h3>";
                                echo "</div>";
                                echo "<div class='box right'>";
                                echo "</div>";
                            echo "</div>";
                        echo "</div>"; ?>
                
                    <?php
                    $single = $conn->query("SELECT * from food where Category_id = '".$rows['Category_id']."'  ");
                    if ($single->num_rows > 0 ){
                        while($srows = $single->fetch_assoc()){
                        echo "<div class='items_tab'>";
                        echo "<div class='itemListElement'>";
                            echo "<div class = 'item_details' style='display:grid;grid-template-columns: 33% 33% 12%;'>";
                                echo "<div>";
                                    echo $srows['food_name'];
                                echo "</div>";
                                echo "<div class = 'item_select_part'>";
                                    echo "<div class = 'menu_price_field'>";
                                        echo "<span style = 'font-weight: bold;'>";
                                            echo "RM".$srows['food_price'];
                                        echo "</span>";
                                    echo "</div>";
                                echo "</div>";?>
                    <div class="select_item_bttn">
                        <div class="btn-group-toggle" data-toggle="buttons">
                            <label class="item_label btn btn-secondary">
                                <input type="checkbox" name="selected_menus[]" value="<?php echo $srows['Food_id'] ?>"
                                    autocomplete="off">Select
                                <select name="number[]">
                                    <option selected="selected" value=""></option>
                                    <option value="1"> 1</option>
                                    <option value="2"> 2</option>
                                    <option value="3"> 3</option>
                                    <option value="4"> 4</option>
                                </select>
                            </label>
                        </div>
                    </div>


                    <?php
                            echo "</div>";
                        echo "</div>";
                    echo "</div>";
                    }
                    }
                    ?>

                </div>
                <?php
                    }
                }
				?>
            </div>
        </div>

        <div class="parent" >
            <div class="box right "style="place-content: end;float:right;">
            <div class="container-contact100-form-btn" style="margin-top: 0px;place-content: end;text-align:right;">
                <input type="submit" name="submit_order_food_form" class="contact100-form-btn" value="Next">
            </div>
            </div>
        </div>

    </form>
</section>


<!-- JS SCRIPT FOR NEXT AND BACK TABS -->

<?php
    include_once "includes/footer.php";
?>