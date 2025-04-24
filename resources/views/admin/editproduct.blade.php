@extends('layout/admin/main')

@section('content')
<div class="col-sm-12">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">Edit Product Details</div>
            @if(session('success'))
            <div style="color: green">{{ session('success') }}</div>
            @endif
            <div class="card-body">
                @foreach($products as $product)
                <form id="productUploadForm" action="{{ url('admin/editproduct') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <input type="hidden" class="form-control" name="product_id" id="product_id" value=" {{$product->id}} " placeholder="Enter product title">

                    <div class="mb-3">
                        <label for="product_title" class="form-label">product Title <span style="color: red;">*</span></label>
                        <input type="text" class="form-control" name="product_title" id="product_title" value="{{ old('product_title', $product->product_title) }}" placeholder="Enter product title">
                        @error('product_title')
                        <div style="color: red;">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="price" class="form-label">price <span style="color: red;">*</span></label>
                        <input type="text" class="form-control" name="price" id="price" value="{{ old('price', $product->price) }}" placeholder="Enter price">
                        @error('price')
                        <div style="color: red;">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="quantity" class="form-label">quantity <span style="color: red;">*</span></label>
                        <input type="text" class="form-control" name="quantity" id="quantity" value="{{ old('quantity', $product->quantity) }}" placeholder="Enter quantity">
                        @error('quantity')
                        <div style="color: red;">{{ $message }}</div>
                        @enderror
                    </div>


                    <button type="submit" class="btn btn-primary">Submit</button>

                </form>
                @endforeach
            </div>
        </div>
    </div>
</div>


@endsection