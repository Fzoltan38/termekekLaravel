<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>Details | ILDI</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="/images/Logo.png">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@500;600;700&family=Nunito:wght@300;400;600;700&display=swap" rel="stylesheet">

    <style>
        :root {
            --bg-main: #0d0d0d;
            --bg-soft: #151515;
            --card-bg: #1b1b1b;
            --card-bg-2: #222222;
            --gold: #c9a86a;
            --gold-light: #e4c98f;
            --text-main: #f7f2e9;
            --text-soft: #cbbfae;
            --muted: #9f9688;
            --line: rgba(201, 168, 106, 0.18);
            --shadow: 0 16px 40px rgba(0, 0, 0, 0.35);
            --danger-soft: #d86b6b;
            --success-soft: #7bc287;
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: 'Nunito', sans-serif;
            background:
                radial-gradient(circle at top right, rgba(201,168,106,0.08), transparent 22%),
                radial-gradient(circle at bottom left, rgba(201,168,106,0.05), transparent 18%),
                linear-gradient(135deg, #0a0a0a 0%, #111111 50%, #0d0d0d 100%);
            color: var(--text-main);
            min-height: 100vh;
        }

        h1, h2, h3, h4, h5, h6, .brand-title {
            font-family: 'Cormorant Garamond', serif;
            letter-spacing: 0.4px;
        }

        a {
            text-decoration: none !important;
        }

        /* Navbar */
        .topbar-wrap {
            padding: 22px 24px 0;
        }

        .luxury-navbar {
            background: rgba(18, 18, 18, 0.95);
            border: 1px solid var(--line);
            border-radius: 20px;
            box-shadow: var(--shadow);
            padding: 14px 24px;
        }

        .navbar-brand img {
            max-height: 78px;
            object-fit: contain;
        }

        .language-switch {
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
        }

        .lang-btn {
            border: 1px solid var(--line);
            background: transparent;
            color: var(--text-main);
            border-radius: 999px;
            padding: 8px 18px;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .lang-btn:hover {
            background: linear-gradient(135deg, var(--gold), var(--gold-light));
            color: #111;
            border-color: transparent;
        }

        /* Hero */
        .hero-section {
            padding: 28px 24px 10px;
        }

        .hero-box {
            background: linear-gradient(180deg, rgba(255,255,255,0.02), rgba(255,255,255,0.01));
            border: 1px solid var(--line);
            border-radius: 24px;
            box-shadow: var(--shadow);
            padding: 42px 30px 34px;
            text-align: center;
        }

        .hero-title {
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 10px;
            color: var(--text-main);
        }

        .hero-subtitle {
            max-width: 700px;
            margin: 0 auto;
            color: var(--text-soft);
            font-size: 1.05rem;
        }

        .gold-divider {
            width: 130px;
            height: 3px;
            margin: 18px auto 0;
            border: none;
            background: linear-gradient(90deg, transparent, var(--gold), transparent);
        }

        /* Product card */
        .details-section {
            padding: 22px 24px 60px;
        }

        .luxury-card {
            background: linear-gradient(180deg, #1a1a1a 0%, #131313 100%);
            border: 1px solid var(--line);
            border-radius: 24px;
            overflow: hidden;
            box-shadow: var(--shadow);
            margin-bottom: 28px;
        }

        .product-image-side {
            background: linear-gradient(180deg, rgba(201,168,106,0.07), rgba(255,255,255,0.02));
            border-right: 1px solid var(--line);
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 360px;
            padding: 28px;
        }

        .product-image-side img {
            max-height: 320px;
            max-width: 100%;
            object-fit: contain;
            filter: drop-shadow(0 10px 18px rgba(0,0,0,0.25));
            transition: transform 0.35s ease;
        }

        .product-image-side img:hover {
            transform: scale(1.03);
        }

        .product-content {
            padding: 34px 34px 30px;
        }

        .section-label {
            color: var(--gold-light);
            text-transform: uppercase;
            letter-spacing: 1.6px;
            font-size: 0.78rem;
            font-weight: 700;
            margin-bottom: 8px;
        }

        .product-name {
            font-size: 2.2rem;
            color: var(--text-main);
            margin-bottom: 18px;
            line-height: 1.2;
        }

        .rating-stars i {
            color: var(--gold);
            margin-right: 4px;
        }

        .price-tag {
            display: inline-block;
            margin-top: 18px;
            padding: 10px 18px;
            border-radius: 999px;
            background: rgba(201,168,106,0.10);
            border: 1px solid rgba(201,168,106,0.22);
            color: var(--gold-light);
            font-weight: 700;
            font-size: 1.1rem;
        }

        .action-bar {
            display: flex;
            justify-content: space-between;
            align-items: start;
            gap: 16px;
            flex-wrap: wrap;
            margin-bottom: 18px;
        }

        .luxury-btn {
            border: none;
            border-radius: 999px;
            padding: 10px 22px;
            font-weight: 700;
            transition: all 0.3s ease;
            box-shadow: 0 8px 18px rgba(0,0,0,0.18);
        }

        .luxury-btn-danger {
            background: linear-gradient(135deg, #8b1f1f, #d64a4a);
            color: #fff;
        }

        .luxury-btn-danger:hover {
            transform: translateY(-2px);
            box-shadow: 0 14px 24px rgba(214,74,74,0.25);
            color: #fff;
        }

        .luxury-btn-primary {
            background: linear-gradient(135deg, var(--gold), var(--gold-light));
            color: #111;
        }

        .luxury-btn-primary:hover {
            transform: translateY(-2px);
            color: #000;
            box-shadow: 0 14px 28px rgba(201,168,106,0.30);
        }

        /* Description area */
        .desc-box {
            margin-top: 28px;
            background: linear-gradient(180deg, rgba(255,255,255,0.02), rgba(255,255,255,0.01));
            border: 1px solid var(--line);
            border-radius: 20px;
            overflow: hidden;
        }

        .desc-header {
            padding: 18px 22px;
            border-bottom: 1px solid var(--line);
            background: rgba(201,168,106,0.06);
        }

        .desc-title {
            margin: 0;
            color: var(--gold-light);
            font-size: 1.45rem;
            font-weight: 700;
        }

        .desc-body {
            padding: 22px;
        }

        .current-description {
            color: var(--text-soft);
            line-height: 1.8;
            font-size: 1rem;
            margin-bottom: 22px;
            background: rgba(255,255,255,0.015);
            border: 1px solid rgba(255,255,255,0.04);
            border-radius: 16px;
            padding: 18px;
        }

        .form-label {
            color: var(--gold-light);
            font-weight: 700;
            margin-bottom: 10px;
        }

        .luxury-textarea {
            background: #111111;
            border: 1px solid rgba(201,168,106,0.18);
            color: var(--text-main);
            border-radius: 16px;
            padding: 16px 18px;
            min-height: 150px;
            resize: vertical;
            width: 100%;
            transition: all 0.3s ease;
        }

        .luxury-textarea:focus {
            outline: none;
            border-color: var(--gold);
            box-shadow: 0 0 0 3px rgba(201,168,106,0.12);
            background: #121212;
        }

        /* Footer */
        .luxury-footer {
            margin: 24px;
            margin-top: 0;
            border: 1px solid var(--line);
            border-radius: 18px;
            background: rgba(18,18,18,0.95);
            box-shadow: var(--shadow);
        }

        .luxury-footer .inner {
            text-align: center;
            padding: 22px 18px;
            color: var(--text-soft);
        }

        .luxury-footer a {
            color: var(--gold-light);
            font-weight: 700;
        }

        /* Language containers */
        div.en { display: block; }
        div.ar, div.fr, div.gr, div.du { display: none; }

        @media (max-width: 991px) {
            .hero-title {
                font-size: 2.3rem;
            }

            .product-name {
                font-size: 1.8rem;
            }

            .product-image-side {
                border-right: none;
                border-bottom: 1px solid var(--line);
                min-height: 260px;
            }
        }

        @media (max-width: 767px) {
            .topbar-wrap,
            .hero-section,
            .details-section {
                padding-left: 14px;
                padding-right: 14px;
            }

            .product-content {
                padding: 24px 20px;
            }

            .hero-box {
                padding: 30px 20px;
            }

            .hero-title {
                font-size: 2rem;
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

            if (en) en.style.display = "none";
            if (ar) ar.style.display = "none";
            if (fr) fr.style.display = "none";
            if (gr) gr.style.display = "none";
            if (du) du.style.display = "none";

            if (str == "Ar" && ar) ar.style.display = "block";
            if (str == "En" && en) en.style.display = "block";
            if (str == "Fr" && fr) fr.style.display = "block";
            if (str == "Gr" && gr) gr.style.display = "block";
            if (str == "Du" && du) du.style.display = "block";
        }
    </script>

    <!-- English -->
    <div class="en" id="english" align="left" dir="ltr">

        <!-- Navbar -->
        <div class="topbar-wrap">
            <nav class="navbar navbar-expand-md navbar-light luxury-navbar">
                <a href="/" class="navbar-brand">
                    <img src="/images/logo.PNG" alt="ILDI Logo">
                </a>

                <button class="navbar-toggler bg-light" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
                    <span class="navbar-toggler-icon"></span>
                </button>


            </nav>
        </div>

        <!-- Hero -->
        <div class="hero-section">
            <div class="hero-box">
                <h1 class="hero-title">Product Details</h1>
                <p class="hero-subtitle">
                    Manage your premium product collection with a refined, elegant interface designed for a professional brand presence.
                </p>
                <hr class="gold-divider">
            </div>
        </div>

        <!-- Details -->
        <div class="details-section">
            @foreach($data as $row)
                <div class="luxury-card">
                    <div class="row no-gutters">

                        <!-- Product Image -->
                        <div class="col-lg-4">
                            <div class="product-image-side">
                                <img src="/w/show/{{ $row->id }}?size=pdhi"
                                     alt="{{ $row->pro_name_EN }}">
                            </div>
                        </div>

                        <!-- Product Content -->
                        <div class="col-lg-8">
                            <div class="product-content">

                                <div class="action-bar">
                                    <div>
                                        <div class="section-label">Product Name</div>
                                        <h2 class="product-name">{{ $row->pro_name_EN }}</h2>

                                        <div class="rating-stars mb-2">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>

                                        <div class="price-tag">
                                            Price: {{ $row->pro_price }} $
                                        </div>
                                    </div>

                                    @auth
                                    <div style="display:flex; gap:10px; flex-wrap:wrap;">
                                        <a href="{{ route('products.edit', $row->id) }}" class="luxury-btn luxury-btn-primary">
                                            <i class="fa fa-edit mr-2"></i>Edit Product
                                        </a>

                                        @if(auth()->user()->isAdmin())
                                        <form action="{{ route('products.destroy', $row->id) }}"
                                              method="POST"
                                              onsubmit="return confirm('Are you sure you want to delete this product?')">
                                            @csrf
                                            @method('DELETE')

                                            <button type="submit" class="luxury-btn luxury-btn-danger">
                                                <i class="fa fa-trash mr-2"></i>Delete
                                            </button>
                                        </form>
                                        @endif
                                    </div>
                                    @endauth
                                </div>

                                <!-- Description -->
                                <div class="desc-box">
                                    <div class="desc-header">
                                        <h4 class="desc-title">Product Description</h4>
                                    </div>

                                    <div class="desc-body">
                                        <div class="current-description">
                                            {{ $row->pro_description_EN }}
                                        </div>

                                        @auth
                                        <form action="{{ route('products.updateDescription', $row->id) }}" method="POST">
                                            @csrf

                                            <label class="form-label">Edit Description</label>
                                            <textarea name="pro_description_EN"
                                                      class="luxury-textarea">{{ $row->pro_description_EN }}</textarea>

                                            <div class="mt-3">
                                                <button type="submit" class="luxury-btn luxury-btn-primary">
                                                    <i class="fa fa-save mr-2"></i>Update Description
                                                </button>
                                            </div>
                                        </form>
                                        @endauth
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Footer -->
        <footer class="luxury-footer">
            <div class="inner">
                <h5 class="mb-0">© 2026 Copyright: <a href="/">ildi.com</a></h5>
            </div>
        </footer>

    </div>

    <!-- JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>