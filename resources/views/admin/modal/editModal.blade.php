<div class="modal fade" id="editModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content modal-md">
            <div class="modal-header">
                <h5 class="modal-title" id="create-modalLabel">{{ $title }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('updateData', $product->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="mb-3 row">
                        <label for="sku" class="col-sm-5 col-form-label">SKU</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control-plaintext" id="sku" name="sku"
                                value="{{ $product->sku }}" readonly>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="name_product" class="col-sm-5 col-form-label">Nama Product</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" id="name_product" name="name_product"
                                value="{{ $product->name_product }}">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="type_id" class="col-sm-5 col-form-label">Types</label>
                        <div class="col-sm-7">
                            <select class="form-control" name="type_id" id="type_id">
                                <option value="{{ $product->type->id }}">{{ $product->type->name }}</option>
                                @foreach($types as $type)
                                    @if($type->id != $product->type->id)
                                        <option value="{{ $type->id }}">{{ $type->name }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="category_id" class="col-sm-5 col-form-label">Category</label>
                        <div class="col-sm-7">
                            <select class="form-control" name="category_id" id="category_id">
                                <!-- Tampilkan opsi yang sudah dipilih -->
                                <option value="{{ $product->category->id }}">{{ $product->category->name }}</option>

                                <!-- Tampilkan opsi yang belum dipilih -->
                                @foreach($categories as $category)
                                    @if($category->id != $product->category->id)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="price" class="col-sm-5 col-form-label">Price</label>
                        <div class="col-sm-7">
                            <input type="number" class="form-control" id="price" name="price"
                                value="{{ $product->price }}">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="quantity" class="col-sm-5 col-form-label">Quantity</label>
                        <div class="col-sm-7">
                            <input type="number" class="form-control" id="quantity" name="quantity"
                                value="{{ $product->quantity }}">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="img_product" class="col-sm-5 col-form-label">Image Product</label>
                        <div class="col-sm-7">
                            <input type="hidden" name="img_product" value="{{$product->img_product}}">
                            <img src="{{ asset('storage/product/' . $product->img_product) }}" class="mb-2 preview"
                                style="width: 100px;">
                            <input type="file" class="form-control" id="inputImg"
                                name="img_product" onchange="previewImg()">
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    function previewImg() {
        const imgIn = document.querySelector('#inputImg');
        const preview = document.querySelector('.preview');

        preview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(imgIn.files[0]);

        oFReader.onload = function(oFREvent) {
            preview.src = oFREvent.target.result;
        }
    }
</script>
