<?php 
include 'backend/db.php'; 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>QuickKart – Shop Fast</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>

<body>
    <style>
    body {
        margin: 0;
        font-family: 'Poppins', sans-serif;
    }
    header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 10px 20px;
        background-color: #f0f4ff;
    }
  /* CSS */
.logo {
    font-family: 'Poppins', sans-serif; /* or your preferred font */
    font-size: 36px; /* adjust size as needed */
    font-weight: 700; 
}

.logo .quick {
    color: orange;
}

.logo .kart {
    color: blue;
}

    .delivery-location {
        display: flex;
        align-items: center;
        gap: 10px;
        margin-left: 20px;
        font-weight: 500;
    }
    .delivery-location select {
        padding: 5px;
        border-radius: 5px;
        border: 1px solid #ccc;
    }
    .search-bar {
        flex: 1;
        margin: 0 20px;
    }
    .search-bar input {
        width: 100%;
        padding: 8px 12px;
        border-radius: 8px;
        border: 1px solid #ccc;
    }
    .header-right {
        display: flex;
        align-items: center;
        gap: 15px;
    }
    .header-right button {
        padding: 8px 16px;
        border-radius: 8px;
        border: none;
        cursor: pointer;
        background-color: #1e3a8a;
        color: white;
        font-weight: 500;
    }
</style>
</head>
<body>
<header>
   <!-- HTML -->
<h1 class="logo">
  <span class="quick">Quick</span><span class="kart">Kart</span>
</h1>


    <div class="delivery-location">
        <span>Delivery in 12 minutes</span>
        <select>
            <option>Karaikal</option>
            <option>Pondicherry</option>
        </select>
    </div>

    <div class="search-bar">
        <input type="text" placeholder="Search for products...">
    </div>

    <div class="header-right">
        <button>Login</button>
        <button>My Cart</button>
    </div>
</header>

</body>
</html>


<!-- 🌟 CATEGORY TABS -->
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
<div class="products-wrapper" id="productsSection">
    <div class="product-card" data-cat="cafe">
        <img src="assets/pages/coldcoffee.jpg" alt="Cold Coffee">
        <h4>Cold Coffee</h4>
        <p class="price">₹99</p>
        <button>Add</button>
    </div>
    <div class="product-card" data-cat="home">
        <img src="assets/pages/roomfreshener.jpg" alt="Room Freshener">
        <h4>Room Freshener</h4>
        <p class="price">₹160</p>
        <button>Add</button>
    </div>
    <div class="product-card" data-cat="toys">
        <img src="assets/pages/teddybear.jpg" alt="Teddy Bear">
        <h4>Teddy Bear</h4>
        <p class="price">₹450</p>
        <button>Add</button>
    </div>
    <div class="product-card" data-cat="fresh">
        <img src="assets/pages/tomoto.jpg" alt="Fresh Tomato 1kg">
        <h4>Fresh Tomato 1kg</h4>
        <p class="price">₹40</p>
        <button>Add</button>
    </div>
    <div class="product-card" data-cat="beauty">
        <img src="assets/pages/facecream.jpg" alt="Face Cream">
        <h4>Face Cream</h4>
        <p class="price">₹120</p>
        <button>Add</button>
    </div>
    <div class="product-card" data-cat="fashion">
        <img src="assets/pages/tshit.jpg" alt="Men T-Shirt">
        <h4>Men T-Shirt</h4>
        <p class="price">₹299</p>
        <button>Add</button>
    </div>
</div>

