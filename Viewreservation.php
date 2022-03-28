<?php
    // Website's title
    $title = "View Reservation";
    //========================================================
    include_once "includes/header.php";
    //========================================================

    if(!isset($_SESSION['uname'])){
        if ($_SESSION['uname'] != "admin"){
            header('Location: index.php');
        }
    };

    // FETCH SECTION
    $resultSet = $conn->query("SELECT * FROM table_reservation");

?>
<link rel="stylesheet" type="text/css" href="css/form.css">
<link rel="stylesheet" type="text/css" href="css/table.css">


<div class="parallax" style="background: none; height:auto ;">
    <div class="main">
        <div class="parent" style="justify-content: left">
            <h3>View all reservation:</h3>
        </div>
    </div>
</div>

<div class="parallax" style="background:none;">
    <div class="main">
        <div class="parent">
            <table>
            <thead>
            <tr class="table100-head">
                <th class="column2">Reservation ID</th>
                <th class="column2">Table ID</th>
                <th class="column3">User ID</th>
                <th class="column2">Number of Seat</th>
                <th class="column2">Selected Time</th>
                <th class="column2"> </th>
                <th class="column2"> </th>
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
                            <td class='column2' ><a href='editreservation.php?id=$AB_id'>Edit</a></td>
                            <td class='column2' ><a href='deletereservation.php?id=$AB_id'>Delete</a></td>
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