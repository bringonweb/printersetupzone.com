// HP Printer Page JavaScript

// Mobile menu toggle
const hamburger = document.querySelector('.hamburger');
const mobileMenu = document.querySelector('.mobile-menu');
const closeMenu = document.querySelector('.close-menu');
const overlay = document.querySelector('.overlay');

if (hamburger && mobileMenu && closeMenu && overlay) {
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
}

// Sticky header effect
window.addEventListener('scroll', () => {
    const header = document.querySelector('.header');
    if (header) {
        if (window.scrollY > 50) {
            header.style.background = 'rgba(0, 0, 0, 0.98)';
            header.style.boxShadow = '0 5px 20px rgba(0, 0, 0, 0.8)';
        } else {
            header.style.background = 'rgba(0, 0, 0, 0.95)';
            header.style.boxShadow = '0 4px 20px rgba(0, 0, 0, 0.5)';
        }
    }
});

// Why Choose Us Slider
const slides = document.querySelectorAll('.slide');
const thumbnails = document.querySelectorAll('.thumbnail');
let currentIndex = 0;

function showSlide(index) {
    slides.forEach((slide, i) => {
        slide.classList.toggle('active', i === index);
        if (thumbnails[i]) {
            thumbnails[i].classList.toggle('active', i === index);
        }
    });
    currentIndex = index;
}

thumbnails.forEach((thumb, index) => {
    thumb.addEventListener('click', () => {
        showSlide(index);
    });
});

if (slides.length > 0) {
    setInterval(() => {
        let nextIndex = (currentIndex + 1) % slides.length;
        showSlide(nextIndex);
    }, 5000);
}

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
                counter.textContent = Math.floor(current) + (target > 10 ? "+" : "");
                setTimeout(update, stepTime);
            } else {
                counter.textContent = target + (target > 10 ? "+" : "");
            }
        };

        update();
    }
});

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
const firstFaqItem = document.querySelector('.faq-item');
if (firstFaqItem) {
    firstFaqItem.classList.add('active');
}

// Issue Card Click - Scroll to form
document.querySelectorAll('.issue-card').forEach(card => {
    card.addEventListener('click', () => {
        const formBox = document.querySelector('.form-box');
        if (formBox) {
            // Get the issue name
            const issueName = card.querySelector('h3').textContent;
            
            // Scroll to form
            formBox.scrollIntoView({ behavior: 'smooth', block: 'center' });
            
            // Pre-fill the message with the issue
            const messageField = formBox.querySelector('textarea[name="message"]');
            if (messageField) {
                messageField.value = `I need help with: ${issueName}`;
                messageField.focus();
            }
        }
    });
});

// Form submission animation
const supportForm = document.getElementById('supportForm');
if (supportForm) {
    supportForm.addEventListener('submit', function (e) {
        const submitBtn = this.querySelector('button[type="submit"]');
        if (submitBtn) {
            submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Submitting...';
            submitBtn.disabled = true;
        }
    });
}

// Scroll animations for elements
const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
};

const animateOnScroll = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.style.opacity = '1';
            entry.target.style.transform = 'translateY(0)';
        }
    });
}, observerOptions);

// Apply scroll animations to cards
document.querySelectorAll('.issue-card, .service-card, .achievement-card').forEach(card => {
    card.style.opacity = '0';
    card.style.transform = 'translateY(30px)';
    card.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
    animateOnScroll.observe(card);
});
