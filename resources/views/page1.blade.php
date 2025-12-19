<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Chicko Chicken Menu</title>
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

    .menu-main-title {
      font-size: 32px;
      font-weight: 700;
      color: #1a1a1a;
      margin-bottom: 30px;
      text-align: center;
    }

    /* Categories Grid */
    .categories-grid {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 20px;
    }

    .category-item {
      cursor: pointer;
      transition: transform 0.2s ease;
    }

    .category-item:active {
      transform: scale(0.98);
    }

    .category-image {
      width: 100%;
      height: 180px;
      object-fit: contain;
      border-radius: 12px;
      background: transparent;
      margin-bottom: 12px;
    }

    .category-label {
      font-size: 16px;
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

      .menu-main-title {
        font-size: 40px;
        text-align: center;
      }

      .categories-grid {
        grid-template-columns: repeat(3, 1fr);
        gap: 30px;
      }

      .category-image {
        height: 220px;
      }

      .category-label {
        font-size: 18px;
      }
    }

    @media (min-width: 1280px) {
      .categories-grid {
        grid-template-columns: repeat(4, 1fr);
      }
    }
  </style>
</head>
<body>
  <!-- Header -->
  <header class="menu-header-bar">
    <div class="menu-header-left">
      <img src="{{ asset('assets/images/icon2.png') }}" alt="Chicko Chicken" class="menu-logo">
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
      <div class="menu-sidebar-item active" data-category="sandwiches">
        <img src="{{ asset('assets/images/sandwich.png') }}" alt="Sandwiches">
        <span class="menu-sidebar-item-text">Sandwiches</span>
      </div>
      <div class="menu-sidebar-item" data-category="appetizers">
        <img src="{{ asset('assets/images/sandwich.png') }}" alt="Meal">
        <span class="menu-sidebar-item-text">Appetizers</span>
      </div>
      <div class="menu-sidebar-item" data-category="broasted">
        <img src="{{ asset('assets/images/sandwich.png') }}" alt="Broasted Meals">
        <span class="menu-sidebar-item-text">Broasted Meals</span>
      </div>
      <div class="menu-sidebar-item" data-category="strips">
        <img src="{{ asset('assets/images/sandwich.png') }}" alt="Chicken Strips">
        <span class="menu-sidebar-item-text">Chicken Strips</span>
      </div>
      <div class="menu-sidebar-item" data-category="fries">
        <img src="{{ asset('assets/images/sandwich.png') }}" alt="Fries">
        <span class="menu-sidebar-item-text">Fries</span>
      </div>
      <div class="menu-sidebar-item" data-category="drinks">
        <img src="{{ asset('assets/images/sandwich.png') }}" alt="Drinks">
        <span class="menu-sidebar-item-text">Drinks</span>
      </div>
      <div class="menu-sidebar-item" data-category="sauces">
        <img src="{{ asset('assets/images/sandwich.png') }}" alt="Sauces">
        <span class="menu-sidebar-item-text">Sauces</span>
      </div>
      <div class="menu-sidebar-item" data-category="special">
        <img src="{{ asset('assets/images/sandwich.png') }}" alt="Special">
        <span class="menu-sidebar-item-text">Special</span>
      </div>
    </aside>

    <!-- Main Content -->
    <div class="menu-content-wrapper">
      <div class="menu-container">
        <h1 class="menu-main-title">Chicko Chicken Menu</h1>

        <div class="categories-grid">
          <!-- Category 1: Sandwiches -->
          <div class="category-item" data-category="sandwiches">
            <img src="{{ asset('assets/images/sandwich.png') }}" alt="Sandwiches" class="category-image">
            <div class="category-label">Sandwiches</div>
          </div>

          <!-- Category 2: Appetizers -->
          <div class="category-item" data-category="appetizers">
            <img src="{{ asset('assets/images/sandwich.png') }}" alt="Appetizers" class="category-image">
            <div class="category-label">Appetizers</div>
          </div>

          <!-- Category 3: Broasted Meals -->
          <div class="category-item" data-category="broasted">
            <img src="{{ asset('assets/images/sandwich.png') }}" alt="Broasted Meals" class="category-image">
            <div class="category-label">Broasted Meals</div>
          </div>

          <!-- Category 4: Chicken Strips -->
          <div class="category-item" data-category="strips">
            <img src="{{ asset('assets/images/sandwich.png') }}" alt="Chicken Strips" class="category-image">
            <div class="category-label">Chicken Strips</div>
          </div>

          <!-- Category 5: Fries -->
          <div class="category-item" data-category="fries">
            <img src="{{ asset('assets/images/sandwich.png') }}" alt="Fries" class="category-image">
            <div class="category-label">Fries</div>
          </div>

          <!-- Category 6: Drinks -->
          <div class="category-item" data-category="drinks">
            <img src="{{ asset('assets/images/sandwich.png') }}" alt="Drinks" class="category-image">
            <div class="category-label">Drinks</div>
          </div>

          <!-- Category 7: Sauces -->
          <div class="category-item" data-category="sauces">
            <img src="{{ asset('assets/images/sandwich.png') }}" alt="Sauces" class="category-image">
            <div class="category-label">Sauces</div>
          </div>

          <!-- Category 8: Special -->
          <div class="category-item" data-category="special">
            <img src="{{ asset('assets/images/sandwich.png') }}" alt="Special" class="category-image">
            <div class="category-label">Special</div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
    // Navigate to products page when clicking category
    document.querySelectorAll('.category-item, .menu-sidebar-item').forEach(item => {
      item.addEventListener('click', function(e) {
        e.preventDefault();
        const category = this.getAttribute('data-category');
        if (category) {
          window.location.href = `/menu/${category}`;
        }
      });
    });
  </script>
</body>
</html>
