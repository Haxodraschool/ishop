<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Chủ | Laravel App</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            min-height: 100vh;
            background: linear-gradient(135deg, #1a1a2e 0%, #16213e 50%, #0f3460 100%);
            color: #ffffff;
            overflow-x: hidden;
        }

        /* Animated background particles */
        .bg-animation {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            overflow: hidden;
            z-index: 0;
        }

        .bg-animation span {
            position: absolute;
            width: 20px;
            height: 20px;
            background: rgba(255, 255, 255, 0.05);
            border-radius: 50%;
            animation: float 15s infinite;
        }

        .bg-animation span:nth-child(1) { left: 10%; animation-delay: 0s; width: 80px; height: 80px; }
        .bg-animation span:nth-child(2) { left: 20%; animation-delay: 2s; width: 40px; height: 40px; }
        .bg-animation span:nth-child(3) { left: 35%; animation-delay: 4s; width: 60px; height: 60px; }
        .bg-animation span:nth-child(4) { left: 50%; animation-delay: 0s; width: 100px; height: 100px; }
        .bg-animation span:nth-child(5) { left: 65%; animation-delay: 1s; width: 30px; height: 30px; }
        .bg-animation span:nth-child(6) { left: 80%; animation-delay: 3s; width: 70px; height: 70px; }
        .bg-animation span:nth-child(7) { left: 90%; animation-delay: 5s; width: 50px; height: 50px; }

        @keyframes float {
            0%, 100% {
                transform: translateY(100vh) rotate(0deg);
                opacity: 0;
            }
            10% {
                opacity: 0.5;
            }
            90% {
                opacity: 0.5;
            }
            100% {
                transform: translateY(-100vh) rotate(720deg);
                opacity: 0;
            }
        }

        /* Navigation */
        nav {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            padding: 1.5rem 3rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            z-index: 100;
            backdrop-filter: blur(10px);
            background: rgba(26, 26, 46, 0.8);
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .logo {
            font-size: 1.8rem;
            font-weight: 700;
            background: linear-gradient(90deg, #e94560, #0f3460);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .nav-links {
            display: flex;
            gap: 2rem;
            list-style: none;
        }

        .nav-links a {
            color: #ffffff;
            text-decoration: none;
            font-weight: 500;
            position: relative;
            padding: 0.5rem 0;
            transition: color 0.3s ease;
        }

        .nav-links a::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background: linear-gradient(90deg, #e94560, #ff6b6b);
            transition: width 0.3s ease;
        }

        .nav-links a:hover {
            color: #e94560;
        }

        .nav-links a:hover::after {
            width: 100%;
        }

        /* Hero Section */
        .hero {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 6rem 2rem 2rem;
            position: relative;
            z-index: 1;
        }

        .hero-content {
            text-align: center;
            max-width: 900px;
        }

        .hero h1 {
            font-size: clamp(2.5rem, 6vw, 4.5rem);
            font-weight: 700;
            margin-bottom: 1.5rem;
            line-height: 1.2;
            animation: slideUp 1s ease forwards;
        }

        .hero h1 span {
            background: linear-gradient(90deg, #e94560, #ff6b6b, #ffc371);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .hero p {
            font-size: 1.25rem;
            color: rgba(255, 255, 255, 0.7);
            margin-bottom: 2.5rem;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
            animation: slideUp 1s ease 0.2s forwards;
            opacity: 0;
        }

        .hero-buttons {
            display: flex;
            gap: 1rem;
            justify-content: center;
            flex-wrap: wrap;
            animation: slideUp 1s ease 0.4s forwards;
            opacity: 0;
        }

        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .btn {
            padding: 1rem 2.5rem;
            border-radius: 50px;
            font-size: 1rem;
            font-weight: 600;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            transition: all 0.3s ease;
            cursor: pointer;
            border: none;
        }

        .btn-primary {
            background: linear-gradient(90deg, #e94560, #ff6b6b);
            color: #fff;
            box-shadow: 0 10px 30px rgba(233, 69, 96, 0.3);
        }

        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 40px rgba(233, 69, 96, 0.4);
        }

        .btn-secondary {
            background: transparent;
            color: #fff;
            border: 2px solid rgba(255, 255, 255, 0.3);
        }

        .btn-secondary:hover {
            border-color: #e94560;
            color: #e94560;
            transform: translateY(-3px);
        }

        /* Features Section */
        .features {
            padding: 6rem 2rem;
            position: relative;
            z-index: 1;
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            max-width: 1200px;
            margin: 0 auto;
        }

        .feature-card {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            padding: 2.5rem;
            border: 1px solid rgba(255, 255, 255, 0.1);
            transition: all 0.3s ease;
        }

        .feature-card:hover {
            transform: translateY(-10px);
            border-color: rgba(233, 69, 96, 0.5);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
        }

        .feature-icon {
            width: 60px;
            height: 60px;
            border-radius: 15px;
            background: linear-gradient(135deg, #e94560, #0f3460);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            margin-bottom: 1.5rem;
        }

        .feature-card h3 {
            font-size: 1.3rem;
            margin-bottom: 1rem;
            color: #fff;
        }

        .feature-card p {
            color: rgba(255, 255, 255, 0.6);
            line-height: 1.7;
        }

        /* Footer */
        footer {
            padding: 3rem 2rem;
            text-align: center;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            position: relative;
            z-index: 1;
        }

        footer p {
            color: rgba(255, 255, 255, 0.5);
        }

        footer a {
            color: #e94560;
            text-decoration: none;
        }

        footer a:hover {
            text-decoration: underline;
        }

        /* Mobile responsive */
        @media (max-width: 768px) {
            nav {
                padding: 1rem 1.5rem;
            }

            .nav-links {
                display: none;
            }

            .hero {
                padding: 5rem 1.5rem 2rem;
            }

            .features {
                padding: 4rem 1.5rem;
            }
        }
    </style>
</head>
<body>
    <!-- Animated Background -->
    <div class="bg-animation">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div>

    <!-- Navigation -->
    <nav>
        <div class="logo">Laravel App</div>
        <ul class="nav-links">
            <li><a href="#">Trang Chủ</a></li>
            <li><a href="#">Giới Thiệu</a></li>
            <li><a href="#">Dịch Vụ</a></li>
            <li><a href="#">Liên Hệ</a></li>
        </ul>
    </nav>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h1>Chào mừng đến với <span>Laravel App</span></h1>
            <p>Khám phá sức mạnh của Laravel framework - xây dựng ứng dụng web hiện đại, nhanh chóng và bảo mật.</p>
            <div class="hero-buttons">
                <a href="#" class="btn btn-primary">
                    🚀 Bắt Đầu Ngay
                </a>
                <a href="#" class="btn btn-secondary">
                    📖 Tìm Hiểu Thêm
                </a>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features">
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon">⚡</div>
                <h3>Hiệu Suất Cao</h3>
                <p>Laravel được tối ưu hóa để mang lại hiệu suất tốt nhất cho ứng dụng của bạn với hệ thống cache mạnh mẽ.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">🔒</div>
                <h3>Bảo Mật Tuyệt Đối</h3>
                <p>Hệ thống bảo mật được xây dựng sẵn với authentication, encryption và các biện pháp bảo vệ khác.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">🎨</div>
                <h3>Dễ Dàng Tùy Biến</h3>
                <p>Blade template engine linh hoạt, cho phép bạn tạo giao diện đẹp mắt một cách nhanh chóng.</p>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <p>© 2026 Laravel App. Được tạo với ❤️ bởi <a href="#">Anh Hà</a></p>
    </footer>
</body>
</html>
