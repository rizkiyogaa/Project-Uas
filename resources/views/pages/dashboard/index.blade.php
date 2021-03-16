@extends('layouts.dashboard')

@section('title', 'Menu')

@section('content')

<div class="row">
    @foreach ($menus as $menu)
    <div class="col-12 col-md-6 col-lg-4 d-flex">
        <div class="card flex-fill">
            <img alt="" src="{{ url('uploads/'.$menu->imageUrl) }}" class="card-img-top">
            <div class="card-header">
                <h5 class="card-title mb-0">{{ $menu->name }}</h5>
            </div>
            <div class="card-body">
                <p class="card-text">{{ $menu->description }}</p>
                <strong>Price: Rp.{{ number_format($menu->price, 2) }}</strong>
            </div>
            <div class="card-footer text-muted">
                <a class="btn btn-primary" href="#">Order</a>
            </div>
        </div>
    </div>
    @endforeach
</div>

{!! $menus->links() !!}
{{-- <div class="row">
    <div class="col-12 col-md-6 col-lg-4 d-flex">
        <div>
            <ul class="pagination pagination-sm">
                <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1">Previous</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item active">
                    <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                </li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                </li>
            </ul>
        </div>
    </div>
</div> --}}
@endsection
