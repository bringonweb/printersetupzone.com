
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
