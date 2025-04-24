@extends('layout/admin/main')

@section('content')
<div class="container">
    <h3>Product Details</h3>
    @if(session('error'))
    <div style="color: green">{{ session('error') }}</div>
    @endif
    @if(session('success'))
    <div style="color: green">{{ session('success') }}</div>
    @endif
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Product Title</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Posting Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->product_title }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->quantity }}</td>               
                <td> {{$product->created_at}} </td>
                <td>
                    <a href="{{ route('editproduct', ['id' => $product->id]) }}" class="btn btn-warning"> Edit</a>
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal-{{ $product->id }}">Delete</button>
                </td>
                </td>
            </tr>


            <!-- // product modal  -->
            <div class="modal fade" id="deleteModal-{{ $product->id }}" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="deleteModalLabel">Confirm Deletion</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Are you sure you want to delete this product?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            <a href="{{ route('deleteproduct', ['id' => $product->id]) }}" class="btn btn-danger">Delete</a>
                        </div>
                    </div>
                </div>
            </div>

            @endforeach
        </tbody>
    </table>
    <p>Showing {{ $products->firstItem() }} to {{ $products->lastItem() }} of {{ $products->total() }} results</p>
    <div class="d-flex justify-content-end">
        
        <ul class="pagination">
            @if ($products->onFirstPage())
                <li class="page-item disabled">
                    <span class="page-link">Previous</span>
                </li>
            @else
                <li class="page-item">
                    <a href="{{ $products->previousPageUrl() }}" class="page-link" rel="prev">Previous</a>
                </li>
            @endif

            @if ($products->hasMorePages())
                <li class="page-item">
                    <a href="{{ $products->nextPageUrl() }}" class="page-link" rel="next">Next</a>
                </li>
            @else
                <li class="page-item disabled">
                    <span class="page-link">Next</span>
                </li>
            @endif
        </ul>
    </div>
</div>


@endsection