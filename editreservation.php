<?php
    $id=$_REQUEST['id'];
    $title = "Edit Reservation";
    include_once "includes/header.php";

    if(!isset($_SESSION['uname'])){
        if ($_SESSION['uname'] != "admin"){
            header('Location: index.php');
        }
    };

    $editbook = $conn->query("SELECT * FROM table_reservation WHERE Reservation_id='".$id."'");
    if ($editbook->num_rows > 0 ){
        while($rows = $editbook->fetch_assoc()){
            $EB_id   = $rows['Reservation_id'];
            $EB_Table_id   = $rows['Table_id'];
            $EB_User_id     = $rows['User_id'];
            $EB_number_people = $rows['number_people'];
            $EB_selected_time    = $rows['selected_time'];
        };
    }else{
        echo "no result";
    }
    
    if(isset($_POST['update'])){
		$newselected_time = $_POST['newselected_time'];
		$newnumber_people = $_POST['newnumber_people'];
        $updatenow = "UPDATE table_reservation SET selected_time = '".$newselected_time."', number_people = '".$newnumber_people."' WHERE Reservation_id='".$id."'";
        if ($conn->query($updatenow) === TRUE) {
            echo '<script>alert("Record updated successfully")</script>';
            header("Location: Viewreservation.php");
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
            <h3>Edit Reservation ID: <?php echo $EB_id ?></h3>
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
                                <p>Date & time: <input type="text" name="newselected_time" placeholder="Enter selected_time" required
                                        value='<?php echo $EB_selected_time?>' /></p>
                                <p>Number of People: <input type="text" name="newnumber_people" placeholder="Enter number_people" required
                                        value='<?php echo $EB_number_people?>' /></p>
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