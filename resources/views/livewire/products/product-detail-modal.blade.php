<div>
    @if ($showModal)
        <!-- Modal -->
        <div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5">{{ $product->name ?? 'Detail Produk' }}
                        </h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        @if ($product)
                            <p>{{ $product->description }}</p>
                        @else
                            <p>Memuat data...</p>
                        @endif
                    </div>
                    <div class="modal-footer">
                        {{-- <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button> --}}
                        <button type="button" class="btn btn-secondary" wire:click="closeModal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    @endif
</div>
