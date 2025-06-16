// Card hover animations
document.querySelectorAll('.milestone-card, .value-card, .feature-card, .testimonial-card').forEach(card => {
    card.addEventListener('mouseenter', () => {
        card.style.transform = card.classList.contains('milestone-card') ?
            'translateY(-15px)' :
            card.classList.contains('feature-card') ?
                'translateY(-15px)' :
                'translateY(-10px)';
    });

    card.addEventListener('mouseleave', () => {
        card.style.transform = 'translateY(0)';
    });
});