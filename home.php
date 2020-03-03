<?php 
$root = realpath('C:\xampp\htdocs\kettleLMS');
#require($root.'/a_config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?PHP require($root.'/includes/head.php'); ?>
</head>
<body>

    <div class="wrapper">
        <!-- Sidebar  -->
        <?php require($root.'/includes/sidebar.php'); ?>

        <!-- Page Content  -->
        <div id="content">
        </div>
    </div>

    <div class="wrapper-right">
    </div>
    <?php require($root.'/includes/footer.php') ?>
</body>
</html>