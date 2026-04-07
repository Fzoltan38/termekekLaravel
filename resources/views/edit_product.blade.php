<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <title>Edit Product | ILDI</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@500;700&family=Nunito:wght@300;400;700&display=swap" rel="stylesheet">
    <style>
        body { background: #111; color: #f5f1e8; font-family: 'Nunito', sans-serif; min-height: 100vh; }
        .form-control { background: #1a1a1a !important; border: 1px solid rgba(200,169,107,0.3) !important; color: #fff !important; border-radius: 12px !important; }
        .gold-btn { background: linear-gradient(135deg,#c8a96b,#e3c78a); color:#111; font-weight:700; border:none; border-radius:30px; padding:12px 30px; }
        label { color: #e3c78a; font-weight:700; }
        h2 { font-family:'Cormorant Garamond',serif; }
        .card { background: #1d1d1d; border: 1px solid rgba(200,169,107,0.2); border-radius:20px; }
    </style>
</head>
<body>
<div class="container py-5">
    <a href="/" class="btn btn-outline-light mb-3">&larr; Back</a>
    <h2 class="mb-4">Edit Product</h2>

    @if($errors->any())
        <div class="alert alert-danger">
            @foreach($errors->all() as $e) <div>{{ $e }}</div> @endforeach
        </div>
    @endif

    <div class="card p-4">
        <form method="POST" action="{{ route('products.update', $product->id) }}" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label>Product Name</label>
                <input type="text" name="product_name_en" class="form-control"
                       value="{{ old('product_name_en', $product->pro_name_EN) }}" required>
            </div>

            <div class="form-group">
                <label>Description</label>
                <textarea name="productdescription_en" class="form-control" rows="5" required>{{ old('productdescription_en', $product->pro_description_EN) }}</textarea>
            </div>

            <div class="form-group">
                <label>Price</label>
                <input type="number" step="0.01" name="Product_Price" class="form-control"
                       value="{{ old('Product_Price', $product->pro_price) }}" required>
            </div>

            <div class="form-group">
                <label>New Image <small class="text-muted">(optional - leave blank to keep current)</small></label>
                <input type="file" name="image" class="form-control" accept="image/*">
            </div>

            @if($product->pro_image)
                <div class="mb-3">
                    <label>Current Image</label><br>
                    <img src="/w/show/{{ $product->id }}" style="max-height:150px;border-radius:10px;">
                </div>
            @endif

            <button type="submit" class="gold-btn"><i class="fas fa-save mr-2"></i>Save Changes</button>
        </form>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
