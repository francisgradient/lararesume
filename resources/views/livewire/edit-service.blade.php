<div class="modal fade" id="editForm" tabindex="-1" role="dialog" aria-labelledby="editForm" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="modal-toggle-wrapper">
                    <h3 class="modal-header justify-content-center border-0">Edit Form</h3>
                    <div class="modal-body">
                        <form class="row g-3" wire:submit="update" >
                            <div class="mb3">
                                <label for="service-icon" class="form-label">Icon</label>
                                <input wire:model="service_icon" type="text" class="form-control"/>
                            </div>
                            <div class="mb3">
                                <label for="service-title" class="form-label">Title</label>
                                <input wire:model="service_title" type="text" class="form-control"/>
                            </div>
                            <div class="mb3">
                                <label for="service-description" class="form-label">Description</label>
                                <textarea wire:model="service_description" class="form-control"></textarea>
                            </div>
                            <div class="modal-footer justify-content-center">
                                <button wire:click="close" data-bs-dismiss="modal" type="button" class="btn btn-secondary">Cancel</button>
                                <button type="submit" class="btn btn-secondary" data-bs-dismiss="modal">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
