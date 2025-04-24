@extends('layout/admin/main')

@section('content')
<div class="col-sm-12">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">Upload Product Details</div>
            @if(session('success'))
            <div style="color: green">{{ session('success') }}</div>
            @endif
            <div class="card-body">
                <form id="productUploadForm" action="{{ route('productupload') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="product_title" class="form-label">Product Title <span style="color: red;">*</span></label>
                        <input type="text" class="form-control" name="product_title" id="product_title" value="{{ old('product_title') }}" placeholder="Enter product title">
                        @error('product_title')
                        <div style="color: red;">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="price" class="form-label">Price <span style="color: red;">*</span></label>
                        <input type="number" class="form-control" name="price" id="price" value="{{ old('price') }}" placeholder="Enter price">
                        @error('price')
                        <div style="color: red;">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="Quantity" class="form-label">Quantity <span style="color: red;">*</span></label>
                        <input type="number" class="form-control" name="quantity" id="quantity" value="{{ old('quantity') }}" placeholder="Enter Quantity">
                        @error('quantity')
                        <div style="color: red;">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>

                </form>
            </div>
        </div>
    </div>
</div>


@endsection