@extends('layouts.dashboard')
@section('content')

    <a href="/admin/products/create " class="btn btn-primary">Create product</a>
    <table class="table">
        <thead>
        <tr>

            <th>Image</th>
            <th>ID</th>
            <th>Name</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Description</th>
            <th>Category</th>
            <th>User</th>
            <th>Edit</th>
            <th>Delete</th>

        </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
            <tr>
                <td><img src="/assets/img/products/thumbnails/{{ $product->image }}" alt="{{ $product->name }}"/></td>

                <td>{{$product -> id}}</td>
                <td>
                    {{$product-> name}}
                </td>
                <td>
                    {{$product -> price}}
                </td>
                <td>
                    {{$product -> quantity}}
                </td>
                <td>
                    {{$product -> description}}
                </td>
                <td>
                    {{$product -> cat_id}}
                </td>
                <td>
                    {{$product -> user_id}}
                </td>

                <td><a href="/admin/products/{{$product->id}}/edit" class="btn btn-warning">Edit</a></td>
                <td>
                    <form action="/admin/products/{{$product->id}}" method="post">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>


@endsection
