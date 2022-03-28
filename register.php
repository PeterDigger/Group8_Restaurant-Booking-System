<?php
    // Website's title
    $title = "Registration";
    //========================================================
    include_once "includes/header.php";
    //========================================================

    // User_id

    // user_name
    // user_email
    // user_password
    // user_address

    $name   = $_POST['name' ];
    $email     = $_POST['email'   ];
    $address     = $_POST['address'   ];
    $pass   = $_POST['password' ];

    
    $user = $conn->prepare("INSERT INTO users (user_name, user_email, user_password, user_address) VALUES (?,?,?,?)");
	$user->bind_param('ssss', $name, $email, $pass, $address);
	$user->execute();

?>
<link rel="stylesheet" type="text/css" href="css/booking.css">
<link rel="stylesheet" type="text/css" href="css/form.css">

<div class="parallax" style="background: none; height:auto ;">
    <div class="main">
        <div class="parent" style="justify-content: left">
            <h3>Register</h3>
        </div>
    </div>
</div>
<div class='parallax' style='background: none; height:auto;'>
    <div class='main'>
        <div class='parent' style='height: auto;justify-content:flex-start'>
            <form method='POST' action='index.php'>
                <div class='parallax' style='height:800px;'>
                    <div class='main' style='background-color: #f2f8f8;'>
                        <div class='parent'>
                        <div class='box fade-in-text' style='align-items:center;height:auto;display:grid;'>
                                <p>Sign up successfully.</p>
                            </div>
                            <div class='box fade-in-text' style='align-items:center;height:auto;display:grid;'>
                                <div class='container-contact100-form-btn'
                                    style='place-content: center; align-items: center;'>
                                    <button class='contact100-form-btn' name='action' value='submit' onclick='toggle()'>Next</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
    include_once "includes/footer.php";
?>