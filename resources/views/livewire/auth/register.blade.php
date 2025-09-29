<div>
    <div class="container-scroller">
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
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth px-0">
                <div class="row w-100 mx-0">
                    <div class="col-lg-4 mx-auto">
                        <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                            <div class="brand-logo">
                                <img src="../../assets/images/logo.svg" alt="logo">
                            </div>
                            <h4>New here?</h4>
                            <h6 class="font-weight-light">Signing up is easy. It only takes a few steps</h6>
                            <form class="pt-3" wire:submit="register">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-lg" placeholder="Username"
                                        wire:model="name">
                                    <small>
                                        <div class="text-danger mt-1">
                                            @error('name')
                                                <i class="fa fa-exclamation-circle"></i>
                                                {{ $message }}
                                            @enderror
                                    </small>
                                </div>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control form-control-lg" placeholder="Email"
                                wire:model="email">
                            <small>
                                <div class="text-danger mt-1">
                                    @error('email')
                                        <i class="fa fa-exclamation-circle"></i>
                                        {{ $message }}
                                    @enderror
                                </div>
                            </small>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control form-control-lg" id="exampleInputPassword1"
                                placeholder="Password">
                            <small>
                                <div class="text-danger mt-1">
                                    @error('password')
                                        <i class="fa fa-exclamation-circle"></i>
                                        {{ $message }}
                                    @enderror
                                </div>
                            </small>
                        </div>
                        <div class="mb-4">
                            <div class="form-check">
                                <label class="form-check-label text-muted">
                                    <input type="checkbox" class="form-check-input">
                                    I agree to all Terms & Conditions
                                </label>
                            </div>
                        </div>
                        <div class="mt-3 d-grid gap-2">
                            <button class="btn btn-block btn-info btn-lg font-weight-medium auth-form-btn"
                                type="submit">SIGN UP</button>
                        </div>
                        <div class="text-center mt-4 font-weight-light">
                            Already have an account? <a href="{{ route('login') }}" class="text-info">Login</a>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
</div>
