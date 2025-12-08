<?php 
include 'backend/db.php'; 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>QuickKart – Shop Fast</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

</head>

<body>

<!-- 🌟 TOP HEADER -->
<header class="top-header">
    
    <!-- LEFT: Logo + Delivery -->
    <div class="left-section">
        <img src="assets/images/logo.png">
        <h1 class="logo">
    <span class="quick">Quick</span><span class="kart">Kart</span>
</h1>

        
        <div class="delivery-box">
            <p class="delivery-text">Delivery in 12 minutes</p>
            <select class="location-select">
                <option>Karaikal</option>
                <option>Thirunallar</option>
                <option>Nagapattinam</option>
            </select>
        </div>
    </div>

    <!-- CENTER: Search -->
    <div class="search-box">
        <input type="text" placeholder="Search for products...">
    </div>

    <!-- RIGHT: Login + Cart -->
    <div class="right-section">
        <a href="login.php">Login</a>

        <a href="cart.php" class="cart-btn">
            🛒 My Cart
        </a>
    </div>
</header>

<!-- 🌟 CATEGORY TABS LIKE ZEPTO -->
<div class="category-tab-container">

    <button class="cat-tab active" onclick="filterProducts('all')">All</button>
    <button class="cat-tab" onclick="filterProducts('cafe')">Cafe</button>
    <button class="cat-tab" onclick="filterProducts('home')">Home</button>
    <button class="cat-tab" onclick="filterProducts('toys')">Toys</button>
    <button class="cat-tab" onclick="filterProducts('fresh')">Fresh</button>
    <button class="cat-tab" onclick="filterProducts('beauty')">Beauty</button>
    <button class="cat-tab" onclick="filterProducts('fashion')">Fashion</button>

</div>

<!-- 🌟 PRODUCT GRID -->
<div class="products-wrapper">

    <div class="product-card" data-cat="cafe">
        <img src="assets/pages/coldcoffee.jpg">
        <h4>Cold Coffee</h4>
        <p class="price">₹99</p>
        <button>Add</button>
    </div>

    <div class="product-card" data-cat="home">
        <img src="assets/pages/roomfreshener.jpg">
        <h4>Room Freshener</h4>
        <p class="price">₹160</p>
        <button>Add</button>
    </div>

    <div class="product-card" data-cat="toys">
        <img src="assets/pages/teddybear.jpg">
        <h4>Teddy Bear</h4>
        <p class="price">₹450</p>
        <button>Add</button>
    </div>

    <div class="product-card" data-cat="fresh">
        <img src="assets/pages/tomoto.jpg">
        <h4>Fresh Tomato 1kg</h4>
        <p class="price">₹40</p>
        <button>Add</button>
    </div>

    <div class="product-card" data-cat="beauty">
        <img src="assets/pages/facecream.jpg">
        <h4>Face Cream</h4>
        <p class="price">₹120</p>
        <button>Add</button>
    </div>

    <div class="product-card" data-cat="fashion">
        <img src="assets/pages/tshit.jpg">
        <h4>Men T-Shirt</h4>
        <p class="price">₹299</p>
        <button>Add</button>
    </div>

</div>

