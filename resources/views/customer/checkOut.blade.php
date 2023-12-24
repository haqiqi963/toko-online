@extends('layouts.frontend.app')

@section('title', 'Checkout')

@section('content')
<div class="row">
    <div class="col-sm-8">
        <div class="card">
            <div class="card-body">
                <h3>Enter the shipping address</h3>

                <div class="row mb-3">
                    <label for="name" class="col-form-label col-sm-3">Name</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" >
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="address" class="col-form-label col-sm-3">Address</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" placeholder="Enter address" id="address" name="address">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="phone" class="col-form-label col-sm-3">No.Telp </label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" placeholder="Enter Phone" id="phone" name="phone">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="expedition" class="col-form-label col-sm-3">Select Expedition</label>
                    <div class="col-sm-9">
                        <select name="expedition" class="form-control" id="expedition">
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
                <p>Invoice</p>
            </div>
            <div class="card-body">
                <div class="row mb-3">
                    <label for="totalBelanja" class="col-form-label col-sm-4">Total Shopping</label>
                    <div class="col-sm-8">
                        <input type="number" class="form-control" id="totalBelanja" name="totalBelanja" value="19000000" disabled>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="discount" class="col-form-label col-sm-4">Discount</label>
                    <div class="col-sm-8">
                        <input type="number" class="form-control" id="discount" name="discount" value="0">
                    </div>
                </div>
                <div class="row mb-4">
                    <label for="ppn" class="col-form-label col-sm-4">PPN</label>
                    <div class="col-sm-8">
                        <input type="number" class="form-control" id="ppn" name="ppn" value="2090000">
                    </div>
                </div>
                <div class="row mb-4">
                    <label for="ongkir" class="col-form-label col-sm-4">Shipping</label>
                    <div class="col-sm-8">
                        <input type="number" class="form-control" id="ongkir" name="ongkir" value="10000">
                    </div>
                </div>
                <hr>
                <div class="row mb-4">
                    <label for="dibayarkan" class="col-form-label col-sm-4">paid</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="dibayarkan" name="dibayarkan" value="2200000">
                    </div>
                </div>
                <div class="row mb-4">
                    <label for="diterima" class="col-form-label col-sm-4">pay</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="diterima" name="diterima" value="">
                    </div>
                </div>
                <div class="row mb-4">
                    <label for="dikembalikan" class="col-form-label col-sm-4">return</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="dikembalikan" name="dikembalikan" value="" readonly>
                    </div>
                </div>
                <button class="btn btn-success">
                    <i class="fas-fa-print"></i>
                    Print
                </button>
            </div>
        </div>
    </div>
</div>
@endsection
