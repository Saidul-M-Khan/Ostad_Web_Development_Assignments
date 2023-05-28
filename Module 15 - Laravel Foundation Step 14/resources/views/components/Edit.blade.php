<section class="container my-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Product CRUD</h4>
                    <a href="{{ url('product') }}" class="btn btn-outline-danger float-end">Back</a>
                </div>
                <div class="card-body">
                    <form action="{{ url('product/'.$product->id) }}" method='POST'>
                        @csrf
                        @method('PUT')
                        <div class='form-group mb-3'>
                            <label for="">Product Name</label>
                            <input type="text" name="name" value="{{ $product->name }}" class="form-control">
                        </div>
                        <div class='form-group mb-3'>
                            <label for="">Product Price</label>
                            <input type="text" name="price" value="{{ $product->price }}" class="form-control">
                        </div>
                        <div class='form-group mb-3'>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
