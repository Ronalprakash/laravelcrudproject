          @extends('layouts.app')

          @section('main')

            <h5><i class="bi bi-plus-square-fill" ></i>Add new product</h5>
        </div>
        <hr>
        <nav class="my-3">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">home</a></li>
                <li class="breadcrumb-item active">Add new Product</li>
            </ol>
        </nav>
        <div class="col-md-8">
            <form action="/products/store" enctype="multipart/form-data" method="POST">
                @csrf
                <div class="row mb-3">
                    <div class="col-md-12">
                        <label for="name" class="form-label">name</label>
                        <input type="text" name="name" id="name" class="form-control
                         @if($errors->has('name')) {{ 'is-invalid' }} @endif "
                          placeholder="Enter a Product name" value="{{ old('name') }}">
                          @if($errors->has('name'))
                          <div class="invalid-feedback">{{ $errors->first('name') }}</div>
                          @endif
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="mrp" class="form-label">M.R.P</label>
                        <input type="text" name="mrp" id="mrp" class="form-control
                         @if($errors->has('mrp')) {{ 'is-invalid' }} @endif
                        " placeholder="Enter a M.R.P" value="{{ old('mrp') }}">
                        @if($errors->has('mrp'))
                          <div class="invalid-feedback">{{ $errors->first('mrp') }}</div>
                          @endif
                    </div>
                    <div class="col-md-6">
                            <label for="price" class="form-label"> selling Price</label>
                            <input type="text" name="price" id="price" class="form-control
                            @if($errors->has('price')) {{ 'is-invalid' }} @endif
                            " placeholder="Enter a selling price" value="{{ old('price') }}">
                            @if($errors->has('price'))
                          <div class="invalid-feedback">{{ $errors->first('price') }}</div>
                          @endif
                    </div>
                </div>

            <div class="row mb-3">
                <div class="col-md-12">
                    <label for="description" class="form-label">Description</label>
                    <textarea name="description" id="description" style="resize: none; height: 150px" class="form-control
                    @if($errors->has('description')) {{ 'is-invalid' }} @endif
                    " placeholder="Enter a Description" value="{{ old('description') }}"></textarea>
                    @if($errors->has('description'))
                          <div class="invalid-feedback">{{ $errors->first('description') }}</div>
                    @endif
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-12">
                    <label for="image" class="form-label">Product image</label>
                    <input type="file" name="image" id="image" class="form-control">
                    {{-- @if($errors->has('image')) {{ 'is-invalid' }} @endif " value="{{ old('image') }}">
                    @if($errors->has('image'))
                          <div class="invalid-feedback">{{ $errors->first('image') }}</div>
                    @endif --}}
                </div>

                <div class="mb-3">
                    <button type="submit" class="btn btn-dark">save Product</button>
                    <button type="reset" class="btn btn-danger">Reset</button>
                </div>
                @method('POST')

            </form>
        </div>
        <!-- row end -->
    </div>
    <!-- container end -->
    </div>

    @endsection
