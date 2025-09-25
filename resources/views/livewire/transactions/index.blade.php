<div>
    <div class="col-lg-12 grid-margin stretch-card d-flex flex-column">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Basic Table</h4>


                <div class="d-flex justify-content-between mb-3">
                    <div class="d-flex card-description">
                        {{-- Add class <code>.table</code> --}}
                    </div>
                    <a class="btn btn-info" href="#" role="button" wire:navigate><i class="fa fa-plus"></i>Add
                        Transaction</a>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>No Invoice</th>
                                <th>Date</th>
                                <th>Customer/Cashier</th>
                                <th>Total Amount</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>

                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>INV-10209022</td>
                                <td>21/09/2025
                                </td>
                                <td>Khairin</td>
                                <td>Rp. 1000000</td>
                                <td>Completed</td>
                                <td>
                                    <a class="btn btn-info btn-sm" href="#" role="button"><i
                                            class="bi bi-pencil-square"></i></a>
                                    <button type="button" class="btn btn-inverse-info btn-sm" wire:click="#"
                                        wire:confirm="Are you sure you want to delete this product?"><i
                                            class="bi bi-trash-fill"></i></button>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                    @livewire('products.product-detail-modal')
                </div>
            </div>
        </div>
    </div>
</div>
