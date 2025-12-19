<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>{{ ucfirst($category ?? 'Menu') }} - Chicko Chicken</title>
  <link rel="icon" type="image/png" href="{{ asset('assets/images/icon2.png') }}" />
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body>

  <x-menu-header logo-link="/menu" />

  <!-- Page Layout -->
  <div class="menu-page">
    <!-- Sidebar Navigation - Desktop Only -->
    <aside class="menu-sidebar">
      <a href="/menu/sandwiches" class="menu-sidebar-item {{ ($category ?? '') === 'sandwiches' ? 'active' : '' }}" data-category="sandwiches">
        <img src="{{ asset('assets/images/sandwich.png') }}" alt="Sandwiches">
        <span class="menu-sidebar-item-text">Sandwiches</span>
      </a>
      <a href="/menu/appetizers" class="menu-sidebar-item {{ ($category ?? '') === 'appetizers' ? 'active' : '' }}" data-category="appetizers">
        <img src="{{ asset('assets/images/sandwich.png') }}" alt="Appetizers">
        <span class="menu-sidebar-item-text">Appetizers</span>
      </a>
      <a href="/menu/broasted" class="menu-sidebar-item {{ ($category ?? '') === 'broasted' ? 'active' : '' }}" data-category="broasted">
        <img src="{{ asset('assets/images/sandwich.png') }}" alt="Broasted Meals">
        <span class="menu-sidebar-item-text">Broasted Meals</span>
      </a>
      <a href="/menu/strips" class="menu-sidebar-item {{ ($category ?? '') === 'strips' ? 'active' : '' }}" data-category="strips">
        <img src="{{ asset('assets/images/sandwich.png') }}" alt="Chicken Strips">
        <span class="menu-sidebar-item-text">Chicken Strips</span>
      </a>
      <a href="/menu/fries" class="menu-sidebar-item {{ ($category ?? '') === 'fries' ? 'active' : '' }}" data-category="fries">
        <img src="{{ asset('assets/images/sandwich.png') }}" alt="Fries">
        <span class="menu-sidebar-item-text">Fries</span>
      </a>
      <a href="/menu/drinks" class="menu-sidebar-item {{ ($category ?? '') === 'drinks' ? 'active' : '' }}" data-category="drinks">
        <img src="{{ asset('assets/images/sandwich.png') }}" alt="Drinks">
        <span class="menu-sidebar-item-text">Drinks</span>
      </a>
      <a href="/menu/sauces" class="menu-sidebar-item {{ ($category ?? '') === 'sauces' ? 'active' : '' }}" data-category="sauces">
        <img src="{{ asset('assets/images/sandwich.png') }}" alt="Sauces">
        <span class="menu-sidebar-item-text">Sauces</span>
      </a>
      <a href="/menu/special" class="menu-sidebar-item {{ ($category ?? '') === 'special' ? 'active' : '' }}" data-category="special">
        <img src="{{ asset('assets/images/sandwich.png') }}" alt="Special">
        <span class="menu-sidebar-item-text">Special</span>
      </a>
    </aside>

    <!-- Main Content -->
    <div class="menu-content-wrapper">
      <div class="menu-container">
        <h1 class="menu-section-title">{{ ucfirst(str_replace('-', ' ', $category ?? 'Menu')) }}</h1>

        <div class="products-grid">
          <!-- Sample Products - Replace with actual products from database -->
          <div class="product-item">
            <img src="{{ asset('assets/images/sandwich.png') }}" alt="Product 1" class="product-image">
            <div class="product-name">Product 1</div>
          </div>

          <div class="product-item">
            <img src="{{ asset('assets/images/sandwich.png') }}" alt="Product 2" class="product-image">
            <div class="product-name">Product 2</div>
          </div>

          <div class="product-item">
            <img src="{{ asset('assets/images/sandwich.png') }}" alt="Product 3" class="product-image">
            <div class="product-name">Product 3</div>
          </div>

          <div class="product-item">
            <img src="{{ asset('assets/images/sandwich.png') }}" alt="Product 4" class="product-image">
            <div class="product-name">Product 4</div>
          </div>

          <div class="product-item">
            <img src="{{ asset('assets/images/sandwich.png') }}" alt="Product 5" class="product-image">
            <div class="product-name">Product 5</div>
          </div>

          <div class="product-item">
            <img src="{{ asset('assets/images/sandwich.png') }}" alt="Product 6" class="product-image">
            <div class="product-name">Product 6</div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
</body>
</html>

