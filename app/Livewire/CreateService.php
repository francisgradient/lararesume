<?php

namespace App\Livewire;

use App\Models\Service;
use Livewire\Attributes\Rule;
use Livewire\Component;

class CreateService extends Component
{
    #[Rule('required')]
    public $service_icon = 'fa fa-code';

    #[Rule('required')]
    public $service_title;

    #[Rule('required')]
    public $service_description;

    public function close(){
        $this->reset();
    }



    public function save(){
        $validated = $this->validate();
        Service::create($validated);
        $this->dispatch('refresh');
        $this->reset();
    }
    
    public function render()
    {
        return view('livewire.create-service');
    }
}
