<!-- resources/views/admin/category.blade.php -->
@extends('layouts.admin')

@section('title', 'Category Management')

@section('content')
    <h2>Category List</h2>
    @foreach ($categories as $category)
        <p>{{ $category->name }}</p>
    @endforeach

    <hr>

    <h2>Add New Category</h2>
    <form action="{{ route('admin.category.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Category Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <button type="submit" class="btn btn-primary">Add Category</button>
    </form>
@endsection
