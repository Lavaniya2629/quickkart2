<script>

// Category TAB Click Filter (Top Categories)
const mainCatItems = document.querySelectorAll(".main-cat-item");
const allProducts = document.querySelectorAll(".product-card");

mainCatItems.forEach(cat => {
    cat.addEventListener("click", () => {

        // Remove active class from all
        mainCatItems.forEach(c => c.classList.remove("active-category"));
        cat.classList.add("active-category");

        let selectedCat = cat.dataset.category; // get category name

        allProducts.forEach(product => {
            if (selectedCat === "all" || product.dataset.category === selectedCat) {
                product.style.display = "block";
            } else {
                product.style.display = "none";
            }
        });

        // Smooth scroll to product section
        document.getElementById("productsSection").scrollIntoView({ behavior: "smooth" });

    });
});


// BEST SELLER SLIDER
const bestSlider = document.getElementById('bestSlider');
const bestPrev = document.getElementById('bestPrev');
const bestNext = document.getElementById('bestNext');

if(bestPrev && bestNext && bestSlider) {
  bestPrev.addEventListener('click', ()=> { bestSlider.scrollBy({left:-220, behavior:'smooth'}); });
  bestNext.addEventListener('click', ()=> { bestSlider.scrollBy({left:220, behavior:'smooth'}); });
  setInterval(()=> { bestSlider.scrollBy({left:220, behavior:'smooth'}); }, 3500);
}


</script>


// slider arrow behavior for ALL slider wrappers
document.querySelectorAll('.product-slider-wrapper').forEach(wrapper => {
  const row = wrapper.querySelector('.product-row');
  const btnPrev = wrapper.querySelector('.arrow.left');
  const btnNext = wrapper.querySelector('.arrow.right');

  // if arrows missing just return
  if (!row || !btnPrev || !btnNext) return;

  btnPrev.addEventListener('click', () => {
    row.scrollBy({ left: -320, behavior: 'smooth' });
  });
  btnNext.addEventListener('click', () => {
    row.scrollBy({ left: 320, behavior: 'smooth' });
  });

  // optional: show/hide arrows when start/end
  const updateArrows = () => {
    btnPrev.style.opacity = row.scrollLeft > 10 ? '1' : '0.4';
    btnNext.style.opacity = row.scrollWidth - row.clientWidth - row.scrollLeft > 10 ? '1' : '0.4';
  };
  row.addEventListener('scroll', updateArrows);
  window.addEventListener('resize', updateArrows);
  updateArrows();
});

<script>
const searchInput = document.getElementById("searchInput");

searchInput.addEventListener("keyup", function () {
  const value = this.value.toLowerCase();

  // Loop through each category section
  document.querySelectorAll(".category-section").forEach(section => {
    let matchFound = false;

    section.querySelectorAll(".product-card").forEach(card => {
      const name = card.getAttribute("data-name").toLowerCase();

      if (name.includes(value)) {
        card.style.display = "block";
        matchFound = true;
      } else {
        card.style.display = "none";
      }
    });

    // Hide category if no products match
    section.style.display = matchFound ? "block" : "none";
  });
});
</script>

