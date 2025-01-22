<?php

namespace App\Livewire;

use App\Models\Service;
use Livewire\Attributes\On;
use Livewire\Attributes\Rule;
use Livewire\Component;

class EditService extends Component
{
    public $data;

    #[Rule('required')]
    public $service_icon;

    #[Rule('required')]
    public $service_title;

    #[Rule('required')]
    public $service_description;

    #[On('reset-modal')]
    public function close(){
        $this->reset();
    }

    #[On('edit-mode')]
    public function edit($id){
        $this->data = Service::findOrfail($id);
        $this->service_icon = $this->data->service_icon;
        $this->service_title = $this->data->service_title;
        $this->service_description = $this->data->service_description;

    }

    public function update(){
        $validated = $this->validate();
        if ($this->data) {
            $this->data->update($validated);

            // Emit an event to refresh the table
            $this->dispatch('refresh');
            $this->reset();

        } else {
            session()->flash('error', 'Service not found.');
        };

    }

    public function render()
    {
        return view('livewire.edit-service');
    }
}
