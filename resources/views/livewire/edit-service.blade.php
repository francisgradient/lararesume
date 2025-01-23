<div class="modal-body">
    <form class="row g-3" wire:submit="update" >
        <div class="mb3">
            <label for="service-icon" class="form-label">Icon</label>
            <div class="input-group"><span class="input-group-text bg-light-primary"><i class="{{$service_icon}} txt-primary"></i></span>
                <input wire:model.live.debounce.500ms="service_icon" class="form-control" type="text" placeholder="fa fa-code">
            </div>
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
            <button wire:click="close" data-bs-dismiss="modal" type="button" class="btn btn-danger">Cancel</button>
            <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Update</button>
        </div>
    </form>
</div>