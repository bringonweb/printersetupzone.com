// Form validation and submission handling
document.getElementById('contactForm').addEventListener('submit', function (e) {
    // Form validation
    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const subject = document.getElementById('subject').value;
    const message = document.getElementById('message').value;

    if (!name || !email || !subject || !message) {
        e.preventDefault();
        alert('Please fill in all required fields.');
        return;
    }

    // Email validation
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailPattern.test(email)) {
        e.preventDefault();
        alert('Please enter a valid email address.');
        return;
    }

    // If validation passes, allow form submission
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