<!-- 🌟 MAIN CATEGORY SECTION -->
<div class="main-category-slider">
    <div class="main-cat-item"><img src="assets/pages/vegtables&fruits.jpg" alt=""><p>Vegetables & Fruits</p></div>
    <div class="main-cat-item"><img src="assets/pages/bakery.jpg" alt=""><p>Bakery</p></div>
    <div class="main-cat-item"><img src="assets/pages/meat.jpg" alt=""><p>Meat & Fish</p></div>
    <div class="main-cat-item"><img src="assets/pages/peat.jpg" alt=""><p>Pet Food</p></div>
    <div class="main-cat-item"><img src="assets/pages/pharmacy.jpg" alt=""><p>Pharmacy</p></div>
    <div class="main-cat-item"><img src="assets/pages/fancystore.jpg" alt=""><p>Fancy Store</p></div>
    <div class="main-cat-item"><img src="assets/pages/toys.jpg" alt=""><p>Toys</p></div>
    <div class="main-cat-item"><img src="assets/pages/gifts.jpg" alt=""><p>Gift Stores</p></div>
    <div class="main-cat-item"><img src="assets/pages/restaurants.jpg" alt=""><p>Restaurants</p></div>
    <div class="main-cat-item"><img src="assets/pages/snacks.jpg" alt=""><p>Snacks</p></div>
    <div class="main-cat-item"><img src="assets/pages/stationery.jpg" alt=""><p>Stationery</p></div>
    <div class="main-cat-item"><img src="assets/pages/electronic.jpg" alt=""><p>Electronics</p></div>
    <div class="main-cat-item"><img src="assets/pages/homeessentials.jpg" alt=""><p>Home Essentials</p></div>
    <div class="main-cat-item"><img src="assets/pages/colddrinks.jpg" alt=""><p>cold Drinks & juices</p></div>
    <div class="main-cat-item"><img src="assets/pages/brakfast.jpg" alt=""><p>Breakfast & Instantfood</p></div>
    <div class="main-cat-item"><img src="assets/pages/sweettooth.jpg" alt=""><p>sweet tooth</p></div>
    <div class="main-cat-item"><img src="assets/pages/tea.jpg" alt=""><p>Tea,Coffee & milk Drinks</p></div>
    <div class="main-cat-item"><img src="assets/pages/attarice.jpg" alt=""><p>Atta,Rice & Dal</p></div>
    <div class="main-cat-item"><img src="assets/pages/masala.jpg" alt=""><p>Masala,Oil & More</p></div>
    <div class="main-cat-item"><img src="assets/pages/souces.jpg" alt=""><p>Souces & Spreads</p></div>
    <div class="main-cat-item"><img src="assets/pages/organic.jpg" alt=""><p>Organic & Healthy Living</p></div>
    <div class="main-cat-item"><img src="assets/pages/baby.jpg" alt=""><p>Baby care</p></div>
    <div class="main-cat-item"><img src="assets/pages/pharma.jpg" alt=""><p>Pharma & wellness</p></div>
    <div class="main-cat-item"><img src="assets/pages/personal.jpg" alt=""><p>Persnal Care</p></div>
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

<!--Oraganics and natural products-->
<section class="category-section">
  <div class="cat-header">
    <h2>Oraganics And Natural Products</h2>
    <a href="#" class="see-all">see all</a>
  </div>

    <div class="product-slider-wrapper">
        <button class="arrow left" aria-label="prev">‹</button>

        <div class="product-row">
      
            <div class="product-card"><img src="assets/pages/health mix2.jpg" alt=""><h4>Health Mix</h4><p class="price">₹225</p><button>Add</button></div>
            <div class="product-card"><img src="assets/pages/ABC malt.jpg" alt=""><h4>ABC Malt</h4><p class="price">₹175</p><button>Add</button></div>
            <div class="product-card"><img src="assets/pages/nutswithhoney.jpg" alt=""><h4>Nuts With Honey</h4><p class="price">₹175</p><button>Add</button></div>
            <div class="product-card"><img src="assets/pages/gulgand.jpg" alt=""><h4>Gulgand</h4><p class="price">₹175</p><button>Add</button></div>
            <div class="product-card"><img src="assets/pages/moringapowder.jpg" alt=""><h4>Moringa Powder</h4><p class="price">₹175</p><button>Add</button></div>
            <div class="product-card"><img src="assets/pages/beetrootmalt.jpg" alt=""><h4>Beetroot Malt</h4><p class="price">₹175</p><button>Add</button></div>
            <div class="product-card"><img src="assets/pages/kuppaimenisoap.jpg" alt=""><h4>Kuppaimeni Soap</h4><p class="price">₹175</p><button>Add</button></div>
            <div class="product-card"><img src="assets/pages/facepowdernatural.jpg" alt=""><h4>Natural Face Powder</h4><p class="price">₹175</p><button>Add</button></div>
            <div class="product-card"><img src="assets/pages/onionoil.jpg" alt=""><h4>Onial oil</h4><p class="price">₹175</p><button>Add</button></div>
            <div class="product-card"><img src="assets/pages/antipigmentationcream.jpg" alt=""><h4>Anti Pigmentation Cream</h4><p class="price">₹175</p><button>Add</button></div>
        </div>

        <button class="arrow right" aria-label="next">›</button>
    </div>
</section>

<!-- breakfast & Quick meal-->

