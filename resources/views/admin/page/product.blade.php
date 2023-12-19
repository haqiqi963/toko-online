@extends('layouts.backend.app')

@section('title', 'Product')

@section('content_title', 'Product')

@section('content')
    <div class="card">
        <div class="card-header">
            <button class="btn btn-primary" id="addProduct">Add Product</button>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered text-center">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Image</th>
                        <th>Date In</th>
                        <th>SKU</th>
                        <th>Name</th>
                        <th>Category</th>
                        <th>Type</th>
                        <th>Price</th>
                        <th>Stock</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($products as $product)
                        <tr>
                            <td>{{ ($products->currentPage() - 1) * $products->perPage() + $loop->iteration }}</td>
                            <td>
                                <img src="{{ asset('storage/product/' . $product->img_product) }}" width="50px" alt="" draggable="false">
                            </td>
                            <td>{{ $product->created_at->format('d F Y') }}</td>
                            <td>{{ $product->sku }}</td>
                            <td>{{ $product->name_product }}</td>
                            <td>{{ $product->category->name }}</td>
                            <td>{{ $product->type->name }}</td>
                            <td>{{ 'Rp. ' . number_format($product->price, 0, ',', '.') }}</td>
                            <td>{{ $product->quantity }}</td>
                            <td>
                                <center>
                                    <input type="hidden" id="sku" value="{{ $product->sku }}">
                                    <button class="btn btn-primary editModal" data-id="{{ $product->id }}"><i class="fas fa-edit"></i></button>
                                    <button class="btn btn-danger deleteData" data-id="{{ $product->id }}"><i class="fas fa-trash"></i></button>
                                </center>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

                <div>
                    {{ $products->links() }}
                </div>

            </div>
        </div>
    </div>

    <div class="showData" style="display: none;"></div>
    <div class="showEditData" style="display: none;"></div>

    <script>
        $(document).ready(function() {
            $('#addProduct').click(function() {
                $.ajax({
                    url: '{{ route('addModal') }}',
                    success: function(response) {
                        $('.showData').html(response).show();
                        $('#addModal').modal("show");
                    }
                });
            });
        });

        $('.editModal').click(function(e) {
            e.preventDefault();
            var id = $(this).data('id');

            $.ajax({
                type: "GET",
                url: "{{ route('editModal', ['id' => ':id']) }}".replace(':id', id),
                success: function(response) {
                    $('.showEditData').html(response).show();
                    $('#editModal').modal("show");
                }
            });
        });

        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
        });

        $('.deleteData').click(function(e) {
            e.preventDefault();
            var id = $(this).data('id');
            var sku = $('#sku').val();
            const Toast = Swal.mixin({
                toast: true,
                position: "top-end",
                showConfirmButton: false,
                timer: 2000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener("mouseenter", Swal.stopTimer);
                    toast.addEventListener("mouseleave", Swal.resumeTimer);
                    setTimeout(function() {
                        window.location.reload();
                    }, 1000);
                },
            });

            Swal.fire({
                title: 'Delete data ?',
                text: "Are you sure delete " + sku + " ?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        type: "delete",
                        url: "{{ route('deleteData', ['id' => ':id']) }}".replace(':id', id),
                        dataType: "json",
                        success: function(response) {
                            if (response.success) {
                                Toast.fire({
                                    icon: "success",
                                    title: response.success,
                                });
                            }
                        },
                        error: function(xhr, status, error) {
                            // Tampilkan notifikasi error jika terjadi kesalahan
                            Swal.fire({
                                title: 'Error',
                                text: 'The error occurred while deleting the data',
                                icon: 'error'
                            });
                        }
                    });
                }
            })
        });

    </script>
@endsection
