@extends('layouts.frontend.app')

@section('title', 'Beranda')

@section('content')

    <h4 class="fw-semibold mb-3">Best Seller</h4>

    <div class="content d-flex flex-lg-wrap gap-4 mb-5">
        <div class="row">
            @foreach($bestSell as $product)
                <div class="col-lg-2 col-md-4 col-sm-6 my-2">
                    <div class="card h-100">
                        <img src="{{ asset('storage/product/' . $product->img_product) }}" class="card-img-top h-100" draggable="false" alt="">
                        <div class="card-body">
                            <p class="m-0 text-justify">{{ $product->name_product }}</p>
                            <p class="m-0"><i class="fa-regular fa-star"></i> 5+</p>
                        </div>
                        <div class="card-footer d-flex justify-content-between align-items-center">
                            <p class="m-auto fw-semibold" style="font-size: 16px">Rp. {{ number_format($product->price, 0, ',', '.') }}</p>
                            <form action="{{route('addToCart', $product->id)}}" method="post">
                                @csrf
                                <input type="hidden" name="id" value="{{ $product->id }}">
                                <button type="submit" class="btn btn-sm btn-outline-primary" style="font-size: 24px;">
                                    <i class="fa-solid fa-cart-plus"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>


    <h4 class="fw-semibold mb-3">New Product</h4>

    <div class="content d-flex flex-lg-wrap gap-4 mb-5">
        <div class="row">
            @foreach($products as $product)
                <div class="col-lg-2 col-md-4 col-sm-6 my-2">
                    <div class="card h-100">
                        <img src="{{ asset('storage/product/' . $product->img_product) }}" class="card-img-top h-100" draggable="false" alt="">
                        <div class="card-body">
                            <p class="m-0 text-justify">{{ $product->name_product }}</p>
                            <p class="m-0"><i class="fa-regular fa-star"></i> 5+</p>
                        </div>
                        <div class="card-footer d-flex justify-content-between align-items-center">
                            <p class="m-auto fw-semibold" style="font-size: 16px">Rp. {{ number_format($product->price, 0, ',', '.') }}</p>
                            <form action="{{route('addToCart', $product->id)}}" method="post">
                                @csrf
                                <input type="hidden" name="id" value="{{ $product->id }}">
                                <button type="submit" class="btn btn-sm btn-outline-primary" style="font-size: 24px;">
                                    <i class="fa-solid fa-cart-plus"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection
