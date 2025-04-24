@extends('layout/user/main')

@section('content')

<div class="container">
    <h3>My Details</h3>

    <table class="table table-striped">
        <thead>
            <tr>
                
                <th>Name</th>
                <th>Email</th>
                <th>Mobile</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{$user->fname}} {{$user->lname}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->mobile}}</td>

            </tr>

        </tbody>
    </table>
</div>
@endsection