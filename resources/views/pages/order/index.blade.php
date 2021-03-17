@extends('layouts.dashboard')

@section('title', 'My Order')

@section('content')

<div class="row">
    <div class="col-12">
        <div class="table-responsive">
            <table class="table table-striped mb-0">
                <thead>
                    <tr>
                        <th width="10%">No</th>
                        <th>Name</th>
                        <th>Image</th>
                        <th>Description</th>
                        <th>Category</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total Price</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $totalAmount = 0;
                    @endphp
                    @foreach ($orders as $order)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $order->menu->name }}</td>
                        <td><img src="{{ url('uploads/'.$order->menu->imageUrl) }}" width="50%" alt=""></td>
                        <td>{{ $order->menu->description }}</td>
                        <td>{{ $order->menu->category->name ?? '' }}</td>
                        <td>Rp. {{ number_format($order->menu->price, 2) }}</td>
                        <td>{{ $order->quantity }}</td>
                        <td>Rp. {{ number_format(($order->quantity ?? 1) * $order->menu->price, 2) }}</td>
                    </tr>
                    @php
                        $totalAmount += ($order->quantity ?? 1) * $order->menu->price;
                    @endphp
                    @endforeach
                </tbody>
            </table>
        </div>
        <h4 class="pull-right">Total Amount: Rp. {{ number_format($totalAmount, 2) }}</h4>
    </div>
</div>
@endsection
