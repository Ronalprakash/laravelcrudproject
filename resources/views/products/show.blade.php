@extends('layouts.app')

@section('main')
     <h5><i class="bi bi-plus-square-fill" ></i> product Details</h5>
            <nav class="my-3">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">home</a></li>
                    <li class="breadcrumb-item active">view Product</li>
                </ol>
            </nav>
            <div class="card">
                <img src="/images/{{ $products->image }}" alt="{{ $products->name }}" class="card-img-top"/>
                <div class="card-body">
                    <h5 class="card-title fw-bold">{{ $products->name }}</h5>
                    <p class="card-text text-secondary" >{{ $products->description }}
                    </p>
                    <p class="fw-semibold">M.R.P<small class="text-danger text-decoration-line-through">{{ $products->mrp }}</small></p>
                    <p class="fw-semibold">selling price <small class="text-success">{{ $products->price }}</small></p>
                </div>
            </div>

@endsection
