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

                    <a class="btn btn-info" href="#" role="button" wire:navigate><i class="fa fa-plus"></i>Add
                        User</a>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Email Verified</th>
                                <th>Password</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            @foreach ($users as $data_users)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $data_users->name }}
                                    </td>
                                    <td class="text-muted">{{ $data_users->email }}
                                    </td>
                                    <td>{{ $data_users->email_verified_at }}
                                    </td>
                                    <td>
                                        @php
                                            $password = $data_users->password;
                                            $passwordSliced = substr($password, 0, 18);
                                        @endphp
                                        {{ $passwordSliced . '...' }}
                                    </td>
                                    <td>
                                        <a class="btn btn-info btn-sm" href="" role="button"><i
                                                class="bi bi-pencil-square"></i></a>
                                        <button type="button" class="btn btn-inverse-info btn-sm"><i
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
