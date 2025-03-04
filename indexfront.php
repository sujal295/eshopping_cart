<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>libas clone</title>
  <link rel="stylesheet" href="lib style.css">
  <link rel="stylesheet" href="style.css">
  <script src="script.js" defer></script> 
</head>
<body>
<?php
@include 'config.php';
      
      $select_rows = mysqli_query($conn, "SELECT * FROM `cart`") or die('query failed');
      $row_count = mysqli_num_rows($select_rows);

      ?>
  <header>
    <nav class="navbar">
      <div class="search-container">
        <button class="search-icon" onclick="toggleSearchBar()">
            <img src="IMAGES/search.png">
        </button>
        <input type="text" class="search-bar" placeholder="Search...">
      </div>
  
      <div class="search-bar">
        <input type="text" placeholder="Search for products..." />
        <button class="close-btn" onclick="closeSearchBar()">✖</button>
      </div>
      <div class="logo">LIBAS</div>
      <div class="icons">
        <a href="login.php" class="icon"> <img src="IMAGES/users.png"></a>
          <a href="#wishlist" class="icon"> <img src="IMAGES/red heart.png"></a>
          <a href="cart.php" class="icon"> <img src="IMAGES/shop  bag.png"><span><?php echo $row_count; ?></span></a>
      </div>
    </nav>
  </header>
  <div class="main">
<img src="IMAGES/desktop-avneet_8ec270d3-8b7e-4ca8-9179-5ac8065da350.webp">
</div>
<br><br><br>
<h3>SHOP BY OCCASION</h3>
<h5>Style For Every Celebration</h5>
<div class="half1">
  <figure>
    <img class="e" src="IMAGES/mehandi-magic.jpg">
    <figcaption class="text">MEHENDI MADGIC   <button type="button" onclick="location.href='products.php'"><p>EXPLORE</p></button></figcaption>
  </figure>
  <figure>
    <img class="f" src="IMAGES/haldi_2.jpg">
    <figcaption class="text">HALDI ESSENTIALS  <button type="button" onclick="location.href='products.php'"><p>EXPLORE</p></button></figcaption>
  </figure>
</div>
<div class="half2">
  <figure>
    <img class="a" src="IMAGES/SANGEET.jpg" >
    <figcaption class="text">SANGEET SWAG  <button type="button" onclick="location.href='products.php'"><p>EXPLORE</p></button></figcaption>
</figure>
<figure>
  <img class="a" src="IMAGES/cocktail_1.jpg">
  <figcaption class="text">COCTAIL CLASSIC  <button type="button" onclick="location.href='products.php'"><p>EXPLORE</p></button></figcaption>
</figure>
</div>
<div class="half3">
  <figure>
<img class="b" src="IMAGES/aaa.jpg">
<figcaption class="text">THE WEDDING EDIT  <button type="button" onclick="location.href='products.php'"><p>EXPLORE</p></button></figcaption>
</figure>
<figure>
<img class="b" src="IMAGES/pag-phere_3.jpg">
<figcaption class="text">PAG PHERA & BEYOND  <button type="button" onclick="location.href='products.php'"><p>EXPLORE</p></button></figcaption>
</figure>
</div>
<br><br><br><br>
</body>
</html>
