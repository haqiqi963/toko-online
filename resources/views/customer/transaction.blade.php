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
            <img src="{{ asset('frontend/product/laptop-1.jpg') }}" class="rounded" style="max-height: 150px; max-width: 150px" alt="">
            <div class="description w-auto">
                <p class="fs-3 fw-bold">Asus Rog XVIII</p>
                <h3 class="fw-bold">Rp. 19.000.000 </h3>
                <div class="row mb-2">
                    <label for="qty" class="col-sm-5 col-form-label-lg">Quantity</label>
                    <div class="col-sm-4 d-flex add">
                        <button class="rounded-start bg-secondary p-2" id="plus">+</button>
                        <input type="number" class="form-control text-center w-30 qty" name="qty" id="qty" min="0" max="999" value="1">
                        <button class="rounded-end bg-secondary p-2 border border-0" id="minus">-</button>
                    </div>
                </div>
                <div class="row">
                    <label for="price" class="col-sm-4 col-form-label fs-5">Total</label>
                    <input type="text" class="col-sm-8 border-0 fs-5" name="price" id="price" readonly value="Rp. 19.000.000">
                </div>
            </div>
        </div>
    </div>
@endsection
