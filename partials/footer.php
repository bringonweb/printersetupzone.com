<style>
    /* ................................................footer................................................ */

    /* Footer */
    .footer {
        background: #1a1a1a;
        color: #fff;
        padding: 70px 20px 30px;
        font-family: 'Segoe UI', sans-serif;
    }

    .footer-content {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 40px;
        max-width: 1200px;
        margin: 0 auto;
    }

    .footer-column h3 {
        font-size: 1.5rem;
        margin-bottom: 25px;
        position: relative;
        padding-bottom: 10px;
    }

    .footer-column h3::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 50px;
        height: 3px;
        background: #3aaf85;
    }

    .footer-links {
        list-style: none;
    }

    .footer-links li {
        margin-bottom: 15px;
    }

    .footer-links a {
        color: #bbb;
        text-decoration: none;
        transition: all 0.3s ease;
        display: block;
        padding: 5px 0;
    }

    .footer-links a:hover {
        color: #3aaf85;
        transform: translateX(10px);
    }

    .footer-contact p {
        margin-bottom: 15px;
        color: #bbb;
        display: flex;
        align-items: flex-start;
    }

    .footer-contact i {
        color: #3aaf85;
        margin-right: 10px;
        margin-top: 5px;
    }

    .social-icons {
        display: flex;
        gap: 15px;
        margin-top: 20px;
    }

    .social-icons a {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 40px;
        height: 40px;
        background: #333;
        border-radius: 50%;
        color: #fff;
        font-size: 1.2rem;
        transition: all 0.3s ease;
    }

    .social-icons a:hover {
        background: #3aaf85;
        transform: translateY(-5px);
    }

    .copyright {
        text-align: center;
        padding-top: 50px;
        color: #777;
        font-size: 0.9rem;
        border-top: 1px solid #333;
        margin-top: 50px;
    }

    @media (max-width: 768px) {
        .footer-column {
            margin-left: 0rem !important;
            margin-right: 0rem !important;
        }
    }
</style>

<footer class="footer">
    <div class="footer-content">
        <div class="footer-column">
            <!-- <img src="/assets/logo.png" alt="PrinterSetupZone Logo" style="height:40px; margin-bottom:15px;   height: 89px;
    margin-left: -3rem;
}"> -->
            <img src="/assets/logo.png" alt="PrinterSetupZone Logo" style="height: 89px;
    margin-left: -3rem;}">
            <!-- <h3>PrinterSetupZone</h3> -->
            <p>Printer Setup Zone is an independent service platform providing printer setup help, troubleshooting,
                maintenance and solutions for a variety of printers. We are not affiliated with any specific printer
                brand or manufacturer. All product names, logos and trademarks belong to their respective owners and are
                used for informational purposes only. </p>
            <!-- <div class="social-icons">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
            </div> -->
        </div>
        <div class="footer-column" style="margin: 0rem 0rem 0rem 5rem;">
            <h3>Quick Links</h3>
            <ul class="footer-links">
                <li><a href="/about-us">About Us</a></li>
                <li><a href="/contact-us">Contact</a></li>
                <li><a href="/disclaimer">Disclaimer</a></li>
                <li><a href="/privacy-policy">privacy Policy</a></li>
                <li><a href="/refund-policy">Refund Policy</a></li>
                <li><a href="/terms-and-conditions">Terms and Conditions</a></li>

            </ul>
        </div>
        <div class="footer-column">
            <!-- <h3>Services</h3>
            <ul class="footer-links">
                <li><a href="#">Printer Installation</a></li>
                <li><a href="#">Driver Issues</a></li>
                <li><a href="#">Wireless Setup</a></li>
                <li><a href="#">Troubleshooting</a></li>
                <li><a href="#">Maintenance</a></li>
            </ul> -->
            <h3>Blogs</h3>
            <ul class="footer-links">
                <li><a href="https://www.printersetupzone.com/blog/how-to-fix-printer-not-printing/">How to fix Printer
                        not Printing properly</a></li>
                <li><a href="https://www.printersetupzone.com/blog/how-to-update-printer-driver/">How to Update Printer
                        Driver</a></li>
                <li><a href="https://www.printersetupzone.com/blog/how-to-setup-a-printer/">How to SetUp Your Printer in
                        Easy Steps</a></li>
                <!-- <li><a href="#">Troubleshooting</a></li>
                <li><a href="#">Maintenance</a></li> -->
            </ul>

        </div>
        <div class="footer-column">
            <h3>Contact Us</h3>
            <div class="footer-contact">
                <p><i class="fas fa-map-marker-alt"></i>2nd floor, 241 Molnar Dr Elmwood Park, NJ 07407, USA</p>
                <a href="tel:+18777171225" style="text-decoration: none;  color: white;">
                    <p><i class="fas fa-phone"></i>+1 (877) 717-1225</p>
                </a>
                <p><i class="fas fa-envelope"></i> support@PrinterSetupZone.com</p>
                <p><i class="fas fa-clock"></i> Mon-Fri: 8AM - 8PM, Sat-Sun: 9AM - 6PM</p>
            </div>
            <div class="social-icons">
                <a href="https://x.com/printersetupzon" target="_blank"><i class="fa-brands fa-x-twitter"></i></a>
                <!-- <a href="#"><i class="fab fa-x-twitter"></i></a> -->
                <a href="https://in.pinterest.com/printersetupzone" target="_blank">
                    <i class="fab fa-pinterest-p"></i>
                </a>
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
            </div>
        </div>
    </div>
    <div class="copyright">
        <p>&copy; 2025 PrinterSetupZone. All rights reserved.</p>
    </div>
</footer>