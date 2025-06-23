<?php
// Set the HTTP response status to 404
http_response_code(404);
?>
<!DOCTYPE html>
<html lang="en-US">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Page Not Found | Printer Setup Zone</title>
  <link rel="icon" type="image/png" href="/assets/favicon.png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>
    /* Reset and base styles */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    body {
      background: linear-gradient(135deg, #1f3d2a 0%, #2d5c3a 100%);
      color: #fff;
      min-height: 100vh;
      overflow-x: hidden;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      position: relative;
    }

    /* Background elements */
    .background-elements {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      z-index: -1;
      overflow: hidden;
    }

    .circle {
      position: absolute;
      border-radius: 50%;
      opacity: 0.1;
      animation: float 15s infinite linear;
    }

    .circle:nth-child(1) {
      width: 300px;
      height: 300px;
      background: #3aaf85;
      top: 10%;
      left: 5%;
      animation-duration: 20s;
    }

    .circle:nth-child(2) {
      width: 150px;
      height: 150px;
      background: #2e8b68;
      top: 70%;
      left: 15%;
      animation-duration: 25s;
      animation-delay: -5s;
    }

    .circle:nth-child(3) {
      width: 200px;
      height: 200px;
      background: #3aaf85;
      top: 30%;
      right: 10%;
      animation-duration: 18s;
      animation-delay: -3s;
    }

    .paper {
      position: absolute;
      background: rgba(255, 255, 255, 0.15);
      border-radius: 4px;
      animation: float 12s infinite ease-in-out;
      transform-origin: center;
    }

    .paper:nth-child(4) {
      width: 80px;
      height: 120px;
      top: 15%;
      right: 20%;
      animation-duration: 16s;
      animation-delay: -2s;
    }

    .paper:nth-child(5) {
      width: 60px;
      height: 90px;
      bottom: 25%;
      left: 25%;
      animation-duration: 14s;
      animation-delay: -4s;
    }

    /* Main container */
    .notfound-container {
      max-width: 1200px;
      width: 90%;
      padding: 40px;
      text-align: center;
      z-index: 10;
    }

    .error-code {
      font-size: 12rem;
      font-weight: 800;
      margin-bottom: 20px;
      position: relative;
      display: inline-block;
      color: #fff;
      text-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
      animation: glitch 2s infinite;
    }

    .error-code span {
      display: inline-block;
      position: relative;
    }

    .error-code span:nth-child(1) {
      animation: glitch-effect 2s infinite;
    }

    .error-code span:nth-child(2) {
      animation: glitch-effect 2s infinite reverse;
      animation-delay: 0.5s;
    }

    .error-code span:nth-child(3) {
      animation: glitch-effect 2s infinite;
      animation-delay: 1s;
    }

    /* .printer-icon {
            font-size: 8rem;
            color: #3aaf85;
            margin: 30px 0;
            position: relative;
            display: inline-block;
            animation: bounce 3s infinite ease-in-out;
        } */

    .error-title {
      font-size: 2.5rem;
      margin-bottom: 20px;
      color: #fff;
      text-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
    }

    .error-message {
      font-size: 1.3rem;
      max-width: 700px;
      margin: 0 auto 40px;
      line-height: 1.7;
      color: #e6e6e6;
    }

    .home-btn {
      display: inline-block;
      padding: 16px 40px;
      background: linear-gradient(to right, #3aaf85, #2e8b68);
      color: white;
      border: none;
      border-radius: 8px;
      font-size: 1.2rem;
      font-weight: 600;
      text-decoration: none;
      cursor: pointer;
      transition: all 0.3s;
      text-transform: uppercase;
      letter-spacing: 1px;
      box-shadow: 0 5px 20px rgba(58, 175, 133, 0.4);
      position: relative;
      overflow: hidden;
      margin-top: 20px;
    }

    .home-btn::before {
      content: '';
      position: absolute;
      top: 0;
      left: -100%;
      width: 100%;
      height: 100%;
      background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
      transition: 0.5s;
    }

    .home-btn:hover {
      background: linear-gradient(to right, #2e8b68, #3aaf85);
      transform: translateY(-5px);
      box-shadow: 0 10px 30px rgba(58, 175, 133, 0.6);
    }

    .home-btn:hover::before {
      left: 100%;
    }

    /* .search-box {
            max-width: 600px;
            margin: 40px auto;
            position: relative;
        }

        .search-box input {
            width: 100%;
            padding: 16px 60px 16px 25px;
            border: 2px solid rgba(255, 255, 255, 0.2);
            border-radius: 50px;
            background: rgba(0, 0, 0, 0.2);
            color: #fff;
            font-size: 1.1rem;
            transition: all 0.3s;
        }

        .search-box input:focus {
            outline: none;
            border-color: #3aaf85;
            box-shadow: 0 0 15px rgba(58, 175, 133, 0.3);
            background: rgba(0, 0, 0, 0.3);
        } */

    /* .search-btn {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            background: #3aaf85;
            color: white;
            border: none;
            border-radius: 50%;
            width: 45px;
            height: 45px;
            cursor: pointer;
            transition: all 0.3s;
            display: flex;
            align-items: center;
            justify-content: center;
        } */

    /* .search-btn:hover {
            background: #2e8b68;
            transform: translateY(-50%) scale(1.1);
        } */

    /* .helpful-links {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 30px;
            margin-top: 50px;
        } */

    /* .helpful-links a {
            color: #3aaf85;
            text-decoration: none;
            font-weight: 600;
            display: flex;
            align-items: center;
            transition: all 0.3s;
        } */
    /* 
        .helpful-links a i {
            margin-right: 10px;
            transition: transform 0.3s;
        } */

    /* .helpful-links a:hover {
            color: #fff;
        } */

    .helpful-links a:hover i {
      transform: translateX(5px);
    }

    /* Animations */
    @keyframes float {

      0%,
      100% {
        transform: translateY(0) rotate(0deg);
      }

      50% {
        transform: translateY(-20px) rotate(5deg);
      }
    }

    @keyframes glitch {

      0%,
      100% {
        transform: translate(0);
      }

      20% {
        transform: translate(-5px, 5px);
      }

      40% {
        transform: translate(-5px, -5px);
      }

      60% {
        transform: translate(5px, 5px);
      }

      80% {
        transform: translate(5px, -5px);
      }
    }

    @keyframes glitch-effect {

      0%,
      100% {
        transform: translate(0);
        opacity: 1;
      }

      5% {
        transform: translate(-10px, -5px);
        opacity: 0.8;
      }

      10% {
        transform: translate(8px, 4px);
        opacity: 0.6;
      }

      15% {
        transform: translate(-5px, 2px);
        opacity: 0.4;
      }

      20%,
      100% {
        transform: translate(0);
        opacity: 1;
      }
    }

    @keyframes bounce {

      0%,
      100% {
        transform: translateY(0);
      }

      50% {
        transform: translateY(-20px);
      }
    }

    /* Responsive design */
    @media (max-width: 992px) {
      .error-code {
        font-size: 10rem;
      }

      /* .printer-icon {
                font-size: 6rem;
            } */

      .error-title {
        font-size: 2.2rem;
      }
    }

    @media (max-width: 768px) {
      .error-code {
        font-size: 8rem;
      }

      /* .printer-icon {
                font-size: 5rem;
            } */

      .error-title {
        font-size: 2rem;
      }

      .error-message {
        font-size: 1.1rem;
      }

      .home-btn {
        padding: 14px 30px;
        font-size: 1.1rem;
      }

      /* .helpful-links {
                flex-direction: column;
                gap: 20px;
            } */
    }

    @media (max-width: 480px) {
      .notfound-container {
        padding: 20px;
      }

      .error-code {
        font-size: 6rem;
      }

      /* .printer-icon {
                font-size: 4rem;
            } */

      .error-title {
        font-size: 1.8rem;
      }

      .error-message {
        font-size: 1rem;
      }

      .home-btn {
        padding: 12px 25px;
        font-size: 1rem;
      }
    }
  </style>
</head>

<body>
  <!-- Background elements -->
  <div class="background-elements">
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="paper"></div>
    <div class="paper"></div>
  </div>

  <!-- Content -->
  <div class="notfound-container">
    <div class="error-code">
      <span>4</span>
      <span>0</span>
      <span>4</span>
    </div>

    <!-- <div class="printer-icon">
            <i class="fas fa-print"></i>
        </div> -->

    <h1 class="error-title">Page Not Found</h1>

    <p class="error-message">
      The page you're looking for seems to have encountered a paper jam. It might have been moved, deleted,
      or perhaps there was a misconfiguration in the print path. While we clear this issue, let's get you back
      to productive printing.
    </p>

    <!-- <div class="search-box">
            <input type="text" placeholder="Search for printer setup guides, drivers, or troubleshooting...">
            <button class="search-btn">
                <i class="fas fa-search"></i>
            </button>
        </div> -->

    <a href="/" class="home-btn">
      <i class="fas fa-home"></i> Back to Homepage
    </a>

    <!-- <div class="helpful-links">
            <a href="/setup-guides">
                <i class="fas fa-book"></i> Setup Guides
            </a>
            <a href="/drivers">
                <i class="fas fa-download"></i> Driver Downloads
            </a>
            <a href="/troubleshooting">
                <i class="fas fa-tools"></i> Troubleshooting
            </a>
            <a href="/contact">
                <i class="fas fa-headset"></i> Contact Support
            </a>
        </div> -->
  </div>

  <script>
    // Add subtle animation to background elements
    document.addEventListener('DOMContentLoaded', function () {
      const circles = document.querySelectorAll('.circle');
      const papers = document.querySelectorAll('.paper');

      // Add random rotation and delays for a more organic feel
      circles.forEach(circle => {
        const randomRotation = Math.floor(Math.random() * 360);
        circle.style.transform = `rotate(${randomRotation}deg)`;
      });

      papers.forEach(paper => {
        const randomRotation = Math.floor(Math.random() * 30) - 15;
        paper.style.transform = `rotate(${randomRotation}deg)`;
      });
    });
  </script>
</body>

</html>