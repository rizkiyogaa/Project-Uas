@extends('layouts.main')

@section('title', 'Edit Menu')

@section('content')

<div class="row">
    <div class="col-auto mb-4">
        <a href="{{ route('menu.index') }}" class="btn btn-secondary rounded-pill px-4">
            <i class="fa fa-arrow-left"></i>&nbsp; Back
        </a>
    </div>
    <div class="col-md-12">
        <div class="card">
            <form action="{{ route('menu.update', $menu->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="card-body">
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label">Name <span class="text-danger">*</span></label>
                        <div class="col-lg-9">
                            <input type="text" name="name"
                                class="form-control"
                                value="{{ $menu->name }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label">Description <span
                                class="text-danger">*</span></label>
                        <div class="col-lg-9">
                            <input type="text" name="description"
                                class="form-control"
                                value="{{ $menu->description }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label">Image <span
                                class="text-danger">*</span></label>
                        <div class="col-lg-9">
                            <input class="form-control" type="file" name="image" accept="image/*">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label">Price <span
                                class="text-danger">*</span></label>
                        <div class="col-lg-9">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Rp.</span>
                                </div>
                                <input type="number" name="price" min="0" max="99999999999"
                                class="form-control"
                                value="{{ $menu->price }}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-lg-3">Category <span 
                                class="text-danger">*</span></label>
                    </label>
                        <div class="col-lg-9">
                            <select class="form-control" name="category_id">
                                <option disabled selected>-- Select --</option>
                                @foreach ($categories as $category)
                                <option value="{{ $category->id }}" {{ ($category->id == $menu->category_id ? 'selected' : '')  }} >{{ $category->name }}</option>
                                @endforeach
                            </select>
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
