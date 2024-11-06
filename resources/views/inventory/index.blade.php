@extends('layouts.app')

@section('content')
    <h2>Inventory List</h2>
    <a href="{{ route('inventory.create') }}" class="btn btn-primary">Add New Item</a>
    <table>
        <tr>
            <th>Name</th>
            <th>Category</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Actions</th>
        </tr>
        @foreach ($items as $item)
            <tr>
                <td>{{ $item->name }}</td>
                <td>{{ $item->category }}</td>
                <td>{{ $item->quantity }}</td>
                <td>{{ $item->price }}</td>
                <td>
                    <a href="{{ route('inventory.show', $item->id) }}">View</a>
                    <a href="{{ route('inventory.edit', $item->id) }}">Edit</a>
                    <form action="{{ route('inventory.destroy', $item->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
