<?php

namespace App\Livewire;

use App\Models\Service;
use Livewire\Attributes\On;
use Livewire\Component;

class ServiceTable extends Component
{
    public $services;

    public function mount()
    {
        $this->loadServices();
    }

    public function loadServices()
    {
        $this->services = Service::select('id', 'service_icon', 'service_title', 'service_description', 'created_at')->get();
    }

    #[On('refresh')]
    public function refreshTable()
    {
        $this->loadServices();
    }

    public function delete($id){
        $service = Service::findOrfail($id);
        //$this->authorize('delete', $service);
        $service->delete();
        $this->refreshTable();
    }

    public function render()
    {
        return view('livewire.service-table', ['services' => $this->services]);
    }
}
