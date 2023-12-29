@extends('layouts.frontend.app')

@section('title', 'Checkout')

@section('content')
    <form action="{{ route('checkout.payment') }}" method="post">
        @csrf
        <div class="row">
            <div class="col-sm-8">
                <div class="card">
                    <div class="card-body payment">
                        <h3>Enter the shipping address</h3>

                        <div class="row mb-3">
                            <label for="name_customer" class="col-form-label col-sm-3">Name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="name_customer" name="name_customer" placeholder="Enter Name" autofocus required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="address" class="col-form-label col-sm-3">Address</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" placeholder="Enter address" id="address" name="address" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="phone" class="col-form-label col-sm-3">No.Telp </label>
                            <div class="col-sm-9">
                                <input type="number" class="form-control" placeholder="Enter Phone" id="phone" name="phone" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="expedition" class="col-form-label col-sm-3">Select Expedition</label>
                            <div class="col-sm-9">
                                <select name="expedition" class="form-control expedition" id="expedition" required>
                                    <option value="">--Select Expedition--</option>
                                    <option value="jnt">J&T Express</option>
                                    <option value="jne">J&E Express</option>
                                    <option value="sicepat">SICEPAT Express</option>
                                    <option value="ninja">NINJA Express</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card mb-5">
                    <div class="card-header text-center">
                        Total Shopping
                    </div>
                    <div class="card-body pembayaran">
                        <h2 class="text-center">{{ $codeCheckout }}</h2>
                        <div class="row mb-3">
                            <input type="hidden" name="code_transaction" value="{{ $codeCheckout }}">
                            <label for="totalShopping" class="col-form-label col-sm-5">Total Shopping</label>
                            <div class="col-sm-7">
                                <input type="number" class="form-control totalShopping" id="totalShopping" name="totalShopping" value="{{ $detailCheckout }}" readonly>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="discount" class="col-form-label col-sm-5">Discount</label>
                            <div class="col-sm-7">
                                @if(auth()->user())
                                    <input type="number" class="form-control discount" id="discount" name="discount" value="0" readonly>
                                @else
                                    <input type="number" class="form-control discount" id="discount" name="discount" value="0" readonly>
                                @endif

                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="ppn" class="col-form-label col-sm-5">PPN</label>
                            <div class="col-sm-7">
                                <input type="number" class="form-control ppn" id="ppn" name="ppn" value="0" readonly>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="shipping" class="col-form-label col-sm-5">Shipping</label>
                            <div class="col-sm-7">
                                <input type="number" class="form-control shipping" id="shipping" name="shipping" value="0" readonly>
                            </div>
                        </div>
                        <hr>
                        <div class="row mb-4">
                            <label for="dibayarkan" class="col-form-label col-sm-5">Total</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control dibayarkan" id="dibayarkan" name="dibayarkan" value="0" readonly>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="totalItems" class="col-form-label col-sm-5">Total Items</label>
                            <div class="col-sm-7">
                                <input type="number" class="form-control" id="totalItems" name="totalItems" value="{{ $totalItems }}" readonly>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="qtyItems" class="col-form-label col-sm-5">Total Quantity</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="qtyItems" name="qtyItems" value="{{ $qtyItems }}" readonly>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-warning w-100">
                            <i class="fas-fa-print"></i>
                            Process Payment
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
