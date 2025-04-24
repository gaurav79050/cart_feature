@extends('layout/user/main')
@section('content')
<div class="container">
    <h3>Cart Details</h3>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Product Title</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total Price</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $key =>  $value)
            <tr>
                <td>{{ $value['name'] }}</td>
                <td>{{ $value['price']}}</td>
                <td>{{ $value['quantity'] }}</td>
                <td>{{ $value['quantity'] * $value['price'] }}</td>
              
            </tr>

            @endforeach
        </tbody>
    </table>
</div>


@endsection