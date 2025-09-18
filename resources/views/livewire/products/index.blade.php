<div>
    <div class="col-lg-12 grid-margin stretch-card d-flex flex-column">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Basic Table</h4>


                <div class="d-flex justify-content-between mb-3">
                    <div class="d-flex card-description">
                        Add class <code>.table</code>
                        {{-- Kode ini akan aktif untuk URL seperti /product/list, /product/create, /product/1/edit, dll. --}}
                        {{-- @if (request()->is('product*'))
                            <i class="mdi mdi-home text-muted hover-cursor"></i>
                            <p class="text-muted mb-0 hover-cursor ms-2">&nbsp;/&nbsp;Product&nbsp;/&nbsp;</p> --}}

                        {{-- Anda bahkan bisa menambahkan logika untuk bagian terakhir --}}
                        {{-- @if (request()->is('product/list'))
                                <p class="text-primary mb-0 hover-cursor">List</p>
                            @elseif(request()->is('product/create'))
                                <p class="text-primary mb-0 hover-cursor">Create</p>
                            @endif --}}
                        {{-- @endif --}}
                    </div>

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
                                {{-- <th>Description</th> --}}
                                <th>Price</th>
                                <th>Stock</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            @foreach ($products as $data_products)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $data_products->name }}</td>
                                    <td><img src="{{ $data_products->image_url }}" class="img-fluid  rounded-0"
                                            alt="Product Image" height="300px" width="300px"></td>
                                    {{-- <td>{{ $data_products->description }}</td> --}}
                                    <td>{{ $data_products->price }}</td>
                                    <td>{{ $data_products->stock }}</td>
                                    <td>
                                        <a class="btn btn-info btn-sm"
                                            href="{{ route('products.edit', $data_products->id) }}" role="button"><i
                                                class="bi bi-pencil-square"></i></a>
                                        <a class="btn btn-inverse-info btn-sm" href="#" role="button"><i
                                                class="bi bi-trash-fill"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
