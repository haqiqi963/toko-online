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
    <h3 class="mt-5">Shopping Cart</h3>
    <div class="card mb-5 cart">
        <div class="card-body d-flex gap-4">
            <img src="{{ asset('frontend/product/laptop-1.jpg') }}" class="rounded" style="max-height: 200px; max-width: 200px" alt="">
            <div class="description w-50">
                <p class="fs-2 fw-bold">Asus Rog XVIII</p>
                <input type="number" class="form-control border-0 fs-1" id="price" value="19000000" readonly>
                <div class="row mb-2">
                    <label for="qty" class="col-sm-2 col-form-label fs-5">Quantity</label>
                    <div class="col-sm-4 d-flex">
                        <button class="rounded-start bg-secondary p-2 border border-0 " id="plus">+</button>
                        <input type="number" class="form-control text-center w-25 qty" name="qty" id="qty" min="0" max="999" value="1">
                        <button class="rounded-end bg-secondary p-2 border border-0" id="minus" disabled>-</button>
                    </div>
                </div>
                <div class="row">
                    <label for="price" class="col-sm-2 col-form-label fs-5">Total</label>
                    <input type="text" class="col-sm-4 form-control w-75 border-0 fs-5 " id="total" readonly>
                </div>
                <div class="row w-50 gap-1">
                    <a href="/checkout" class="btn btn-success col-sm-5">
                        <i class="fa fa-shopping-cart"></i>
                        Checkout
                    </a>
                    <button class="btn btn-danger col-sm-5">
                        <i class="fa fa-trash-alt"></i>
                        Delete
                    </button>
                </div>

            </div>
        </div>
    </div>
@endsection
