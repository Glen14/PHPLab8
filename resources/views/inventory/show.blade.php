@extends('layouts.app')

@section('content')
    <h2>Inventory Item Details</h2>
    <p><strong>Name:</strong> {{ $inventory->name }}</p>
    <p><strong>Category:</strong> {{ $inventory->category }}</p>
    <p><strong>Quantity:</strong> {{ $inventory->quantity }}</p>
    <p><strong>Price:</strong> {{ $inventory->price }}</p>
    <a href="{{ route('inventory.index') }}">Back to List</a>
@endsection
