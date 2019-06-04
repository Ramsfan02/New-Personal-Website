<!DOCTYPE html>
<html lang="en">
<head>
   <link rel="stylesheet" href="Background.css">
   <script src="function.js"></script>
    <meta charset="UTF-8">
    <title>Portfolio</title>
</head>
<body>

<div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <?php include 'Header.php' ?>
</div>

<div id="main">
    <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>
</div>

<h2>My work Throughout the year</h2>
<div class="slideshow-container">
<div class="mySlides">
    <div class="numbertext">1/7</div>
    <img src="images/Capture.PNG" style="width:100%">
    <div class="text">First work</div>
</div>

<div class="mySlides">
    <div class="numbertext">2/7</div>
    <img src="images/Capture2.PNG" style="width:100%">
    <div class="text">First Website</div>
</div> 
  
 <div class="mySlides">
    <div class="numbertext">3/7</div>
    <img src="images/Capture3.PNG" style="width:100%">
    <div class="text">Second Website</div>
</div>
  
 <div class="mySlides">
    <div class="numbertext">4/7</div>
    <img src="images/Capture4.PNG" style="width:100%">
    <div class="text">First Portfolio Website</div>
</div>
 
 <div class="mySlides">
    <div class="numbertext">4/7</div>
    <img src="images/Capture5.PNG" style="width:100%">
    <div class="text">Flexbox Exercise</div>
</div>

<div class="mySlides">
    <div class="numbertext">5/7</div>
    <img src="images/Capture6.PNG" style="width:100%">
    <div class="text">Computing innovation</div>
</div>

<div class="mySlides">
    <div class="numbertext">6/7</div>
    <img src="images/Capture7.PNG" style="width:100%">
    <div class="text">Client Website</div>
</div>

<div class="mySlides">
    <div class="numbertext">7/7</div>
    <img src="images/Capture8.PNG" style="width:100%">
    <div class="text">Ready Player One Essay</div>
</div>
 
</div>
<br>

<div style="text-align:center">
    <span class="dot"></span>
    <span class="dot"></span>
    <span class="dot"></span>
    <span class="dot"></span>
    <span class="dot"></span>
    <span class="dot"></span>
    <span class="dot"></span>
</div> 

   <div class="footer">
    <?php include 'Footer.php' ?>
</div> 
</body>
</html>