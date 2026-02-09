<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You | Printer Setup Zone</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="icon" type="image/png" href="/assets/favicon.png">
    <style>
        /* Thank You Page Specific Styles (won't affect other pages) */
        .thank-you-page {
            --primary-color: #3aaf85;
            --secondary-color: #2a3d1f;
            --accent-color: #2e8b68;
            --text-color: #333;
            --light-color: #f8f9fa;
            --dark-color: #1a1a1a;

            font-family: 'Segoe UI', system-ui, sans-serif;
            background-color: #f9f9f9;
            color: var(--text-color);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            overflow-x: hidden;
        }

        .thank-you-container {
            flex: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 2rem;
            text-align: center;
            max-width: 1200px;
            margin: 0 auto;
            position: relative;
        }

        .thank-you-animation {
            width: 150px;
            height: 150px;
            margin-bottom: 2rem;
            position: relative;
            animation: bounceIn 1s ease-out both;
        }

        .checkmark-circle {
            width: 100%;
            height: 100%;
            border-radius: 50%;
            background: rgba(58, 175, 133, 0.1);
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
        }

        .checkmark-circle::before {
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            border: 15px solid transparent;
            border-top-color: var(--primary-color);
            border-right-color: var(--primary-color);
            border-radius: 50%;
            animation: circleRotate 1.5s linear infinite;
        }

        .checkmark {
            width: 70%;
            height: 70%;
            display: flex;
            align-items: center;
            justify-content: center;
            background: white;
            border-radius: 50%;
            z-index: 1;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        .checkmark i {
            font-size: 4rem;
            color: var(--primary-color);
            animation: checkmarkScale 0.5s 0.6s ease-out both;
        }

        .thank-you-heading {
            font-size: 2.5rem;
            color: var(--secondary-color);
            margin-bottom: 1rem;
            font-weight: 700;
            animation: fadeInUp 0.8s 0.3s ease-out both;
        }

        .thank-you-subheading {
            font-size: 1.2rem;
            color: #555;
            max-width: 600px;
            margin: 0 auto 2rem;
            line-height: 1.6;
            animation: fadeInUp 0.8s 0.5s ease-out both;
        }

        .thank-you-message {
            font-size: 1.1rem;
            color: #666;
            max-width: 700px;
            margin: 0 auto 3rem;
            line-height: 1.7;
            animation: fadeInUp 0.8s 0.7s ease-out both;
        }

        .thank-you-details {
            background: white;
            border-radius: 12px;
            padding: 2rem;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            max-width: 500px;
            width: 100%;
            margin: 0 auto 3rem;
            text-align: left;
            animation: fadeInUp 0.8s 0.9s ease-out both;
            border-left: 4px solid var(--primary-color);
        }

        .detail-item {
            margin-bottom: 1rem;
            display: flex;
            align-items: flex-start;
        }

        .detail-item:last-child {
            margin-bottom: 0;
        }

        .detail-icon {
            color: var(--primary-color);
            margin-right: 1rem;
            font-size: 1.2rem;
            margin-top: 3px;
        }

        .detail-content h4 {
            font-size: 1rem;
            color: #444;
            margin-bottom: 0.3rem;
            font-weight: 600;
        }

        .detail-content p {
            font-size: 0.95rem;
            color: #666;
            line-height: 1.5;
        }

        .action-buttons {
            display: flex;
            gap: 1rem;
            justify-content: center;
            flex-wrap: wrap;
            animation: fadeInUp 0.8s 1.1s ease-out both;
        }

        .btn {
            padding: 0.8rem 1.8rem;
            border-radius: 8px;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            cursor: pointer;
            border: none;
            font-size: 1rem;
        }

        .btn-primary {
            background: var(--primary-color);
            color: white;
            box-shadow: 0 5px 15px rgba(58, 175, 133, 0.3);
        }

        .btn-primary:hover {
            background: var(--accent-color);
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(58, 175, 133, 0.4);
        }

        .btn-secondary {
            background: white;
            color: var(--secondary-color);
            border: 1px solid #ddd;
        }

        .btn-secondary:hover {
            background: #f5f5f5;
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .redirect-message {
            margin-top: 2rem;
            font-size: 0.9rem;
            color: #777;
            animation: fadeIn 1s 1.3s ease-out both;
        }

        .redirect-timer {
            font-weight: 600;
            color: var(--secondary-color);
        }

        .confetti {
            position: absolute;
            width: 10px;
            height: 10px;
            background: var(--primary-color);
            opacity: 0;
            z-index: -1;
        }

        /* Animations */
        @keyframes bounceIn {
            0% {
                opacity: 0;
                transform: scale(0.3);
            }

            50% {
                opacity: 1;
                transform: scale(1.05);
            }

            70% {
                transform: scale(0.9);
            }

            100% {
                transform: scale(1);
            }
        }

        @keyframes circleRotate {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        @keyframes checkmarkScale {
            0% {
                transform: scale(0);
            }

            80% {
                transform: scale(1.2);
            }

            100% {
                transform: scale(1);
            }
        }

        @keyframes fadeInUp {
            0% {
                opacity: 0;
                transform: translateY(20px);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        /* Responsive Styles */
        @media (max-width: 768px) {
            .thank-you-heading {
                font-size: 2rem;
            }

            .thank-you-subheading {
                font-size: 1.1rem;
            }

            .thank-you-message {
                font-size: 1rem;
            }

            .thank-you-details {
                padding: 1.5rem;
            }

            .action-buttons {
                flex-direction: column;
                width: 100%;
            }

            .btn {
                width: 100%;
            }
        }

        @media (max-width: 480px) {
            .thank-you-heading {
                font-size: 1.8rem;
            }

            .thank-you-animation {
                width: 120px;
                height: 120px;
            }

            .checkmark i {
                font-size: 3rem;
            }
        }
    </style>
</head>

<body class="thank-you-page">
    <div class="thank-you-container">
        <!-- Confetti elements will be added by JS -->

        <div class="thank-you-animation">
            <div class="checkmark-circle">
                <div class="checkmark">
                    <i class="fas fa-check"></i>
                </div>
            </div>
        </div>

        <h1 class="thank-you-heading">Thank You!</h1>
        <p class="thank-you-subheading">Your request has been received successfully</p>
        <p class="thank-you-message">Our support team will contact you shortly to assist with your printer setup. You'll
            receive a confirmation email with your request details and next steps.</p>

        <div class="thank-you-details">
            <div class="detail-item">
                <div class="detail-icon">
                    <i class="fas fa-clock"></i>
                </div>
                <div class="detail-content">
                    <h4>Response Time</h4>
                    <p>We typically respond within 15-30 minutes during business hours (9AM-6PM).</p>
                </div>
            </div>
            <div class="detail-item">
                <div class="detail-icon">
                    <i class="fas fa-phone-alt"></i>
                </div>
                <div class="detail-content">
                    <h4>Need Immediate Help?</h4>
                    <p>Call our support line at <strong>+1 (858) 346-0555</strong> for urgent assistance.</p>
                </div>
            </div>
            <div class="detail-item">
                <div class="detail-icon">
                    <i class="fas fa-envelope"></i>
                </div>
                <div class="detail-content">
                    <h4>Email Confirmation</h4>
                    <p>Check your inbox (and spam folder) for a confirmation email with your case number.</p>
                </div>
            </div>
        </div>

        <div class="action-buttons">
            <a href="/" class="btn btn-primary">
                <i class="fas fa-home mr-2"></i> Return Home
            </a>
            <a href="/contact-us" class="btn btn-secondary">
                <i class="fas fa-headset mr-2"></i> Contact Support
            </a>
        </div>

        <p class="redirect-message">You'll be automatically redirected to our homepage in <span
                class="redirect-timer">10</span> seconds</p>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Create confetti elements
            function createConfetti() {
                const colors = ['#3aaf85', '#2e8b68', '#2a3d1f', '#5bc0de', '#f0ad4e'];
                const container = document.querySelector('.thank-you-container');

                for (let i = 0; i < 50; i++) {
                    const confetti = document.createElement('div');
                    confetti.className = 'confetti';
                    confetti.style.background = colors[Math.floor(Math.random() * colors.length)];
                    confetti.style.left = Math.random() * 100 + 'vw';
                    confetti.style.top = -10 + 'px';
                    confetti.style.width = Math.random() * 8 + 5 + 'px';
                    confetti.style.height = Math.random() * 8 + 5 + 'px';
                    confetti.style.borderRadius = Math.random() > 0.5 ? '50%' : '0';
                    container.appendChild(confetti);

                    // Animate confetti
                    setTimeout(() => {
                        confetti.style.opacity = '1';
                        confetti.style.transform = `translate(${Math.random() * 200 - 100}px, ${window.innerHeight}px) rotate(${Math.random() * 360}deg)`;
                        confetti.style.transition = `all ${Math.random() * 3 + 2}s ease-out`;
                    }, i * 100);
                }
            }

            // Start countdown for redirect
            function startCountdown() {
                let seconds = 10;
                const timerElement = document.querySelector('.redirect-timer');
                const timerInterval = setInterval(() => {
                    seconds--;
                    timerElement.textContent = seconds;

                    if (seconds <= 0) {
                        clearInterval(timerInterval);
                        window.location.href = '/';
                    }
                }, 1000);
            }

            // Initialize animations
            setTimeout(createConfetti, 1500);
            startCountdown();

            // Stop the circle rotation animation after it completes
            setTimeout(() => {
                document.querySelector('.checkmark-circle').style.animation = 'none';
                document.querySelector('.checkmark-circle').style.border = '15px solid ' + getComputedStyle(document.documentElement).getPropertyValue('--primary-color');
            }, 1500);
        });
    </script>
</body>

</html>
