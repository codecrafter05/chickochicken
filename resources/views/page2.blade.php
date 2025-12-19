<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>{{ ucfirst($category ?? 'Menu') }} - Chicko Chicken</title>
  <link rel="icon" type="image/png" href="{{ asset('assets/images/icon2.png') }}" />
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: ui-sans-serif, system-ui, -apple-system, Segoe UI, Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif;
      background: #fff;
      color: #1a1a1a;
    }

    /* Header */
    .menu-header-bar {
      background: #fff;
      padding: 12px 20px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      border-bottom: 1px solid #e5e5e5;
      position: sticky;
      top: 0;
      z-index: 100;
    }

    .menu-header-left {
      display: flex;
      align-items: center;
      gap: 16px;
    }

    .menu-logo {
      height: 60px;
      width: auto;
      cursor: pointer;
    }

    .menu-icon {
      width: 24px;
      height: 24px;
      cursor: pointer;
      display: flex;
      flex-direction: column;
      gap: 4px;
    }

    .menu-icon span {
      width: 100%;
      height: 3px;
      background: #1a1a1a;
      border-radius: 2px;
    }

    .order-now-btn {
      background: #FFD401;
      color: #000;
      padding: 10px 20px;
      border-radius: 24px;
      font-weight: 700;
      font-size: 14px;
      border: none;
      cursor: pointer;
      transition: all 0.2s ease;
    }

    .order-now-btn:hover {
      background: #e6c001;
    }

    /* Page Layout */
    .menu-page {
      display: flex;
      min-height: calc(100vh - 60px);
    }

    /* Sidebar Navigation - Desktop */
    .menu-sidebar {
      width: 280px;
      background: #fff;
      border-right: 1px solid #e5e5e5;
      padding: 20px 0;
      position: sticky;
      top: 60px;
      height: calc(100vh - 60px);
      overflow-y: auto;
      display: none;
    }

    .menu-sidebar-item {
      display: flex;
      align-items: center;
      padding: 12px 20px;
      cursor: pointer;
      transition: all 0.2s ease;
      border-left: 3px solid transparent;
      text-decoration: none;
      color: inherit;
    }

    .menu-sidebar-item:hover {
      background: #f5f5f5;
    }

    .menu-sidebar-item.active {
      background: #fff;
      border-left-color: #FFD401;
    }

    .menu-sidebar-item img {
      width: 50px;
      height: 50px;
      object-fit: contain;
      border-radius: 8px;
      margin-right: 12px;
      background: transparent;
    }

    .menu-sidebar-item-text {
      font-size: 15px;
      font-weight: 500;
      color: #1a1a1a;
    }

    .menu-sidebar-item.active .menu-sidebar-item-text {
      font-weight: 600;
      color: #000;
    }

    /* Main Content */
    .menu-content-wrapper {
      flex: 1;
      display: flex;
      flex-direction: column;
    }

    .menu-container {
      flex: 1;
      max-width: 1200px;
      margin: 0 auto;
      padding: 30px 20px;
      width: 100%;
    }

    .menu-section-title {
      font-size: 32px;
      font-weight: 700;
      color: #1a1a1a;
      margin-bottom: 30px;
      text-align: center;
    }

    /* Products Grid */
    .products-grid {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 20px;
    }

    .product-item {
      cursor: pointer;
      transition: transform 0.2s ease;
    }

    .product-item:active {
      transform: scale(0.98);
    }

    .product-image {
      width: 100%;
      height: 200px;
      object-fit: contain;
      border-radius: 12px;
      background: transparent;
      margin-bottom: 12px;
    }

    .product-name {
      font-size: 18px;
      font-weight: 500;
      color: #1a1a1a;
      text-align: center;
    }

    /* Desktop */
    @media (min-width: 1024px) {
      .menu-page {
        flex-direction: row;
      }

      .menu-sidebar {
        display: block;
      }

      .menu-container {
        padding: 40px 60px;
      }

      .menu-section-title {
        font-size: 40px;
        text-align: center;
      }

      .products-grid {
        grid-template-columns: repeat(3, 1fr);
        gap: 30px;
      }

      .product-image {
        height: 250px;
      }

      .product-name {
        font-size: 20px;
      }
    }

    @media (min-width: 1280px) {
      .products-grid {
        grid-template-columns: repeat(4, 1fr);
      }
    }
  </style>
</head>
<body>
  <!-- Header -->
  <header class="menu-header-bar">
    <div class="menu-header-left">
      <img src="{{ asset('assets/images/icon2.png') }}" alt="Chicko Chicken" class="menu-logo" onclick="window.location.href='/menu'">
      <div class="menu-icon">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
    <button class="order-now-btn">Order Now</button>
  </header>

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

