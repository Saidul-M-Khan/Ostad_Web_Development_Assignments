<section class='my-5 container'>
    <div class="card m-5 w-50">
        <div class="card-header">
          PRODUCT INFO
        </div>
        <div class="card-body">
            <h4 class='text-success'>ID#{{ $product->id }}</h4>
            <label for="">Name</label>
            <h5>{{ $product->name }}</h5>
            <label for="">Price</label>
            <strong class='text-danger'> {{ $product->price }}</strong>
        </div>
        <div class="card-footer text-muted">
            <a href="{{ url('product') }}" class="btn btn-danger btn-sm">Back</a>
        </div>
    </div>
</section>
