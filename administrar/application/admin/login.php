<?php
/*PHP Login and registration script Version 1.0, Created by Gautam, www.w3schools.in*/
require('inc/config.php');
require('inc/functions.php');

/*Check for authentication otherwise user will be redirects to main.php page.*/
if (!isset($_SESSION['UserData'])) {
    exit(header("location:main.php"));
}

require('include/header.php');
?>
<!-- container -->
<div class="container">
Congratulation! You have logged into password protected page. <a href="logout.php">Click here</a> to Logout.
<?php
echo '<pre>';
print_r(get_user_data($con, $_SESSION['UserData']['user_id']));
echo '</pre>';
?>
</div>
<!-- /container -->
<?php require('include/footer.php');?>