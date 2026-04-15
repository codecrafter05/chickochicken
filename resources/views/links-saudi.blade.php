<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Links - Chicko Chicken · Saudi</title>
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
  <div class="links-loader" id="linksLoaderSaudi">
    <img src="{{ asset('assets/images/icon2.png') }}" alt="Chicko Chicken" class="links-loader-logo">
  </div>

  <div class="links-page" id="linksPageSaudi">
    <div class="links-container">
      <!-- Logo -->
      <img src="{{ asset('assets/images/icon2.png') }}" alt="Chicko Chicken" class="links-logo">

      <!-- Tagline -->
      <div class="links-tagline">FRESH•TASTY•CRISPY</div>

      <!-- Social Icons -->
      <div class="social-icons">
        <a href="https://www.instagram.com/chickochicken.ksa" target="_blank" class="social-icon" aria-label="Instagram">
          <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
          </svg>
        </a>
        <a href="https://www.snapchat.com/add/Chickochicken01" target="_blank" class="social-icon" aria-label="Snapchat">
          <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path d="M12.206.793c.99 0 4.347.276 5.93 3.821.5 1.12.379 3.017.304 4.164l-.003.06c-.022.29.167.508.396.545.214.033.672-.048 1.167-.261.217-.094.46-.128.696-.083.273.053.52.19.69.4.304.373.297.86-.022 1.218-.08.09-.244.207-.485.328-.76.384-1.137.602-1.24 1.103-.05.237.009.49.171.719.162.23 1.877 2.552 4.437 3.11.26.056.444.29.444.556 0 .06-.01.12-.03.177-.19.592-1.87 1.03-4.727 1.48-.156.024-.285.17-.304.356-.03.298-.08.575-.152.818-.07.24-.25.385-.48.385-.12 0-.25-.034-.395-.1-.395-.18-.894-.394-1.502-.394-.24 0-.49.033-.745.1-1.01.27-1.74 1.156-3.567 1.156-.09 0-.18-.003-.274-.01-1.827.007-2.557-.886-3.567-1.156-.255-.067-.505-.1-.745-.1-.608 0-1.107.214-1.502.394-.145.066-.275.1-.395.1-.23 0-.41-.145-.48-.385-.073-.243-.123-.52-.152-.818-.02-.186-.148-.332-.304-.356-2.857-.45-4.537-.888-4.727-1.48-.02-.057-.03-.117-.03-.177 0-.266.183-.5.444-.556 2.56-.558 4.275-2.88 4.437-3.11.162-.23.221-.482.171-.719-.103-.5-.48-.72-1.24-1.103-.24-.12-.404-.238-.485-.328-.32-.358-.326-.845-.022-1.218.17-.21.417-.347.69-.4.236-.045.48-.01.696.083.495.213.953.294 1.167.261.23-.037.418-.255.396-.545l-.003-.06c-.075-1.147-.196-3.044.304-4.164C7.859 1.069 11.216.793 12.206.793z"/>
          </svg>
        </a>
      </div>

      <div class="contact-section">
        <a href="{{ route('saudi') }}" class="contact-item menu-button" aria-label="Saudi menu">
          <svg class="menu-icon-svg" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"/>
          </svg>
          <span class="branch-name">Menu</span>
        </a>
      </div>

      <!-- Contact Number -->
      <div class="contact-section">
        <a href="tel:+966544736355" class="contact-item" aria-label="Call Saudi branch">
          <svg class="phone-icon-svg" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/>
          </svg>
          <span class="branch-name">Saudi · السعودية</span>
        </a>
      </div>

      <!-- Google Maps -->
      <div class="links-section">
        <a href="https://www.google.com/maps" target="_blank" rel="noopener noreferrer" class="link-button" aria-label="Open location in Google Maps">
          <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/>
          </svg>
          Saudi Branch
        </a>
      </div>

    </div>
  </div>

  <script>
    // Loader hide after 3 seconds
    window.addEventListener('load', function() {
      const loader = document.getElementById('linksLoaderSaudi');
      const page = document.getElementById('linksPageSaudi');

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
