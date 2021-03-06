@extends('layouts.dashboard')
@section('content')


    <div class="row">
        <div class="col-md-4">

            <section>

                <a href="/admin/settings/{{ $setting->id }}/edit" class="btn btn-primary">Edit Settings</a>
            </section>

        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
    <section>

                <div class="card">
                    <div class="card-header bg-white text-center py-3">
                        <h5 class="mb-0 fw-bold">Email</h5>
                    </div>

                    <div class="card-body">
                        {{ $setting->email }}

                    </div>

                    <div class="card-footer bg-white d-flex justify-content-between py-3">

                    </div>
                </div>
            </section>

        </div>



        <div class="col-md-4">

            <section>

                <div class="card">
                    <div class="card-header bg-white text-center py-3">
                        <h5 class="mb-0 fw-bold">Title</h5>
                    </div>
                    <div class="card-body">

                        {{$setting->title}}

                    </div>

                    <div class="card-footer bg-white d-flex justify-content-between py-3">

                    </div>
                </div>
            </section>
        </div>


        <div class="col-md-4">

            <section>


                <div class="card">
                    <div class="card-header bg-white text-center py-3">
                        <h5 class="mb-0 fw-bold">Logo</h5>
                    </div>

                    <div class="card-body">

                        <img src="/assets/img/settings/thumbnails/{{ $setting->logo }}" alt="{{ $setting->name }}" />                    </div>

                    <div class="card-footer bg-white d-flex justify-content-between py-3">

                    </div>
                </div>
            </section>
        </div>
    </div>


<br>

        <div class="row">

        <div class="col-md-4">

            <section>

                <div class="card">
                    <div class="card-header bg-white text-center py-3">
                        <h5 class="mb-0 fw-bold">Description</h5>
                    </div>

                    <div class="card-body">
                        {{$setting->description}}
                    </div>

                    <div class="card-footer bg-white d-flex justify-content-between py-3">

                    </div>
                </div>
            </section>
        </div>


        <div class="col-md-4">

            <section>


                <div class="card">
                    <div class="card-header bg-white text-center py-3">
                        <h5 class="mb-0 fw-bold">Address</h5>
                    </div>

                    <div class="card-body">
                        {{$setting->address}}
                    </div>

                    <div class="card-footer bg-white d-flex justify-content-between py-3">

                    </div>
                </div>
            </section>

        </div>

            <div class="col-md-4">

                <section>


                    <div class="card">
                        <div class="card-header bg-white text-center py-3">
                            <h5 class="mb-0 fw-bold">Phone</h5>
                        </div>

                        <div class="card-body">
                            {{$setting->phone}}
                        </div>

                        <div class="card-footer bg-white d-flex justify-content-between py-3">

                        </div>
                    </div>
                </section>
            </div>
        </div>

<br>


    <div class="row">

        <div class="col-md-12">

            <section>

                <div class="card">
                    <div class="card-header bg-white text-center py-3">
                        <h5 class="mb-0 fw-bold">Maps</h5>
                    </div>

                    <div class="card-body">

                    </div>

                    <div class="card-footer bg-white d-flex justify-content-between py-3">

                    </div>
                </div>
            </section>
        </div>
    </div>









@endsection
