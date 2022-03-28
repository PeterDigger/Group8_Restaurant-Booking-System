<?php
    // Website's title
    $title = "Table Reservation";
    //========================================================
    include_once "includes/header.php";
    //========================================================

?>
<link rel="stylesheet" type="text/css" href="css/table.css">
<link rel="stylesheet" type="text/css" href="css/form.css">
<section class="table_reservation_section">

<?php

if(isset($_POST['submit_table_reservation_form']) && $_SERVER['REQUEST_METHOD'] === 'POST')
    {
        // Selected Date and Time

        $selected_date = $_POST['selected_date'];
        $selected_time = $_POST['selected_time'];

        $desired_date = $selected_date." ".$selected_time;

        //Nbr of Guests

        $number_of_guests = $_POST['number_of_guests'];

        //Table ID

        $table_id = $_POST['table_id'];

        //Client Details

        $uname = $_SESSION['uname'];
        

        $getid = $conn->query("SELECT User_id 
            FROM `users` 
            WHERE user_email='".$uname."';
        ");

        $fetchname = $getid->fetch_assoc();
        $user_id = $fetchname['User_id'];

        $table = $conn->prepare("INSERT INTO table_reservation (Table_id, User_id, number_people, selected_time) VALUES (?,?,?,?)");
        $table->bind_param('iiis', $table_id, $user_id, $number_of_guests, $desired_date);
        $table->execute(); 

        if ($table){
            echo "
            <div class=\"parallax\" style=\"background: none; height:auto ;\">
                <div class=\"main\">
                    <div class=\"parent\">
                        <h3>Great! Your Reservation has been created successfully.</h3>
                    </div>
                </div>
            </div>";
        }
  }

?>
    <div class="parallax fade-in-text" style="
background: url(img/interior/lounge-cafe.jpg);
    height: auto;
    filter: brightness(70%) blur(1px);
    min-height: 30vh;
    /* width: 100%; */
    height: 100%;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;">
    </div>
    <div style=" height: 500px;">
        <div class="parallax" style="background: none; height: auto;">
            <div class="main">
                <div class="parent">
                    <div class="box left">
                        <h3>1. Select Date & Time</h3>
                    </div>
                    <div class="box right">
                    </div>
                </div>
            </div>
        </div>
        <div class="parallax" style="background: none; height:auto ;">
            <div class="main">
                <div class="parent">
                    <form method="POST" action="table.php" style="display:flex">
                        <div class="box left">
                            <label for="reservation_date">Date</label>
                            <input type="date"
                                value="<?php echo (isset($_POST['reservation_date']))?$_POST['reservation_date']:date('Y-m-d',strtotime("+1day"));  ?>"
                                class="form-control" name="reservation_date">
                        </div>
                        <div class="box right">
                            <label for="reservation_time">Time</label><br>
                            <input type="time"
                                value="<?php echo (isset($_POST['reservation_time']))?$_POST['reservation_time']:date('H:i');  ?>"
                                class="form-control" name="reservation_time">
                        </div>
                        <div class="box left">
                            <label for="number_of_guests">How many people?</label>
                            <select class="form-control" name="number_of_guests">
                                <option value="1" <?php echo (isset($_POST['number_of_guests']))?"selected":"";  ?>>One person</option>
                                <option value="2" <?php echo (isset($_POST['number_of_guests']))?"selected":"";  ?>>Two people</option>
                                <option value="3" <?php echo (isset($_POST['number_of_guests']))?"selected":"";  ?>>Three people</option>
                                <option value="4" <?php echo (isset($_POST['number_of_guests']))?"selected":"";  ?>>Four people</option>
                            </select>
                        </div>
                        <div class="box left">
                            <input type="submit" class="contact100-form-btn" name="check_availability_submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- CHECKING AVAILABILITY OF TABLES -->

        <?php

                if(isset($_POST['check_availability_submit']))
                {
                    $selected_date = $_POST['reservation_date'];
                    $selected_time = $_POST['reservation_time']. ":00";
                    $number_of_guests = $_POST['number_of_guests'];
                    
                    $desired_date = $selected_date . ' ' . $selected_time;
                    $stmt = $conn->query("SELECT Table_id
                        FROM tables

                        WHERE Table_id NOT IN (SELECT t.Table_id
                        FROM tables t, table_reservation r
                        WHERE
                        t.Table_id = r.Table_id
                        AND 
                        r.selected_time = '".$desired_date."')
                    ");

                    if($stmt->num_rows <= 0)
                    {
            
            ?>

        <div class="parallax" style="background: none; height:auto ;">
            <div class="main">
                <div class="parent">
                    <h3>ALL TABLES ARE RESERVED</h3>
                </div>
            </div>
        </div>
        <?php
                    }
                    else
                    {
                        $resultSet = $stmt->fetch_assoc();
                        $table_id = $resultSet['Table_id'];

            ?>

        <div class="parallax" style="background: none; height:auto ;">
            <div class="main">
                <div class="parent">
                    <div class="box left">
                        <h3>2. Confirmation</h3>
                    </div>
                    <div class="box right">
                    </div>
                </div>
            </div>
        </div>
        <div class="parallax" style="background: none; height:auto ;">
            <div class="main">
                <div class="parent">
                    <form method="POST" action="table.php">
                        <input type="hidden" name="selected_date" value="<?php echo $selected_date ?>">
                        <input type="hidden" name="selected_time" value="<?php echo $selected_time ?>">
                        <input type="hidden" name="number_of_guests" value="<?php echo $number_of_guests ?>">
                        <input type="hidden" name="table_id" value="<?php echo $table_id ?>">
                        <div class="parallax" style="background: none; height:auto ;">

                            <div class="box right">
                                <div class="container-contact100-form-btn"
                                    style="margin-top: 0px;place-content: end;text-align:right;">
                                    <input type="submit" name="submit_table_reservation_form"
                                        class="contact100-form-btn" value="Make a Reservation">
                                    <button class="contact100-form-btn"
                                        onClick="window.location.href=window.location.href">Cancel</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <?php
                    }
                }
                ?>
                </div>
            </div>
        </div>


    </div>
    <?php
    include_once "includes/footer.php";
?>