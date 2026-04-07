<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>ILDI - Contact Us</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-TileImage" content="LogoMB2017.png">
    <link rel="icon" href="/images/Logo.png">

    <!-- Bootstrap + Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@500;600;700&family=Nunito:wght@300;400;600;700&display=swap" rel="stylesheet">

    <style>
        :root {
            --bg-main: #0f0f0f;
            --bg-soft: #171717;
            --card-bg: #1d1d1d;
            --gold: #c8a96b;
            --gold-light: #e3c78a;
            --text-main: #f5f1e8;
            --text-soft: #cfc7b8;
            --border-soft: rgba(200, 169, 107, 0.22);
            --shadow-luxury: 0 10px 30px rgba(0, 0, 0, 0.35);
        }

        * {
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            margin: 0;
            font-family: 'Nunito', sans-serif;
            background:
                radial-gradient(circle at top right, rgba(200,169,107,0.10), transparent 25%),
                linear-gradient(135deg, #0b0b0b 0%, #141414 45%, #101010 100%);
            color: var(--text-main);
            min-height: 100vh;
        }

        h1, h2, h3, h4, h5, h6, .navbar-brand {
            font-family: 'Cormorant Garamond', serif;
            letter-spacing: 0.5px;
        }

        a {
            text-decoration: none !important;
        }

        /* Navbar */
        .luxury-navbar-wrapper {
            padding: 20px 30px;
        }

        .luxury-navbar {
            background: rgba(20, 20, 20, 0.96);
            border: 1px solid var(--border-soft);
            border-radius: 18px;
            box-shadow: var(--shadow-luxury);
            padding: 14px 24px;
        }

        .navbar-brand img {
            object-fit: contain;
        }

        .navbar-light .navbar-nav .nav-link {
            color: var(--text-main) !important;
            font-weight: 600;
            margin: 0 8px;
            transition: all 0.3s ease;
            position: relative;
        }

        .navbar-light .navbar-nav .nav-link:hover {
            color: var(--gold-light) !important;
        }

        .navbar-light .navbar-nav .nav-link::after {
            content: "";
            position: absolute;
            left: 0;
            bottom: -4px;
            width: 0;
            height: 2px;
            background: linear-gradient(90deg, var(--gold), var(--gold-light));
            transition: width 0.3s ease;
        }

        .navbar-light .navbar-nav .nav-link:hover::after {
            width: 100%;
        }

        .dropdown-menu {
            background: #181818;
            border: 1px solid var(--border-soft);
            border-radius: 12px;
            box-shadow: var(--shadow-luxury);
        }

        .dropdown-item {
            color: var(--text-main);
            transition: all 0.25s ease;
        }

        .dropdown-item:hover {
            background: rgba(200, 169, 107, 0.12);
            color: var(--gold-light);
        }

        .dropdown-menu-right {
            right: 0;
            left: auto;
        }

        /* Hero */
        .hero-section {
            padding: 20px 15px 10px;
        }

        .hero-box {
            background: linear-gradient(180deg, rgba(255,255,255,0.02), rgba(255,255,255,0.01));
            border: 1px solid var(--border-soft);
            border-radius: 24px;
            padding: 50px 30px 35px;
            text-align: center;
            box-shadow: var(--shadow-luxury);
            backdrop-filter: blur(6px);
        }

        .hero-title {
            font-size: 3.1rem;
            font-weight: 700;
            color: var(--text-main);
            margin-bottom: 10px;
        }

        .hero-subtitle {
            color: var(--text-soft);
            font-size: 1.05rem;
            max-width: 700px;
            margin: 0 auto 25px;
        }

        .luxury-divider {
            width: 120px;
            height: 3px;
            border: none;
            background: linear-gradient(90deg, transparent, var(--gold), transparent);
            margin: 0 auto;
        }

        /* Contact section */
        .contact-section {
            padding: 30px 15px 60px;
        }

        .contact-card,
        .info-card {
            background: linear-gradient(180deg, #1a1a1a 0%, #131313 100%);
            border: 1px solid var(--border-soft);
            border-radius: 22px;
            box-shadow: var(--shadow-luxury);
            padding: 30px 25px;
            height: 100%;
        }

        .section-title {
            color: var(--text-main);
            font-size: 2rem;
            margin-bottom: 10px;
        }

        .section-text {
            color: var(--text-soft);
            margin-bottom: 25px;
        }

        .form-control {
            background: #111 !important;
            border: 1px solid rgba(200, 169, 107, 0.20) !important;
            color: var(--text-main) !important;
            border-radius: 14px !important;
            padding: 14px 16px !important;
        }

        .form-control:focus {
            box-shadow: 0 0 0 0.2rem rgba(200, 169, 107, 0.15) !important;
            border-color: var(--gold-light) !important;
        }

        .form-control::placeholder {
            color: #999;
        }

        textarea.form-control {
            min-height: 160px;
            resize: vertical;
        }

        .send-btn {
            display: inline-block;
            margin-top: 10px;
            padding: 12px 26px;
            border: none;
            border-radius: 30px;
            background: linear-gradient(135deg, var(--gold), var(--gold-light));
            color: #111 !important;
            font-weight: 700;
            letter-spacing: 0.3px;
            transition: all 0.3s ease;
            box-shadow: 0 8px 18px rgba(200, 169, 107, 0.25);
        }

        .send-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 14px 24px rgba(200, 169, 107, 0.35);
            color: #000 !important;
        }

        .info-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 24px;
        }

        .info-icon {
            width: 48px;
            height: 48px;
            min-width: 48px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgba(200,169,107,0.12);
            color: var(--gold-light);
            margin-right: 16px;
            font-size: 1.1rem;
        }

        .info-item h5 {
            margin-bottom: 6px;
            color: var(--text-main);
            font-size: 1.3rem;
        }

        .info-item p,
        .info-item a {
            margin: 0;
            color: var(--text-soft) !important;
        }

        .map-placeholder {
            margin-top: 20px;
            border: 1px solid var(--border-soft);
            border-radius: 18px;
            padding: 40px 20px;
            text-align: center;
            color: var(--text-soft);
            background: rgba(255,255,255,0.02);
        }

        @media (max-width: 991px) {
            .hero-title {
                font-size: 2.4rem;
            }

            .luxury-navbar-wrapper {
                padding: 15px;
            }
        }

        @media (max-width: 767px) {
            .hero-box {
                padding: 35px 20px 25px;
            }

            .contact-card,
            .info-card {
                margin-bottom: 20px;
            }
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <div class="luxury-navbar-wrapper">
        <nav class="navbar navbar-expand-md navbar-light luxury-navbar">
            <a href="/" class="navbar-brand">
                <img src="/images/logo.PNG" width="190" height="75" alt="ILDI Logo">
            </a>

            <button class="navbar-toggler bg-light" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto align-items-md-center">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="/home" role="button" data-toggle="dropdown">
                            <i class="fas fa-gem mr-2"></i>Products
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="#" class="dropdown-item">Luxury Perfume</a></li>
                            <li><a href="#" class="dropdown-item">Golden Watch</a></li>
                            <li><a href="#" class="dropdown-item">Elegant Bag</a></li>
                            <li><a href="#" class="dropdown-item">Premium Shoes</a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/about-us">
                            <i class="fas fa-feather-alt mr-2"></i>About Us
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/contact-us">
                            <i class="fas fa-phone mr-2"></i>Contact Us
                        </a>
                    </li>

                    @auth
                        @if(auth()->user()->isAdmin())
                            <li class="nav-item">
                                <a class="nav-link" href="/admin">
                                    <i class="fas fa-cog mr-2"></i>Settings
                                </a>
                            </li>
                        @endif
                    @endauth
                </ul>

                <ul class="navbar-nav ml-auto">
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">Login</a>
                        </li>
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" role="button" data-toggle="dropdown">
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </nav>
    </div>

    <!-- Hero -->
    <div class="container-fluid hero-section">
        <div class="hero-box">
            <h1 class="hero-title">Contact Us</h1>
            <p class="hero-subtitle">
                We would love to hear from you. Send us your questions, ideas, or product inquiries.
            </p>
            <hr class="luxury-divider">
        </div>
    </div>

    <!-- Contact Section -->
    <div class="container contact-section">
        <div class="row">
            <div class="col-lg-7 mb-4">
                <div class="contact-card">
                    <h2 class="section-title">Send a Message</h2>
                    <p class="section-text">
                        Fill out the form below and our team will contact you soon.
                    </p>
                    @if(session('success'))
                        <div class="alert alert-success text-center" style="
                            background: rgba(200,169,107,0.15);
                            border: 1px solid rgba(200,169,107,0.4);
                            color: #e3c78a;
                            border-radius: 12px;
                            margin-bottom: 20px;
                        ">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form action="/contact-us" method="POST">
                        @csrf

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" placeholder="Your Name">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="email" class="form-control" placeholder="Your Email">
                            </div>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Subject">
                        </div>

                        <div class="form-group">
                            <textarea class="form-control" placeholder="Write your message here..."></textarea>
                        </div>

                        <button type="submit" class="send-btn">
                            <i class="fas fa-paper-plane mr-2"></i>Send Message
                        </button>
                    </form>
                </div>
            </div>

            <div class="col-lg-5 mb-4">
                <div class="info-card">
                    <h2 class="section-title">Get in Touch</h2>
                    <p class="section-text">
                        Here is some sample contact information.
                    </p>

                    <div class="info-item">
                        <div class="info-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div>
                            <h5>Address</h5>
                            <p>Budapest, Hungary, Fashion Street 12</p>
                        </div>
                    </div>

                    <div class="info-item">
                        <div class="info-icon">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <div>
                            <h5>Phone</h5>
                            <p>+36 30 123 4567</p>
                        </div>
                    </div>

                    <div class="info-item">
                        <div class="info-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div>
                            <h5>Email</h5>
                            <a href="mailto:info@ildi-store.com">info@ildi-store.com</a>
                        </div>
                    </div>

                    <div class="info-item">
                        <div class="info-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div>
                            <h5>Working Hours</h5>
                            <p>Monday - Friday: 09:00 - 18:00</p>
                        </div>
                    </div>

                    <div class="map-placeholder">
                        <i class="fas fa-map-marked-alt fa-2x mb-3"></i>
                        <div>Google Map Placeholder</div>
                        <small>You can replace this area with a real map later.</small>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>