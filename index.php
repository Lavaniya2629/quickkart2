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

    /* SEARCH SUGGESTIONS */
.suggestions-box {
  position: absolute;
  background: #fff;
  width: 100%;
  max-height: 280px;
  overflow-y: auto;
  border-radius: 10px;
  box-shadow: 0 10px 30px rgba(0,0,0,0.12);
  z-index: 999;
  display: none;
}

.suggestion-item {
  padding: 12px 15px;
  cursor: pointer;
  display: flex;
  gap: 10px;
  align-items: center;
}

.suggestion-item:hover {
  background: #f3f4f6;
}

.suggestion-item img {
  width: 40px;
  height: 40px;
  object-fit: contain;
}

/* SEARCH RESULT GRID */
.search-results {
  padding: 30px;
}

.search-results h3 {
  margin-bottom: 20px;
}

.search-grid {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
  gap: 20px;
}
.cart-drawer {
  position: fixed;
  top: 0;
  right: -400px;
  width: 350px;
  height: 100%;
  background: #fff;
  box-shadow: -3px 0 12px rgba(0,0,0,0.2);
  transition: 0.3s;
  display: flex;
  flex-direction: column;
  z-index: 999999;
  padding: 15px;
}

.cart-drawer.open {
  right: 0;
}

.cart-header {
  display: flex;
  justify-content: space-between;
  font-size: 18px;
  font-weight: 600;
  margin-bottom: 10px;
}

#cartItems {
  flex: 1;
  overflow-y: auto;
}

.cart-item {
  display: flex;
  align-items: center;
  margin-bottom: 12px;
  border-bottom: 1px solid #eee;
  padding-bottom: 10px;
}

.cart-item img {
  width: 50px;
  height: 50px;
  margin-right: 10px;
}

.item-info {
  flex: 1;
}

.item-price {
  font-weight: 600;
}

.qty-controls {
  display: flex;
  align-items: center;
  gap: 8px;
}

.qty-controls button {
  background: green;
  color: white;
  border: none;
  padding: 4px 10px;
  border-radius: 6px;
  cursor: pointer;
}

.cart-footer {
  border-top: 1px solid #ddd;
  padding-top: 10px;
}

.total-block {
  display: flex;
  justify-content: space-between;
  margin-bottom: 10px;
  font-size: 18px;
  font-weight: 600;
}

.proceed-btn {
  width: 100%;
  background: green;
  color: white;
  padding: 12px;
  border: none;
  border-radius: 8px;
  font-size: 17px;
  cursor: pointer;
}

#openCartBtn {
  position: fixed;
  bottom: 20px;
  right: 20px;
  background: darkblue;
  color: white;
  border: none;
  padding: 14px 20px;
  border-radius: 30px;
  cursor: pointer;
  z-index: 1000;
}
.cart-drawer {
  position: fixed;
  top: 0;
  right: -350px;
  width: 350px;
  height: 100vh;
  background: #fff;
  box-shadow: -3px 0 10px rgba(0,0,0,0.3);
  transition: 0.3s;
  z-index: 9999;
}

.cart-drawer.open {
  right: 0;
}
.qq-logo {
  display: flex;
  flex-direction: column;
  line-height: 1;
  font-family: 'Poppins', sans-serif;
}

.qk-orange {
  font-size: 38px;
  font-weight: 700;
  color: #FF8A00; /* Orange */
}

.qk-blue {
  font-size: 38px;
  font-weight: 700;
  color: #36A9E1; /* Light Blue */
}

.qk-tagline {
  margin-top: 4px;
  font-size: 16px;
  color: #333;
}
.line1 {
  display: flex;
  align-items: center;
}

.cart-icon {
  width: 32px;
  margin: 0 4px;
}


</style>
</head>
<body>
<header>
   <!-- HTML -->
<div class="qq-logo">
  <div class="line1">
    <span class="qk-orange">QuickKart</span>
    <span class="qk-blue">Bazar</span>
  </div>
  <span class="qk-tagline">Your Daily Needs, Delivered Super-Fast!</span>
