<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta property="og:image" content="{{ asset('assets/images/logo1red.png') }}" />
  <title>Chicko Chicken</title>
  <link rel="icon" type="image/png" href="{{ asset('assets/images/logo1red.png') }}" />
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body>
  <!-- Loader -->
  <div class="loader" id="loader">
    <div class="loader-content">
      <div class="loader-logo">
        <img src="{{ asset('assets/images/chicko.png') }}" alt="CHICKO CHICKEN Logo" width="300" height="300" decoding="async">
      </div>
    </div>
  </div>

  <main class="wrap">
    <header class="header">
      <img src="{{ asset('assets/images/chicko.png') }}" alt="Chicko Chicken" class="header-chicken">
      <img src="{{ asset('assets/images/logo1red.png') }}" alt="Chicko Logo" class="header-logo">
    </header>
    
    <div class="header-divider"></div>
    
    <div class="cart-icon-wrapper">
      <div class="cart-icon" id="cartIcon">
        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.3 2.3c-.4.4-.1 1.2.4 1.2H19M17 13v4c0 1.1.9 2 2 2s2-.9 2-2v-4M9 19.5c.8 0 1.5.7 1.5 1.5s-.7 1.5-1.5 1.5-1.5-.7-1.5-1.5.7-1.5 1.5-1.5zm11 0c.8 0 1.5.7 1.5 1.5s-.7 1.5-1.5 1.5-1.5-.7-1.5-1.5.7-1.5 1.5-1.5z"/>
        </svg>
        <span class="cart-badge">1</span>
      </div>
    </div>
    
    <div class="kicker">OUR MENU</div>
    <h1>The Most Popular</h1>

    <div class="tabs-wrapper">
      <button class="tabs-scroll-btn tabs-scroll-btn--prev" aria-label="Scroll left">←</button>
      <nav class="tabs" aria-label="menu categories" id="tabsContainer">
        <div class="tab"><div class="ico">🍔</div><span>Burgers</span></div>
        <div class="tab"><div class="ico">🍕</div><span>Pizza</span></div>
        <div class="tab"><div class="ico">🍣</div><span>Sushi</span></div>
        <div class="tab"><div class="ico">🍟</div><span>Snacks</span></div>
        <div class="tab"><div class="ico">🥗</div><span>Salads</span></div>
        <div class="tab"><div class="ico">🥤</div><span>Drinks</span></div>
        <div class="tab"><div class="ico">🍰</div><span>Desserts</span></div>
      </nav>
      <button class="tabs-scroll-btn tabs-scroll-btn--next" aria-label="Scroll right">→</button>
    </div>

    <section class="grid">
      <!-- Featured card -->
      <article class="card card--featured">
        <div class="thumb" aria-hidden="true">
          <img src="{{ asset('assets/images/sandwich.png') }}" alt="Royal De Luxe" width="140" height="140">
        </div>
        <div class="title">Royal De Luxe</div>
        <div class="meta">140 g</div>
        <div class="price">2.50 BHD</div>

        <div class="controls">
          <div class="qty" data-qty>
            <button type="button" data-dec aria-label="decrease">−</button>
            <input type="text" value="1" inputmode="numeric" aria-label="quantity" />
            <button type="button" data-inc aria-label="increase">+</button>
          </div>
          <button class="bag" type="button" aria-label="add to cart"><img src="{{ asset('assets/images/market.png') }}" alt="cart" width="20" height="20"></button>
        </div>
      </article>

      <!-- Regular cards -->
      <article class="card">
        <div class="thumb" aria-hidden="true"><img src="{{ asset('assets/images/sandwich.png') }}" alt="Chicken Roll" width="140" height="140"></div>
        <div class="title">Chicken Roll</div>
        <div class="meta">290 g</div>
        <div class="price">4.50 BHD</div>
      </article>

      <article class="card">
        <div class="thumb" aria-hidden="true"><img src="{{ asset('assets/images/sandwich.png') }}" alt="Double Fish" width="140" height="140"></div>
        <div class="title">Double Fish</div>
        <div class="meta">160 g</div>
        <div class="price">3.00 BHD</div>
      </article>

      <article class="card">
        <div class="thumb" aria-hidden="true"><img src="{{ asset('assets/images/sandwich.png') }}" alt="Sub Meat" width="140" height="140"></div>
        <div class="title">Sub "Meat"</div>
        <div class="meta">190 g</div>
        <div class="price">3.50 BHD</div>
      </article>

      <article class="card">
        <div class="thumb" aria-hidden="true"><img src="{{ asset('assets/images/sandwich.png') }}" alt="Salad Caesar" width="140" height="140"></div>
        <div class="title">Salad "Caesar"</div>
        <div class="meta">150 g</div>
        <div class="price">4.50 BHD</div>
      </article>

      <article class="card">
        <div class="thumb" aria-hidden="true"><img src="{{ asset('assets/images/sandwich.png') }}" alt="Chicken Premier" width="140" height="140"></div>
        <div class="title">Chicken Premier</div>
        <div class="meta">140 g</div>
        <div class="price">2.30 BHD</div>
      </article>

      <article class="card">
        <div class="thumb" aria-hidden="true"><img src="{{ asset('assets/images/sandwich.png') }}" alt="Pizza Italian" width="140" height="140"></div>
        <div class="title">Pizza "Italian"</div>
        <div class="meta">30 cm</div>
        <div class="price">7.50 BHD</div>
      </article>

      <article class="card">
        <div class="thumb" aria-hidden="true"><img src="{{ asset('assets/images/sandwich.png') }}" alt="Chicken Wings" width="140" height="140"></div>
        <div class="title">Chicken Wings (7)</div>
        <div class="meta">350 g</div>
        <div class="price">3.50 BHD</div>
      </article>
    </section>

    <div class="more">
      <button type="button">Show more</button>
    </div>
  </main>

  <script>
    // Loader hide after page load
    window.addEventListener('load', function() {
      const loader = document.getElementById('loader');
      setTimeout(() => {
        loader.classList.add('hidden');
        setTimeout(() => {
          loader.style.display = 'none';
        }, 800);
      }, 3000);
    });

    // tiny qty controller for the featured card
    document.querySelectorAll('[data-qty]').forEach((wrap) => {
      const input = wrap.querySelector('input');
      const inc = wrap.querySelector('[data-inc]');
      const dec = wrap.querySelector('[data-dec]');

      const clamp = (n) => Math.max(1, Math.min(99, n));
      const getVal = () => {
        const n = parseInt(String(input.value).replace(/[^0-9]/g, ''), 10);
        return Number.isFinite(n) ? n : 1;
      };
      const setVal = (n) => { input.value = String(clamp(n)); };

      inc.addEventListener('click', () => setVal(getVal() + 1));
      dec.addEventListener('click', () => setVal(getVal() - 1));
      input.addEventListener('blur', () => setVal(getVal()));
    });

    // Tabs horizontal scroll with arrows (works alongside touch scroll)
    const tabsContainer = document.getElementById('tabsContainer');
    const prevBtn = document.querySelector('.tabs-scroll-btn--prev');
    const nextBtn = document.querySelector('.tabs-scroll-btn--next');

    if (tabsContainer && prevBtn && nextBtn) {
      const scrollAmount = 200;
      
      const updateButtons = () => {
        const { scrollLeft, scrollWidth, clientWidth } = tabsContainer;
        prevBtn.style.opacity = scrollLeft > 0 ? '1' : '0.4';
        prevBtn.style.pointerEvents = scrollLeft > 0 ? 'auto' : 'none';
        nextBtn.style.opacity = scrollLeft < scrollWidth - clientWidth - 10 ? '1' : '0.4';
        nextBtn.style.pointerEvents = scrollLeft < scrollWidth - clientWidth - 10 ? 'auto' : 'none';
      };

      prevBtn.addEventListener('click', () => {
        tabsContainer.scrollBy({ left: -scrollAmount, behavior: 'smooth' });
      });

      nextBtn.addEventListener('click', () => {
        tabsContainer.scrollBy({ left: scrollAmount, behavior: 'smooth' });
      });

      tabsContainer.addEventListener('scroll', updateButtons);
      window.addEventListener('resize', updateButtons);
      updateButtons();
    }
  </script>
</body>
</html>