<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sistc Ecommerce</title>
    <!-- font-awesome cdn link -->
    <link
      rel="stylesheet"
      href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <!-- custom css file link -->
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
  <?php
        include_once('./header.php');
    ?>

    <!-- Image Slider -->
    <section id="slider">
      <div class="slider-container">
        <div class="slide active">
          <img src="images/slide1.png" alt="Slide 1" />
        </div>
        <div class="slide">
          <img src="images/slide2.png" alt="Slide 2" />
        </div>
        <div class="slide">
          <img src="images/slide3.png" alt="Slide 3" />
        </div>
      </div>
    </section>

    <!-- Browse by Category -->
    <section id="category-section">
      <h2>Browse by Category</h2>
      <div id="category-buttons">
        <button class="category-btn" data-category="books">Books</button>
        <button class="category-btn" data-category="electronics">
          Electronics
        </button>
        <button class="category-btn" data-category="perfume">Perfume</button>
      </div>
      <!-- Table to display fetched data -->
      <table id="product-table" border="1">
        <thead>
          <!-- Headers will be dynamically added here -->
        </thead>
        <tbody>
          <!-- Products will be displayed here -->
        </tbody>
      </table>
    </section>

  <!-- Search Section -->
<section id="search-section">
    <h2>Search Products</h2>
  
    <!-- Search Form for Name/ID -->
    <form id="search-form">
      <input type="text" id="keyword" placeholder="Enter product ID or name" />
      <button type="submit" class="search-btn">Search</button>
    </form>
  
    <!-- Search Form for Price Range -->
    <form id="price-search-form">
      <input type="number" id="min-price" placeholder="Min price" />
      <input type="number" id="max-price" placeholder="Max price" />
      <button type="submit" class="search-btn">Search by Price</button>
    </form>
  
    <!-- Table to display search results -->
    <table id="search-results-table" border="1">
      <thead>
        <!-- Table headers will be dynamically set by JS -->
      </thead>
      <tbody>
        <!-- Results will be dynamically inserted here by JS -->
      </tbody>
    </table>
  </section>
  <?php
        include_once('./footer.php');
    ?>
    <!-- javascript script file link -->
    <script src="script.js"></script>
  </body>
</html>