</div>





    <div class="delivery-location">
        <span>Delivery in 12 minutes</span>
        <select>
            <option>Karaikal</option>
            <option>Nagapattinam</option>
        </select>
    </div>

    <div class="search-bar">
  <input type="text" id="searchInput" placeholder="Search for products...">
  <div id="searchSuggestions" class="suggestions-box"></div>
</div>


    <div class="header-right">
        <button>Login</button>
        
        <button class="cart-btn" onclick="toggleCart()">My Cart</button>
    </div>

</header>

<!-- Cart Drawer -->
<div id="cartDrawer" class="cart-drawer">
  <div class="cart-header">
    <span>My Cart</span>
    <button onclick="toggleCart()">✕</button>
  </div>

  <div id="cartItems"></div>

  <div class="cart-footer">
    <div class="total-block">
      <span>Total:</span>
      <strong id="cartTotal">₹0</strong>
    </div>
    <button class="proceed-btn" onclick="proceedToWhatsApp()">Proceed</button>
  </div>
</div>



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
<div id="searchResults" class="search-results" style="display:none;">
  <h3 id="resultTitle"></h3>
  <div class="search-grid" id="resultGrid"></div>
</div>


<!-- 🌟 PRODUCT GRID -->
<div class="products-wrapper" id="productsSection">
    <div class="product-card" data-cat="cafe">
  <img src="assets/pages/coldcoffee.jpg" alt="Cold Coffee">
  <h4>Cold Coffee</h4>
  <p class="price">₹45</p>
  <button onclick="addToCart('Cold Coffee', 99, 'assets/pages/coldcoffee.jpg')">Add</button>
</div>

<div class="product-card" data-cat="home">
  <img src="assets/pages/roomfreshener.jpg" alt="Room Freshener">
  <h4>Room Freshener</h4>
  <small>(250ml)</small>
  <p class="price">₹100</p>
  <button onclick="addToCart('Room Freshener', 160, 'assets/pages/roomfreshener.jpg')">Add</button>
</div>

<div class="product-card" data-cat="toys">
  <img src="assets/pages/teddybear.jpg" alt="Teddy Bear">
  <h4>Teddy Bear</h4>
  <small>(Medium)</small>
  <p class="price">₹300</p>
  <button onclick="addToCart('Teddy Bear', 450, 'assets/pages/teddybear.jpg')">Add</button>
</div>

<div class="product-card" data-cat="fresh">
  <img src="assets/pages/tomoto.jpg" alt="Fresh Tomato 1kg">
  <h4>Fresh Tomato</h4>
  <small>(1kg)</small>
  <p class="price">₹30</p>
  <button onclick="addToCart('Fresh Tomato 1kg', 40, 'assets/pages/tomoto.jpg')">Add</button>
</div>

<div class="product-card" data-cat="beauty">
  <img src="assets/pages/facecream.jpg" alt="Face Cream">
  <h4>Face Cream</h4>
  <small>(50g)</small>
  <p class="price">₹100</p>
  <button onclick="addToCart('Face Cream', 120, 'assets/pages/facecream.jpg')">Add</button>
</div>

<div class="product-card" data-cat="fashion">
  <img src="assets/pages/tshit.jpg" alt="Men T-Shirt">
  <h4>Men T-Shirt</h4>
  <p class="price">₹299</p>
  <button onclick="addToCart('Men T-Shirt', 299, 'assets/pages/tshit.jpg')">Add</button>
</div>

</div>
<div id="searchResults" class="search-results" style="display:none;">
  <h3 id="resultTitle"></h3>
  <div class="search-grid" id="resultGrid"></div>
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
.banner-container {
  display: flex;
  gap: 20px;
  padding: 20px;
}

.banner-box {
  width: 50%;
  height: 200px;
  border-radius: 20px;
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
  position: relative;
  color: #fff;
  display: flex;
  align-items: center;
}

.banner-text {
  padding: 20px;
}

.banner-text h2 {
  margin: 0;
  font-size: 28px;
  font-weight: 700;
}

.banner-text p {
  margin: 10px 0 15px;
  font-size: 16px;
}

.banner-text button {
  background: #fff;
  color: #ff5500;
  border: none;
  padding: 8px 18px;
  border-radius: 8px;
  cursor: pointer;
  font-weight: 600;
}

