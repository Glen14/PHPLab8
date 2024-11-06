@extends('layouts.app')

@section('content')
    <h2>Add New Inventory Item</h2>
    <form action="{{ route('inventory.store') }}" method="POST">
        @csrf
        <label>Name:</label>
        <input type="text" name="name" required>
        <label>Category:</label>
        <input type="text" name="category" required>
        <label>Quantity:</label>
        <input type="number" name="quantity" required>
        <label>Price:</label>
        <input type="text" name="price" required>
        <button type="submit">Add Item</button>
    </form>
@endsection
