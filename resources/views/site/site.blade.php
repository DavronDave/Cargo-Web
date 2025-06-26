<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dave Cargo - Professional Delivery Service</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            overflow-x: hidden;
            background: #0a0a0a;
        }

        .container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Particle Background */
        .particles {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            background: linear-gradient(45deg, #1e3c72, #2a5298, #4169e1, #0066ff);
            background-size: 400% 400%;
            animation: gradientShift 15s ease infinite;
        }

        .particles::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-image: 
                radial-gradient(circle at 20% 80%, rgba(255,255,255,0.1) 2px, transparent 2px),
                radial-gradient(circle at 80% 20%, rgba(255,255,255,0.1) 2px, transparent 2px),
                radial-gradient(circle at 40% 40%, rgba(255,255,255,0.1) 1px, transparent 1px);
            background-size: 100px 100px, 150px 150px, 80px 80px;
            animation: particleFloat 20s linear infinite;
        }

        @keyframes gradientShift {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        @keyframes particleFloat {
            0% { transform: translate(0, 0); }
            100% { transform: translate(-100px, -100px); }
        }

        /* Header */
        header {
            background: rgba(13, 71, 161, 0.95);
            backdrop-filter: blur(20px);
            color: white;
            padding: 1rem 0;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            box-shadow: 0 8px 32px rgba(0,0,0,0.3);
            border-bottom: 2px solid rgba(255,255,255,0.1);
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 2.5rem;
            font-weight: 900;
            text-transform: uppercase;
            letter-spacing: 3px;
            background: linear-gradient(45deg, #ffffff, #64b5f6, #2196f3);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            text-shadow: 0 0 30px rgba(33, 150, 243, 0.5);
        }

        .nav-links {
            display: flex;
            list-style: none;
            gap: 2.5rem;
        }

        .nav-links a {
            color: white;
            text-decoration: none;
            font-weight: 600;
            font-size: 1.1rem;
            transition: all 0.3s ease;
            position: relative;
            padding: 0.5rem 0;
        }

        .nav-links a::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background: linear-gradient(45deg, #64b5f6, #2196f3);
            transition: width 0.3s ease;
        }

        .nav-links a:hover::after {
            width: 100%;
        }

        .nav-links a:hover {
            color: #64b5f6;
            text-shadow: 0 0 10px rgba(100, 181, 246, 0.5);
        }

        /* Hero Section */
        .hero {
            min-height: 100vh;
            display: flex;
            align-items: center;
            position: relative;
            overflow: hidden;
            background: transparent;
        }

        .hero-bg {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 800"><defs><linearGradient id="truckGrad" x1="0%" y1="0%" x2="100%" y2="0%"><stop offset="0%" style="stop-color:%232196f3;stop-opacity:0.3"/><stop offset="100%" style="stop-color:%2364b5f6;stop-opacity:0.1"/></linearGradient></defs><rect x="200" y="300" width="200" height="80" fill="url(%23truckGrad)" rx="10"><animateTransform attributeName="transform" attributeType="XML" type="translate" values="0 0;800 0;0 0" dur="8s" repeatCount="indefinite"/></rect><circle cx="250" cy="400" r="25" fill="%23333"><animateTransform attributeName="transform" attributeType="XML" type="translate" values="0 0;800 0;0 0" dur="8s" repeatCount="indefinite"/></circle><circle cx="350" cy="400" r="25" fill="%23333"><animateTransform attributeName="transform" attributeType="XML" type="translate" values="0 0;800 0;0 0" dur="8s" repeatCount="indefinite"/></circle></svg>') center/cover no-repeat;
            opacity: 0.6;
        }

        .hero-content {
            position: relative;
            z-index: 2;
            color: white;
            text-align: center;
            animation: heroSlideIn 2s ease-out;
        }

        @keyframes heroSlideIn {
            from {
                opacity: 0;
                transform: translateY(100px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .hero h1 {
            font-size: clamp(3rem, 8vw, 6rem);
            margin-bottom: 1.5rem;
            font-weight: 900;
            line-height: 1.1;
            background: linear-gradient(45deg, #ffffff, #64b5f6, #2196f3, #1565c0);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            background-size: 300% 300%;
            animation: textShimmer 3s ease-in-out infinite;
            text-shadow: 0 0 50px rgba(33, 150, 243, 0.8);
        }

        @keyframes textShimmer {
            0%, 100% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
        }

        .hero-subtitle {
            font-size: 1.8rem;
            margin-bottom: 1rem;
            opacity: 0.9;
            font-weight: 300;
            letter-spacing: 1px;
        }

        .hero p {
            font-size: 1.4rem;
            margin-bottom: 3rem;
            opacity: 0.8;
            max-width: 800px;
            margin-left: auto;
            margin-right: auto;
            line-height: 1.6;
        }

        .cta-container {
            display: flex;
            gap: 1.5rem;
            justify-content: center;
            flex-wrap: wrap;
        }

        .cta-button {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            background: linear-gradient(45deg, #2196f3, #64b5f6);
            color: white;
            padding: 18px 35px;
            text-decoration: none;
            border-radius: 50px;
            font-weight: bold;
            font-size: 1.2rem;
            transition: all 0.4s ease;
            box-shadow: 0 8px 30px rgba(33, 150, 243, 0.4);
            position: relative;
            overflow: hidden;
        }

        .cta-button::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
            transition: left 0.5s ease;
        }

        .cta-button:hover::before {
            left: 100%;
        }

        .cta-button:hover {
            transform: translateY(-5px) scale(1.05);
            box-shadow: 0 15px 40px rgba(33, 150, 243, 0.6);
        }

        .cta-secondary {
            background: rgba(255,255,255,0.1);
            backdrop-filter: blur(10px);
            border: 2px solid rgba(255,255,255,0.3);
        }

        .cta-secondary:hover {
            background: rgba(255,255,255,0.2);
        }

        /* Floating Elements */
        .floating-elements {
            position: absolute;
            width: 100%;
            height: 100%;
            pointer-events: none;
        }

        .floating-box {
            position: absolute;
            width: 60px;
            height: 60px;
            background: rgba(33, 150, 243, 0.2);
            border: 2px solid rgba(33, 150, 243, 0.5);
            border-radius: 10px;
            animation: float 6s ease-in-out infinite;
        }

        .floating-box:nth-child(1) { top: 20%; left: 10%; animation-delay: 0s; }
        .floating-box:nth-child(2) { top: 60%; right: 15%; animation-delay: 2s; }
        .floating-box:nth-child(3) { bottom: 30%; left: 20%; animation-delay: 4s; }

        @keyframes float {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-30px) rotate(180deg); }
        }

        /* Services Section */
        .services {
            padding: 120px 0;
            position: relative;
            background: rgba(0,0,0,0.3);
            backdrop-filter: blur(10px);
        }

        .section-title {
            text-align: center;
            font-size: clamp(2.5rem, 5vw, 4rem);
            margin-bottom: 4rem;
            color: white;
            font-weight: 900;
            background: linear-gradient(45deg, #ffffff, #64b5f6);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            text-shadow: 0 0 30px rgba(33, 150, 243, 0.5);
        }

        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 2.5rem;
            margin-top: 4rem;
        }

        .service-card {
            background: rgba(255,255,255,0.05);
            backdrop-filter: blur(20px);
            padding: 3rem 2rem;
            border-radius: 25px;
            text-align: center;
            box-shadow: 0 15px 50px rgba(0,0,0,0.3);
            transition: all 0.5s ease;
            border: 1px solid rgba(255,255,255,0.1);
            position: relative;
            overflow: hidden;
            color: white;
        }

        .service-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(33, 150, 243, 0.1), transparent);
            transition: left 0.7s ease;
        }

        .service-card:hover::before {
            left: 100%;
        }

        .service-card:hover {
            transform: translateY(-15px) scale(1.02);
            box-shadow: 0 25px 70px rgba(33, 150, 243, 0.4);
            border-color: rgba(33, 150, 243, 0.5);
        }

        .service-icon {
            font-size: 4rem;
            margin-bottom: 1.5rem;
            display: block;
            background: linear-gradient(45deg, #2196f3, #64b5f6);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            filter: drop-shadow(0 0 10px rgba(33, 150, 243, 0.5));
        }

        .service-card h3 {
            font-size: 1.8rem;
            margin-bottom: 1.5rem;
            font-weight: 700;
            color: #ffffff;
        }

        .service-card p {
            font-size: 1.1rem;
            opacity: 0.9;
            line-height: 1.6;
        }

        /* Stats Section */
        .stats {
            padding: 100px 0;
            background: rgba(33, 150, 243, 0.1);
            backdrop-filter: blur(10px);
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 3rem;
            text-align: center;
        }

        .stat-item {
            color: white;
        }

        .stat-number {
            font-size: 3.5rem;
            font-weight: 900;
            background: linear-gradient(45deg, #ffffff, #64b5f6);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            display: block;
            margin-bottom: 0.5rem;
        }

        .stat-label {
            font-size: 1.2rem;
            opacity: 0.9;
            font-weight: 500;
        }

        /* Contact Section */
        .contact {
            padding: 120px 0;
            background: rgba(0,0,0,0.5);
            backdrop-filter: blur(15px);
        }

        .contact-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 3rem;
            margin-top: 4rem;
        }

        .contact-card {
            background: rgba(255,255,255,0.05);
            backdrop-filter: blur(20px);
            padding: 3rem;
            border-radius: 25px;
            border: 1px solid rgba(255,255,255,0.1);
            transition: all 0.4s ease;
            color: white;
        }

        .contact-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 60px rgba(33, 150, 243, 0.3);
            border-color: rgba(33, 150, 243, 0.5);
        }

        .contact-card h3 {
            color: #64b5f6;
            margin-bottom: 2rem;
            font-size: 1.8rem;
            font-weight: 700;
        }

        .contact-item {
            display: flex;
            align-items: center;
            margin-bottom: 1.5rem;
            font-size: 1.2rem;
            transition: all 0.3s ease;
        }

        .contact-item:hover {
            transform: translateX(10px);
            color: #64b5f6;
        }

        .contact-item span {
            margin-right: 15px;
            font-size: 1.5rem;
            width: 30px;
        }

        /* Footer */
        footer {
            background: rgba(0,0,0,0.8);
            color: white;
            text-align: center;
            padding: 3rem 0;
            backdrop-filter: blur(10px);
            border-top: 1px solid rgba(255,255,255,0.1);
        }

        .footer-content {
            font-size: 1.1rem;
            opacity: 0.8;
        }

        /* Responsive Design */
        @media (max-width: 992px) {
            .stats-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 768px) {
            .nav-links {
                display: none;
            }
            
            .logo {
                font-size: 2rem;
            }
            
            .cta-container {
                flex-direction: column;
                align-items: center;
            }
            
            .services-grid,
            .contact-grid {
                grid-template-columns: 1fr;
            }
            
            .stats-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 576px) {
            .stats-grid {
                gap: 1rem;
            }

            .stats {
                padding: 60px 0;
            }

            .stat-number {
                font-size: 2.0rem;
            }

            .stat-label {
                font-size: 1rem;
            }

            .contact-item {
                font-size: 0.7rem;
                text-decoration: none;
                text-underline-position: unset
            }

            .service-card {
                background-color: #23365E !important; Temporary for testing
            }
        }

        /* Scroll animations */
        .animate-on-scroll {
            opacity: 0;
            transform: translateY(50px);
            transition: all 0.8s ease;
        }

        .animate-on-scroll.animated {
            opacity: 1;
            transform: translateY(0);
        }

        /* Truck Animation */
        .truck-animation {
            position: fixed;
            bottom: 20px;
            left: -100px;
            font-size: 3rem;
            z-index: 100;
            animation: truckDrive 15s linear infinite;
        }

        @keyframes truckDrive {
            0% { left: -100px; }
            50% { left: 50%; }
            100% { left: calc(100% + 100px); }
        }
    </style>
</head>
<body>
    <div class="particles"></div>

    <header>
        <nav class="container">
            <div class="logo">DAVE CARGO</div>
            <ul class="nav-links">
                <li><a href="#home">Bosh sahifa</a></li>
                <li><a href="#services">Xizmatlar</a></li>
                <li><a href="#stats">Statistika</a></li>
                <li><a href="#contact">Aloqa</a></li>
            </ul>
        </nav>
    </header>

    <section id="home" class="hero">
        <div class="hero-bg"></div>
        <div class="floating-elements">
            <div class="floating-box"></div>
            <div class="floating-box"></div>
            <div class="floating-box"></div>
        </div>
        <div class="container">
            <div class="hero-content">
                <h1>DAVE CARGO</h1>
                <div class="hero-subtitle">DELIVERY SERVICE</div>
                <p>Rossiya va Koreyadan Oʻzbekistonga professional va ishonchli yetkazib berish xizmatlari. Sizning yuklaringiz bizning ustuvorligimiz!</p>
                <div class="cta-container">
                    <a href="#contact" class="cta-button">
                        📦 Buyurtma Berish
                    </a>
                    <a href="#services" class="cta-button cta-secondary">
                        🚚 Xizmatlar
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section id="services" class="services">
        <div class="container">
            <h2 class="section-title animate-on-scroll">Bizning Professional Xizmatlarimiz</h2>
            <div class="services-grid">
                <div class="service-card animate-on-scroll">
                    <span class="service-icon">🇷🇺</span>
                    <h3>Rossiyadan Express Yetkazib Berish</h3>
                    <p>Moskva, Sankt-Peterburg va barcha rossiya shaharlaridan 5-7 kun ichida yuklaringizni yetkazib beramiz. To'liq sug'urta va kuzatuv tizimi bilan.</p>
                </div>
                <div class="service-card animate-on-scroll">
                    <span class="service-icon">🇰🇷</span>
                    <h3>Koreyadan Premium Xizmat</h3>
                    <p>Seul va butun Koreya bo'ylab eng zamonaviy texnika, kosmetika va brendli mahsulotlarni professional qadoqlash bilan yetkazib beramiz.</p>
                </div>
                <div class="service-card animate-on-scroll">
                    <span class="service-icon">🛡️</span>
                    <h3>100% Xavfsizlik Kafolati</h3>
                    <p>Har bir yukning to'liq sug'urtasi, professional qadoqlash va real-time kuzatuv tizimi. Sizning tinchligingiz bizning maqsadimiz!</p>
                </div>
            </div>
        </div>
    </section>

    <section id="stats" class="stats">
        <div class="container">
            <div class="stats-grid">
                <div class="stat-item animate-on-scroll">
                    <span class="stat-number">20,000+</span>
                    <span class="stat-label">Mamnun Mijozlar</span>
                </div>
                <div class="stat-item animate-on-scroll">
                    <span class="stat-number">100,000+</span>
                    <span class="stat-label">Yetkazilgan Yuklar</span>
                </div>
                <div class="stat-item animate-on-scroll">
                    <span class="stat-number">99.8%</span>
                    <span class="stat-label">Muvaffaqiyat Darajasi</span>
                </div>
                <div class="stat-item animate-on-scroll">
                    <span class="stat-number">24/7</span>
                    <span class="stat-label">Qo'llab-quvvatlash</span>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="contact">
        <div class="container">
            <h2 class="section-title animate-on-scroll">Biz Bilan Bog'laning</h2>
            <div class="contact-grid">
                <div class="contact-card animate-on-scroll">
                    <h3>🚀 Tezkor Aloqa</h3>
                    <div class="contact-item">
                        <span>📞</span>
                        <div>+998 (77) 366-77-88</div>
                    </div>
                    <div class="contact-item">
                        <span>💬</span>
                        <div>Telegram: @davecargo_uz</div>
                    </div>
                    <div class="contact-item">
                        <span>📱</span>
                        <div>WhatsApp: +998 (77) 366-77-88</div>
                    </div>
                </div>
                <div class="contact-card animate-on-scroll">
                    <h3>🌐 Online Xizmatlar</h3>
                    <div class="contact-item">
                        <span>🖥️</span>
                        <div>davecargo.uz</div>
                    </div>
                    <div class="contact-item">
                        <span>📧</span>
                        <div>davecargo.uz@gmail.com</div>
                    </div>
                    <div class="contact-item">
                        <span>📍</span>
                        <div>Online tracking system</div>
                    </div>
                </div>
                <div class="contact-card animate-on-scroll">
                    <h3>⏰ Ish Vaqtlari</h3>
                    <div class="contact-item">
                        <span>🌅</span>
                        <div>Dush-Shan: 9:00 - 20:00</div>
                    </div>
                    <div class="contact-item">
                        <span>🌄</span>
                        <div>Yakshanba: 10:00 - 18:00</div>
                    </div>
                    <div class="contact-item">
                        <span>🌙</span>
                        <div>24/7 Online qo'llab-quvvatlash</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="truck-animation">🚚</div>

    <footer>
        <div class="container">
            <div class="footer-content">
                <p>&copy; 2025 Dave Cargo Delivery Service. Professional yetkazib berish xizmatlari. Barcha huquqlar himoyalangan.</p>
            </div>
        </div>
    </footer>

    <script>
        // Smooth scrolling
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Scroll animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animated');
                }
            });
        }, observerOptions);

        document.querySelectorAll('.animate-on-scroll').forEach(element => {
            observer.observe(element);
        });

        // Header background change on scroll
        window.addEventListener('scroll', function() {
            const header = document.querySelector('header');
            if (window.scrollY > 100) {
                header.style.background = 'rgba(13, 71, 161, 0.98)';
                header.style.backdropFilter = 'blur(25px)';
            } else {
                header.style.background = 'rgba(13, 71, 161, 0.95)';
                header.style.backdropFilter = 'blur(20px)';
            }
        });

        // Counter animation
        function animateCounters() {
            const counters = document.querySelectorAll('.stat-number');
            counters.forEach(counter => {
                const target = counter.textContent.replace(/[^0-9.]/g, '');
                const targetNum = parseFloat(target);
                let current = 0;
                const increment = targetNum / 50;
                const timer = setInterval(() => {
                    current += increment;
                    if (current >= targetNum) {
                        current = targetNum;
                        clearInterval(timer);
                    }
                    
                    if (counter.textContent.includes('%')) {
                        counter.textContent = current.toFixed(1) + '%';
                    } else if (counter.textContent.includes('+')) {
                        counter.textContent = Math.floor(current).toLocaleString() + '+';
                    } else if (counter.textContent.includes('/')) {
                        counter.textContent = '24/7';
                    } else {
                        counter.textContent = Math.floor(current).toLocaleString();
                    }
                }, 50);
            });
        }

        // Trigger counter animation when stats section is visible
        const statsObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    animateCounters();
                    statsObserver.unobserve(entry.target);
                }
            });
        });

        const statsSection = document.querySelector('.stats');
        if (statsSection) {
            statsObserver.observe(statsSection);
        }

        // Parallax effect for floating elements
        window.addEventListener('scroll', () => {
            const scrolled = window.pageYOffset;
            const parallax = document.querySelectorAll('.floating-box');
            const speed = 0.5;

            parallax.forEach((element, index) => {
                const yPos = -(scrolled * speed * (index + 1) * 0.3);
                element.style.transform = `translateY(${yPos}px) rotate(${scrolled * 0.1}deg)`;
            });
        });
    </script>
</body>
</html>