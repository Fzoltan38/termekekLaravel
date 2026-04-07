<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Add New Product | ILDI')</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-TileImage" content="LogoMB2017.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="/images/logo.PNG">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@500;600;700&family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">

    <style>
        :root {
            --bg-main: #0c0c0c;
            --bg-soft: #141414;
            --card-bg: #191919;
            --card-bg-2: #202020;
            --gold: #c8a96b;
            --gold-light: #e5cb93;
            --text-main: #f7f1e7;
            --text-soft: #cabfae;
            --muted: #9e9486;
            --line: rgba(200, 169, 107, 0.18);
            --shadow: 0 18px 45px rgba(0, 0, 0, 0.35);
            --success-bg: rgba(40, 167, 69, 0.12);
            --success-border: rgba(40, 167, 69, 0.28);
            --danger-bg: rgba(220, 53, 69, 0.12);
            --danger-border: rgba(220, 53, 69, 0.28);
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
            color: var(--text-main);
            background:
                radial-gradient(circle at top right, rgba(200,169,107,0.08), transparent 20%),
                radial-gradient(circle at bottom left, rgba(200,169,107,0.05), transparent 22%),
                linear-gradient(135deg, #090909 0%, #111111 50%, #0d0d0d 100%);
            min-height: 100vh;
        }

        h1, h2, h3, h4, h5, h6, .brand-font {
            font-family: 'Cormorant Garamond', serif;
            letter-spacing: 0.4px;
        }

        a {
            text-decoration: none !important;
        }

        /* Navbar */
        .topbar-wrap {
            padding: 24px 24px 0;
        }

        .luxury-navbar {
            background: rgba(18, 18, 18, 0.96);
            border: 1px solid var(--line);
            border-radius: 22px;
            box-shadow: var(--shadow);
            padding: 14px 24px;
        }

        .navbar-brand img {
            max-height: 78px;
            object-fit: contain;
        }

        .navbar-title {
            color: var(--gold-light);
            font-size: 1.3rem;
            font-weight: 700;
            margin-left: 12px;
        }

        /* Hero */
        .hero-section {
            padding: 26px 24px 10px;
        }

        .hero-box {
            background: linear-gradient(180deg, rgba(255,255,255,0.02), rgba(255,255,255,0.01));
            border: 1px solid var(--line);
            border-radius: 26px;
            box-shadow: var(--shadow);
            padding: 46px 30px 36px;
            text-align: center;
        }

        .hero-title {
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 10px;
            color: var(--text-main);
        }

        .hero-subtitle {
            max-width: 760px;
            margin: 0 auto;
            color: var(--text-soft);
            font-size: 1.05rem;
            line-height: 1.8;
        }

        .gold-divider {
            width: 130px;
            height: 3px;
            border: none;
            margin: 20px auto 0;
            background: linear-gradient(90deg, transparent, var(--gold), transparent);
        }

        /* Main area */
        .content-section {
            padding: 24px 24px 60px;
        }

        .form-shell {
            max-width: 1200px;
            margin: 0 auto;
        }

        .luxury-card {
            background: linear-gradient(180deg, #1a1a1a 0%, #131313 100%);
            border: 1px solid var(--line);
            border-radius: 26px;
            box-shadow: var(--shadow);
            overflow: hidden;
        }

        .card-header-luxury {
            padding: 26px 30px 18px;
            border-bottom: 1px solid var(--line);
            background: linear-gradient(180deg, rgba(200,169,107,0.08), rgba(255,255,255,0.01));
        }

        .card-title-luxury {
            margin: 0;
            font-size: 2rem;
            color: var(--text-main);
            font-weight: 700;
        }

        .card-subtitle-luxury {
            margin-top: 6px;
            color: var(--text-soft);
            font-size: 0.98rem;
        }

        .card-body-luxury {
            padding: 30px;
        }

        .section-box {
            background: linear-gradient(180deg, rgba(255,255,255,0.025), rgba(255,255,255,0.01));
            border: 1px solid var(--line);
            border-radius: 22px;
            padding: 24px;
            height: 100%;
        }

        .section-title {
            color: var(--gold-light);
            font-size: 1.35rem;
            font-weight: 700;
            margin-bottom: 18px;
        }

        .form-group label,
        .form-label {
            color: var(--gold-light);
            font-weight: 700;
            margin-bottom: 10px;
            display: block;
        }

        .form-control,
        textarea,
        input[type="text"],
        input[type="file"] {
            background: #101010 !important;
            border: 1px solid rgba(200,169,107,0.18) !important;
            color: var(--text-main) !important;
            border-radius: 16px !important;
            min-height: 50px;
            padding: 12px 16px !important;
            box-shadow: none !important;
        }

        .form-control:focus,
        textarea:focus,
        input[type="text"]:focus,
        input[type="file"]:focus {
            border-color: var(--gold) !important;
            box-shadow: 0 0 0 3px rgba(200,169,107,0.12) !important;
            background: #121212 !important;
        }

        textarea.form-control {
            min-height: 160px;
            resize: vertical;
        }

        input[type="file"] {
            padding: 10px 12px !important;
        }

        .helper-text {
            color: var(--muted);
            font-size: 0.92rem;
            margin-top: 8px;
        }

        /* Alerts */
        .alert {
            border-radius: 18px;
            border-width: 1px;
            padding: 16px 18px;
            margin-bottom: 20px;
        }

        .alert-danger {
            background: var(--danger-bg);
            border-color: var(--danger-border);
            color: #ffd7dc;
        }

        .alert-success {
            background: var(--success-bg);
            border-color: var(--success-border);
            color: #d7ffe1;
        }

        .alert ul {
            margin-bottom: 0;
            padding-left: 20px;
        }

        /* Button */
        .submit-wrap {
            margin-top: 28px;
        }

        .luxury-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            width: 100%;
            min-height: 58px;
            border: none;
            border-radius: 999px;
            background: linear-gradient(135deg, var(--gold), var(--gold-light));
            color: #111;
            font-weight: 800;
            font-size: 1.05rem;
            letter-spacing: 0.3px;
            box-shadow: 0 12px 24px rgba(200,169,107,0.24);
            transition: all 0.3s ease;
        }

        .luxury-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 16px 30px rgba(200,169,107,0.34);
            color: #000;
        }

        /* Footer spacing feel */
        .page-end-space {
            height: 20px;
        }

        @media (max-width: 991px) {
            .hero-title {
                font-size: 2.35rem;
            }

            .card-body-luxury {
                padding: 22px;
            }
        }

        @media (max-width: 767px) {
            .topbar-wrap,
            .hero-section,
            .content-section {
                padding-left: 14px;
                padding-right: 14px;
            }

            .hero-box {
                padding: 34px 20px 28px;
            }

            .hero-title {
                font-size: 2rem;
            }

            .card-header-luxury {
                padding: 22px 20px 16px;
            }

            .card-body-luxury {
                padding: 18px;
            }

            .section-box {
                padding: 18px;
            }

            .navbar-title {
                display: none;
            }
        }
    </style>
