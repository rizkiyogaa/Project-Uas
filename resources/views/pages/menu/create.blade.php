@extends('layouts.main')

@section('title', 'Add Religion')
@section('content')

<div class="row">
    <div class="col-auto mb-4">
        <a href="{{ route('menu.index') }}" class="btn btn-secondary rounded-pill px-4">
            <i class="fa fa-arrow-left"></i>&nbsp; Back
        </a>
    </div>
    <div class="col-md-12">
        <div class="card">
            <form action="{{ route('menu.store') }}" method="post">
                @csrf
                <div class="card-body">
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label">Name <span class="text-danger">*</span></label>
                        <div class="col-lg-9">
                            <input type="text" name="name_en"
                                class="form-control
                                value="{{ old('name_en') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label">Description <span
                                class="text-danger">*</span></label>
                        <div class="col-lg-9">
                            <input type="text" name="name_id"
                                class="form-control
                                value="{{ old('name_id') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label">Price <span
                                class="text-danger">*</span></label>
                        <div class="col-lg-9">
                            <input type="text" name="name_id"
                                class="form-control
                                value="{{ old('name_id') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label">Description <span
                                class="text-danger">*</span></label>
                        <div class="col-lg-9">
                            <input type="text" name="name_id"
                                class="form-control
                                value="{{ old('name_id') }}">
                        </div>
                    </div>
                </div>
                <div class="card-footer text-right">
                    <span class="text-muted float-left">
                        <strong class="text-danger">*</strong> Data wajib diisi.
                    </span>
                    <button class="btn btn-primary">Save Data</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
