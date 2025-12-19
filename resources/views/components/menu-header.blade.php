<!-- Header -->
<header class="menu-header-bar">
  <div class="menu-header-left">
    @if(isset($showBackButton) && $showBackButton)
      <button class="back-button" onclick="window.history.back()" aria-label="Go back">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M15 18l-6-6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </button>
    @endif
  </div>

  <div class="menu-header-right">
    <img 
      src="{{ asset('assets/images/icon2.png') }}" 
      alt="Chicko Chicken" 
      class="menu-logo" 
      @if(isset($logoLink) && $logoLink) onclick="window.location.href='{{ $logoLink }}'" @endif
    >
  </div>
</header>

