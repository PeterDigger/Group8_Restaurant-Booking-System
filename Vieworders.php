<?php
    // Website's title
    $title = "View Orders";
    //========================================================
    include_once "includes/header.php";
    //========================================================

    if(!isset($_SESSION['uname'])){
        if ($_SESSION['uname'] != "admin"){
            header('Location: index.php');
        }
    };

    // FETCH SECTION
    // fetch available car
    $ordersdd = $conn->query("SELECT * FROM orders ");   
    
?>
<link rel="stylesheet" type="text/css" href="css/form.css">
<link rel="stylesheet" type="text/css" href="css/table.css">


<div class="parallax" style="background: none; height:auto ;">
    <div class="main">
        <div class="parent" style="justify-content: left">
            <h3>View All Orders:</h3>
        </div>
    </div>
</div>

<div class="parallax" style="background:none;">
    <div class="main">
        <div class="parent">
        <table>
        <thead>
            <tr class="table100-head">
                <th class="column2">Order ID</th>
                <th class="column2">User ID</th>
                <th class="column2">Food ID</th>
                <th class="column2">Order Time</th>
                <th class="column2">Quantity</th>
                <th class="column2">Amount(RM)</th>
                <th class="column2"> </th>
                <th class="column2"> </th>
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
                            <td class='column2' ><a href='editorders.php?id=$AI_id'>Edit</a></td>
                            <td class='column2' ><a href='deleteorders.php?id=$AI_id'>Delete</a></td>
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
</div>

<?php
    include_once "includes/footer.php";
?>