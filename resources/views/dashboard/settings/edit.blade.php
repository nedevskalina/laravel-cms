@extends('layouts.dashboard')
@section('content')

    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card z-index-0 fadeIn3 fadeInBottom">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                            <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Settings</h4>
                            <div class="row mt-3">

                            </div>
                        </div>
                    </div>
                    <div class="card-body">

                        <form role="form" class="text-start" method="post" action="/admin/settings/{{$setting->id}}" enctype="multipart/form-data">
                            @csrf
                            @method('put')

                            <div class="input-group input-group-outline my-3 ">
                                <label class="form-label">Logo</label>
                                <input type="file" class="form-control" name="logo" value="{{$setting->logo}}">
                            </div>


                            <div class="input-group input-group-outline my-3 ">
                                <label class="form-label">Email</label>
                                <input type="email" class="form-control" name="email" value="{{$setting->email}}">
                            </div>

                            <div class="input-group input-group-outline mb-3 ">
                                <label class="form-label">Title</label>
                                <input type="text" class="form-control" name="title" value="{{$setting->title}}" >
                            </div>

                            <div class="input-group input-group-outline mb-3 ">
                                <label class="form-label">Address</label>
                                <input type="text" class="form-control" name="address" value="{{$setting->address}}" >
                            </div>

                            <div class="input-group input-group-outline mb-3 ">
                                <label class="form-label">Phone</label>
                                <input type="text" class="form-control" name="phone" value="{{$setting->phone}}">
                            </div>


                            <div class="input-group input-group-outline mb-3 ">
                                <label class="form-label">Description</label>
                                <textarea name="description" id="editor1" type="text" class="form-control">{{$setting->description}}</textarea>
                            </div>

                            <div class="input-group input-group-outline mb-3 ">
                                <label class="form-label">URL</label>
                                <input type="text" class="form-control" name="mainurl" value="{{$setting->mainurl}}">
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
