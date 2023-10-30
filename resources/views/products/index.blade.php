@extends('layouts.app')

@section('main')

<div class="row">
    <div class="d-flex justify-content-between">

        <h5><i class="bi bi-journal-text"></i> product Details</h5>
        <a href="/products/create" class="btn btn-primary"><i class="bi bi-plus-circle"></i>new product</a>
    </div>
    <div class="col-md-12 table-responsive mt-3">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>S.no</th>
                <th>Image</th>
                <th>Product name</th>
                <th>M.R.P</th>
                <th>Selling Price</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $products)

            <tr>
                <td>{{ $products->id }}</td>
                <td><img src="images/{{ $products->image }}" style="width:50px; height:50px; object-fit:contain" alt="Product"></td>
                <td><a href="products/{{$products->id}}/show">{{ $products->name }} </a></td>
                <td>{{ $products->mrp }}</td>
                <td>{{ $products->price }}</td>
                <td>
                    <a href="products/{{ $products->id }}/edit" class="btn btn-dark btn-sm" ><i class="bi bi-pencil-square"></i></a>
                    <a href="products/{{ $products->id }}/delete" class="btn btn-danger btn-sm" ><i class="bi bi-trash"></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
        </table>
        {{-- {{ $products->links() }} --}}
    </div>

</div>
<!-- row end -->
</div>
<!-- container end -->

</div>

@endsection
