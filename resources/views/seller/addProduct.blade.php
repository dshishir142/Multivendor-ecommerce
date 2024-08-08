<!-- resources/views/seller/addProduct.blade.php -->
@extends('layouts.seller')

@section('title', 'Add Product')

@section('content')
    <h2>Add New Product</h2>
    <form action="{{ route('seller.storeProduct') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Product Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Product Description</label>
            <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" class="form-control" id="price" name="price" required>
        </div>
        <div class="mb-3">
            <label for="product_image" class="form-label">Product Image</label>
            <input type="file" class="form-control" id="product_image" name="product_image" required>
        </div>
        <button type="submit" class="btn btn-primary">Add Product</button>
    </form>
@endsection
