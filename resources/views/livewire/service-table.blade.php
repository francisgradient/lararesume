<div class="card">
    <div class="card-header ">
        <h5>Services</h5>
        <div class="card-header-right common-flex align-items-center">
            <button data-bs-toggle="modal" data-bs-target="#createService" class="btn btn-primary btn-pill"><i class="fa fa-plus-circle" style="color: white"></i><span>Add Service</span></button>
        </div>
        <p class="f-m-light mt-1">Test case</p>
    </div>
    @livewire('create-service')
    <div class="table-responsive signal-table custom-scrollbar">
      <table class="table table-hover table-lg">
        <thead class="table-dark ">
          <tr>
            <th scope="col">Icon</th>
            <th scope="col">Service Name</th>
            <th scope="col">Service Description</th>
            <th scope="col">Created At</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>
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
                            <div class="btn-group btn-group-pill" role="group" aria-label="Basic outlined example">
                                <button class="btn btn-outline-primary" wire:click="$dispatch('edit-mode', {id:{{$service->id}}})" data-bs-toggle="modal" data-bs-target="#editForm" ><i class="fa-solid fa-pen-to-square"></i></button>
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
      @livewire('edit-service')
    </div>
</div>
