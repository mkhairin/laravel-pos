<div>
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Basic Table</h4>
                <div class="d-flex justify-content-between mb-3">
                    <p class="card-description">
                        Add class <code>.table</code>
                    </p>
                    <a class="btn btn-info" href="{{ route('products.create') }}" role="button" wire:navigate><i
                            class="fa fa-plus"></i>Add
                        Product</a>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#ID</th>
                                <th>Product Name</th>
                                <th>Image</th>
                                <th>Description</th>
                                <th>Price</th>
                                <th>Stock</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Makanan</td>
                                <td>12 May 2017</td>
                                <td>Test</td>
                                <td>100.000</td>
                                <td>10</td>
                                <td><label class="badge badge-danger">Pending</label></td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
