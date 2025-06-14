<?php
// Set the HTTP response status to 404
http_response_code(404);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>404 - Page Not Found</title>
  <style>
    /* Custom styles for the 404 error page */
    body {
      background-color: #f9f9f9;
      font-family: Arial, sans-serif;
      color: #333;
      margin: 0;
      padding: 0;
    }
    .error-wrapper {
      text-align: center;
      padding: 80px 20px;
    }
    .error-code {
      font-size: 120px;
      margin: 0;
      color: #e74c3c;
    }
    .error-message {
      font-size: 24px;
      margin: 20px 0;
    }
    .error-details {
      font-size: 16px;
      margin: 20px 0;
      color: #555;
    }
    .error-button {
      display: inline-block;
      padding: 10px 25px;
      background-color: #3498db;
      color: #fff;
      text-decoration: none;
      border-radius: 5px;
      transition: background-color 0.3s ease;
      border: none;
      cursor: pointer;
    }
    .error-button:hover {
      background-color: #2980b9;
    }
  </style>
  <link
      href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />
    <link rel="stylesheet" href="styles.css" />
    <link rel="icon" type="image/x-icon" href="/assets/favicon.ico">
</head>
  <body>
    <nav>
      <div class="nav__header">
        <div class="nav__logo">
          <a href="#" class="logo">BookFlyChanges<span>Pro</span></a>
        </div>
        <div class="nav__menu__btn" id="menu-btn">
          <i class="ri-menu-line"></i>
        </div>
      </div>
      <ul class="nav__links" id="nav-links">
        <li><a href="/index.php">Home</a></li>
        <li><a href="/about-us.php">About-Us</a></li>
        <li><a href="/Contact.php">Contact-Us</a></li>
        <!-- <li><a href="#package">Packages</a></li>
        <li><a href="#client">Clients</a></li> -->
      </ul>
    </nav>
  <div class="error-wrapper">
    <h1 class="error-code">404</h1>
    <p class="error-message">Oops! Page Not Found</p>
    <p class="error-details">We are sorry, but the page you requested could not be found.</p>
    <button class="error-button" onclick="goBack()">Go Back</button>
  </div>
  
  <script>
    // JavaScript function to navigate back in browser history
    function goBack() {
      window.history.back();
    }
  </script>
</body>
</html>