@media(max-width: 768px) {
  .banner-container {
    flex-direction: column;
  }
  .banner-box {
    width: 100%;
    height: 180px;
  }
}
.product-card small {
  color: #777;
  font-size: 14px;
  display: block;
  margin-top: -5px;
}

</style>

<div class="banner-container">
    
  <div class="banner-box"
       style="background-image: url('assets/bg1.png')">
    <div class="banner-text">
      
    </div>
  </div>

  <div class="banner-box"
       style="background-image: url('assets/bg2.png')">
    <div class="banner-text">
      
      
    </div>
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
      
  <div class="product-card">
    <img src="assets/pages/health mix2.jpg" alt="">
    <h4>Health Mix</h4>
    <small>(250g)</small>
    <p class="price">₹230</p>
    <button onclick="addToCart('Health Mix', 230, 'assets/pages/health mix2.jpg')">Add</button>
  </div>

  <div class="product-card">
    <img src="assets/pages/ABC malt.jpg" alt="">
    <h4>ABC Malt</h4>
    <small>(250g)</small>
    <p class="price">₹300</p>
    <button onclick="addToCart('ABC Malt', 300, 'assets/pages/ABC malt.jpg')">Add</button>
  </div>

  <div class="product-card">
    <img src="assets/pages/nutswithhoney.jpg" alt="">
    <h4>Nuts With Honey</h4>
    <small>(250g)</small>
    <p class="price">₹450</p>
    <button onclick="addToCart('Nuts With Honey', 450, 'assets/pages/nutswithhoney.jpg')">Add</button>
  </div>

  <div class="product-card">
    <img src="assets/pages/gulgand.jpg" alt="">
    <h4>Gulgand</h4>
    <small>(250g)</small>
    <p class="price">₹320</p>
    <button onclick="addToCart('Gulgand', 320, 'assets/pages/gulgand.jpg')">Add</button>
  </div>

  <div class="product-card">
    <img src="assets/pages/moringapowder.jpg" alt="">
    <h4>Moringa Powder</h4>
    <small>(250g)</small>
    <p class="price">₹300</p>
    <button onclick="addToCart('Moringa Powder', 300, 'assets/pages/moringapowder.jpg')">Add</button>
  </div>

  <div class="product-card">
    <img src="assets/pages/beetrootmalt.jpg" alt="">
    <h4>Beetroot Malt</h4>
    <small>(250g)</small>
    <p class="price">₹310</p>
    <button onclick="addToCart('Beetroot Malt', 310, 'assets/pages/beetrootmalt.jpg')">Add</button>
  </div>

  <div class="product-card">
    <img src="assets/pages/kuppaimenisoap.jpg" alt="">
    <h4>Kuppaimeni Soap</h4>
    <small>(1 Piece)</small>
    <p class="price">₹130</p>
    <button onclick="addToCart('Kuppaimeni Soap', 130, 'assets/pages/kuppaimenisoap.jpg')">Add</button>
  </div>

  <div class="product-card">
    <img src="assets/pages/facepowdernatural.jpg" alt="">
    <h4>Natural Face Powder</h4>
    <small>(250g)</small>
    <p class="price">₹289</p>
    <button onclick="addToCart('Natural Face Powder', 289, 'assets/pages/facepowdernatural.jpg')">Add</button>
  </div>

  <div class="product-card">
    <img src="assets/pages/onionoil.jpg" alt="">
    <h4>Onion Oil</h4>
    <small>(250ml)</small>
    <p class="price">₹320</p>
    <button onclick="addToCart('Onion Oil', 320, 'assets/pages/onionoil.jpg')">Add</button>
  </div>

  <div class="product-card">
    <img src="assets/pages/antipigmentationcream.jpg" alt="">
    <h4>Anti Pigmentation Cream</h4>
    <small>(250g)</small>
    <p class="price">₹180</p>
    <button onclick="addToCart('Anti Pigmentation Cream', 180, 'assets/pages/antipigmentationcream.jpg')">Add</button>
  </div>

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

  <div class="product-card">
    <img src="assets/pages/instantidlimix.jpg" alt="">
    <h4>Instant Idli Mix</h4>
    <p class="price">₹90</p>
    <button class="add-btn" onclick="addToCart('Instant Idli Mix', 0, 'assets/pages/instantidlimix.jpg')">Add</button>
  </div>

  <div class="product-card">
    <img src="assets/pages/dosamix.jpg" alt="">
    <h4>Dosa Batter / Mix</h4>
    <small>(500g Pack)</small>
    <p class="price">₹120</p>
    <button class="add-btn" onclick="addToCart('Dosa Batter / Mix', 0, 'assets/pages/dosamix.jpg')">Add</button>
  </div>

  <div class="product-card">
    <img src="assets/pages/upmamix.jpg" alt="">
    <h4>Upma Mix</h4>
    <small>(small Pack)</small>
    <p class="price">₹25</p>
    <button class="add-btn" onclick="addToCart('Upma Mix', 0, 'assets/pages/upmamix.jpg')">Add</button>
  </div>

  <div class="product-card">
    <img src="assets/pages/maggi.jpg" alt="">
    <h4>Instant Noodles</h4>
    <p class="price">₹15</p>
    <button class="add-btn" onclick="addToCart('Instant Noodles', 0, 'assets/pages/maggi.jpg')">Add</button>
  </div>

  <div class="product-card">
    <img src="assets/pages/pasta.jpg" alt="">
    <h4>Instant Pasta</h4>
    <small>(200g)</small>
    <p class="price">₹120</p>
    <button class="add-btn" onclick="addToCart('Instant Pasta', 0, 'assets/pages/pasta.jpg')">Add</button>
  </div>

  <div class="product-card">
    <img src="assets/pages/biryanimix.jpg" alt="">
    <h4>Instant Biryani Mix</h4>
    <p class="price">₹120</p>
    <button class="add-btn" onclick="addToCart('Instant Biryani Mix', 0, 'assets/pages/biryanimix.jpg')">Add</button>
  </div>

  <div class="product-card">
    <img src="assets/pages/chapatipackets.jpg" alt="">
    <h4>Chapati / Paratha Pack</h4>
    <small>(10-12pcs)</small>
    <p class="price">₹80</p>
    <button class="add-btn" onclick="addToCart('Chapati / Paratha Pack', 0, 'assets/pages/chapatipackets.jpg')">Add</button>
  </div>

  <div class="product-card">
    <img src="assets/pages/peanutbutter.jpg" alt="">
    <h4>Peanut Butter</h4>
    <small>(200g)</small>
    <p class="price">₹150</p>
    <button class="add-btn" onclick="addToCart('Peanut Butter', 0, 'assets/pages/peanutbutter.jpg')">Add</button>
  </div>

  <div class="product-card">
    <img src="assets/pages/chocolatespread.jpg" alt="">
    <h4>Chocolate Spread</h4>
    <small>(200g)</small>
    <p class="price">₹140</p>
    <button class="add-btn" onclick="addToCart('Chocolate Spread', 0, 'assets/pages/chocolatespread.jpg')">Add</button>
  </div>

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

  <div class="product-card">
    <img src="assets/pages/softtoys.jpg" alt="">
    <h4>Soft Toys</h4>
    <small>(Per Price)</small>
    <p class="price">₹349</p>
    <button onclick="addToCart('Soft Toys', 189, 'assets/pages/softtoys.jpg')">Add</button>
  </div>

  <div class="product-card">
    <img src="assets/pages/actionfigures.jpg" alt="">
    <h4>Action Figures</h4>
    <small>(per price)</small>
    <p class="price">₹499</p>
    <button onclick="addToCart('Action Figures', 189, 'assets/pages/actionfigures.jpg')">Add</button>
  </div>

  <div class="product-card">
    <img src="assets/pages/dolls.jpg" alt="">
    <h4>Dolls</h4>
    <small>(Per Price)</small>
    <p class="price">₹399</p>
    <button onclick="addToCart('Dolls', 189, 'assets/pages/dolls.jpg')">Add</button>
  </div>

  <div class="product-card">
    <img src="assets/pages/puzzlegames.jpg" alt="">
    <h4>Puzzle Games</h4>
    <small>(Per Set)</small>
    <p class="price">₹249</p>
    <button onclick="addToCart('Puzzle Games', 189, 'assets/pages/puzzlegames.jpg')">Add</button>
  </div>

  <div class="product-card">
    <img src="assets/pages/chocolatebar.jpg" alt="">
    <h4>Chocolate Bar</h4>
    <small>(45g)</small>
    <p class="price">₹60</p>
    <button onclick="addToCart('Chocolate Bar', 189, 'assets/pages/chocolatebar.jpg')">Add</button>
  </div>

  <div class="product-card">
    <img src="assets/pages/candygummies.jpg" alt="">
    <h4>Candy & Gummies</h4>
    <small>(80g Pouch)</small>
    <p class="price">₹99</p>
    <button onclick="addToCart('Candy & Gummies', 189, 'assets/pages/candygummies.jpg')">Add</button>
  </div>

  <div class="product-card">
    <img src="assets/pages/toffees.jpg" alt="">
    <h4>Toffees & Caramel Sweets</h4>
    <small>(100g Pouch)</small>
    <p class="price">₹70</p>
    <button onclick="addToCart('Toffees & Caramel Sweets', 189, 'assets/pages/toffees.jpg')">Add</button>
  </div>

  <div class="product-card">
    <img src="assets/pages/Notesbooks.jpg" alt="">
    <h4>Notebooks & Sketchbooks</h4>
    <small>(120 Pages)</small>
    <p class="price">₹80</p>
    <button onclick="addToCart('Notebooks & Sketchbooks', 189, 'assets/pages/Notesbooks.jpg')">Add</button>
  </div>

  <div class="product-card">
    <img src="assets/pages/pencilboxes.jpg" alt="">
    <h4>Pencil Boxes & Cases</h4>
    <small>(1 Unite)</small>
    <p class="price">₹149</p>
    <button onclick="addToCart('Pencil Boxes & Cases', 189, 'assets/pages/pencilboxes.jpg')">Add</button>
  </div>

  <div class="product-card">
    <img src="assets/pages/colour.jpg" alt="">
    <h4>Colored Pencils, Crayons, Markers</h4>
    <small>(12 Pieces)</small>
    <p class="price">₹199</p>
    <button onclick="addToCart('Colored Pencils, Crayons, Markers', 189, 'assets/pages/colour.jpg')">Add</button>
  </div>

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

  <div class="product-card">
    <img src="assets/pages/layssalted.jpg" alt="">
    <h4>Lay’s Classic Salted</h4>
    <small>(45g)</small>
    <p class="price">₹20</p>
    <button onclick="addToCart('Lay’s Classic Salted', 189, 'assets/pages/layssalted.jpg')">Add</button>
  </div>

  <div class="product-card">
    <img src="assets/pages/laysmagic.jpg" alt="">
    <h4>Lay’s Magic Masala</h4>
    <small>(45g)</small>
    <p class="price">₹20</p>
    <button onclick="addToCart('Lay’s Magic Masala', 225, 'assets/pages/laysmagic.jpg')">Add</button>
  </div>

  <div class="product-card">
    <img src="assets/pages/bingo.jpg" alt="">
    <h4>Bingo Mad Angles</h4>
    <small>(45g)</small>
    <p class="price">₹15</p>
    <button onclick="addToCart('Bingo Mad Angles', 175, 'assets/pages/bingo.jpg')">Add</button>
  </div>

  <div class="product-card">
    <img src="assets/pages/bingopotato.jpg" alt="">
    <h4>Bingo Potato</h4>
    <small>(45g)</small>
    <p class="price">₹15</p>
    <button onclick="addToCart('Bingo Potato', 175, 'assets/pages/bingopotato.jpg')">Add</button>
  </div>

  <div class="product-card">
    <img src="assets/pages/uncle chipps.jpg" alt="">
    <h4>Uncle Chips</h4>
    <small>(30g)</small>
    <p class="price">₹15</p>
    <button onclick="addToCart('Uncle Chips', 175, 'assets/pages/uncle chipps.jpg')">Add</button>
  </div>

  <div class="product-card">
    <img src="assets/pages/pringles.jpg" alt="">
    <h4>Pringles</h4>
    <small>(110g)</small>
    <p class="price">₹125</p>
    <button onclick="addToCart('Pringles', 175, 'assets/pages/pringles.jpg')">Add</button>
  </div>

  <div class="product-card">
    <img src="assets/pages/haldiram.jpg" alt="">
    <h4>Haldiram's Aloo Bhujia</h4>
    <small>(200g)</small>
    <p class="price">₹90</p>
    <button onclick="addToCart('Haldiram Aloo Bhujia', 175, 'assets/pages/haldiram.jpg')">Add</button>
  </div>

  <div class="product-card">
    <img src="assets/pages/kurkure.jpg" alt="">
    <h4>Kurkure Masala Munch</h4>
    <small>(45g)</small>
    <p class="price">₹15</p>
    <button onclick="addToCart('Kurkure Masala Munch', 175, 'assets/pages/kurkure.jpg')">Add</button>
  </div>

  <div class="product-card">
    <img src="assets/pages/doritos.jpg" alt="">
    <h4>Doritos Nacho Cheese</h4>
    <small>(145g)</small>
    <p class="price">₹175</p>
    <button onclick="addToCart('Doritos Nacho Cheese', 175, 'assets/pages/doritos.jpg')">Add</button>
  </div>

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

  <div class="product-card">
    <img src="assets/pages/cocacola.jpg" alt="">
    <h4>Coca Cola</h4>
    <small>(750ml/1l/2.25l)</small>
    <p class="price">₹45/₹55/₹120</p>
    <button onclick="addToCart('Coca Cola', 189, 'assets/pages/cocacola.jpg')">Add</button>
  </div>

  <div class="product-card">
    <img src="assets/pages/pepsi.jpg" alt="">
    <h4>Pepsi</h4>
    <small>(750ml/1l)</small>
    <p class="price">₹45/₹55</p>
    <button onclick="addToCart('Pepsi', 189, 'assets/pages/pepsi.jpg')">Add</button>
  </div>

  <div class="product-card">
    <img src="assets/pages/thumsup.jpg" alt="">
    <h4>Thums Up</h4>
    <small>(750ml/1l)</small>
    <p class="price">₹45/₹55</p>
    <button onclick="addToCart('Thums Up', 189, 'assets/pages/thumsup.jpg')">Add</button>
  </div>

  <div class="product-card">
    <img src="assets/pages/tropicana.jpg" alt="">
    <h4>Tropicana Orange Juice</h4>
    <small>(1l)</small>
    <p class="price">₹150</p>
    <button onclick="addToCart('Tropicana Orange Juice', 189, 'assets/pages/tropicana.jpg')">Add</button>
  </div>

  <div class="product-card">
    <img src="assets/pages/tromixedjuice.jpg" alt="">
    <h4>Tropicana Mixed Fruit</h4>
     <small>(1l)</small>
    <p class="price">₹150</p>
    <button onclick="addToCart('Tropicana Mixed Fruit', 189, 'assets/pages/tromixedjuice.jpg')">Add</button>
  </div>

  <div class="product-card">
    <img src="assets/pages/troapple.jpg" alt="">
    <h4>Tropicana Apple</h4>
    <small>(1l)</small>
    <p class="price">₹150</p>
    <button onclick="addToCart('Tropicana Apple', 189, 'assets/pages/troapple.jpg')">Add</button>
  </div>

  <div class="product-card">
    <img src="assets/pages/realmango.jpg" alt="">
    <h4>Real Mango</h4>
     <small>(1l)</small>
    <p class="price">₹150</p>
    <button onclick="addToCart('Real Mango', 189, 'assets/pages/realmango.jpg')">Add</button>
  </div>

  <div class="product-card">
    <img src="assets/pages/realorange.jpg" alt="">
    <h4>Real Orange</h4>
    <small>(1l)</small>
    <p class="price">₹150</p>
    <button onclick="addToCart('Real Orange', 189, 'assets/pages/realorange.jpg')">Add</button>
  </div>

  <div class="product-card">
    <img src="assets/pages/redbull.jpg" alt="">
    <h4>Red Bull</h4>
     <small>(250ml)</small>
    <p class="price">₹200</p>
    <button onclick="addToCart('Red Bull', 189, 'assets/pages/redbull.jpg')">Add</button>
  </div>

  <div class="product-card">
    <img src="assets/pages/monster.jpg" alt="">
    <h4>Monster Energy</h4>
    <small>(473ml)</small>
    <p class="price">₹250</p>
    <button onclick="addToCart('Monster Energy', 189, 'assets/pages/monster.jpg')">Add</button>
  </div>

  <div class="product-card">
    <img src="assets/pages/sting.jpg" alt="">
    <h4>Sting Energy Drink</h4>
    <small>(300ml)</small>
    <p class="price">₹50</p>
    <button onclick="addToCart('Sting Energy Drink', 189, 'assets/pages/sting.jpg')">Add</button>
  </div>

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

  <div class="product-card">
    <img src="assets/pages/lizol.jpg" alt="">
    <h4>Floor Cleaner</h4>
    <small>(1l Bottle)</small>
    <p class="price">₹120</p>
    <button onclick="addToCart('Floor Cleaner', 176, 'assets/pages/lizol.jpg')">Add</button>
  </div>

  <div class="product-card">
    <img src="assets/pages/toiletcleaner.webp" alt="">
    <h4>Toilet Cleaner</h4>
    <small>(500ml/1l)</small>
    <p class="price">₹70</p>
    <button onclick="addToCart('Toilet Cleaner', 175, 'assets/pages/toiletcleaner.webp')">Add</button>
  </div>

  <div class="product-card">
    <img src="assets/pages/mops.jpg" alt="">
    <h4>Mops, Brooms, Wipers</h4>
    <small>(Each Piece)</small>
    <p class="price">₹120</p>
    <button onclick="addToCart('Mops, Brooms, Wipers', 175, 'assets/pages/mops.jpg')">Add</button>
  </div>

  <div class="product-card">
    <img src="assets/pages/Aluminiumfoil.jpg" alt="">
    <h4>Aluminium Foil</h4>
    <small>(10m Roll)</small>
    <p class="price">₹90</p>
    <button onclick="addToCart('Aluminium Foil', 175, 'assets/pages/Aluminiumfoil.jpg')">Add</button>
  </div>

  <div class="product-card">
    <img src="assets/pages/clingwrap.jpg" alt="">
    <h4>Cling Wrap</h4>
    <small>(10m Roll)</small>
    <p class="price">₹60</p>
    <button onclick="addToCart('Cling Wrap', 175, 'assets/pages/clingwrap.jpg')">Add</button>
  </div>

  <div class="product-card">
    <img src="assets/pages/roomfreshener1.jpg" alt="">
    <h4>Room Freshener</h4>
    <small>(250ml)</small>
    <p class="price">₹250</p>
    <button onclick="addToCart('Room Freshener', 175, 'assets/pages/roomfreshener1.jpg')">Add</button>
  </div>

  <div class="product-card">
    <img src="assets/pages/airpurifiers.jpg" alt="">
    <h4>Air Purifiers / Gels</h4>
    <small>(Jar)</small>
    <p class="price">₹120</p>
    <button onclick="addToCart('Air Purifiers / Gels', 175, 'assets/pages/airpurifiers.jpg')">Add</button>
  </div>

  <div class="product-card">
    <img src="assets/pages/handwash.png" alt="">
    <h4>Hand Wash</h4>
    <small>(200ml)</small>
    <p class="price">₹80</p>
    <button onclick="addToCart('Hand Wash', 175, 'assets/pages/handwash.png')">Add</button>
  </div>

  <div class="product-card">
    <img src="assets/pages/sanitizer.webp" alt="">
    <h4>Sanitizer</h4>
    <small>(200ml)</small>
    <p class="price">₹80</p>
    <button onclick="addToCart('Sanitizer', 175, 'assets/pages/sanitizer.webp')">Add</button>
  </div>

  <div class="product-card">
    <img src="assets/pages/toilettissues.jpg" alt="">
    <h4>Toilet Tissues</h4>
    <small>(4-12 Roll Pack)</small>
    <p class="price">₹60</p>
    <button onclick="addToCart('Toilet Tissues', 175, 'assets/pages/toilettissues.jpg')">Add</button>
  </div>

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
<a href="https://wa.me/8778224649" target="_blank" class="whatsapp-button">
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

