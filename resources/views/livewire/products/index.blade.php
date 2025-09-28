<div>
    <div class="col-lg-12 grid-margin stretch-card d-flex flex-column">

        @if (session()->has('success'))
            <div class="alert alert-success" role="alert">
                <i class="bi bi-info-circle-fill"></i> {{ session('success') }}
            </div>
        @endif
        @if (session()->has('error'))
            <div class="alert alert-danger" role="alert">
                <i class="bi bi-info-circle-fill"></i> {{ session('error') }}
            </div>
        @endif

        <div class="container-search d-flex justify-content-end">
            <ul class="navbar-nav me-lg-4 w-50 mb-3">
                <li class="nav-item nav-search d-none d-lg-block w-100">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="search">
                                <i class="mdi mdi-magnify"></i>
                            </span>
                        </div>
                        <input type="text" class="form-control" placeholder="Search now" aria-label="search"
                            aria-describedby="search">
                    </div>
                </li>
            </ul>
        </div>
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Basic Table</h4>



                <div class="d-flex justify-content-between mb-3">

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
                                    <td>{{ $data_products->name }} <button type="button" class="btn btn-link"
                                            wire:click="$dispatch('showProductDetailModal', { productId: {{ $data_products->id }} })">Link</button>
                                    </td>
                                    <td><img src="{{ $data_products->image_url }}" class="img-fluid rounded-0"
                                            alt="Product Image" width="30%"></td>
                                    {{-- <td>{{ $data_products->description }}</td> --}}
                                    <td class="text-muted">Rp. {{ number_format($data_products->price) }}</td>
                                    <td>{{ $data_products->stock }} pcs</td>
                                    <td>
                                        <a class="btn btn-info btn-sm"
                                            href="{{ route('products.edit', $data_products->id) }}" role="button"><i
                                                class="bi bi-pencil-square"></i></a>
                                        <button type="button" class="btn btn-inverse-info btn-sm"
                                            wire:click="destroy({{ $data_products->id }})"
                                            wire:confirm="Are you sure you want to delete this product?"><i
                                                class="bi bi-trash-fill"></i></button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @livewire('products.product-detail-modal')
                </div>
            </div>
        </div>
    </div>
</div>
