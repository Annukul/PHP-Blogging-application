<?php
require "./inc/config.php";
require "./inc/db2.php";
?>
<?php include_once "./inc/header2.php"; ?>
<?php include_once "./inc/login_navbar.php"; ?>

<div class="s_form_div">
    <h1 class="s_h1">SignUp</h1>
    <div class="err-msg">
        <?php
            if (isset($_GET['error'])) {
                if ($_GET['error'] == "emptyfields") {
                    echo "<p>Please fill all the fields to continue.</p>";
                } else if ($_GET['error'] == "invalidusername/email") {
                    echo "<p>Invalid username or email.</p>";
                } else if ($_GET['error'] == "invalidemail") {
                    echo "<p>Invalid email!</p>";
                } else if ($_GET['error'] == "invalidusername") {
                    echo "<p>Invalid username!</p>";
                } else if($_GET['error'] == "passwordcheck") {
                    echo "<p>Your password didn't match!</p>";
                } else if ($_GET['error'] == "usernametaken") {
                    echo "<p>Username already taken!</p>";
                } 
            } else if (isset($_GET['signup'])) {
                if ($_GET['signup'] == "success") {
                    echo "<p>Signup successful.</p>";
                }
            }
        ?>
    </div>
    <form action="./inc/signup.inc.php" class="s_form" method="POST">
        <div class="s_cols">
            <label class="s_label">Username</label>
            <input type="text" name="s_username" class="s_input">
        </div>

        <div class="s_cols">
            <label class="s_label">Email</label>
            <input type="text" name="s_email" class="s_input">
        </div>

        <div class="s_cols">
            <label class="s_label">Password</label>
            <input type="password" name="s_pwd" class="s_input">
        </div>

        <div class="s_cols">
            <label class="s_label">Confirm Password</label>
            <input type="password" name="s_repeat_pwd" class="s_input">
        </div>
        <input type="submit" value="Signup" class="s_submit" name="s_submitt">
    </form>

    <div class="ask_login">Already a member?<a href="<?php echo ROOT_URL; ?>index.php"> Login</a></div>
</div>

<?php include_once "./inc/footer2.php"; ?>