<!-- 🌟 MAIN CATEGORY SECTION (Newly Added) -->
<div class="main-category-slider">

   <div class="main-cat-item">
        <img src="assets\pages\vegtables&fruits.jpg">
        <p>Vegetables & Fruits</p>
    </div>

    <div class="main-cat-item">
        <img src="assets\pages\bakery.jpg">
        <p>Bakery</p>
    </div>

    <div class="main-cat-item">
        <img src="assets\pages\meat.jpg">
        <p>Meat & Fish</p>
    </div>

    <div class="main-cat-item">
        <img src="assets/pages/peat.jpg">
        <p>Pet Food</p>
    </div>

    <div class="main-cat-item">
        <img src="assets/pages/pharmacy.jpg">
        <p>Pharmacy</p>
    </div>

    <div class="main-cat-item">
        <img src="assets/pages/fancystore.jpg">
        <p>Fancy Store</p>
    </div>

    <div class="main-cat-item">
        <img src="assets/pages/toys.jpg">
        <p>Toys</p>
    </div>

    <div class="main-cat-item">
        <img src="assets/pages/gifts.jpg">
        <p>Gift Stores</p>
    </div>

    <div class="main-cat-item">
        <img src="assets/pages/restaurants.jpg">
        <p>Restaurants</p>
    </div>

    <div class="main-cat-item">
        <img src="assets/pages/snacks.jpg">
        <p>Snacks</p>
    </div>

    <div class="main-cat-item">
        <img src="assets/pages/stationery.jpg">
        <p>Stationery</p>
    </div>

    <div class="main-cat-item">
        <img src="assets/pages/electronic.jpg">
        <p>Electronics</p>
    </div>

    <div class="main-cat-item">
        <img src="assets/pages/homeessentials.jpg">
        <p>Home Essentials</p>
    </div>

    <div class="main-cat-item">
        <img src="assets/pages/colddrinks.jpg">
        <p>cold drinks&juices</p>
    </div>
  <div class="main-cat-item">
        <img src="assets/pages/brakfast.jpg">
        <p>breakfast & instantfood</p>
    </div>
    <div class="main-cat-item">
        <img src="assets/pages/sweettooth.jpg">
        <p>sweet tooth</p>
    </div>
    <div class="main-cat-item">
        <img src="assets/pages/tea.jpg">
        <p>tea,Coffee&milk Drinks<p>
    </div>
  <div class="main-cat-item">
        <img src="assets/pages/attarice.jpg">
        <p>Atta,Rice,&Dal</p>
    </div>
  <div class="main-cat-item">
        <img src="assets/pages/masala.jpg">
        <p>Masala,Oil&More</p>
    </div>
  <div class="main-cat-item">
        <img src="assets/pages/souces.jpg">
        <p>Souces&Spreads</p>
    </div>
  <div class="main-cat-item">
        <img src="assets/pages/organic.jpg">
        <p>Organic&Healthy Living</p>
    </div>
  
   <div class="main-cat-item">
        <img src="assets/pages/baby.jpg">
        <p>Baby care</p>
    </div>
     <div class="main-cat-item">
        <img src="assets/pages/pharma.jpg">
        <p>Pharma & wellness</p>
    </div>
     <div class="main-cat-item">
        <img src="assets/pages/personal.jpg">
        <p>Persnal Care</p>
    </div>
     
</div>

<!-- OFFER BANNERS -->
<style>
.offer-section {
    display: flex;
    gap: 20px;
    padding: 20px;
}
.offer-box {
    flex: 1;
    border-radius: 18px;
    padding: 20px;
    color: white;
    min-height: 180px;
}
.offer1 {
    background: #FF6B2C;
}
.offer2 {
    background: #0077CC;
}
.offer-box h2 {
    font-size: 26px;
    font-weight: bold;
}
.offer-box p {
    margin-top: 5px;
    font-size: 16px;
}
.offer-box button {
    margin-top: 12px;
    padding: 10px 20px;
    background: white;
    color: #FF6B2C;
    border: none;
    border-radius: 10px;
    font-weight: bold;
}
</style>

<div class="offer-section">
    <div class="offer-box offer1">
        <h2>Special Deals</h2>
        <p>Get up to 40% OFF on essentials</p>
        <button>Shop Now</button>
    </div>
    <div class="offer-box offer2">
        <h2>Zero Delivery Fee</h2>
        <p>On all orders above ₹199</p>
        <button>Start Saving</button>
    </div>
</div>



<!-- PRODUCT SLIDER -->
<style>
.product-slider {
    display: flex;
    gap: 20px;
    overflow-x: auto;
    padding: 20px;
}
.product-card {
    min-width: 160px;
    padding: 15px;
    border-radius: 15px;
    background: white;
    border: 1px solid #ddd;
    text-align: center;
}
.product-card img {
    width: 120px;
    height: 120px;
    object-fit: cover;
}
.product-card h4 {
    font-size: 15px;
    margin-top: 10px;
}
.price {
    color: #FF6B2C;
    font-weight: bold;
}
.product-card button {
    margin-top: 10px;
    width: 100%;
    padding: 8px 0;
    background: #00C853;
    color: white;
    border: none;
    border-radius: 8px;
    font-weight: bold;
}
</style>

<div class="category-section">
    <div class="cat-header">
        <h2>Snacks & Munchies</h2>
        <a href="#" class="see-all">see all</a>
    </div>
    <div class="product-slider-wrapper">
    <button class="slider-btn left-btn">&#8249;</button>
