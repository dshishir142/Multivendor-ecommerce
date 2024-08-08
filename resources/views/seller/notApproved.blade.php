@extends('layouts.seller')

@section('title', 'Account Not Approved')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">
                    <h4>Account Not Approved</h4>
                </div>
                <div class="card-body text-center">
                    <p>Your seller account has not been approved by the admin yet. Please wait for approval.</p>
                    <p>If you have any questions, please contact support.</p>
                </div>
                <div class="card-footer text-center">
                    <a href="{{ route('home') }}" class="btn btn-primary">Return to Home</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
