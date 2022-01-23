@extends('layouts.index')

@section('content')
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-3">

            </div>

            <div class="col-md-6">
                <a href="{{ route('crud.index') }}"><i class="fas fa-backward fa-lg"></i></a>
                <h2 style="color: rgb(25, 160, 25)"> <strong> <u>Edit Product Information:</u> </strong> </h2>

                <form action="{{ route('product.update', $editProduct->id) }}" method="POST" enctype="multipart/form-data">
                    @method('put')
                    @csrf
                    <div class="mb-3">
                        <label for="ProductTitle" class="form-label mt-2"><strong>Title:</strong></label>
                        <input value="{{ $editProduct->title }}" type="text" class="form-control" id="ProductTitle"
                            name="ProductTitle">
                    </div>

                    <div class="mb-3">
                        <label for="ProductPrice" class="form-label"><strong>Price:</strong></label>
                        <input value="{{ $editProduct->price }}" type="number" class="form-control" id="ProductPrice"
                            name="ProductPrice">
                    </div>

                    <div class="mb-3">
                        <label for="ProductStock" class="form-label"><strong>Stock:</strong></label>
                        <input value="{{ $editProduct->stock }}" type="number" class="form-control" id="ProductStock"
                            name="ProductStock">
                    </div>

                    <div class="mb-3">
                        <label for="ProductColor" class="form-label"><strong>Color:</strong></label>
                        <input value="{{ $editProduct->color }}" type="text" class="form-control" id="ProductColor"
                            name="ProductColor">
                    </div>

                    <div class="mb-3">
                        <label for="ProductDescription" class="form-label"><strong>Description:</strong></label>
                        <textarea name="ProductDescription" class="form-control"
                            id="ProductDescription">{{ $editProduct->description }}</textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>

            <div class="col-md-3">

            </div>

        </div>

    </div>

@endsection