<div class="product-slider">
<div class="product-card">
        <img src="assets/pages/layssalted.jpg">
        <h4>Lay’s Classic Salted</h4>
        <p class="price">₹189</p>
        <button>Add</button>
    </div>
    <div class="product-card">
        <img src="assets/pages/laysmagic.jpg">
        <h4>Lay’s Magic Masala</h4>
        <p class="price">₹225</p>
        <button>Add</button>
    </div>
    <div class="product-card">
        <img src="assets/pages/bingo.jpg">
        <h4>Bingo Mad Angles</h4>
        <p class="price">₹175</p>
        <button>Add</button>
    </div>
    
    <div class="product-card">
        <img src="assets/pages/bingopotato.jpg">
        <h4>Bingo Potato</h4>
        <p class="price">₹175</p>
        <button>Add</button>
    </div>

    <div class="product-card">
        <img src="assets/pages/uncle chipps.jpg">
        <h4>uncle chips</h4>
        <p class="price">₹175</p>
        <button>Add</button>
    </div>

    <div class="product-card">
        <img src="assets/pages/pringles.jpg">
        <h4>Pringles</h4>
        <p class="price">₹175</p>
        <button>Add</button>
    </div>

     <div class="product-card">
        <img src="assets/pages/haldiram.jpg">
        <h4>haldiram's Aloo Bhujia</h4>
        <p class="price">₹175</p>
        <button>Add</button>
    </div>
    
     <div class="product-card">
        <img src="assets/pages/kurkure.jpg">
        <h4>kurkure Masala Munch</h4>
        <p class="price">₹175</p>
        <button>Add</button>
    </div>
    <div class="product-card">
        <img src="assets/pages/doritos.jpg">
        <h4>Doritos Nacho Cheese</h4>
        <p class="price">₹175</p>
        <button>Add</button>
    </div>
</div>

<div class="category-section">
    <div class="cat-header">
        <h2>Cold Drinks & Juices</h2>
        <a href="#" class="see-all">see all</a>
    </div>
<div class="product-slider-wrapper">
    <button class="slider-btn left-btn">&#8249;</button>
<div class="product-slider">
    <div class="product-card">
        <img src="assets/pages/cocacola.jpg">
        <h4>Coca-cola</h4>
        <p class="price">₹189</p>
        <button>Add</button>
    </div>    
</div>        

<footer class="footer">

    <div class="footer-container">

        <!-- Column 1 -->
        <div class="footer-column">
            <h3>Useful Links</h3>
            <ul>
                <li>Blog</li>
                <li>Privacy</li>
                <li>Terms</li>
                <li>FAQs</li>
                <li>Security</li>
                <li>Contact</li>
            </ul>
        </div>

        <!-- Column 2 -->
        <div class="footer-column">
            <h3>More</h3>
            <ul>
                <li>Partner</li>
                <li>Franchise</li>
                <li>Seller</li>
                <li>Warehouse</li>
                <li>Deliver</li>
                <li>Resources</li>
            </ul>
        </div>

        <!-- Column 3 -->
        <div class="footer-column">
            <h3>Categories</h3>
            <ul>
                <li>Vegetables & Fruits</li>
                <li>Dairy & Breakfast</li>
                <li>Cold Drinks & Juices</li>
                <li>Instant Food</li>
                <li>Bakery & Biscuits</li>
                <li>Sweet Tooth</li>
                <li>Atta, Rice & Dal</li>
                <li>Sauces & Spreads</li>
            </ul>
        </div>

        <!-- Column 4 -->
        <div class="footer-column">
            <h3>More Categories</h3>
            <ul>
                <li>Organic & Premium</li>
                <li>Baby Care</li>
                <li>Home Care</li>
                <li>Beauty & Cosmetics</li>
                <li>Kitchen & Dining</li>
                <li>Fashion & Accessories</li>
                <li>Books</li>
                <li>E-Gift Cards</li>
            </ul>
        </div>

    </div>

   <footer class="footer">
    <div class="footer-container">

        <!-- Left Section -->
        <div class="footer-left">
            <h3>Download App</h3>
            <div class="app-buttons">
                <img src="assets/pages/appstore.webp" alt="App Store">
                <img src="assets/pages/googleplay.png" alt="Google Play">
            </div>
        </div>

        <!-- Right Section -->
        <div class="footer-right">
            <div class="footer-social">
                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                <a href="#"><i class="fa-brands fa-google"></i></a>
            </div>
        </div>

    </div>

    <div class="footer-bottom">
        © 2025 QuickKart — All Rights Reserved.
    </div>
</footer>




