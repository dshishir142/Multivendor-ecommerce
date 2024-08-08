@extends('layouts.admin')

@section('title', 'Seller Management')

@section('content')
    <div class="container mt-5">
        <h2>Seller Management</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>PAN No</th>
                    <th>Phone Number</th>
                    <th>Shop Address</th>
                    <th>Citizenship Photo</th>
                    <th>Shop Photo</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($sellerToApprove as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ optional($item->toApprove)->pan_no }}</td>
                        <td>{{ optional($item->toApprove)->phone_number }}</td>
                        <td>{{ optional($item->toApprove)->shop_address }}</td>
                        <td>
                            <img src="{{ url('uploads/demo/seller_info/' . optional($item->toApprove)->citizenship_photo) }}" alt="Citizenship Photo" width="100" class="photo" data-bs-toggle="modal" data-bs-target="#imageModal">
                        </td>
                        <td>
                            <img src="{{ url('uploads/demo/seller_info/' . optional($item->toApprove)->shop_photo) }}" alt="Shop Photo" width="100" class="photo" data-bs-toggle="modal" data-bs-target="#imageModal">
                        </td>
                        <td>
                            <form action="{{ route('admin.approveSeller', $item->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                <button type="submit" class="btn btn-success">Approve</button>
                            </form>
                            <form action="{{ route('admin.deleteSeller', $item->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

 <!-- Modal for Enlarged Image -->
<div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="imageModalLabel">Image Preview</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <img src="" id="modalImage" class="img-fluid" alt="Enlarged Image">
            </div>
        </div>
    </div>
</div>

    @push('image-script')
        <script src="{{asset('js/image.js')}}"></script>
    @endpush
@endsection