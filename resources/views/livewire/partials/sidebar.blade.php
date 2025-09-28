<div>
    <!-- partial:partials/_sidebar.html -->
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('dashboard') }}">
                    <i class="fa fa-home menu-icon"></i>
                    <span class="menu-title">Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#product-menu" aria-expanded="false"
                    aria-controls="product-menu">
                    <i class="fa fa-shopping-cart menu-icon"></i>
                    <span class="menu-title">Products</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="product-menu">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="{{ route('products.index') }}"
                                wire:navigate>Product List</a>
                        </li>
                        <li class="nav-item"> <a class="nav-link" href="{{ route('products.create') }}"
                                wire:navigate>Add
                                Product</a>
                        </li>
                        <li class="nav-item"> <a class="nav-link" href="#">Update Product</a></li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#transaction-menu" aria-expanded="false"
                    aria-controls="transaction-menu">
                    <i class="fa fa-filter menu-icon"></i>
                    <span class="menu-title">Transaction</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="transaction-menu">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="{{ route('transactions.index') }}"
                                wire:navigate.prevent>Transaction List</a>
                        </li>
                        <li class="nav-item"> <a class="nav-link" href="{{ route('transactions.create') }}" wire:navigate>Add
                                Transaction</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#report-menu" aria-expanded="false"
                    aria-controls="report-menu">
                    <i class="bi bi-graph-up menu-icon"></i>
                    <span class="menu-title">Report</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="report-menu">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="#" wire:navigate>Transaction List</a>
                        </li>
                        <li class="nav-item"> <a class="nav-link" href="#" wire:navigate>Add
                                Role</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#user-menu" aria-expanded="false"
                    aria-controls="user-menu">
                    <i class="fa fa-user-circle menu-icon"></i>
                    <span class="menu-title">Users</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="user-menu">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="#" wire:navigate>User List</a>
                        </li>
                        <li class="nav-item"> <a class="nav-link" href="#" wire:navigate>Add
                                Role</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#settings-menu" aria-expanded="false"
                    aria-controls="settings-menu">
                    <i class="fa fa-cog menu-icon" aria-hidden="true"></i>
                    <span class="menu-title">Settings</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="settings-menu">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="#" wire:navigate>User List</a>
                        </li>
                        <li class="nav-item"> <a class="nav-link" href="#" wire:navigate>Add
                                Role</a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </nav>
</div>
