<?php
    // Website's title
    $title = "User";
    //========================================================
    include "includes/header.php";
    //========================================================

    $id = $_SESSION['uname'];

    // FETCH SECTION
    //Sorting data

    $detail = $conn->query("SELECT * FROM users WHERE user_email='".$id."'");
    if ($detail->num_rows > 0 ){
        while($rows = $detail->fetch_assoc()){
            $me_id   = $rows['User_id'];
            $me_na   = $rows['user_name'];
            $me_mail   = $rows['user_email'];
            $me_add  = $rows['user_address'];
        }
    }
    $resultSet = $conn->query("SELECT * FROM orders WHERE orders.User_id=(SELECT users.User_id FROM users WHERE users.user_email = '".$id."')");
    $invoicedd = $conn->query("SELECT * FROM table_reservation WHERE table_reservation.User_id in (SELECT users.User_id FROM users WHERE users.user_email = '".$id."')");

?>
<link rel="stylesheet" type="text/css" href="css/table.css">
<link rel="stylesheet" type="text/css" href="css/form.css">

<!--Summary-->

<div class="main" style="background-color: #f2f8f8;">
    <div class="parent" style="justify-content: center">
        <div class="box fade-in-text" style="margin :0;align-items:end;flex: 0 1 500px;
        flex: 0 1 100%;height:auto;display:grid;">
            <h2>Dashboard</h2>
        </div>
        <div class="box fade-in-text" style="margin :0;align-items:end;flex: 0 1 500px;
                    flex: 0 1 500px;height:auto;display:grid;padding:20px;">
            <ul>
                <li>Customer ID: &nbsp;<?php echo $me_id ?></li>
                <li>Name: &nbsp;<?php echo $me_na ?></li>
            </ul>
        </div>
        <div class="box fade-in-text" style="margin :0;align-items:end;flex: 0 1 500px;
                    flex: 0 1 500px;height:auto;display:grid;padding:20px;">
            <ul>
                <li>Phone: &nbsp;<?php echo $me_mail ?></li>
                <li>Address: &nbsp;<?php echo $me_add ?></li>
                </ul>
        </div>
    </div>
</div>

<!--orders-->

<div class="parallax" style="background: none; height:auto ;">
    <div class="main">
        <div class="parent">
            <div class="box left">
                <h3>Past Booking</h3>
            </div>
            <div class="box right">
        </div>
    </div>
</div>

<div class="main" style="height: 40vh; overflow: auto;">
    <table>
        <thead>
            <tr class="table100-head">
                <th class="column2">Order ID</th>
                <th class="column2">User ID</th>
                <th class="column3">Food ID</th>
                <th class="column2">Order Time</th>
                <th class="column2">Quantity</th>
                <th class="column2">Amount(RM)</th>
            </tr>
        </thead>
        <tbody>
            <?php
                if ($resultSet->num_rows > 0 ){
                    while($rows = $resultSet->fetch_assoc()){
                        $AB_id   = $rows['Order_id'];
                        $AB_Time   = $rows['User_id'];
                        $AB_Date     = $rows['Food_id'];
                        $AB_Duration = $rows['order_time'];
                        $AB_User_id    = $rows['quantity'];
                        $AB_Car_id    = $rows['amount'];
                        echo"
                        <tr>
                            <td class='column2' name='$AB_id'>$AB_id </td>
                            <td class='column2' name='$AB_Time'>$AB_Time </td>
                            <td class='column3' name='$AB_Date'>$AB_Date </td>
                            <td class='column2' name='$AB_Duration'>$AB_Duration </td>
                            <td class='column2' name='$AB_User_id'>$AB_User_id </td>
                            <td class='column2' name='$AB_Car_id'>$AB_Car_id </td>
                        </tr>";
                    };
                }else{
                    echo "0 results";
                };
            ?>

        </tbody>
    </table>
</div>

<!--Reservation-->

<div class="parallax" style="background: none; height:auto ;">
    <div class="main">
        <div class="parent">
            <div class="box left">
                <h3>Reservation</h3>
            </div>
            <div class="box right">
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
                <th class="column2">Number of Guest</th>
                <th class="column2">Selected Time</th>
            </tr>
        </thead>
        <tbody>
            <?php
            
                if ($invoicedd->num_rows > 0 ){
                    while($invi = $invoicedd->fetch_assoc()){
                        $AI_RI = $invi['Reservation_id'];
                        $AI_TI = $invi['Table_id'];
                        $AI_UI = $invi['User_id'];
                        $AI_NP = $invi['number_people'];
                        $AI_ST = $invi['selected_time'];
                        echo"
                        <tr>
                            <td class='column2' name='$AI_RI'>$AI_RI</td>
                            <td class='column2' name='$AI_TI'>$AI_TI</td>
                            <td class='column2' name='$AI_UI'>$AI_UI</td>
                            <td class='column2' name='$AI_NP'>$AI_NP</td>
                            <td class='column2' name='$AI_ST'>$AI_ST</td>
                            </tr>";
                    };
                }else{
                    echo "0 results";
                };
            ?>
        </tbody>
    </table>
</div>

<?php
    include_once "includes/footer.php";
?>