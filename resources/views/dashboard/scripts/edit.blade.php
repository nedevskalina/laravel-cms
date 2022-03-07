@extends('layouts.dashboard')
@section('content')

    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card z-index-0 fadeIn3 fadeInBottom">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                            <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Add Script</h4>
                            <div class="row mt-3">

                            </div>
                        </div>
                    </div>
                    <div class="card-body">


                        <form role="form" class="text-start" method="post" action="/admin/scripts" enctype="multipart/form-data">
                            @csrf

                            <div class="input-group input-group-outline my-3 ">
                                <label class="form-label">Name</label>
                                <input type="text" class="form-control" value="{{$script->name}}" name="name"  @error('name') is-invalid @enderror>
                            </div>

                            <div class="input-group input-group-outline my-3 ">
                                <label class="form-check-label">Status</label>
                                <div class="row">
                                    <div class="col-md-3">
                                    <input type="checkbox" class="status" data-id="{{ $script->id }}" name="active"  @if($script->active == '1') checked @endif data-toggle="toggle" data-on="Enabled" data-off="Disabled">
                                </div>
                                </div>

                            </div>

                            <div class="input-group input-group-outline mb-3 ">
                                <label class="form-label">Script</label>
                                <textarea id="editor1" type="text" class="form-control" name="script_code">{{$script->script_code}}</textarea>
                            </div>


                            <div class="text-center">
                                <button type="submit" class="btn bg-gradient-primary w-100 my-4 mb-2">Add</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('scripts')
    <script>
        // Replace the <textarea id="editor1"> with a CKEditor 4
        // instance, using default configuration.
        CKEDITOR.replace( 'editor1' );
    </script>
@endsection


