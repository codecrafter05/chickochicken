<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Links - Chicko Chicken</title>
  <link rel="icon" type="image/png" href="{{ asset('assets/images/icon2.png') }}" />
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
  <style>
    .links-page {
      min-height: 100vh;
      background: #fff;
      display: flex;
      flex-direction: column;
      align-items: center;
      padding: 50px 20px 40px;
    }

    .links-container {
      max-width: 480px;
      width: 100%;
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 32px;
    }

    .links-logo {
      width: 120px;
      height: 120px;
      object-fit: contain;
      display: block;
    }

    .links-tagline {
      font-size: 16px;
      font-weight: 500;
      color: #999;
      letter-spacing: 3px;
      text-align: center;
    }

    .social-icons {
      display: flex;
      gap: 20px;
      justify-content: center;
      margin-bottom: 10px;
    }

    .social-icon {
      width: 48px;
      height: 48px;
      display: flex;
      align-items: center;
      justify-content: center;
      background: #f5f5f5;
      border-radius: 50%;
      transition: all 0.2s ease;
      text-decoration: none;
    }

    .social-icon:hover {
      background: #FFD401;
    }

    .social-icon svg {
      width: 24px;
      height: 24px;
      fill: #1a1a1a;
    }

    .contact-section {
      width: 100%;
      display: flex;
      flex-direction: column;
      gap: 12px;
      margin-bottom: 20px;
    }

    .contact-item {
      background: #fff;
      padding: 16px 20px;
      border-radius: 12px;
      font-size: 16px;
      color: #1a1a1a;
      display: flex;
      align-items: center;
      justify-content: center;
      border: 2px solid #FFD401;
      transition: all 0.2s ease;
      text-decoration: none;
      cursor: pointer;
      position: relative;
    }

    .contact-item:hover {
      border-color: #e6c001;
      box-shadow: 0 2px 8px rgba(255, 212, 1, 0.2);
      background: #fffef5;
    }

    .contact-item .phone-icon-svg {
      width: 20px;
      height: 20px;
      fill: #1a1a1a;
      position: absolute;
      left: 20px;
    }

    .contact-item .branch-name {
      color: #1a1a1a;
      font-weight: 500;
      text-align: center;
    }

    .contact-item.menu-button {
      border: 2px solid #1b77bb;
    }

    .contact-item.menu-button:hover {
      border-color: #357ae8;
      box-shadow: 0 2px 8px rgba(27, 119, 187, 0.2);
      background: #f0f8ff;
    }

    .contact-item .menu-icon-svg {
      width: 20px;
      height: 20px;
      fill: #1a1a1a;
      position: absolute;
      left: 20px;
    }

    .links-section {
      width: 100%;
      display: flex;
      flex-direction: column;
      gap: 12px;
    }

    .link-button {
      background: #1b77bb;
      color: #fff;
      padding: 16px 24px;
      border-radius: 12px;
      text-decoration: none;
      font-size: 16px;
      font-weight: 600;
      text-align: center;
      transition: all 0.2s ease;
      display: flex;
      align-items: center;
      justify-content: center;
      border: 1px solid #1b77bb;
      position: relative;
    }

    .link-button:hover {
      background: #357ae8;
      color: #fff;
      border-color: #357ae8;
    }

    .link-button svg {
      width: 20px;
      height: 20px;
      fill: #fff;
      position: absolute;
      left: 24px;
    }

    @media (max-width: 480px) {
      .links-page {
        padding: 40px 15px 30px;
      }

      .links-logo {
        width: 100px;
        height: 100px;
      }

      .links-tagline {
        font-size: 14px;
        letter-spacing: 2px;
      }

      .link-button {
        padding: 14px 20px;
        font-size: 15px;
      }

      .contact-item {
        padding: 14px 18px;
        font-size: 15px;
      }
    }

    /* Loader Styles */
    .links-loader {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: #fff;
      display: flex;
      align-items: center;
      justify-content: center;
      z-index: 9999;
      transition: opacity 0.5s ease, visibility 0.5s ease;
    }

    .links-loader.hidden {
      opacity: 0;
      visibility: hidden;
    }

    .links-loader-logo {
      width: 150px;
      height: 150px;
      object-fit: contain;
      animation: pulse 1.5s ease-in-out infinite;
    }

    @keyframes pulse {
      0%, 100% {
        transform: scale(1);
        opacity: 1;
      }
      50% {
        transform: scale(1.1);
        opacity: 0.8;
      }
    }

    .links-page {
      opacity: 0;
      transition: opacity 0.5s ease;
    }

    .links-page.loaded {
      opacity: 1;
    }
  </style>
