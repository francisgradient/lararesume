<div class="card">
    <div class="card-header">
      <h5>Basic Table with Border Bottom Color</h5>
      <p class="f-m-light mt-1">
         Use <code>table</code> class to any table, and <code>border-bottom-* </code>class for Border bottom color
        .
      </p>
    </div>
    <div class="table-responsive signal-table custom-scrollbar">
      <table class="table table-hover table-lg">
        <thead class="table-light">
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

            @foreach ($services as $service)

                <tr>
                    <th scope="row"><i class="{{ $service->service_icon}} "></i></th>
                    <td>{{ $service->service_title }}</td>
                    <td>{{ Str::words($service->service_description, 5, '...') }}</td>
                    <td>{{ $service->created_at->toFormattedDateString() }}</td>
                    <td> <span class="badge badge-light-danger">Php</span></td>
                    <td>
                        <ul class="action">
                            <li class="edit"> <a data-bs-toggle="modal" data-bs-target="#editForm"><i @click="$dispatch('edit-mode', {id:{{$service->id}}})" class="fa-regular fa-pen-to-square"></i></a></li>
                            <li class="delete"><a ><i wire:click="delete({{ $service->id }})" wire:confirm.prompt="Are you sure?\n\nType DELETE to confirm|DELETE" class="fa-solid fa-trash-can"></i></a></li>
                        </ul>
                    </td>
                </tr>

            @endforeach

        </tbody>
      </table>
      @livewire('edit-service')
    </div>
</div>
