<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PrinterTouch - Professional Printer Support</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="css/index-style.css">
</head>

<body>
    <!-- Sticky Navbar -->
    <?php include 'partials/navbar.php'; ?>


    <!-- Mobile Menu -->
    <div class="mobile-menu">
        <button class="close-menu">
            <i class="fas fa-times"></i>
        </button>

        <ul class="mobile-nav-menu">
            <li class="mobile-nav-item">
                <a href="#" class="mobile-nav-link">Home</a>
            </li>
            <li class="mobile-nav-item">
                <a href="#" class="mobile-nav-link">Services</a>
            </li>
            <li class="mobile-nav-item">
                <a href="#" class="mobile-nav-link">Printer Support <i class="fas fa-chevron-down"></i></a>
                <div class="mobile-dropdown">
                    <div class="mobile-dropdown-item">
                        <h4>Popular Brands</h4>
                        <a href="#" class="mobile-dropdown-link">HP Printers</a>
                        <a href="#" class="mobile-dropdown-link">Canon Printers</a>
                        <a href="#" class="mobile-dropdown-link">Epson Printers</a>
                        <a href="#" class="mobile-dropdown-link">Brother Printers</a>
                        <a href="#" class="mobile-dropdown-link">Xerox Printers</a>
                    </div>
                    <div class="mobile-dropdown-item">
                        <h4>Support Types</h4>
                        <a href="#" class="mobile-dropdown-link">Installation</a>
                        <a href="#" class="mobile-dropdown-link">Driver Issues</a>
                        <a href="#" class="mobile-dropdown-link">Wireless Setup</a>
                        <a href="#" class="mobile-dropdown-link">Troubleshooting</a>
                        <a href="#" class="mobile-dropdown-link">Maintenance</a>
                    </div>
                    <div class="mobile-dropdown-item">
                        <h4>Resources</h4>
                        <a href="#" class="mobile-dropdown-link">User Manuals</a>
                        <a href="#" class="mobile-dropdown-link">Software Downloads</a>
                        <a href="#" class="mobile-dropdown-link">Support Videos</a>
                        <a href="#" class="mobile-dropdown-link">FAQ</a>
                        <a href="#" class="mobile-dropdown-link">Contact Support</a>
                    </div>
                </div>
            </li>
            <li class="mobile-nav-item">
                <a href="#" class="mobile-nav-link">About</a>
            </li>
            <li class="mobile-nav-item">
                <a href="#" class="mobile-nav-link">Contact</a>
            </li>
        </ul>

        <button class="contact-btn mobile-contact-btn">Contact Us</button>
    </div>

    <div class="overlay"></div>

    <!-- Printer Support Section -->
    <section class="printer-support">
        <div class="support-overlay"></div>
        <div class="support-content">
            <div class="support-left">
                <h1>Are You Facing Issues With Your Printers?</h1>
                <p>
                    Printer Touch offers online printer maintenance services to deal with problems like updating
                    drivers, paper jams, connectivity issues, or any other issues. Our team is dedicated to providing
                    fast and reliable solutions to restore your printer to peak performance.
                </p>
                <ul class="benefits-list">
                    <li>Get 24*7 Customer Support</li>
                    <li>100% Money Back Guarantee</li>
                    <li>Dedicate Support Team</li>
                    <li>100% Resolution Guarantee</li>
                </ul>
            </div>

            <div class="support-right">
                <div class="form-box">
                    <h2>Book Your Free Consultation Today</h2>
                    <p>Need Assistance today? Fill in the details and our best expert will reach out to you for your
                        free consultation...</p>
                    <form id="supportForm">
                        <div class="form-group">
                            <input type="text" placeholder="Your Name*" required>
                        </div>
                        <div class="form-group">
                            <input type="tel" placeholder="Phone Number*" required>
                        </div>
                        <div class="form-group">
                            <input type="email" placeholder="Email*" required>
                        </div>
                        <div class="form-group">
                            <textarea placeholder="Message"></textarea>
                        </div>
                        <button type="submit">SUBMIT</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Printer Brand Section -->
    <section class="printer-brand-section">
        <h2 class="brand-section-title">Choose Your Printer Brand</h2>
        <p class="brand-section-subtitle">Find Your Perfect Printing Partner: Explore Top Printer Brands!</p>
        <div class="brand-grid">
            <div class="brand-card"><img src="https://cdn.freebiesupply.com/logos/large/2x/hp-logo-png-transparent.png"
                    alt="HP"></div>
            <div class="brand-card"><img src="https://logos-world.net/wp-content/uploads/2020/07/Canon-Logo.png"
                    alt="Canon"></div>
            <div class="brand-card"><img src="https://logos-world.net/wp-content/uploads/2020/12/Epson-Logo.png"
                    alt="Epson"></div>
            <div class="brand-card"><img src="https://logos-world.net/wp-content/uploads/2020/12/Brother-Logo.png"
                    alt="Brother"></div>
            <div class="brand-card"><img src="https://logos-world.net/wp-content/uploads/2021/02/Ricoh-Logo.png"
                    alt="Ricoh"></div>
            <div class="brand-card"><img src="https://logos-world.net/wp-content/uploads/2021/08/Xerox-Logo.png"
                    alt="Xerox"></div>
            <div class="brand-card"><img src="https://www.pngmart.com/files/15/Tally-Solutions-PNG-Photo.png"
                    alt="Tally"></div>
            <div class="brand-card"><img src="https://logos-world.net/wp-content/uploads/2020/07/Kyocera-Logo.png"
                    alt="Kyocera"></div>
            <div class="brand-card"><img src="https://logos-world.net/wp-content/uploads/2020/07/Panasonic-Logo.png"
                    alt="Panasonic"></div>
            <div class="brand-card"><img src="https://logos-world.net/wp-content/uploads/2020/04/Samsung-Logo.png"
                    alt="Samsung"></div>
            <div class="brand-card"><img src="https://logos-world.net/wp-content/uploads/2020/07/Fujitsu-Logo.png"
                    alt="Fujitsu"></div>
            <div class="brand-card"><img
                    src="https://logos-world.net/wp-content/uploads/2021/03/Konica-Minolta-Logo.png"
                    alt="Konica Minolta"></div>
        </div>
    </section>


    <!-- Achievements Section -->
    <section class="achievement-section">
        <h2>Achievements</h2>
        <div class="achievement-cards">
            <div class="achievement-card">
                <i class="fas fa-print"></i>
                <h3 class="counter" data-target="2156">0</h3>
                <p>Printer Repaired</p>
            </div>
            <div class="achievement-card">
                <i class="fas fa-users"></i>
                <h3 class="counter" data-target="2025">0</h3>
                <p>Happy Customers</p>
            </div>
            <div class="achievement-card">
                <i class="fas fa-star"></i>
                <h3 class="counter" data-target="5">0</h3>
                <p>Ratings</p>
            </div>
            <div class="achievement-card">
                <i class="fas fa-arrow-up"></i>
                <h3 class="counter" data-target="100">0</h3>
                <p>Success Rate</p>
            </div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section class="why-choose-section">
        <div class="image-section">
            <div class="slider-container">
                <img src="https://images.unsplash.com/photo-1581093458799-0d6c0e5d2e8d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1920&q=80"
                    class="slide active" alt="Slide 1">
                <img src="https://images.unsplash.com/photo-1581092580497-e0d23cbdf1dc?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1920&q=80"
                    class="slide" alt="Slide 2">
                <img src="https://images.unsplash.com/photo-1581092580497-e0d23cbdf1dc?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1920&q=80"
                    class="slide" alt="Slide 3">
            </div>
            <div class="thumbnails">
                <div class="thumbnail active" data-index="0"><img
                        src="https://images.unsplash.com/photo-1581093458799-0d6c0e5d2e8d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1920&q=80"
                        alt="Thumb 1"></div>
                <div class="thumbnail" data-index="1"><img
                        src="https://images.unsplash.com/photo-1581092580497-e0d23cbdf1dc?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1920&q=80"
                        alt="Thumb 2"></div>
                <div class="thumbnail" data-index="2"><img
                        src="https://images.unsplash.com/photo-1581092580497-e0d23cbdf1dc?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1920&q=80"
                        alt="Thumb 3"></div>
            </div>
        </div>
        <div class="content-section">
            <h2>Why Choose Printer Setup Zone?</h2>
            <p>We know how frustrating it can be to deal with printer issues. That's why we offer fast, reliable, expert
                service for your printer needs. Here are why thousands of users love us: </p>

            <ul class="benefits-list">
                <li>Service for All Printers</li>
                <p>Whether you're using any brand printer, our well-trained technicians are skilled in handling setup,
                    drivers' problems, Printer not responding, Poor print quality issues, and much more. </p>
                <li>Complete Solution for Common Printer Problems</li>
                <p>No matter what your problems are whether they are simple, like paper jams or printer not printing, or
                    something complicated, like network configuration, our Top-rated technicians can provide complete
                    troubleshooting, all in the same place. </p>
                <li>Step-by-Step Instructions & Remote Support</li>
                <p>We don't only give instructions; we walk you through the steps. Prefer remote support? Our
                    technicians can access your device securely and resolve your issues instantly. </p>
                <li>Regular Updates, Maintenance, and Optimization</li>
                <p>The majority of compatibility issues stem from drivers being out of date. We will make sure to
                    refresh your printer drivers and that they are current, so you'll be printing quickly and hassle
                    free.</p>
                <li>Quick Response, 24/7 Service</li>
                <p>Time is always of the essence. In most cases, we can get you printing again without delay, any time
                    of the day or night. We are always open!</p>
                <li>Home & Business User Trusted!</li>
                <p>Personal or business printer, you'll receive professional, reliable service from Printer Setup Zone
                    every time!</p>
            </ul>
            <p>Choose Printer Setup Zone — Where expert care and quick service come together. Let's get your printer
                issues resolved today! </p>


            <button>ENQUIRE NOW</button>
        </div>
    </section>

    <!-- World's Best Services Section -->
    <section class="achievement-section" style="background: linear-gradient(135deg, #1f3d2a 0%, #2d5c3a 100%);">
        <h2>World’s Best Printer Repair Services</h2>
        <div class="achievement-cards">
            <div class="achievement-card">
                <i class="fas fa-check-circle"></i>
                <h3 class="counter" data-target="100">0</h3>
                <p>Resolution Guarantee</p>
            </div>
            <div class="achievement-card">
                <i class="fas fa-headset"></i>
                <h3 class="counter" data-target="2025">0</h3>
                <p>Service Support</p>
            </div>
            <div class="achievement-card">
                <i class="fas fa-money-bill-wave"></i>
                <h3 class="counter" data-target="5">0</h3>
                <p>Moneyback Guarantee</p>
            </div>
            <div class="achievement-card">
                <i class="fas fa-user-tie"></i>
                <h3 class="counter" data-target="100">0</h3>
                <p>Dedicated Support</p>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonial-section">
        <div class="testimonial-header">
            <h2>Testimonials</h2>
            <p>Find out why our customers keep coming back – their testimonials tell the whole story.</p>
        </div>
        <div class="testimonial-slider-wrapper">
            <div class="testimonial-slider" id="testimonial-slider">
                <div class="testimonial-slide">
                    <img src="https://randomuser.me/api/portraits/men/32.jpg" class="testimonial-img" alt="User">
                    <h3>Eric Upthegrove</h3>
                    <div class="stars">★★★★★</div>
                    <p>Printer Touch came through when my HP printer wireless was not working. Their technician was
                        knowledgeable and fixed the issue in no time!</p>
                </div>
                <div class="testimonial-slide">
                    <img src="https://randomuser.me/api/portraits/women/44.jpg" class="testimonial-img" alt="User">
                    <h3>Guadalupe Mares</h3>
                    <div class="stars">★★★★★</div>
                    <p>Printer Touch helped me resolve my HP printer issue after a Windows update. Quick response and
                        professional service!</p>
                </div>
                <div class="testimonial-slide">
                    <img src="https://randomuser.me/api/portraits/men/22.jpg" class="testimonial-img" alt="User">
                    <h3>James Henry</h3>
                    <div class="stars">★★★★★</div>
                    <p>Printer Touch effectively resolved my Canon printer problems with their prompt and efficient
                        service. Highly recommend!</p>
                </div>
                <div class="testimonial-slide">
                    <img src="https://randomuser.me/api/portraits/women/68.jpg" class="testimonial-img" alt="User">
                    <h3>Sarah Parker</h3>
                    <div class="stars">★★★★★</div>
                    <p>Absolutely loved their quick response time and professionalism throughout the process. My Epson
                        printer is working perfectly now!</p>
                </div>
                <div class="testimonial-slide">
                    <img src="https://randomuser.me/api/portraits/men/41.jpg" class="testimonial-img" alt="User">
                    <h3>Leo Smith</h3>
                    <div class="stars">★★★★★</div>
                    <p>Very efficient team, helped me get my Brother printer back online quickly and easily. Will
                        definitely use their services again!</p>
                </div>
            </div>
            <div class="testimonial-pagination" id="testimonial-pagination"></div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq-section">
        <div class="faq-header">
            <h2>FAQ's</h2>
            <p>Got questions about printers? We've got answers! Explore our FAQ section.</p>
        </div>

        <div class="faq-container">
            <div class="faq-item active">
                <button class="faq-question">Which Printer Should I Purchase?</button>
                <div class="faq-answer">
                    <p>It is advised that you choose a printer based on output frequency and volume. Buying a more
                        expensive machine would be wise if you print a lot of documents on a daily basis. However, a
                        more compact and reasonably priced machine should work fine if you plan to occasionally print
                        lesser amounts. What you want to print should also be taken into account when looking for a
                        printer. Your ideal machine will be different for someone who wants to print a lot of text than
                        it will be if you plan to print a lot of photographs.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">Is It Safe To Get Printer Tech Assistance Online?</button>
                <div class="faq-answer">
                    <p>Yes, as long as you're using a reputable and secure platform or contacting official support
                        channels, online assistance can be very safe and effective. At PrinterTouch, we use encrypted
                        connections and follow strict security protocols to ensure your data and devices remain
                        protected throughout the support process.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">Will I Get A Refund If I Am Not Satisfied With Printer Tech
                    Support?</button>
                <div class="faq-answer">
                    <p>We offer a 100% satisfaction guarantee. If you're not completely satisfied with our service, we
                        provide a full refund. Our policy is simple - if we can't fix your printer issue, you don't pay.
                        We stand behind the quality of our support and are committed to your complete satisfaction.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">How To Repair Your Printer?</button>
                <div class="faq-answer">
                    <p>Basic printer issues can often be fixed with troubleshooting guides. For common problems like
                        paper jams, start by turning off the printer and carefully removing any stuck paper. For
                        connectivity issues, restart both your printer and computer. For more complex hardware issues,
                        it's best to contact our certified technicians who can diagnose and repair your printer
                        efficiently. We offer both remote support and on-site service options.</p>
                </div>
            </div>
        </div>
    </section>


    <!-- Footer -->
    <?php include 'partials/footer.php'; ?>

    <script>
        // Mobile menu toggle
        const hamburger = document.querySelector('.hamburger');
        const mobileMenu = document.querySelector('.mobile-menu');
        const closeMenu = document.querySelector('.close-menu');
        const overlay = document.querySelector('.overlay');

        hamburger.addEventListener('click', () => {
            mobileMenu.classList.add('active');
            overlay.classList.add('active');
            document.body.style.overflow = 'hidden';
        });

        closeMenu.addEventListener('click', () => {
            mobileMenu.classList.remove('active');
            overlay.classList.remove('active');
            document.body.style.overflow = '';
        });

        overlay.addEventListener('click', () => {
            mobileMenu.classList.remove('active');
            overlay.classList.remove('active');
            document.body.style.overflow = '';
        });

        // Close mobile menu when clicking on links
        const mobileLinks = document.querySelectorAll('.mobile-nav-link, .mobile-dropdown-link');
        mobileLinks.forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu.classList.remove('active');
                overlay.classList.remove('active');
                document.body.style.overflow = '';
            });
        });

        // Sticky header effect
        window.addEventListener('scroll', () => {
            const header = document.querySelector('.header');
            if (window.scrollY > 50) {
                header.style.background = 'rgba(0, 0, 0, 0.98)';
                header.style.boxShadow = '0 5px 20px rgba(0, 0, 0, 0.8)';
            } else {
                header.style.background = 'rgba(0, 0, 0, 0.95)';
                header.style.boxShadow = '0 4px 20px rgba(0, 0, 0, 0.5)';
            }
        });

        // Form submission
        const supportForm = document.getElementById('supportForm');
        supportForm.addEventListener('submit', function (e) {
            e.preventDefault();
            alert('Thank you! Our team will contact you shortly.');
            supportForm.reset();
        });

        // Why Choose Us Slider
        const slides = document.querySelectorAll('.slide');
        const thumbnails = document.querySelectorAll('.thumbnail');
        let currentIndex = 0;

        function showSlide(index) {
            slides.forEach((slide, i) => {
                slide.classList.toggle('active', i === index);
                thumbnails[i].classList.toggle('active', i === index);
            });
            currentIndex = index;
        }

        thumbnails.forEach((thumb, index) => {
            thumb.addEventListener('click', () => {
                showSlide(index);
            });
        });

        setInterval(() => {
            let nextIndex = (currentIndex + 1) % slides.length;
            showSlide(nextIndex);
        }, 5000);

        // Achievement Counter Animation
        document.addEventListener("DOMContentLoaded", () => {
            const counters = document.querySelectorAll(".counter");

            const observer = new IntersectionObserver(
                (entries, observer) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            animateCounter(entry.target);
                            observer.unobserve(entry.target);
                        }
                    });
                },
                { threshold: 0.5 }
            );

            counters.forEach(counter => {
                observer.observe(counter);
            });

            function animateCounter(counter) {
                const target = +counter.getAttribute("data-target");
                const duration = 2000;
                const stepTime = 20;
                const increment = target / (duration / stepTime);
                let current = 0;

                const update = () => {
                    current += increment;
                    if (current < target) {
                        counter.textContent = Math.floor(current) + (target > 100 ? "+" : "");
                        setTimeout(update, stepTime);
                    } else {
                        counter.textContent = target + (target > 100 ? "+" : "");
                    }
                };

                update();
            }
        });

        // Testimonial Slider
        (function () {
            const slider = document.getElementById('testimonial-slider');
            const pagination = document.getElementById('testimonial-pagination');
            const slides = slider.children;
            const slidesPerPage = 3;
            const totalPages = Math.ceil(slides.length / slidesPerPage);
            let currentPage = 0;

            function createPagination() {
                for (let i = 0; i < totalPages; i++) {
                    const dot = document.createElement('span');
                    dot.addEventListener('click', () => goToPage(i));
                    pagination.appendChild(dot);
                }
                updatePagination();
            }

            function updatePagination() {
                Array.from(pagination.children).forEach((dot, i) => {
                    dot.classList.toggle('active', i === currentPage);
                });
            }

            function goToPage(i) {
                currentPage = i;
                slider.style.transform = `translateX(-${(100 / slidesPerPage) * currentPage}%)`;
                updatePagination();
            }

            function autoSlide() {
                currentPage = (currentPage + 1) % totalPages;
                goToPage(currentPage);
            }

            createPagination();
            setInterval(autoSlide, 5000);
        })();

        // FAQ Accordion
        document.querySelectorAll('.faq-question').forEach((btn) => {
            btn.addEventListener('click', function () {
                const faqItem = this.parentElement;
                const isActive = faqItem.classList.contains('active');

                if (isActive) {
                    faqItem.classList.remove('active');
                } else {
                    document.querySelectorAll('.faq-item').forEach((item) => item.classList.remove('active'));
                    faqItem.classList.add('active');
                }
            });
        });

        // Initialize first FAQ as active
        document.querySelector('.faq-item').classList.add('active');
    </script>
    <script src="/main.js"></script>
</body>

</html>