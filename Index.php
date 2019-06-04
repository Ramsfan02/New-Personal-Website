<!DOCTYPE html>
<html lang="en">
<head>
   <link rel="stylesheet" href="Background.css">
   <script src="function.js"></script>
    <meta charset="UTF-8" name="viewport" content="width=device-width,initial-scale=1">
    <title>Personal Website</title>
</head>
<body>
<div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <?php include 'Header.php' ?>
</div>

<div id="main">
    <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>
</div>

<p>Hello my name is Brandon Salsberry and this is my personal website</p>

<div class="footer">
    <?php include 'Footer.php' ?>
</div>
</body>
</html>