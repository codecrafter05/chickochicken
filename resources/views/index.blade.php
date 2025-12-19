<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Chicko Chicken Menu</title>
  <link rel="icon" type="image/png" href="{{ asset('assets/images/icon2.png') }}" />
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body>

  <x-menu-header />

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
