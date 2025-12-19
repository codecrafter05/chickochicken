<!-- Header -->
<header class="menu-header-bar">
  <div class="menu-header-left">

    <img 
      src="{{ asset('assets/images/icon2.png') }}" 
      alt="Chicko Chicken" 
      class="menu-logo" 
      @if(isset($logoLink) && $logoLink) onclick="window.location.href='{{ $logoLink }}'" @endif
    >
    <!-- <div class="menu-icon">
      <span></span>
      <span></span>
      <span></span>
    </div> -->

  </div>

  <!-- <button class="order-now-btn">Order Now</button> -->

</header>

