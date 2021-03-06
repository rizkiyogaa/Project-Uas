@extends('layouts.dashboard')

@section('title', 'Rental Barang')

@section('content')

<div class="row">
    @foreach ($items as $menu)
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
                <form action="{{ route('orders.store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="menu_id" value="{{ $menu->id }}">
                    <button class="btn btn-primary" type="submit">Sewa</button>
                </form>
            </div>
        </div>
    </div>
    @endforeach
</div>

{!! $items->links() !!}
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
