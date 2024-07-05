@extends('layouts.app')

@section('title', 'Profile')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet"
        href="{{ asset('library/summernote/dist/summernote-bs4.css') }}">
    <link rel="stylesheet"
        href="{{ asset('library/bootstrap-social/assets/css/bootstrap.css') }}">
@endpush

@section('main')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Profile</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item">Profile</div>
            </div>
        </div>
        <div class="section-body">


            <div class="row mt-sm-4">

                <div class="col-12 col-md-12 col-lg-12">
                    <form method="post" action="{{ route('company.update') }}"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                    <div class="card">
                            <div class="card-header">
                                <h4>Profile</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="form-group col-md-6 col-12">
                                        <label>Company Name</label>
                                        <input type="text"
                                            class="form-control"
                                            name="name"
                                            value={{ $company->name}}
                                            >

                                    </div>
                                    <div class="form-group col-md-6 col-12">
                                        <label>Phone</label>
                                        <input type="text"
                                            class="form-control"
                                            name="phone"
                                            value={{ $company->phone}}
                                            >

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-12 col-12">
                                        <label>Address</label>
                                        <input type="text" class="form-control" name="address" value="{{ $company->address}}" >
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6 col-12">
                                        <label>Longitude</label>
                                        <input type="text"
                                            class="form-control"
                                            name="longitude"
                                            value={{$company->longitude}}>
                                    </div>
                                    <div class="form-group col-md-6 col-12">
                                        <label>Latitude</label>
                                        <input type="text"
                                            class="form-control"
                                            name="latitude"
                                            value={{$company->latitude}}>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6 col-12">
                                        <label>Time-In</label>
                                        <input type="text"
                                            class="form-control"
                                            name="time_in"

                                            value={{$company->time_in}}>
                                    </div>
                                    <div class="form-group col-md-6 col-12">
                                        <label>Time-Out</label>
                                        <input type="text"
                                            class="form-control"
                                            name="time_out"

                                            value={{$company->time_out}}>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-3 col-12">
                                        <label>Radius Limit (Km)</label>
                                        <input type="text" class="form-control" name="radius_km" value="{{ $company->radius_km}}">
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-right">
                                <input type="submit" class="btn btn-primary" value="Update" >
                            </div>
</form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection

@push('scripts')
    <!-- JS Libraies -->
    <script src="{{ asset('library/summernote/dist/summernote-bs4.js') }}"></script>

    <!-- Page Specific JS File -->
@endpush
