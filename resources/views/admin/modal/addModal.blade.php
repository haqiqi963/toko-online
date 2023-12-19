<!-- Modal Create -->
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="create-modalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="create-modalLabel">{{ $title }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('addData') }}" method="post" enctype="multipart/form-data">
                @csrf
            <div class="modal-body">
                    <div class="mb-3 row">
                        <label for="SKU" class="col-sm-5 col-form-label">SKU</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control-plaintext" id="SKU" name="sku" value="{{ $sku }}" readonly>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="name_product" class="col-sm-5 col-form-label">Name Product</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" id="name_product" name="name_product" placeholder="Enter name product">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="category_id" class="col-sm-5 col-form-label">Category</label>
                        <div class="col-sm-7">
                            <select class="form-control" name="category_id" id="category_id">
                                <option value="">Select Category</option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="type_id" class="col-sm-5 col-form-label">Types</label>
                        <div class="col-sm-7">
                            <select class="form-control" name="type_id" id="type_id">
                                <option value="">Select Type</option>
                                @foreach($types as $type)
                                    <option value="{{ $type->id }}">{{ $type->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="price" class="col-sm-5 col-form-label">Price</label>
                        <div class="col-sm-7">
                            <input type="number" class="form-control" id="price" name="price" placeholder="Enter price">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="quantity" class="col-sm-5 col-form-label">Quantity</label>
                        <div class="col-sm-7">
                            <input type="number" class="form-control" id="quantity" name="quantity" placeholder="Enter quantity">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="img_product" class="col-sm-5 col-form-label">Image Product</label>
                        <div class="col-sm-7">
                            <input type="hidden" name="img_product">
                            <img class="mb-2 preview" style="width: 100px;">
                            <input type="file" class="form-control" id="inputImg" name="img_product" onchange="previewImg()">
                        </div>
                    </div>
            </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add Data</button>
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
