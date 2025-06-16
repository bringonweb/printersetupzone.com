
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
