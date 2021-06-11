@extends('layouts.main')

@section('title', 'Manage Category')
@section('content')

<div class="row">
    <div class="col-auto mb-4">
        <a href="{{ route('category.create') }}" class="btn add-btn">
            <i class="fa fa-plus"></i> Add new data
        </a>
    </div>
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <ul class="nav nav-tabs nav-tabs-bottom">
                    <li class="nav-item">
                        <a href="{{ route('category.index') }}"
                            class="nav-link">
                            All&nbsp;
                            <span class="badge badge-primary">{{ $categoriesCount }}</span>
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
                                        <th width="10%">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($categories as $category)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $category->name }}</td>
                                        <td class="text-right">
                                            <div class="dropdown dropdown-action">
                                                <a href="#" data-toggle="dropdown" aria-expanded="false"
                                                    class="action-icon dropdown-toggle">
                                                    <i class="material-icons">more_vert</i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="{{ route('category.edit', $category->id) }}"
                                                        class="dropdown-item">
                                                        <i class="fa fa-pencil m-r-5"></i> Edit
                                                    </a>
                                                    <form action="{{ route('category.destroy', $category->id) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" data-hashid="{{ $category->id }}"
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