<section class="category-section">
  <div class="cat-header">
    <h2>Breakfast & Quick Meal</h2>
    <a href="#" class="see-all">see all</a>
  </div>

    <div class="product-slider-wrapper">
        <button class="arrow left" aria-label="prev">‹</button>

        <div class="product-row">
            <div class="product-card"><img src="assets/pages/instantidlimix.jpg" alt=""><h4>Instant Idli Mix</h4><p class="price">₹189</p><button>Add</button></div>
            <div class="product-card"><img src="assets/pages/chapatipackets.jpg" alt=""><h4>Chapati Packets</h4><p class="price">₹225</p><button>Add</button></div>
            <div class="product-card"><img src="assets/pages/dosamix.jpg" alt=""><h4>Dosa Mix</h4><p class="price">₹175</p><button>Add</button></div>
            <div class="product-card"><img src="assets/pages/biryanimix.jpg" alt=""><h4>Biryani Mix</h4><p class="price">₹175</p><button>Add</button></div>
            <div class="product-card"><img src="assets/pages/upmamix.jpg" alt=""><h4>Upma Mix</h4><p class="price">₹175</p><button>Add</button></div>
            <div class="product-card"><img src="assets/pages/maggi.jpg" alt=""><h4>instant noodles</h4><p class="price">₹175</p><button>Add</button></div>
            <div class="product-card"><img src="assets/pages/pasta.jpg" alt=""><h4>instant pasta /macaroni</h4><p class="price">₹175</p><button>Add</button></div>
            <div class="product-card"><img src="assets/pages/peanutbutter.jpg" alt=""><h4>Peanut Butter</h4><p class="price">₹175</p><button>Add</button></div>
            <div class="product-card"><img src="assets/pages/chocolatespread.jpg" alt=""><h4>chocolate Spreads</h4><p class="price">₹175</p><button>Add</button></div>
        </div>

        <button class="arrow right" aria-label="next">›</button>
    </div>
</section>

<!-- Kids corner -->
<section class="category-section">
  <div class="cat-header">
    <h2>Kids corner</h2>
    <a href="#" class="see-all">see all</a>
  </div>

  <div class="product-slider-wrapper">
    <button class="arrow left" aria-label="prev-2">‹</button>

    <div class="product-row">
      <div class="product-card"><img src="assets/pages/softtoys.jpg" alt=""><h4>soft Toys</h4><p class="price">₹189</p><button>Add</button></div>
      <div class="product-card"><img src="assets/pages/actionfigures.jpg" alt=""><h4>Action Figures</h4><p class="price">₹189</p><button>Add</button></div>
      <div class="product-card"><img src="assets/pages/dolls.jpg" alt=""><h4>Dolls</h4><p class="price">₹189</p><button>Add</button></div>
      <div class="product-card"><img src="assets/pages/puzzlegames.jpg" alt=""><h4>Puzzle Games</h4><p class="price">₹189</p><button>Add</button></div>
      <div class="product-card"><img src="assets/pages/chocolatebar.jpg" alt=""><h4>chocolate bar</h4><p class="price">₹189</p><button>Add</button></div>
      <div class="product-card"><img src="assets/pages/candygummies.jpg" alt=""><h4>Candy & Gummies</h4><p class="price">₹189</p><button>Add</button></div>
      <div class="product-card"><img src="assets/pages/toffees.jpg" alt=""><h4>Toffees & Caramei Sweets</h4><p class="price">₹189</p><button>Add</button></div>
      <div class="product-card"><img src="assets/pages/Notesbooks.jpg" alt=""><h4>Notesbooks & Sketchbooks</h4><p class="price">₹189</p><button>Add</button></div>
      <div class="product-card"><img src="assets/pages/pencilboxes.jpg" alt=""><h4>Pencil Boxes & Cases</h4><p class="price">₹189</p><button>Add</button></div>
      <div class="product-card"><img src="assets/pages/colour.jpg" alt=""><h4>Colored Pencils,Crayons,Markers </h4><p class="price">₹189</p><button>Add</button></div>
      
    </div>

    <button class="arrow right" aria-label="next-2">›</button>
  </div>
</section>


<!-- SNACKS & MUNCHIES SLIDER -->
<section class="category-section">
  <div class="cat-header">
    <h2>Snacks & Munchies</h2>
    <a href="#" class="see-all">see all</a>
  </div>

    <div class="product-slider-wrapper">
        <button class="arrow left" aria-label="prev">‹</button>

        <div class="product-row">
            <div class="product-card"><img src="assets/pages/layssalted.jpg" alt=""><h4>Lay’s Classic Salted</h4><p class="price">₹189</p><button>Add</button></div>
            <div class="product-card"><img src="assets/pages/laysmagic.jpg" alt=""><h4>Lay’s Magic Masala</h4><p class="price">₹225</p><button>Add</button></div>
            <div class="product-card"><img src="assets/pages/bingo.jpg" alt=""><h4>Bingo Mad Angles</h4><p class="price">₹175</p><button>Add</button></div>
            <div class="product-card"><img src="assets/pages/bingopotato.jpg" alt=""><h4>Bingo Potato</h4><p class="price">₹175</p><button>Add</button></div>
            <div class="product-card"><img src="assets/pages/uncle chipps.jpg" alt=""><h4>uncle chips</h4><p class="price">₹175</p><button>Add</button></div>
            <div class="product-card"><img src="assets/pages/pringles.jpg" alt=""><h4>Pringles</h4><p class="price">₹175</p><button>Add</button></div>
            <div class="product-card"><img src="assets/pages/haldiram.jpg" alt=""><h4>haldiram's Aloo Bhujia</h4><p class="price">₹175</p><button>Add</button></div>
            <div class="product-card"><img src="assets/pages/kurkure.jpg" alt=""><h4>kurkure Masala Munch</h4><p class="price">₹175</p><button>Add</button></div>
            <div class="product-card"><img src="assets/pages/doritos.jpg" alt=""><h4>Doritos Nacho Cheese</h4><p class="price">₹175</p><button>Add</button></div>
        </div>

        <button class="arrow right" aria-label="next">›</button>
    </div>
</section>




<!-- COLD DRINKS & JUICES SLIDER -->
<section class="category-section">
  <div class="cat-header">
    <h2>Cold Drinks & Juices</h2>
    <a href="#" class="see-all">see all</a>
  </div>

  <div class="product-slider-wrapper">
    <button class="arrow left" aria-label="prev-2">‹</button>

    <div class="product-row">
      <div class="product-card"><img src="assets/pages/cocacola.jpg" alt=""><h4>Coca-cola</h4><p class="price">₹189</p><button>Add</button></div>
      <div class="product-card"><img src="assets/pages/pepsi.jpg" alt=""><h4>pepsi</h4><p class="price">₹189</p><button>Add</button></div>
      <div class="product-card"><img src="assets/pages/thumsup.jpg" alt=""><h4>Thums Up</h4><p class="price">₹189</p><button>Add</button></div>
      <div class="product-card"><img src="assets/pages/tropicana.jpg" alt=""><h4>Tropicana Orange Juice</h4><p class="price">₹189</p><button>Add</button></div>
      <div class="product-card"><img src="assets/pages/tromixedjuice.jpg" alt=""><h4>Tropicana Mixed fruit</h4><p class="price">₹189</p><button>Add</button></div>
      <div class="product-card"><img src="assets/pages/troapple.jpg" alt=""><h4>Tropicana Apple</h4><p class="price">₹189</p><button>Add</button></div>
      <div class="product-card"><img src="assets/pages/realmango.jpg" alt=""><h4>Real Mango</h4><p class="price">₹189</p><button>Add</button></div>
      <div class="product-card"><img src="assets/pages/realorange.jpg" alt=""><h4>Real Orange</h4><p class="price">₹189</p><button>Add</button></div>
      <div class="product-card"><img src="assets/pages/redbull.jpg" alt=""><h4>Red Bull</h4><p class="price">₹189</p><button>Add</button></div>
      <div class="product-card"><img src="assets/pages/monster.jpg" alt=""><h4>Monster Energy</h4><p class="price">₹189</p><button>Add</button></div>
      <div class="product-card"><img src="assets/pages/sting.jpg" alt=""><h4>Sting Energy Drink</h4><p class="price">₹189</p><button>Add</button></div>
    </div>

    <button class="arrow right" aria-label="next-2">›</button>
  </div>
</section>



<!-- home essentials-->

