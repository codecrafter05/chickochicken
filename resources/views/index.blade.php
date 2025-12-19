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
      @forelse($categories as $cat)
        <div class="menu-sidebar-item" data-category="{{ $cat->slug }}">
          <img src="{{ $cat->image ? asset('storage/' . $cat->image) : asset('assets/images/sandwich.png') }}" alt="{{ $cat->name }}" loading="lazy">
          <span class="menu-sidebar-item-text">{{ $cat->name }}</span>
        </div>
      @empty
        <!-- No categories -->
      @endforelse
    </aside>

    <!-- Main Content -->
    <div class="menu-content-wrapper">
      <div class="menu-container">
        <h1 class="menu-main-title">Chicko Chicken Menu</h1>

        <div class="categories-grid">
          @forelse($categories as $cat)
            <div class="category-item" data-category="{{ $cat->slug }}">
              <img src="{{ $cat->image ? asset('storage/' . $cat->image) : asset('assets/images/sandwich.png') }}" alt="{{ $cat->name }}" class="category-image" loading="lazy">
              <div class="category-label">{{ $cat->name }}</div>
            </div>
          @empty
            <div style="grid-column: 1 / -1; text-align: center; padding: 40px;">
              <p>No categories available. Please add categories from the admin panel.</p>
            </div>
          @endforelse
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
