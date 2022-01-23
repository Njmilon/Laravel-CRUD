@extends('layouts.index')

@section('content')
    <div class="container mt-4">
        <div class="row">
            {{-- Bootstrap Grid:1 --}}
            <div class="col-md-3">

            </div>

            {{-- Bootstrap Grid:2 --}}
            <div class="col-md-6">

                <a href="{{ route('crud.index') }}"><i class="fas fa-backward fa-lg"></i></a>

                <h2 style="color: rgb(25, 160, 25)"> <strong> <u>Enter Product Information:</u> </strong> </h2>

                <form action="{{ route('product.store') }}" method="POST">

                    @csrf

                    {{-- //__for desplaying custom serverside error message__//
                        class="form-control @error('ProductTitle') is-invalid @enderror"
                        @error('ProductTitle')
                                <div class="text-danger">{{ $message }}</div>
                        @enderror --}}


                    <div class="mb-3">
                        <label for="ProductTitle" class="form-label mt-2"><strong>Title:</strong></label>
                        <input required value="{{ old('ProductTitle') }}" type="text" class="form-control @error('ProductTitle') is-invalid @enderror" id="ProductTitle" name="ProductTitle">
                        @error('ProductTitle')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="ProductPrice" class="form-label"><strong>Price:</strong></label>
                        <input required value="{{ old('ProductPrice') }}" type="number" class="form-control @error('ProductPrice') is-invalid @enderror" id="ProductPrice" name="ProductPrice">
                        @error('ProductPrice')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="ProductStock" class="form-label"><strong>Stock:</strong></label>
                        <input required value="{{ old('ProductStock') }}" type="number" class="form-control @error('ProductStock') is-invalid @enderror" id="ProductStock" name="ProductStock">
                        @error('ProductStock')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="ProductColor" class="form-label"><strong>Color:</strong></label>
                        <input required value="{{ old('ProductColor') }}" type="text" class="form-control @error('ProductColor') is-invalid @enderror" id="ProductColor" name="ProductColor">
                        @error('ProductColor')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="ProductDescription" class="form-label"><strong>Description:</strong></label>
                        <textarea required name="ProductDescription" class="form-control @error('ProductDescription') is-invalid @enderror" id="ProductDescription">{{ old('ProductDescription') }}</textarea>
                        @error('ProductDescription')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>

            {{-- Bootstrap Grid:3 --}}
            <div class="col-md-3">

            </div>

        </div>

    </div>

@endsection
