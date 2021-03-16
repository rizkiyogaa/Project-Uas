@extends('layouts.main')

@section('title', 'Add Employee')
@section('content')

    <div class="row">
        <div class="col-auto mb-4">
            <a href="{{ route('employee.index') }}" class="btn btn-secondary rounded-pill px-4">
                <i class="fa fa-arrow-left"></i>&nbsp; Back
            </a>
        </div>
        <div class="col-md-12">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title mb-0">Basic Data</h4>
                    </div>
                    <div class="card-body">
                        <form action="#">
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">NIP</label>
                                <div class="col-lg-10">
                                    <div class="input-group">
                                        <input type="number" class="form-control" placeholder="NIP" name="nip">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Name</label>
                                <div class="col-lg-10">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Name" name="name">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Email</label>
                                <div class="col-lg-10">
                                    <div class="input-group">
                                        <input type="email" class="form-control" placeholder="Email" name="email">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Gender</label>
                                <div class="col-md-10">
                                    <div class="form-radio-inline">
                                        <label>
                                            <input type="radio" name="radio" checked> Male
                                        </label>
                                        <label>
                                            <input type="radio" name="radio"> Female
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Place of Birth</label>
                                <div class="col-lg-10">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Place Of Birth"
                                            name="place_of_birth">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title mb-0">Employee Families</h4>
                    </div>
                    <div class="card-body">
                        <form action="#">
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Input Group Large</label>
                                <div class="col-lg-10">
                                    <div class="input-group input-group-lg">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="sizing-addon1">@</span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Username"
                                            aria-describedby="sizing-addon1">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Input Group Default</label>
                                <div class="col-lg-10">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="sizing-addon2">@</span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Username"
                                            aria-describedby="sizing-addon2">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <label class="col-form-label col-lg-2">Input Group Small</label>
                                <div class="col-lg-10">
                                    <div class="input-group input-group-sm">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="sizing-addon3">@</span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Username"
                                            aria-describedby="sizing-addon3">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title mb-0">Employee Document</h4>
                    </div>
                    <div class="card-body">
                        <form action="#">
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Checkbox</label>
                                <div class="col-lg-10">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <input type="checkbox">
                                            </span>
                                        </div>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <label class="col-form-label col-lg-2">Radio</label>
                                <div class="col-lg-10">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <input type="radio">
                                            </span>
                                        </div>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title mb-0">Multiple Addons</h4>
                    </div>
                    <div class="card-body">
                        <form action="#">
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Radio and Text Addons</label>
                                <div class="col-lg-10">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <input type="checkbox">
                                            </span>
                                        </div>
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">$</span>
                                        </div>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <label class="col-form-label col-lg-2">Two Addons</label>
                                <div class="col-lg-10">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">$</span>
                                        </div>
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">0.00</span>
                                        </div>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card mb-0">
                    <div class="card-header">
                        <h4 class="card-title mb-0">Buttons with dropdowns</h4>
                    </div>
                    <div class="card-body">
                        <form action="#">
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Radio and Text Addons</label>
                                <div class="col-lg-10">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <button type="button" class="btn btn-white dropdown-toggle"
                                                data-toggle="dropdown">Action</button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                                <div role="separator" class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Separated link</a>
                                            </div>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Left dropdown">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <label class="col-form-label col-lg-2">Two Addons</label>
                                <div class="col-lg-10">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Right dropdown">
                                        <div class="input-group-append">
                                            <button type="button" class="btn btn-white dropdown-toggle"
                                                data-toggle="dropdown">Action</button>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                                <div role="separator" class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Separated link</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