<script>
document.addEventListener("DOMContentLoaded", () => {

  const input = document.getElementById("searchInput");
  const suggestionsBox = document.getElementById("searchSuggestions");
  const resultBox = document.getElementById("searchResults");
  const resultGrid = document.getElementById("resultGrid");
  const resultTitle = document.getElementById("resultTitle");

  const allProducts = document.querySelectorAll(".product-card");
  const allSections = document.querySelectorAll(
    ".category-section, .products-wrapper, .main-category-slider, .offer-section"
  );

  function resetPage() {
    suggestionsBox.style.display = "none";
    resultBox.style.display = "none";
    resultGrid.innerHTML = "";

    allSections.forEach(sec => {
      sec.style.display = "";
    });
  }

  input.addEventListener("input", () => {
    const keyword = input.value.toLowerCase().trim();

    // ✅ IF INPUT EMPTY → FULL RESET
    if (keyword === "") {
      resetPage();
      return;
    }

    suggestionsBox.innerHTML = "";
    resultGrid.innerHTML = "";

    let matches = [];

    allProducts.forEach(card => {
      const name = card.querySelector("h4").innerText.toLowerCase();
      if (name.includes(keyword)) {
        matches.push(card);
      }
    });

    // 🔹 Show suggestions
    if (matches.length > 0) {
      suggestionsBox.style.display = "block";

      matches.slice(0, 5).forEach(card => {
        const img = card.querySelector("img").src;
        const name = card.querySelector("h4").innerText;

        const div = document.createElement("div");
        div.className = "suggestion-item";
        div.innerHTML = `<img src="${img}"><span>${name}</span>`;

        div.onclick = () => showResults(keyword);
        suggestionsBox.appendChild(div);
      });
    }

    showResults(keyword);
  });

  function showResults(keyword) {
    suggestionsBox.style.display = "none";

    allSections.forEach(sec => sec.style.display = "none");

    let found = 0;
    resultGrid.innerHTML = "";

    allProducts.forEach(card => {
      const name = card.querySelector("h4").innerText.toLowerCase();
      if (name.includes(keyword)) {
        resultGrid.appendChild(card.cloneNode(true));
        found++;
      }
    });

    resultTitle.innerText = `Showing results for "${keyword}"`;
    resultBox.style.display = "block";

    if (found === 0) {
      resultGrid.innerHTML = "<p>No products found</p>";
    }
  }

});
</script>

