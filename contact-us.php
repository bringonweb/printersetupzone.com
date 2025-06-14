<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - PrinterSetupZone Professional Printer Support</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="css/contact-style.css">
</head>

<body>
    <!-- Sticky Navbar -->
    <?php include 'partials/navbar.php'; ?>


    <!-- Hero Section -->
    <section class="contact-hero">
        <div class="hero-content">
            <h1>Get In Touch With Us</h1>
            <p>Have questions about your printer? Need technical support? Our team is here to help you 24/7. Reach out
                to us for prompt and professional assistance with all your printer needs.</p>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact-section">
        <h2 class="section-title">Contact Information</h2>
        <p class="section-subtitle">We're always ready to assist you with any printer-related issues or inquiries.</p>

        <div class="contact-container">
            <div class="contact-info">
                <div class="info-card">
                    <div class="info-icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div class="info-content">
                        <h3>Our Location</h3>
                        <p>2nd floor, 241 Molnar Dr Elmwood Park, NJ 07407, USA
                        </p>
                    </div>
                </div>

                <div class="info-card">
                    <div class="info-icon">
                        <i class="fas fa-phone-alt"></i>
                    </div>
                    <div class="info-content">
                        <h3>Phone Number</h3>
                        <p>+1 (800) 123-4567 (Toll-Free)<br>+1 (415) 789-0123 (Local)</p>
                    </div>
                </div>

                <div class="info-card">
                    <div class="info-icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div class="info-content">
                        <h3>Email Address</h3>
                        <p>support@PrinterSetupZone.com<br>info@PrinterSetupZone.com</p>
                    </div>
                </div>

                <div class="info-card">
                    <div class="info-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <div class="info-content">
                        <h3>Working Hours</h3>
                        <p>Monday - Friday: 8:00 AM - 8:00 PM<br>Saturday: 9:00 AM - 6:00 PM<br>Sunday: 10:00 AM - 4:00
                            PM</p>
                    </div>
                </div>
            </div>

            <div class="contact-form">
                <h3 style="font-size: 1.8rem; color: #2a3d1f; margin-bottom: 25px;">Send Us a Message</h3>
                <form id="contactForm" action="send_email.php" method="POST">
                    <div class="form-group">
                        <label for="name">Full Name *</label>
                        <input type="text" id="name" name="name" required>
                    </div>

                    <div class="form-group">
                        <label for="email">Email Address *</label>
                        <input type="email" id="email" name="email" required>
                    </div>

                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="tel" id="phone" name="phone">
                    </div>

                    <div class="form-group">
                        <label for="subject">Subject *</label>
                        <select id="subject" name="subject" required>
                            <option value="">Select a subject</option>
                            <option value="Technical Support">Technical Support</option>
                            <option value="Product Inquiry">Product Inquiry</option>
                            <option value="Billing Question">Billing Question</option>
                            <option value="Partnership">Partnership</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="printer">Printer Brand</label>
                        <select id="printer" name="printer">
                            <option value="">Select your printer brand</option>
                            <option value="HP">HP</option>
                            <option value="Canon">Canon</option>
                            <option value="Epson">Epson</option>
                            <option value="Brother">Brother</option>
                            <option value="Xerox">Xerox</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="message">Your Message *</label>
                        <textarea id="message" name="message" required></textarea>
                    </div>

                    <button type="submit" class="submit-btn">Send Message</button>
                </form>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="map-section">
        <h2 class="section-title">Our Location</h2>
        <p class="section-subtitle">Visit our office or get directions to our location</p>

        <div class="map-container">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3021.002318987505!2d-74.10871552417844!3d40.9005898713786!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2fb845aec1cc5%3A0x1e90ae1e33cb92f6!2s241%20Molnar%20Dr%2C%20Elmwood%20Park%2C%20NJ%2007407%2C%20USA!5e0!3m2!1sen!2sin!4v1718352600000!5m2!1sen!2sin"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>

        </div>
    </section>

    <!-- Support Section -->
    <section class="support-section">
        <div class="support-content">
            <h2>24/7 Printer Support</h2>
            <p>Our team of certified printer technicians is available around the clock to assist you with any printer
                issues. Whether it's a hardware malfunction, software configuration, or connectivity problem, we're here
                to help.</p>
            <button class="contact-btn" style="max-width: 300px; margin: 0 auto;">Call Now: (800) 123-4567</button>
        </div>
    </section>

    <!-- Footer -->
    <?php include 'partials/footer.php'; ?>


    <script>
        // Form validation and submission handling
        document.getElementById('contactForm').addEventListener('submit', function (e) {
            e.preventDefault();

            // Form validation
            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const subject = document.getElementById('subject').value;
            const message = document.getElementById('message').value;

            if (!name || !email || !subject || !message) {
                alert('Please fill in all required fields.');
                return;
            }

            // Email validation
            const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailPattern.test(email)) {
                alert('Please enter a valid email address.');
                return;
            }

            // Show confirmation message
            alert('Thank you for your message! Our team will contact you shortly.');
            this.reset();
        });

        // Sticky header effect
        // window.addEventListener('scroll', () => {
        //     const header = document.querySelector('.header');
        //     if (window.scrollY > 50) {
        //         header.style.background = 'rgba(0, 0, 0, 0.98)';
        //         header.style.boxShadow = '0 5px 20px rgba(0, 0, 0, 0.8)';
        //     } else {
        //         header.style.background = 'rgba(0, 0, 0, 0.95)';
        //         header.style.boxShadow = '0 4px 20px rgba(0, 0, 0, 0.5)';
        //     }
        // });
    </script>

    <script src="/main.js"></script>

</body>

</html>