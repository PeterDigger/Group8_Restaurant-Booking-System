<?php
    $id=$_REQUEST['id'];
    $title = "Edit Orders";
    include_once "includes/header.php";

    if(!isset($_SESSION['uname'])){
        if ($_SESSION['uname'] != "admin"){
            header('Location: index.php');
        }
    };

    $editorders = $conn->query("SELECT * FROM orders WHERE Order_id='".$id."'");
    if ($editorders->num_rows > 0 ){
        while($invi = $editorders->fetch_assoc()){
                        $AI_id = $invi['Order_id'];
                        $AI_User_id = $invi['User_id'];
                        $AI_Food_id = $invi['Food_id'];
                        $AI_order_time = $invi['order_time'];
						$AI_QTY = $invi['quantity'];
						$AI_amount = $invi['amount'];
        };
    }else{
        echo "no result";
    }
    
    if(isset($_POST['update'])){
        $newamount   = $_POST['newamount'];
        $updatenow = "UPDATE orders SET amount = '".$newamount."' WHERE Order_id='".$id."'";
        if ($conn->query($updatenow) === TRUE) {
            echo '<script>alert("Record updated successfully")</script>';
            header("Location: Vieworders.php");
        } else {
            echo '<script>alert("Update Failed")</script>' . $conn->error;
        };
        
    }

?>

<link rel="stylesheet" type="text/css" href="css/booking.css">
<link rel="stylesheet" type="text/css" href="css/form.css">

<div class="parallax" style="background: none; height:auto ;">
    <div class="main">
        <div class="parent" style="justify-content: left">
            <h3>Edit Amount <?php echo $AI_id ?></h3>
        </div>
    </div>
</div>
<div class="parallax" style="background: none; height:auto ;">
    <div class="main">
        <div class="parent" style="height: auto;justify-content:flex-start">
            <form method='POST' action="">
                <div class="parallax" style="height:auto;">
                    <div class="main" style="background-color: #f2f8f8;">
                        <div class="parent">
                            <div class="box fade-in-text" style="align-items:center;height:auto">
                                <p></p>
                                <p>Amount with Delivery Charge: <input type="text" name="newamount" placeholder="Enter amount" required
                                        value='<?php echo $AI_amount?>' /></p>

                            </div>

                            <div class="box fade-in-text" style="align-items:center;height:auto;display:grid;">
                                <div class="container-contact100-form-btn"
                                    style="place-content: center; align-items: center;">
                                    <input class="contact100-form-btn" type="submit" name="update" value="Update">
                                </div>
                            </div>
                        </div>
                    </div>
            </form>
        </div>
    </div>
</div>