<section class="category-section">
  <div class="cat-header">
    <h2>Home Essentials</h2>
    <a href="#" class="see-all">see all</a>
  </div>

    <div class="product-slider-wrapper">
        <button class="arrow left" aria-label="prev">‹</button>

        <div class="product-row">
      
            <div class="product-card"><img src="assets/pages/lizol.jpg" alt=""><h4>Floor Cleaner</h4> <p class="product-price">₹176 </p><button class="add-btn">Add</button></div>
            <div class="product-card"><img src="assets/pages/toiletcleaner.webp" alt=""><h4>Toilet Cleaner</h4><p class="price">₹175</p><button>Add</button></div>
            <div class="product-card"><img src="assets/pages/mops.jpg" alt=""><h4>Mops,Brooms,Wipers</h4><p class="price">₹175</p><button>Add</button></div>
            <div class="product-card"><img src="assets/pages/Aluminiumfoil.jpg" alt=""><h4>Aluminium Foil</h4><p class="price">₹175</p><button>Add</button></div>
            <div class="product-card"><img src="assets/pages/clingwrap.jpg" alt=""><h4>Cling Wrap</h4><p class="price">₹175</p><button>Add</button></div>
            <div class="product-card"><img src="assets/pages/roomfreshener1.jpg" alt=""><h4>Room Freshener</h4><p class="price">₹175</p><button>Add</button></div>
            <div class="product-card"><img src="assets/pages/airpurifiers.jpg" alt=""><h4>Air Purifiers / Gels</h4><p class="price">₹175</p><button>Add</button></div>
            <div class="product-card"><img src="assets/pages/handwash.png" alt=""><h4>Hand Wash</h4><p class="price">₹175</p><button>Add</button></div>
            <div class="product-card"><img src="assets/pages/sanitizer.webp" alt=""><h4>Sanitizer</h4><p class="price">₹175</p><button>Add</button></div>
            <div class="product-card"><img src="assets/pages/toilettissues.jpg" alt=""><h4>Toilet Tissues</h4><p class="price">₹175</p><button>Add</button></div>
        </div>

        <button class="arrow right" aria-label="next">›</button>
    </div>
</section>


<!-- FOOTER (single) -->
<footer class="footer">
  <div class="footer-container">
    <div class="footer-column">
      <h3>Useful Links</h3>
      <ul>
        <li>Blog</li><li>Privacy</li><li>Terms</li><li>FAQs</li><li>Security</li><li>Contact</li>
      </ul>
    </div>

    <div class="footer-column">
      <h3>More</h3>
      <ul>
        <li>Partner</li><li>Franchise</li><li>Seller</li><li>Warehouse</li><li>Deliver</li><li>Resources</li>
      </ul>
    </div>

    <div class="footer-column">
      <h3>Categories</h3>
      <ul>
        <li>Vegetables & Fruits</li><li>Dairy & Breakfast</li><li>Cold Drinks & Juices</li><li>Instant Food</li>
        <li>Bakery & Biscuits</li><li>Sweet Tooth</li><li>Atta, Rice & Dal</li><li>Sauces & Spreads</li>
      </ul>
    </div>

    <div class="footer-column">
      <h3>More Categories</h3>
      <ul>
        <li>Organic & Premium</li><li>Baby Care</li><li>Home Care</li><li>Beauty & Cosmetics</li>
        <li>Kitchen & Dining</li><li>Fashion & Accessories</li><li>Books</li><li>E-Gift Cards</li>
      </ul>
    </div>
  </div>

  <div class="footer-container" style="margin-top:26px;align-items:center;">
    <div class="footer-left">
      <h3>Download App</h3>
      <div class="app-buttons">
        <img src="assets/pages/appstore.webp" alt="App Store">
        <img src="assets/pages/googleplay.png" alt="Google Play">
      </div>
    </div>

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

  <div class="footer-bottom">© 2025 QuickKart — All Rights Reserved.</div>
</footer>

<!-- small JS to power arrow buttons (keeps your HTML the same, only adds small behaviour) -->
<script>
  // slide rows when arrows clicked (works for all slider wrappers)
  document.querySelectorAll('.product-slider-wrapper').forEach(wrapper=>{
    const left = wrapper.querySelector('.arrow.left');
    const right = wrapper.querySelector('.arrow.right');
    const row = wrapper.querySelector('.product-row');

    if(left) left.addEventListener('click', ()=> row.scrollBy({left:-460, behavior:'smooth'}));
    if(right) right.addEventListener('click', ()=> row.scrollBy({left:460, behavior:'smooth'}));
  });
</script>

<!-- WhatsApp Floating Button -->
<a href="https://wa.me/9629373" target="_blank" class="whatsapp-button">
    <img src="assets/pages/whatapp1.png" alt="WhatsApp" />
</a>

<style>
/* WhatsApp Button Style */
.whatsapp-button {
    position: fixed;
    bottom: 20px;
    right: 20px;
    width: 100px;
    height: 100px;
    z-index: 1000;
    cursor: pointer;
    animation: bounce 2s infinite;
}

.whatsapp-button img {
    width: 100%;
    height: 100%;
}

/* Bounce Animation */
@keyframes bounce {
    0%, 20%, 50%, 80%, 100% { transform: translateY(0); }
    40% { transform: translateY(-10px); }
    60% { transform: translateY(-5px); }
}
</style>


</body>
</html>
