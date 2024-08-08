<!-- resources/views/seller/orders.blade.php -->
@extends('layouts.seller')

@section('title', 'Orders')

@section('content')
    <h2>Orders List</h2>
    <!-- Loop through orders and display them -->
    @foreach ($orders as $order)
        <p>Order #{{ $order->id }} - {{ $order->status }}</p>
    @endforeach
@endsection
