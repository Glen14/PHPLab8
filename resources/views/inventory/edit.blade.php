@extends('layouts.app')

@section('content')
    <h2>Edit Inventory Item</h2>
    <form action="{{ route('inventory.update', $inventory->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Name:</label>
        <input type="text" name="name" value="{{ $inventory->name }}" required>
        <label>Category:</label>
        <input type="text" name="category" value="{{ $inventory->category }}" required>
        <label>Quantity:</label>
        <input type="number" name="quantity" value="{{ $inventory->quantity }}" required>
        <label>Price:</label>
        <input type="text" name="price" value="{{ $inventory->price }}" required>
        <button type="submit">Update Item</button>
    </form>
@endsection
