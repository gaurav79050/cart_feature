@extends('layout/user/main')

@section('content')
<style>
    .quantity-selector {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        width: 150px;
    }

    .quantity-selector button {
        background-color: #f0f0f0;
        border: 1px solid #ccc;
        font-size: 18px;
        padding: 8px 12px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .quantity-selector button:hover {
        background-color: #e1e1e1;
    }

    .quantity-input {
        width: 40px;
        text-align: center;
        font-size: 16px;
        padding: 5px;
        border: 1px solid #ccc;
        background-color: #fff;
    }

    .quantity-input:disabled {
        background-color: #f9f9f9;
        color: #ccc;
    }

    .add-to-cart-btn {
        background-color: #ff9900;
        color: white;
        font-size: 16px;
        padding: 10px 20px;
        border: none;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .add-to-cart-btn:hover {
        background-color: #e68900;
    }
</style>

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
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->product_title }}</td>
                <td>{{ $product->price }}</td>
                <td class="product-action" data-id="{{ $product->id }}" data-available="{{ $product->quantity }}">
                    <div class="quantity-selector">
                        <button class="decrease-btn">-</button>
                        <input type="text" class="quantity-input" value="1" readonly />
                        <button class="increase-btn">+</button>
                    </div>
                </td>
                <td>
                    <button type="button" class="btn btn-warning add-to-cart-btn"
                        data-id="{{ $product->id }}">
                        Add To Cart
                    </button>
                </td>
            </tr>

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


<script>
    $(document).ready(function() {
        $('.increase-btn').click(function() {
            let parent = $(this).closest('.product-action');
            let input = parent.find('.quantity-input');
            let available = parseInt(parent.data('available'));
            let current = parseInt(input.val());

            if (current < available) {
                input.val(current + 1);
            } else {
                alert("Maximum quantity reached!");
            }
        });

        $('.decrease-btn').click(function() {
            let input = $(this).closest('.product-action').find('.quantity-input');
            let current = parseInt(input.val());
            if (current > 1) {
                input.val(current - 1);
            }
        });

        $('.add-to-cart-btn').click(function() {
            let productId = $(this).data('id');
            let row = $(this).closest('tr');
            let quantityInput = row.find('.product-action .quantity-input');
            let quantity = parseInt(quantityInput.val());
            let productAction = row.find('.product-action');
            let available = parseInt(productAction.data('available'));
            $.ajax({
                url: '{{ route("add-to-cart") }}',
                method: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    product_id: productId,
                    quantity: quantity
                },
                success: function(response) {
                    alert(response.message);
                    $('#cart-count').text(response.cart_count);
                    let remaining = available - quantity;
                    productAction.attr('data-available', remaining);
                    productAction.data('available', remaining);
                    quantityInput.val(1);
                },
                error: function(xhr) {
                    alert(xhr.responseJSON.error || "Something went wrong.");
                }
            });
        });
    });
</script>
@endsection