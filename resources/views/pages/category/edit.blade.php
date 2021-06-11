@extends('layouts.main')

@section('title', 'Edit Category')

@section('content')

<div class="row">
    <div class="col-auto mb-4">
        <a href="{{ route('category.index') }}" class="btn btn-secondary rounded-pill px-4">
            <i class="fa fa-arrow-left"></i>&nbsp; Back
        </a>
    </div>
    <div class="col-md-12">
        <div class="card">
            <form action="{{ route('category.update', $category->id) }}" method="post">
                @csrf
                @method('put')
                <div class="card-body">
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label">Name <span class="text-danger">*</span></label>
                        <div class="col-lg-9">
                            <input type="text" name="name"
                                class="form-control"
                                value="{{ $category->name }}">
                            <div class="invalid-feedback"></div>
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
