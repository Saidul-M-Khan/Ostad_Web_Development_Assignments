<div class="container">
    <div class="row">
        <div class="col-md-12 my-5">

            @if (session('status')=='create success')
                <h6 class='alert alert-success mt-3'>Product Added Successfully</h6>
            @elseif (session('status')=='update success')
                <h6 class='alert alert-success mt-3'>Product Updated Successfully</h6>
            @elseif (session('status')=='delete success')
                <h6 class='alert alert-success mt-3'>Product Deleted Successfully</h6>
            @else
                <h6></h6>
            @endif

            <div class="card">
                <div class="card-header">
                    <h4>Product CRUD</h4>
                    <a href="{{ url('product/create') }}" class="btn btn-outline-dark float-end">Add Product</a>
                </div>

                <table class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Product Name</th>
                            <th>Product Price</th>
                            <th>Show</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->price }}</td>
                                <td>
                                    <a href="{{ url('product/'.$item->id) }}" class="btn btn-sm btn-primary">Show</a>
                                </td>
                                <td>
                                    <a href="{{ url('product/'.$item->id.'/edit') }}" class="btn btn-sm btn-success">Edit</a>
                                </td>
                                <td>
                                    <form action="{{ url('product/'.$item->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
