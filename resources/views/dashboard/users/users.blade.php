@extends('layouts.dashboard')
@section('content')
    <a href="/admin/users/create " class="btn btn-primary">Create user</a>
    <table class="table">
        <thead>
        <tr>

            <th>Image</th>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Created at</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td><img src="/assets/img/users/thumbnails/{{ $user->image }}" alt="{{ $user->name }}" /></td>

                <td>{{$user -> id}}</td>
                <td>
                    {{$user -> name}}
                </td>
                <td>
                    {{$user -> email}}
                </td>
                <td>
                    {{$user -> created_at->diffForHumans()}}
                </td>
                <td><a href="/admin/users/{{$user->id}}/edit" class="btn btn-warning">Edit</a></td>
                <td>
                    <form action="/admin/users/{{$user->id}}" method="post">
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
