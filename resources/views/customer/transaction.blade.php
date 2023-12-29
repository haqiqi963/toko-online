@extends('layouts.frontend.app')

@section('title', 'Transaction')

@section('content')
    <style>
        input[type="number"]::-webkit-inner-spin-button,
        input[type="number"]::-webkit-outer-spin-button{
            -webkit-appearance: none;
            margin: 0;
        }
    </style>
    <h3 class="my-5">Shopping Cart</h3>
    @if(!$data)
    @else
        @foreach($data as $transaction)
            <div class="card mb-5 cart">
                <form action="{{ route('checkout.product', ['id' => $transaction->id] ) }}" method="post">
                    @csrf
                    <div class="card-body d-flex gap-4">
                        <img src="{{ asset('storage/product/' . $transaction->products->img_product) }}" class="rounded" style="max-height: 200px; max-width: 200px" alt="">
                        <div class="description w-100">
                            <p class="fs-2 fw-bold">{{ $transaction->products->name_product }}</p>
                            <input type="hidden" name="id_items" value="{{ $transaction->products->id }}">
                            <input type="number" class="form-control border-0 fs-1" name="price" id="price" value="{{ $transaction->products->price }}" readonly>
                            <div class="row mb-2">
                                <label for="qty" class="col-sm-2 col-form-label fs-5">Quantity</label>
                                <div class="col-sm-4 d-flex">
                                    <button class="rounded-start bg-secondary p-2 border border-0 plus" id="plus">+</button>
                                    <input type="number" class="form-control text-center w-25 qty" name="quantity" id="qty" value="{{ $transaction->quantity }}">
                                    <button class="rounded-end bg-secondary p-2 border border-0 minus" id="minus" disabled>-</button>
                                </div>
                            </div>
                            <div class="row">
                                <label for="price" class="col-sm-2 col-form-label fs-5">Total</label>
                                <input type="text" class="col-sm-4 form-control w-75 border-0 fs-5 total" id="total" name="total" readonly>
                            </div>
                            <div class="row w-50 gap-1">
                                <button type="submit" class="btn btn-success col-sm-5">
                                    <i class="fa fa-shopping-cart"></i>
                                    Checkout
                                </button>
                                <button class="btn btn-danger col-sm-5">
                                    <i class="fa fa-trash-alt"></i>
                                    Delete
                                </button>
                            </div>
                        </div>

                    </div>
                </form>

            </div>
        @endforeach
    @endif

@endsection
