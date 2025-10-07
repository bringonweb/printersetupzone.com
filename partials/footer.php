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

    .footer-column {
        padding: 0 15px;
    }

    /* Add margin-left only to the second column (Quick Links) in desktop view */
    .footer-content>.footer-column:nth-child(2) {
        margin-left: 4rem;
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
        padding: 0;
        margin: 0;
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
        line-height: 1.5;
    }

    .footer-contact i {
        color: #3aaf85;
        margin-right: 10px;
        margin-top: 5px;
        min-width: 16px;
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

    .footer-logo {
        max-width: 100%;
        height: auto;
        margin-bottom: 20px;
    }

    .footer-column p {
        color: #bbb;
        line-height: 1.6;
        margin-bottom: 20px;
    }

    @media (max-width: 768px) {
        .footer-column {
            margin-left: 0 !important;
            margin-right: 0 !important;
            padding: 0 10px;
        }

        /* Remove the left margin for Quick Links in mobile view */
        .footer-content>.footer-column:nth-child(2) {
            margin-left: 0;
        }

        .footer-content {
            gap: 30px;
        }
    }
</style>

<footer class="footer">
    <div class="footer-content">
        <div class="footer-column">
            <img src="/assets/logo.png" alt="PrinterSetupZone Logo" class="footer-logo">
            <p>Printer Setup Zone is an independent service platform providing printer setup help, troubleshooting,
                maintenance and solutions for a variety of printers. We are not affiliated with any specific printer
                brand or manufacturer. All product names, logos and trademarks belong to their respective owners and are
                used for informational purposes only.</p>
        </div>

        <div class="footer-column">
            <h3>Quick Links</h3>
            <ul class="footer-links">
                <li><a href="/about-us">About Us</a></li>
                <li><a href="/contact-us">Contact</a></li>
                <li><a href="/disclaimer">Disclaimer</a></li>
                <li><a href="/privacy-policy">Privacy Policy</a></li>
                <li><a href="/refund-policy">Refund Policy</a></li>
                <li><a href="/terms-and-conditions">Terms and Conditions</a></li>
            </ul>
        </div>

        <div class="footer-column">
            <h3>Blogs</h3>
            <ul class="footer-links">
                <li><a href="https://www.printersetupzone.com/blog/how-to-fix-printer-not-printing/">How to fix Printer
                        not Printing properly</a></li>
                <li><a href="https://www.printersetupzone.com/blog/how-to-update-printer-driver/">How to Update Printer
                        Driver</a></li>
                <li><a href="https://www.printersetupzone.com/blog/how-to-setup-a-printer/">How to SetUp Your Printer in
                        Easy Steps</a></li>
            </ul>
        </div>

        <div class="footer-column">
            <h3>Contact Us</h3>
            <div class="footer-contact">
                <p><i class="fas fa-map-marker-alt"></i>2nd floor, 241 Molnar Dr Elmwood Park, NJ 07407, USA</p>
                <p><i class="fas fa-phone"></i><a href="tel:+18887683855" style="text-decoration: none; color: #bbb;">+1
                        (888) 768-3855</a></p>
                <p><i class="fas fa-envelope"></i> support@PrinterSetupZone.com</p>
                <p><i class="fas fa-clock"></i> Mon-Fri: 8AM - 8PM, Sat-Sun: 9AM - 6PM</p>
            </div>
            <div class="social-icons">
                <a href="https://x.com/printersetupzon" target="_blank"><i class="fa-brands fa-x-twitter"></i></a>
                <a href="https://in.pinterest.com/printersetupzone" target="_blank"><i
                        class="fab fa-pinterest-p"></i></a>
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
            </div>
        </div>
    </div>
    <div class="copyright">
        <p>&copy; 2025 PrinterSetupZone. All rights reserved.</p>
    </div>
</footer>

<script>window.$zoho=window.$zoho || {};$zoho.salesiq=$zoho.salesiq||{ready:function(){}}</script><script id="zsiqscript" src="https://salesiq.zohopublic.in/widget?wc=siq3526f7c4055dc541aa0f5ce48f1210f2560997af6a36b8d1c570f87c27fa786d" defer></script>
  <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-07D8FC7EDQ"></script>
    <script>   window.dataLayer = window.dataLayer || []; function gtag() { dataLayer.push(arguments); } gtag('js', new Date()); gtag('config', 'G-07D8FC7EDQ'); </script>