</head>
<body>
  <!-- Loader -->
  <div class="links-loader" id="linksLoader">
    <img src="{{ asset('assets/images/icon2.png') }}" alt="Chicko Chicken" class="links-loader-logo">
  </div>

  <div class="links-page" id="linksPage">
    <div class="links-container">
      <!-- Logo -->
      <img src="{{ asset('assets/images/icon2.png') }}" alt="Chicko Chicken" class="links-logo">

      <!-- Tagline -->
      <div class="links-tagline">FRESH•TASTY•CRISPY</div>

      <!-- Social Icons -->
      <div class="social-icons">
        <a href="https://www.instagram.com/chickochicken.bh" target="_blank" class="social-icon" aria-label="Instagram">
          <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
          </svg>
        </a>
        <a href="www.tiktok.com/@chickochicken.bh" target="_blank" class="social-icon" aria-label="TikTok">
          <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path d="M19.59 6.69a4.83 4.83 0 0 1-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 0 1-5.2 1.74 2.89 2.89 0 0 1 2.31-4.64 2.93 2.93 0 0 1 .88.13V9.4a6.84 6.84 0 0 0-1-.05A6.33 6.33 0 0 0 5 20.1a6.34 6.34 0 0 0 10.86-4.43v-7a8.16 8.16 0 0 0 4.77 1.52v-3.4a4.85 4.85 0 0 1-1-.1z"/>
          </svg>
        </a>
      </div>

      <div class="contact-section">
        <a href="/" class="contact-item menu-button" aria-label="View Menu">
          <svg class="menu-icon-svg" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"/>
          </svg>
          <span class="branch-name">Menu</span>
        </a>
      </div>

      <!-- Contact Numbers -->
      <div class="contact-section">
        <a href="tel:13655884" class="contact-item" aria-label="Call Al Sayah">
          <svg class="phone-icon-svg" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/>
          </svg>
          <span class="branch-name">Al Sayah</span>
        </a>
        <a href="tel:77995553" class="contact-item" aria-label="Call Salmabad">
          <svg class="phone-icon-svg" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/>
          </svg>
          <span class="branch-name">Salmabad</span>
        </a>
        <a href="tel:13666055" class="contact-item" aria-label="Call Budaiya Hwy">
          <svg class="phone-icon-svg" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/>
          </svg>
          <span class="branch-name">Budaiya Hwy</span>
        </a>
      </div>

      <!-- Google Maps Links -->
      <div class="links-section">
        <a href="https://l.instagram.com/?u=https%3A%2F%2Fmaps.app.goo.gl%2FH7sN9GV4iG6surDC6%3Fg_st%3Diw%26utm_source%3Dig%26utm_medium%3Dsocial%26utm_content%3Dlink_in_bio%26fbclid%3DPAZXh0bgNhZW0CMTEAc3J0YwZhcHBfaWQMMjU2MjgxMDQwNTU4AAGnhVapjxuIEaNU91bAJzfmpqW5xA-SWGb9thgBy3ziBXatlfIO7lqhCgEiGM0_aem_sCII743rh4PKRH94Rq2sWw&e=AT0nhgCxOQccX-2pmqftuegS77v0FPAcDshf4fTVHjgRWclzr0EOggpaEcXrD8JZl1u_nb3xp6r_hL7YDsNRN56qL7hxUJW59n8aFmulzg" target="_blank" class="link-button">
          <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/>
          </svg>
          Salmabad
        </a>
        <a href="https://l.instagram.com/?u=https%3A%2F%2Fmaps.app.goo.gl%2FNHaNBYsS5PmpiZjVA%3Futm_source%3Dig%26utm_medium%3Dsocial%26utm_content%3Dlink_in_bio%26fbclid%3DPAZXh0bgNhZW0CMTEAc3J0YwZhcHBfaWQMMjU2MjgxMDQwNTU4AAGnz4Lb7ixkAyF-6rRKzjoOOhZ5eR4aUTlJE4Co8z7uGJcx5DYokEgUWchyZJY_aem_fbjPD7KC6XHA1NU3Kgg9tQ&e=AT35w2JiJTH96X8OVQ2Utfihfb3KaTPvJ8tODSbWzGVWqR4H19nioGSVOzRnNX2iw0s0baKA5A38Q6WwXNjQJR0Tdoyjhhvk5fiajRYvTA" target="_blank" class="link-button">
          <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/>
          </svg>
          Budaiya Hwy
        </a>
        <a href="https://l.instagram.com/?u=https%3A%2F%2Fmaps.app.goo.gl%2FtrdU9Cctc5yXyRTz6%3Fg_st%3Dcom.google.maps.preview.copy%26utm_source%3Dig%26utm_medium%3Dsocial%26utm_content%3Dlink_in_bio%26fbclid%3DPAZXh0bgNhZW0CMTEAc3J0YwZhcHBfaWQMMjU2MjgxMDQwNTU4AAGnYdctCZd0VTQb3k4uvv40kyMdNNlNb4Dz-M0hFZBmInrcSkrEaCAlHwjFr7E_aem_CiDJoxDuCB_tcJ--wDR0cA&e=AT1DD7kn8rkxkeltEfebZDyXav4ftL9ZgWIxdTizlHUElPzYyB1ux3M7BLxAQGK1ynjjZB93UI83rdZ5PDYPSscx0tajaa-6rJUwJZ8JxQ" target="_blank" class="link-button">
          <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/>
          </svg>
          Al Sayah
        </a>
      </div>
      
    </div>
  </div>

  <script>
    // Loader hide after 3 seconds
    window.addEventListener('load', function() {
      const loader = document.getElementById('linksLoader');
      const page = document.getElementById('linksPage');
      
      setTimeout(() => {
        loader.classList.add('hidden');
        page.classList.add('loaded');
        setTimeout(() => {
          loader.style.display = 'none';
        }, 500);
      }, 3000);
    });
  </script>
</body>
</html>

