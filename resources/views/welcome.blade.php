<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>ILDI</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-TileImage" content="‏‏LogoMB2017.png">
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

        /* Hero / heading */
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
            font-size: 3.2rem;
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

        /* Product cards */
        .products-section {
            padding: 30px 15px 60px;
        }

        .product-card {
            background: linear-gradient(180deg, #1a1a1a 0%, #131313 100%);
            border: 1px solid var(--border-soft);
            border-radius: 22px;
            overflow: hidden;
            box-shadow: var(--shadow-luxury);
            transition: transform 0.35s ease, box-shadow 0.35s ease, border-color 0.35s ease;
            height: 100%;
        }

        .product-card:hover {
            transform: translateY(-8px);
            border-color: rgba(227, 199, 138, 0.45);
            box-shadow: 0 18px 40px rgba(0, 0, 0, 0.45);
        }

        .product-image-wrap {
            padding: 24px;
            background: linear-gradient(180deg, rgba(200,169,107,0.08), rgba(255,255,255,0.01));
            text-align: center;
            border-bottom: 1px solid rgba(255,255,255,0.04);
        }

        .product-image {
            max-width: 100%;
            height: 220px;
            object-fit: contain;
            transition: transform 0.35s ease;
        }

        .product-card:hover .product-image {
            transform: scale(1.04);
        }

        .product-body {
            padding: 22px 20px 24px;
            text-align: center;
        }

        .product-title {
            color: var(--text-main);
            font-size: 1.5rem;
            margin-bottom: 10px;
            min-height: 52px;
        }

        .product-title a {
            color: inherit;
        }

        .product-title a:hover {
            color: var(--gold-light);
        }

        .ratings i {
            color: var(--gold);
            margin: 0 2px;
            font-size: 0.95rem;
        }

        .view-btn {
            display: inline-block;
            margin-top: 18px;
            padding: 10px 22px;
            border-radius: 30px;
            background: linear-gradient(135deg, var(--gold), var(--gold-light));
            color: #111 !important;
            font-weight: 700;
            letter-spacing: 0.3px;
            transition: all 0.3s ease;
            box-shadow: 0 8px 18px rgba(200, 169, 107, 0.25);
        }

        .view-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 14px 24px rgba(200, 169, 107, 0.35);
            color: #000 !important;
        }

        /* Auth dropdown */
        .dropdown-menu-right {
            right: 0;
            left: auto;
        }

        /* Language visibility */
        div.fr, div.du, div.gr, div.ar {
            display: none;
        }

        div.en {
            display: block;
        }

        /* Responsive */
        @media (max-width: 991px) {
            .hero-title {
                font-size: 2.4rem;
            }

            .luxury-navbar-wrapper {
                padding: 15px;
            }
        }

        @media (max-width: 767px) {
            .product-image {
                height: 180px;
            }

            .hero-box {
                padding: 35px 20px 25px;
            }
        }
    </style>
</head>

<body>
    <script>
        function Showlanguage(str) {
            var en = document.getElementById("english");
            var ar = document.getElementById("arabic");
            var fr = document.getElementById("French");
            var gr = document.getElementById("Germany");
            var du = document.getElementById("Dutch");

            if (str == "Ar") {
                ar.style.display = "block";
                en.style.display = "none";
                fr.style.display = "none";
                gr.style.display = "none";
                du.style.display = "none";
            }
            if (str == "En") {
                ar.style.display = "none";
                en.style.display = "block";
                fr.style.display = "none";
                gr.style.display = "none";
                du.style.display = "none";
            }
            if (str == "Fr") {
                ar.style.display = "none";
                en.style.display = "none";
                fr.style.display = "block";
                gr.style.display = "none";
                du.style.display = "none";
            }
            if (str == "Gr") {
                ar.style.display = "none";
                en.style.display = "none";
                fr.style.display = "none";
                gr.style.display = "block";
                du.style.display = "none";
            }
            if (str == "Du") {
                ar.style.display = "none";
                en.style.display = "none";
                fr.style.display = "none";
                gr.style.display = "none";
                du.style.display = "block";
            }
        }
    </script>

    <!-- English -->
    <div class="en" id="english" align="left" dir="ltr">

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
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                <i class="fas fa-gem mr-2"></i>Products
                            </a>
                            <ul class="dropdown-menu">
                                @foreach($data as $row)
                                    <li>
                                        <a href="/show_details/{{ $row->id }}" class="dropdown-item">
                                            {{ $row->pro_name_EN }}
                                        </a>
                                    </li>
                                @endforeach
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
                                    <a class="nav-link" href="{{ url('/admin') }}">
                                        <i class="fas fa-cog mr-2"></i>Settings
                                    </a>
                                </li>
                            @endif
                        @endauth

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                Language
                            </a>
                            <ul class="dropdown-menu">
                                <li><a id="Ar" class="dropdown-item text-center" onclick="Showlanguage($(this).attr('id'))">Ar</a></li>
                                <li><a id="En" class="dropdown-item text-center" onclick="Showlanguage($(this).attr('id'))">En</a></li>
                                <li><a id="Fr" class="dropdown-item text-center" onclick="Showlanguage($(this).attr('id'))">Fr</a></li>
                                <li><a id="Gr" class="dropdown-item text-center" onclick="Showlanguage($(this).attr('id'))">Gr</a></li>
                                <li><a id="Du" class="dropdown-item text-center" onclick="Showlanguage($(this).attr('id'))">Du</a></li>
                            </ul>
                        </li>
                    </ul>

                    <ul class="navbar-nav ml-auto">
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" role="button" data-toggle="dropdown">
                                    {{ Auth::user()->name }}
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
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
                <h1 class="hero-title">Luxury Products Collection</h1>
                <p class="hero-subtitle">
                    Discover refined quality, elegant craftsmanship, and timeless design through our premium range of products.
                </p>
                <hr class="luxury-divider">
            </div>
        </div>

        <!-- Products -->
        <div class="container products-section">
            <div class="row">
                @foreach($data as $row)
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="product-card">
                            <div class="product-image-wrap">
                                <a href="/show_details/{{ $row->id }}">
                                    <img src="/w/show/{{ $row->id }}?size=pdhi" class="product-image" alt="{{ $row->pro_name_EN }}">
                                </a>
                            </div>

                            <div class="product-body">
                                <h5 class="product-title">
                                    <a href="/show_details/{{ $row->id }}">
                                        {{ $row->pro_name_EN }}
                                    </a>
                                </h5>

                                <div class="ratings mb-2">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>

                                <a href="/show_details/{{ $row->id }}" class="view-btn">
                                    View Details
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    </div>

    <!-- JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>