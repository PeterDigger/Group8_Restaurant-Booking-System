<?php
    // Website's title
    $title = "Admin";
    //========================================================
    include "includes/header.php";
    //========================================================

    if(!isset($_SESSION['uname'])){
        if ($_SESSION['uname'] != "admin")
        header('Location: index.php');
    };

    // FETCH SECTION
 
    $resultSet = $conn->query("SELECT * FROM table_reservation");
    $ordersdd = $conn->query("SELECT Order_id, User_id, Food_id, order_time, quantity, amount FROM orders;");

?>
<link rel="stylesheet" type="text/css" href="css/table.css">
<link rel="stylesheet" type="text/css" href="css/form.css">


<!--Reservation-->

<div class="parallax" style="background: none; height:auto ;">
    <div class="main">
        <div class="parent">
            <div class="box left">
                <h3>Reservation</h3>
            </div>
            <div class="box right">
            <div class="container-contact100-form-btn" style="margin-top: 0px;place-content: end;text-align:right;">
                <button class="contact100-form-btn"><a href="Viewreservation.php" style ="color:white;">View all</a></button>
            </div>
        </div>
    </div>
</div>

<div class="main" style="height: 40vh; overflow: auto;">
    <table>
        <thead>
            <tr class="table100-head">
				<th class="column2">Reservation ID</th>
                <th class="column2">Table ID</th>
                <th class="column2">User ID</th>
                <th class="column3">Number of People</th>
                <th class="column2">Selected Time</th>
            </tr>
        </thead>
        <tbody>
            <?php
                if ($resultSet->num_rows > 0 ){
                    while($rows = $resultSet->fetch_assoc()){
						$AB_id   = $rows['Reservation_id'];
                        $AB_Table_id   = $rows['Table_id'];
                        $AB_User_id     = $rows['User_id'];
                        $AB_number_people = $rows['number_people'];
                        $AB_selected_time    = $rows['selected_time'];
                        echo"
                        <tr>
                            <td class='column2' name='$AB_id'>$AB_id </td>
                            <td class='column2' name='$AB_Table_id'>$AB_Table_id </td>
                            <td class='column2' name='$AB_User_id'>$AB_User_id </td>
                            <td class='column2' name='$AB_number_people'>$AB_number_people </td>
                            <td class='column2' name='$AB_selected_time'>$AB_selected_time </td>
                        </tr>";
                    };
                }else{
                    echo "0 results";
                };
            ?>

        </tbody>
    </table>
</div>

<!--Orders-->

<div class="parallax" style="background: none; height:auto ;">
    <div class="main">
        <div class="parent">
            <div class="box left">
                
                <h3>Orders</h3>
            </div>
            <div class="box right">
            <div class="container-contact100-form-btn" style="margin-top: 0px;place-content: end;text-align:right;">
                <button class="contact100-form-btn"><a href="Vieworders.php" style ="color:white;">View all</a></button>
            </div>
			
        </div>
    </div>
</div>

<div class="main" style="height: 40vh; overflow: auto;">
    <table>
        <thead>
            <tr class="table100-head">
                <th class="column2">Order ID</th>
                <th class="column2">User ID</th>
                <th class="column2">Food ID</th>
                <th class="column2">Order Time</th>
				<th class="column2">Quantity</th>
				<th class="column2">Amount</th>
            </tr>
        </thead>
        <tbody>
            <?php
            
                if ($ordersdd->num_rows > 0 ){
                    while($invi = $ordersdd->fetch_assoc()){
                        $AI_id = $invi['Order_id'];
                        $AI_User_id = $invi['User_id'];
                        $AI_Food_id = $invi['Food_id'];
                        $AI_order_time = $invi['order_time'];
						$AI_QTY = $invi['quantity'];
						$AI_amount = $invi['amount'];
                        echo"
                        <tr>
                            <td class='column2' name='$AI_id'>$AI_id</td>
                            <td class='column2' name='$AI_User_id'>$AI_User_id</td>
                            <td class='column2' name='$AI_Food_id'>$AI_Food_id</td>
                            <td class='column2' name='$AI_order_time'>$AI_order_time</td>
							<td class='column2' name='$AI_QTY'>$AI_QTY</td>
							<td class='column2' name='$AI_amount'>$AI_amount</td>
                        </tr>";
                    };
                }else{
                    echo "0 results";
                };
            ?>
        </tbody>
    </table>
</div>



   
</div>

<?php
    include_once "includes/footer.php";
?>