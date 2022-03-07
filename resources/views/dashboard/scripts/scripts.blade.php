@extends('layouts.dashboard')
@section('content')

    <a href="/admin/scripts/create " class="btn btn-primary">Create script</a>
    <table class="table">
        <thead>
        <tr>

            <th>Name</th>
            <th>Script</th>
            <th>Status</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        </thead>
        <tbody>
        @foreach($scripts as $script)
            <tr>
                <th>{{$script->name}}</th>
                <th>{{$script->script_code}}</th>
                <th>
                        <input type="checkbox" class="status" data-id={{ $script->id }} name="active"  @if($script->active == '1') checked @endif data-toggle="toggle" data-on="Enabled" data-off="Disabled">
                </th>


                <td><a href="/admin/scripts/{{$script->id}}/edit" class="btn btn-warning">Edit</a></td>
                <td>
                    <form action="/admin/scripts/{{$script->id}}" method="post">
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

@section('scripts')
    <script>
        $(function() {
            $('.status').change(function() {
                let id = $(this).data('id');
               let sendData = {active: $(this).prop('checked'), id:  id};
               console.log(sendData);

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    method: 'post',
                    url: '/admin/scripts/' +  id + '/active',
                    data: sendData,
                    success: function(data) {
                       console.log(data)
                    },
                    error: function(e) {
                       console.log(e);
                    }
                });
            })
        })
    </script>
@endsection
