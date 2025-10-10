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

        <div wire:loading.delay.long wire:target="sortDirection">
            <div class="alert alert-info" role="alert">
                <i class="bi bi-exclamation-circle"></i> Applied the filter was success!
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                {{-- <h4 class="card-title">Basic Table</h4> --}}


                <div class="d-flex justify-content-between mb-3">

                    <a class="btn btn-info" href="#" role="button" wire:navigate><i class="fa fa-plus"></i>Add
                        Transaction</a>
                    <div class="container-filter col-sm-3">
                        <div class="form-group mb-2">
                            <select class="w-100 form-select" wire:model.live="sortDirection">
                                <option value="desc">Oldest First</option>
                                <option value="asc">Newest First</option>
                            </select>
                        </div>
                    </div>

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
                            @foreach ($transactions as $data_transaction)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $data_transaction->invoice_number }}</td>
                                    <td>{{ $data_transaction->created }}
                                    </td>
                                    <td>{{ $data_transaction->user->name }}</td>
                                    <td class="text-muted">Rp.{{ number_format($data_transaction->total_amount) }}</td>
                                    @if ($data_transaction->status == 'paid')
                                        <td>

                                            <span class="btn btn-inverse-success py-1">
                                                {{ $data_transaction->status }}</span>
                                        </td>
                                    @endif
                                    <td>
                                        <a class="btn btn-info btn-sm" href="#" role="button"><i
                                                class="bi bi-pencil-square"></i></a>
                                        <button type="button" class="btn btn-inverse-info btn-sm" wire:click="#"
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
