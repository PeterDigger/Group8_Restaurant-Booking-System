<?php
    // Website's title
    $title = "Login Page";
    //========================================================
    include_once "includes/header.php";
    //========================================================
?>

<link rel="stylesheet" href="css/form.css">

<div class="parallax" style="background: url('img/food/home_bg.jpg'); height:auto ;">

<div class='main' id='login'>
        <div class='parent' style='height: 900px;'>
            <div class='box left fade-in-text' style='height:auto;display:grid;'></div>
            <div class='box right fade-in-text' style='align-items:center;height:auto;display:grid;'>
                <div class='borderbox' style='background:white;'>
                    <div class='wrap-contact100'>
                        <h2>Welcome!</h2>
                        <p>Please fill in your credentials to login.</p>
                        <form class='contact100-form validate-form' method='POST' action='authen.php'>

                            <!--name-->
                            <div class='wrap-input100 validate-input' data-validate='Email is required'>
                                <span class='label-input100'>Your email</span>
                                <input class='input100' type='text' name='uname' placeholder='Enter your email'>
                                <span class='focus-input100'></span>
                            </div>

                            <!--password-->
                            <div class='wrap-input100 validate-input' data-validate='Password is required'>
                                <span class='label-input100'>Password</span>
                                <input class='input100' type='password' name='password'
                                    placeholder='Enter your password'>
                                <span class='focus-input100'></span>
                            </div>

                            <div class='container-contact100-form-btn' style='place-content: end;'>
                                <input class='contact100-form-btn' type='submit' name='submit' value='Log in'>
                            </div>
                        </form>
                        <div class='container-contact100-form-btn' style='place-content: center; align-items: center;'>
                            <span class='label-input100'>
                                <p>Don't have an account? Sign up! &nbsp;&nbsp;</p>
                            </span>
                            <button class='contact100-form-btn' onclick='toggle()'>Login/Register</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class='main' id='reg' style='display:none'>
        <div class='parent' style='height: 900px;'>
            <div class='box left fade-in-text' style='height:auto;display:grid;'></div>
            <div class='box right fade-in-text' style='align-items:center;height:auto;display:grid;'>
                <div class='borderbox' style='background:white;'>
                    <div class='wrap-contact100'>
                        <h2>Sign Up!</h2>
                        <p></p>
                        <form class='contact100-form validate-form' action='register.php' method='POST'
                            enctype='multipart/form-data'>
                            <!--name-->
                            <div class='wrap-input100 rs1-wrap-input100 validate-input'
                                data-validate='Name is required'>
                                <span class='label-input100'>Your Name</span>
                                <input class='input100' type='text'
                                    name='name' placeholder='Enter your name'>
                                <span class='focus-input100'></span>
                            </div>

                            <!--email-->
                            <div class='wrap-input100 rs1-wrap-input100 validate-input'
                                data-validate='Phone number is required'>
                                <span class='label-input100'>Your Email</span>
                                <input class='input100' type='text' name='email' placeholder='Enter your email'>
                                <span class='focus-input100'></span>
                            </div>
                            <!--phone-->
                            <div class='wrap-input100 validate-input' data-validate = 'Home Address is required'>
                                <span class='label-input100'>Your Home Address</span>
                                <input class='input100' type='text' name='address' placeholder='Enter your home address'>
                                <span class='focus-input100'></span>
                            </div>
                            <!--password-->
                            <div class='wrap-input100 validate-input' data-validate='Password is required'>
                                <span class='label-input100'>Password</span>
                                <input class='input100' type='password' name='password'
                                    placeholder='Enter your password'>
                                <span class='focus-input100'></span>
                            </div>
                            <!--Button-->
                            <div class='container-contact100-form-btn' style='place-content: end;'>
                                <input class='contact100-form-btn' type='submit' name='submit' value='Sign up'>
                            </div>
                        </form>
                        <div class='container-contact100-form-btn' style='place-content: center; align-items: center;'>
                            <span class='label-input100'>
                                <p>Already have account? Sign in &nbsp;&nbsp;</p>
                            </span>
                            <button class='contact100-form-btn' onclick='toggle()'>Login/Register</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
    function toggle() {
        var x = document.getElementById("login");
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
        var y = document.getElementById("reg");
        if (y.style.display === "none") {
            y.style.display = "block";
        } else {
            y.style.display = "none";
        }
    }
</script>

<?php
    include_once "includes/footer.php";
?>