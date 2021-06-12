@extends('layouts.main')

@section('title', 'Manage Menu')
@section('content')

<div class="row">
    <div class="col-auto mb-4">
        <a href="{{ route('items.create') }}" class="btn add-btn">
            <i class="fa fa-plus"></i> Add new data
        </a>
    </div>
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <ul class="nav nav-tabs nav-tabs-bottom">
                    <li class="nav-item">
                        <a href="{{ route('items.index') }}"
                            class="nav-link active">
                            All&nbsp;
                            <span class="badge badge-primary">{{ $menusCount }}</span>
                        </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane show active">
                        <div class="table-responsive">
                            <table class="table table-striped custom-table no-footer mb-0 datatable">
                                <thead>
                                    <tr>
                                        <th width="10%">No</th>
                                        <th>Name</th>
                                        <th>Image</th>
                                        <th>Description</th>
                                        <th>Quantity</th>
                                        <th>Price</th>
                                        <th width="10%">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($menus as $menu)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $menu->name }}</td>
                                        <td><img src="{{ url('uploads/'.$menu->imageUrl) }}" width="50%" alt=""></td>
                                        <td>{{ $menu->description }}</td>
                                        <td>{{ $menu->quantity }}</td>
                                        <td>Rp. {{ number_format($menu->price, 2) }}</td>
                                        <td class="text-right">
                                            <div class="dropdown dropdown-action">
                                                <a href="#" data-toggle="dropdown" aria-expanded="false"
                                                    class="action-icon dropdown-toggle">
                                                    <i class="material-icons">more_vert</i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="{{ route('items.edit', $menu->id) }}"
                                                        class="dropdown-item">
                                                        <i class="fa fa-pencil m-r-5"></i> Edit
                                                    </a>
                                                    <form action="{{ route('items.destroy', $menu->id) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" data-hashid="{{ $menu->id }}"
                                                            data-method="delete" class="dropdown-item btn-swal text-danger">
                                                            <i class="fa fa-trash-o m-r-5"></i> Delete
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection