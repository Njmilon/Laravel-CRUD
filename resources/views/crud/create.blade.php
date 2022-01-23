@extends('layouts.index')

@section('content')

    {{-- For Formatting code in Blade => Shift+Alt+F --}}

    <div class="container">

        <a href="{{ route('product.create') }}"><button type="button" class="btn btn-primary my-2 mt-4">Create New
                Product</button></a>

        {{-- Displaying success message --}}
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif

        <h2><strong> Product Lists:</strong></h2>

        <table class="table border">
            <thead>
                <tr>
                    <th scope="col">Sl</th>
                    <th scope="col">Title</th>
                    <th scope="col">Price</th>
                    <th scope="col">Stock</th>
                    <th scope="col">Color</th>
                    <th scope="col">Description</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $key => $product)
                    <tr>
                        <th scope="row">{{ $key + 1 }}</th>
                        <td>{{ $product->title }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->stock }}</td>
                        <td>{{ $product->color }}</td>
                        <td>{{ $product->description }}</td>
                        <td>
                            <a href="{{ route('product.edit', $product->id) }}"><i style="color: rgb(68, 0, 255)"
                                    class="fas fa-edit fa-lg"></i></a>
                            <a href="{{ route('product.destroy', $product->id) }}"><i style="color: rgb(255, 0, 0)"
                                    onclick="return confirm('Are you sure you want to delete this item?');"
                                    class="fas fa-trash fa-lg"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{-- For Pagination --}}
        {{ $products->links('pagination::bootstrap-4') }}
    </div>

@endsection
