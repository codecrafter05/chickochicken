<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>{{ $category->name ?? 'Menu' }} - Chicko Chicken</title>
  <link rel="icon" type="image/png" href="{{ asset('assets/images/icon2.png') }}" />
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body>

  <x-menu-header logo-link="/menu" show-back-button="true" />

  <!-- Page Layout -->
  <div class="menu-page">
    <!-- Sidebar Navigation - Desktop Only -->
    <aside class="menu-sidebar">
      @foreach($categories as $cat)
        <a href="/menu/{{ $cat->slug }}" class="menu-sidebar-item {{ $category->slug === $cat->slug ? 'active' : '' }}" data-category="{{ $cat->slug }}">
          <img src="{{ $cat->image ? asset('storage/' . $cat->image) : asset('assets/images/sandwich.png') }}" alt="{{ $cat->name }}" loading="lazy">
          <span class="menu-sidebar-item-text">{{ $cat->name }}</span>
        </a>
      @endforeach
    </aside>

    <!-- Main Content -->
    <div class="menu-content-wrapper">
      <div class="menu-container">
        <h1 class="menu-section-title">{{ $category->name ?? 'Menu' }}</h1>

        <div class="products-grid">
          @forelse($products as $product)
            <div class="product-item">
              <img src="{{ $product->image ? asset('storage/' . $product->image) : asset('assets/images/sandwich.png') }}" alt="{{ $product->name }}" class="product-image" loading="lazy">
              <div class="product-name">{{ $product->name }}</div>
              <div class="product-prices">
                {{-- 
                  Price Display Logic (Priority Order):
                  1. If 'custom_options' is set: display custom options (name + price for each) - for products with multiple named options
                  2. If 'price' is set: display only this price (no labels) - for products like sauces, drinks, salads
                  3. If 'sandwich_price' and/or 'meal_price' are set: display them with labels - for products with sandwich/meal options
                --}}
                @if(!empty($product->custom_options) && is_array($product->custom_options))
                  {{-- Custom options display (name + price for each option) --}}
                  @foreach($product->custom_options as $option)
                    <div class="price-item">
                      <span class="price-label">{{ $option['name'] ?? '' }}</span>
                      <span class="price-value">
                        @php
                          $price = (float)($option['price'] ?? 0);
                          $formatted = number_format($price, 3, '.', '');
                          // If it's a whole number, remove decimal part
                          if ($price == floor($price)) {
                            echo number_format($price, 0, '.', '');
                          } else {
                            echo $formatted;
                          }
                        @endphp
                         BHD
                      </span>
                    </div>
                  @endforeach
                @elseif($product->price)
                  {{-- Single price display (no labels) --}}
                  <div class="price-item">
                    <span class="price-value">
                      @php
                        $price = $product->price;
                        $formatted = number_format($price, 3, '.', '');
                        // If it's a whole number, remove decimal part
                        if ($price == floor($price)) {
                          echo number_format($price, 0, '.', '');
                        } else {
                          echo $formatted;
                        }
                      @endphp
                       BHD
                    </span>
                  </div>
                @else
                  {{-- Dual price display (with labels) --}}
                  @if($product->sandwich_price)
                    <div class="price-item">
                      <span class="price-label">Sandwich</span>
                      <span class="price-value">
                        @php
                          $price = $product->sandwich_price;
                          $formatted = number_format($price, 3, '.', '');
                          // If it's a whole number, remove decimal part
                          if ($price == floor($price)) {
                            echo number_format($price, 0, '.', '');
                          } else {
                            echo $formatted;
                          }
                        @endphp
                         BHD
                      </span>
                    </div>
                  @endif
                  @if($product->meal_price)
                    <div class="price-item">
                      <span class="price-label">Meal</span>
                      <span class="price-value">
                        @php
                          $price = $product->meal_price;
                          $formatted = number_format($price, 3, '.', '');
                          // If it's a whole number, remove decimal part
                          if ($price == floor($price)) {
                            echo number_format($price, 0, '.', '');
                          } else {
                            echo $formatted;
                          }
                        @endphp
                         BHD
                      </span>
                    </div>
                  @endif
                @endif
              </div>
            </div>
          @empty
            <div style="grid-column: 1 / -1; text-align: center; padding: 40px;">
              <p>No products available in this category.</p>
            </div>
          @endforelse
        </div>
      </div>
    </div>
    
  </div>
  
</body>
</html>

