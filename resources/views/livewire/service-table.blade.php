<div class="card">
    <div class="card-header ">
        <h5>Services</h5>
        <div class="card-header-right common-flex visual-button visual-button1">
            <button data-bs-toggle="modal" data-bs-target="#createService" class="btn-pill btn-outline-primary border border-primary"><i data-feather="plus-circle"></i><span><strong>Add Service</strong></span></button>
        </div>
        <p class="f-m-light mt-1">Test case</p>
    </div>
    <div class="modal fade" id="createService" tabindex="-1" role="dialog" aria-labelledby="createService" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="modal-toggle-wrapper">
                        <h3 class="modal-header justify-content-center border-0">Create Service</h3>
                        @livewire('create-service')
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="table-responsive signal-table custom-scrollbar">
      <table class="table table-hover table-lg">
        <thead class="table">
          <tr>
            <th scope="col">Icon</th>
            <th scope="col">Service Name</th>
            <th scope="col">Service Description</th>
            <th scope="col">Created At</th>
            <th scope="col">Status</th>
            <th class="text-center" scope="col">Action</th>
          </tr>
        </thead>
        <tbody>

            @forelse ($services as $service)

                <tr>
                    <th scope="row"><i class="{{ $service->service_icon}} "></i></th>
                    <td>{{ $service->service_title }}</td>
                    <td>{{ Str::words($service->service_description, 8, '...') }}</td>
                    <td>{{ $service->created_at->toFormattedDateString() }}</td>
                    <td> <span class="badge badge-light-danger">Php</span></td>
                    <td>
                        <ul class="action">
                            <div class="p-l-20 btn-group btn-group-pill" role="group" aria-label="Basic outlined example">
                                <button class="btn btn-outline-primary" data-bs-target="#editForm" wire:click="$dispatch('editmode', { id: {{ $service->id }} });" data-bs-toggle="modal" ><i class="fa-solid fa-pen-to-square"></i></button>
                                <button class="btn btn-outline-danger" wire:click="delete({{ $service->id }})" wire:confirm.prompt="Are you sure?\n\nType DELETE to confirm|DELETE" ><i class="fa-solid fa-trash-can"></i></button>
                            </div>
                        </ul>
                    </td>
                </tr>

            @empty
            <tr>
                <td colspan="6" class="text-center">No services available.</td>
            </tr>
            @endforelse

        </tbody>
      </table>
        <div class="modal fade" id="editForm" tabindex="-1" role="dialog" aria-labelledby="editForm" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="modal-toggle-wrapper">
                            <h3 class="modal-header justify-content-center border-0">Edit Form</h3>
                            @livewire('edit-service')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
