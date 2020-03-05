<!-- 
    Author: Kettle Team
    Last modified: 3/05/20
    Last modified by: Hunter Holderfield
 -->


 <?php 
   $SERVER["DOCUMENT_ROOT"] = "C:\xampp\htdocs\kettleLMS"
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="css/home.css">
    <title>Home</title>
</head>
<body>
    <div class="gridContainer">
        <header>
        <!-- Header -->
        Header
		<?php include "head.php" ?>
		<?php include "navBar.php" ?>
        </header>
        <nav>
        <!-- Navigation -->
        Navigation
		<?php include "sidebar.php" ?>
        </nav>
        <main>
        <!-- Main content -->
        Main
		<?php include "" ?>
        </main>
        <section>
        <!-- Sidebar -->
        Section
		<?php include "rightSidebar.php" ?>
        </section>
        <footer>
        <!-- Footer -->
        footer
		<?php include "footer.php" ?>
        </footer>
    </div> 
</body>
</html>
