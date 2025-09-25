<div>
    <div class="col-lg-12 d-flex flex-row justify-content-between">


        <div class="col-lg-8 grid-margin stretch-card d-flex flex-column me-2">
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
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title border-bottom"><i class="bi bi-list-ul"></i> Product List</h4>
                    <div class="container-product">
                        <div class="row row-cols-1 row-cols-sm-3 row-cols-md-2 g-4">
                            @forelse ($allProducts as $product)
                                <div class="product-card mb-3">
                                    <div class="product-info d-flex">
                                        <img src="{{ $product->image_url }}" class="img-fluid rounded"
                                            alt="Product Name" width="140px" height="140px">
                                        <div class="product-info2 my-auto ms-3 mb-3 d-flex flex-column">
                                            <h6 class="fw-bold mt-2">
                                                {{ $product->name }}
                                            </h6>
                                            <div class="info-list-price d-flex flex-row justify-content-between">
                                                <div class="card-price me-2">
                                                    <small class="text-muted">
                                                        <small class="bg-primary-subtle rounded rounded-1 p-1"><i
                                                                class="bi bi-currency-dollar text-info"></i></small>
                                                        Price
                                                    </small>
                                                    <p class="mt-2">Rp.100.000</p>
                                                </div>
                                                <div class="card-stock">
                                                    <small class="text-muted">
                                                        <small class="bg-primary-subtle rounded rounded-1 p-1"><i
                                                                class="bi bi-currency-dollar text-info"></i></small>
                                                        Stock
                                                    </small>
                                                    <p class="mt-2">{{ $product->stock }}</p>
                                                </div>
                                            </div>
                                            <small class="mt-3">
                                                <button type="button" class="btn btn-info btn-sm px-4"
                                                    wire:click.prevent="addToCart({{ $product->id }})"><i
                                                        class="bi bi-cart-fill"></i> Add to cart</button>
                                            </small>

                                        </div>
                                    </div>
                                </div>
                            @empty
                                <p class="text-center">Tidak ada produk yang tersedia.</p>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 grid-margin stretch-card d-flex flex-column">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title border-bottom">Cart Item</h4>

                    <div class="container-cart-item">
                        @for ($i = 1; $i < 5; $i++)
                            <div class="product-card mb-3 border-bottom">
                                <div class="product-info d-flex">
                                    <img src="https://i.pinimg.com/736x/48/54/12/4854120d438d747dc42423154ae8c5c2.jpg"
                                        class="img-fluid rounded" alt="Product Name" width="100px">
                                    <div class="product-info2 my-auto ms-3 mb-3 d-flex flex-column">
                                        <h5 class="fw-bold">
                                            Product name
                                        </h5>
                                        <div class="info-list-price d-flex flex-row justify-content-between">
                                            <div class="card-price me-2">
                                                <small class="text-muted">
                                                    Price: Rp.100.000
                                                </small>
                                            </div>
                                            <div class="card-stock">
                                                <small class="text-muted">
                                                    Qnty: 1
                                                </small>
                                            </div>
                                        </div>
                                        <div
                                            class="card-btn-cart d-flex flex-row align-items-center justify-content-around mt-4">
                                            <button type="button" class="btn btn-info btn-sm">+</button>
                                            <h5 class="mx-3">100</h5>
                                            <button type="button" class="btn btn-inverse-info btn-sm me-2">-</button>

                                            <small><button type="button"
                                                    class="btn btn-inverse-danger btn-sm">Delete</button></small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endfor
                    </div>

                    <div class="total-amount d-flex justify-content-between mt-3 mb-5">
                        <h4>Total Amount: </h4>
                        <p class="text-muted">Rp.200000000</p>
                    </div>

                    <div class="process-transactions d-grid">
                        <button type="button" class="btn btn-info">Transaction Process</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
