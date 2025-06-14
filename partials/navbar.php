<style>
    /* ....................................navbar...................................... */


    /* Sticky Navbar Styles */
    .header {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        background: rgba(0, 0, 0, 0.95);
        backdrop-filter: blur(10px);
        z-index: 1000;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.5);
        border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        transition: all 0.4s ease;
    }

    .navbar {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 15px 5%;
        max-width: 1600px;
        margin: 0 auto;
    }

    .logo {
        font-size: 1.8rem;
        font-weight: 700;
        color: #fff;
        text-decoration: none;
        display: flex;
        align-items: center;
        transition: transform 0.3s ease;
    }

    .logo:hover {
        transform: translateX(5px);
    }

    .logo i {
        color: #3aaf85;
        margin-right: 10px;
        transition: transform 0.4s ease;
    }

    .logo:hover i {
        transform: rotate(15deg);
    }

    .nav-menu {
        display: flex;
        list-style: none;
    }

    .nav-item {
        position: relative;
        margin: 0 15px;
    }

    .nav-link {
        color: #fff;
        text-decoration: none;
        font-size: 1.1rem;
        font-weight: 500;
        padding: 10px 15px;
        border-radius: 5px;
        transition: all 0.3s;
        position: relative;
    }

    .nav-link:hover {
        color: #3aaf85;
        background: rgba(255, 255, 255, 0.05);
    }

    .nav-link::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 50%;
        width: 0;
        height: 2px;
        background: #3aaf85;
        transition: all 0.3s ease;
        transform: translateX(-50%);
    }

    .nav-link:hover::after {
        width: 70%;
    }

    .dropdown {
        position: absolute;
        top: 100%;
        left: 0;
        width: 250px;
        background: rgba(0, 0, 0, 0.95);
        border-radius: 8px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
        padding: 15px 0;
        opacity: 0;
        visibility: hidden;
        transform: translateY(10px);
        transition: all 0.3s ease;
        z-index: 1001;
    }

    .dropdown-column {
        padding: 0 15px;
    }

    .dropdown-column h4 {
        color: #3aaf85;
        padding: 10px 15px;
        font-size: 1.1rem;
        margin-bottom: 10px;
        border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    }

    .dropdown-links {
        list-style: none;
    }

    .dropdown-links li {
        margin-bottom: 8px;
    }

    .dropdown-links a {
        display: block;
        color: #e6e6e6;
        text-decoration: none;
        padding: 8px 15px;
        border-radius: 5px;
        transition: all 0.2s;
        font-size: 0.95rem;
        position: relative;
        overflow: hidden;
    }

    .dropdown-links a::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: rgba(58, 175, 133, 0.1);
        transition: all 0.3s ease;
        z-index: -1;
    }

    .dropdown-links a:hover {
        color: #3aaf85;
        padding-left: 20px;
    }

    .dropdown-links a:hover::before {
        left: 0;
    }

    .nav-item:hover .dropdown {
        opacity: 1;
        visibility: visible;
        transform: translateY(0);
    }

    .contact-btn {
        background: #3aaf85;
        color: white;
        border: none;
        padding: 10px 25px;
        font-size: 1.1rem;
        border-radius: 6px;
        cursor: pointer;
        font-weight: 600;
        transition: all 0.3s;
        text-transform: uppercase;
        letter-spacing: 1px;
        box-shadow: 0 4px 15px rgba(58, 175, 133, 0.3);
    }

    .contact-btn:hover {
        background: #2e8b68;
        transform: translateY(-2px);
        box-shadow: 0 7px 20px rgba(0, 0, 0, 0.3);
    }

    .hamburger {
        display: none;
        cursor: pointer;
        background: none;
        border: none;
        color: white;
        font-size: 1.8rem;
        transition: transform 0.3s ease;
    }

    .hamburger:hover {
        transform: scale(1.1);
    }

    /* Mobile Menu Styles */
    .mobile-menu {
        position: fixed;
        top: 0;
        right: -300px;
        width: 300px;
        height: 100%;
        background: rgba(0, 0, 0, 0.95);
        backdrop-filter: blur(15px);
        z-index: 2000;
        padding: 80px 20px 20px;
        transition: right 0.4s ease;
        overflow-y: auto;
    }

    .mobile-menu.active {
        right: 0;
    }

    .mobile-nav-menu {
        list-style: none;
    }

    .mobile-nav-item {
        margin-bottom: 15px;
        border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    }

    .mobile-nav-link {
        color: #fff;
        text-decoration: none;
        font-size: 1.2rem;
        display: block;
        padding: 12px 15px;
        border-radius: 5px;
        transition: all 0.3s;
        position: relative;
    }

    .mobile-nav-link:hover {
        background: rgba(255, 255, 255, 0.1);
        color: #3aaf85;
        padding-left: 20px;
    }

    .mobile-nav-link::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 0;
        height: 1px;
        background: #3aaf85;
        transition: all 0.3s ease;
    }

    .mobile-nav-link:hover::after {
        width: 100%;
    }

    .mobile-dropdown {
        margin-top: 10px;
        margin-left: 20px;
        border-left: 2px solid #3aaf85;
        padding-left: 15px;
    }

    .mobile-dropdown-item {
        margin-bottom: 10px;
    }

    .mobile-dropdown-link {
        color: #e6e6e6;
        text-decoration: none;
        font-size: 1.1rem;
        display: block;
        padding: 8px 15px;
        border-radius: 5px;
        transition: all 0.3s;
    }

    .mobile-dropdown-link:hover {
        background: rgba(255, 255, 255, 0.05);
        color: #3aaf85;
        padding-left: 20px;
    }

    .close-menu {
        position: absolute;
        top: 20px;
        right: 20px;
        background: none;
        border: none;
        color: white;
        font-size: 1.8rem;
        cursor: pointer;
        transition: transform 0.3s ease;
    }

    .close-menu:hover {
        transform: rotate(90deg);
        color: #3aaf85;
    }


    @media (max-width: 900px) {
        .nav-menu {
            display: none;
        }

        .contact-btn {
            display: none;
        }

        .hamburger {
            display: block;
        }

        .mobile-contact-btn {
            display: block;
            width: 100%;
            text-align: center;
            margin-top: 20px;
        }
    }


    @media (max-width: 480px) {
        .mobile-menu {
            width: 280px;
        }

        .logo {
            font-size: 1.5rem;
        }

        .navbar {
            padding: 15px;
        }
    }
