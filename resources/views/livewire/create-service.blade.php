<div class="modal fade" id="createService" tabindex="-1" role="dialog" aria-labelledby="createService" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="modal-toggle-wrapper">
                    <h3 class="modal-header justify-content-center border-0">Create Service</h3>
                    <div class="modal-body">
                        <form class="row g-3" wire:submit="save" >
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
                                <button wire:click="close" data-bs-dismiss="modal" type="button" class="btn btn-outline-danger">Cancel</button>
                                <button type="submit" class="btn btn-outline-success" data-bs-dismiss="modal">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
