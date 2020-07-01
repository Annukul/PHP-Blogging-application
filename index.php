<?php
require "./inc/config.php";
require "./inc/db.php";
?>
<?php include_once "./inc/header2.php"; ?>
<?php include_once "./inc/login_navbar.php"; ?>
<div class="l_form_div">
    <h1 class="l_h1">LogIn</h1>
    <form action="./inc/login.inc.php" class="l_form" method="POST">
        <div class="l_cols">
            <label class="l_label">Username/Email</label>
            <input type="text" name="us_em" class="l_input">
        </div>

        <div class="l_cols">
            <label class="l_label">Password</label>
            <input type="password" name="user_pwd" class="l_input">
        </div>
        <input type="submit" value="Login" class="l_submit" name="l_submitt">
    </form>

    <div class="ask_signup">Are you new here?<a href="<?php echo ROOT_URL; ?>signup.php"> Signup</a></div>
</div>


<?php include_once "./inc/footer2.php"; ?>