</head>

<body class="stretched sticky-footer">

    <!-- Top Navbar -->
    <div class="topbar-wrap">
        <nav class="navbar navbar-expand-md luxury-navbar">
            <a href="/" class="navbar-brand d-flex align-items-center">
                <img src="/images/logo.PNG" alt="ILDI Logo">
                <span class="navbar-title brand-font">ILDI Admin</span>
            </a>
        </nav>
    </div>

    <!-- Hero -->
    <div class="hero-section">
        <div class="hero-box">
            <h1 class="hero-title">Add New Product</h1>
            <p class="hero-subtitle">
                Create and publish a new product with a clean, elegant, and professional interface that reflects the premium identity of your brand.
            </p>
            <hr class="gold-divider">
        </div>
    </div>

    <!-- Content -->
    <div class="content-section">
        <div class="form-shell">

            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if(session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
            @endif

            <form method="post" action="{{ url('newproduct/store') }}" enctype="multipart/form-data">
                @csrf

                <div class="luxury-card">
                    <div class="card-header-luxury">
                        <h2 class="card-title-luxury">Product Information</h2>
                        <div class="card-subtitle-luxury">
                            Fill in the product details below to add a new item to your collection.
                        </div>
                    </div>

                    <div class="card-body-luxury">
                        <div class="row">
                            <!-- Left Side -->
                            <div class="col-lg-4 mb-4 mb-lg-0">
                                <div class="section-box">
                                    <h4 class="section-title">Pricing & Media</h4>

                                    <div class="form-group">
                                        <label for="product_price">Product Price</label>
                                        <input
                                            id="product_price"
                                            type="text"
                                            class="form-control"
                                            name="Product_Price"
                                            placeholder="Enter product price"
                                            required
                                        >
                                        <div class="helper-text">Enter the price exactly as you want it stored.</div>
                                    </div>

                                    <div class="form-group mb-0">
                                        <label for="product_image">Product Image</label>
                                        <input
                                            id="product_image"
                                            name="image"
                                            type="file"
                                            accept="image/*"
                                            class="form-control"
                                            required
                                        >
                                        <div class="helper-text">Upload a clear, high-quality image for the product.</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Right Side -->
                            <div class="col-lg-8">
                                <div class="section-box">
                                    <h4 class="section-title">Product Details</h4>

                                    <div class="form-group">
                                        <label for="product_name_en">Product Name</label>
                                        <input
                                            id="product_name_en"
                                            type="text"
                                            class="form-control"
                                            name="product_name_en"
                                            placeholder="Enter product name"
                                            required
                                        >
                                    </div>

                                    <div class="form-group mb-0">
                                        <label for="productdescription_en">Description</label>
                                        <textarea
                                            id="productdescription_en"
                                            class="form-control"
                                            name="productdescription_en"
                                            rows="6"
                                            placeholder="Enter product description"
                                            required
                                        ></textarea>
                                        <div class="helper-text">Write a clear and professional description for the product.</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="submit-wrap">
                            <button type="submit" class="luxury-btn">
                                <i class="fas fa-save"></i>
                                Save Product
                            </button>
                        </div>
                    </div>
                </div>
            </form>

            <div class="page-end-space"></div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>