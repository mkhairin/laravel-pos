<div>
    <div class="col-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Form Update</h4>
                <form class="form-sample" wire:submit.prevent="update">
                    <p class="card-description">
                        Product Information
                    </p>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="Insert the product name..."
                                        wire:model="name">
                                    <div class="text-danger mt-1">
                                        @error('name')
                                            <i class="fa fa-exclamation-circle"></i>
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Price</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" placeholder="Insert the product price..."
                                        wire:model="price">
                                    <div class="text-danger mt-1">
                                        @error('price')
                                            <i class="fa fa-exclamation-circle"></i>
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Stock</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" wire:model="stock"
                                        placeholder="Insert the stock of product..." />
                                    <div class="text-danger mt-1">
                                        @error('stock')
                                            <i class="fa fa-exclamation-circle"></i>
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Image</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" wire:model="image_url"
                                        placeholder="Insert the image product..." />
                                    <div class="text-danger mt-1">
                                        @error('image_url')
                                            <i class="fa fa-exclamation-circle"></i>
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Description</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" rows="6" wire:model="description"></textarea>
                                    <div class="text-danger mt-1">
                                        @error('description')
                                            <i class="fa fa-exclamation-circle"></i>
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-info me-2">Submit <div wire:loading>
                            <i class="fa fa-circle-o-notch"></i>
                        </div> </button>
                    <a class="btn btn-light" href="{{ route('products.index') }}" role="button"
                        wire:navigate>Cancel</a>
                </form>
            </div>
        </div>
    </div>
</div>
