<div>
    <div class="col-lg-12 d-flex flex-row justify-content-between">
        <div class="col-lg-8 grid-margin stretch-card d-flex flex-column me-2">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Product List</h4>
                    <div class="container-product">
                        @for ($i = 1; $i < 5; $i++)
                            <div class="product-card mb-3 border-bottom">
                                <div class="product-info d-flex">
                                    <img src="https://i.pinimg.com/736x/5f/66/08/5f660813de52c29525ee8e3f66074415.jpg"
                                        class="img-fluid rounded" alt="Product Name" width="20%">
                                    <div class="product-info2 my-auto ms-3 mb-3 d-flex flex-column">
                                        <h3 class="fw-bold">
                                            Product name
                                        </h3>
                                        <div class="info-list-price d-flex flex-row justify-content-between">
                                            <div class="card-price me-2">
                                                <small class="text-muted">
                                                    <small class="bg-primary-subtle rounded rounded-1 p-1"><i
                                                            class="bi bi-currency-dollar text-info"></i></small>
                                                    Price
                                                </small>
                                                <h6 class="mt-2">Rp.100.000</h6>
                                            </div>
                                            <div class="card-stock">
                                                <small class="text-muted">
                                                    <small class="bg-primary-subtle rounded rounded-1 p-1"><i
                                                            class="bi bi-currency-dollar text-info"></i></small>
                                                    Stock
                                                </small>
                                                <h6 class="mt-2">100</h6>
                                            </div>
                                        </div>

                                        <button type="button" class="btn btn-info btn-sm"><small><i
                                                    class="bi bi-cart-fill"></i></small> Add to cart</button>

                                    </div>
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 grid-margin stretch-card d-flex flex-column">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Cart Item</h4>

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
                                        <div class="card-btn-cart d-flex flex-row align-items-center mt-4">
                                            <button type="button" class="btn btn-info btn-sm">+</button>
                                            <h5 class="mx-3">100</h5>
                                            <button type="button" class="btn btn-info btn-sm">-</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