<script>
let cart = {};

function toggleCart() {
  document.getElementById("cartDrawer").classList.toggle("open");
}

function addToCart(name, price, img) {
  if (!cart[name]) {
    cart[name] = { price: price, qty: 1, img: img };
  } else {
    cart[name].qty++;
  }
  updateCart();
  toggleCart();
}

function updateCart() {
  let cartItems = "";
  let total = 0;

  Object.keys(cart).forEach(item => {
    let p = cart[item].price * cart[item].qty;
    total += p;

    cartItems += `
      <div class="cart-item">
        <img src="${cart[item].img}">
        <div class="item-info">
          <b>${item}</b><br>
          ₹${cart[item].price}
        </div>
        <div class="qty-controls">
          <button onclick="changeQty('${item}', -1)">-</button>
          <span>${cart[item].qty}</span>
          <button onclick="changeQty('${item}', 1)">+</button>
        </div>
      </div>
    `;
  });

  document.getElementById("cartItems").innerHTML = cartItems;
  document.getElementById("cartTotal").innerText = "₹" + total;
}

function changeQty(item, number) {
  cart[item].qty += number;
  if (cart[item].qty <= 0) delete cart[item];
  updateCart();
}

function proceedToWhatsApp() {
  let msg = "🛒 QuickKart Order:%0A%0A";
  let total = 0;

  Object.keys(cart).forEach(item => {
    let lineTotal = cart[item].price * cart[item].qty;
    total += lineTotal;
    msg += `${item} × ${cart[item].qty} = ₹${lineTotal}%0A`;
  });

  msg += `%0A💰 Total: ₹${total}%0A%0A📍 Location: Karaikal`;

  let phone = "918778224649"; // <- change to your WhatsApp number
  window.open(`https://wa.me/${phone}?text=${msg}`, "_blank");
}
</script>



</body>
</html>