</style>

<header class="header">
    <nav class="navbar">
        <a href="/index.php" class="logo">
            <i class="fas fa-print"></i>
            PrinterSetupZone
        </a>

        <ul class="nav-menu">
            <li class="nav-item">
                <a href="/index.php" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">Services</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">Printer Setup <i class="fas fa-chevron-down"></i></a>
                <!-- Dropdown Menu -->
                <div class="dropdown">
                    <div class="dropdown-column">
                        <h4>Popular Brands</h4>
                        <ul class="dropdown-links">
                            <li><a href="#">HP Printers</a></li>
                            <li><a href="#">Canon Printers</a></li>
                            <li><a href="#">Epson Printers</a></li>
                            <li><a href="#">Brother Printers</a></li>
                            <li><a href="#">Xerox Printers</a></li>
                        </ul>
                    </div>
                    <div class="dropdown-column">
                        <h4>Support Types</h4>
                        <ul class="dropdown-links">
                            <li><a href="#">Installation</a></li>
                            <li><a href="#">Driver Issues</a></li>
                            <li><a href="#">Wireless Setup</a></li>
                            <li><a href="#">Troubleshooting</a></li>
                            <li><a href="#">Maintenance</a></li>
                        </ul>
                    </div>
                    <div class="dropdown-column">
                        <h4>Resources</h4>
                        <ul class="dropdown-links">
                            <li><a href="#">User Manuals</a></li>
                            <li><a href="#">Software Downloads</a></li>
                            <li><a href="#">Support Videos</a></li>
                            <li><a href="#">FAQ</a></li>
                            <li><a href="#">Contact Support</a></li>
                        </ul>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a href="/about-us.php" class="nav-link">About</a>
            </li>
            <li class="nav-item">
                <a href="/contact-us.php" class="nav-link">Contact</a>
            </li>
        </ul>

        <button class="contact-btn">Contact Us</button>

        <button class="hamburger">
            <i class="fas fa-bars"></i>
        </button>
    </nav>
</header>