<?php

namespace App\Http\Livewire;

use App\Models\Application;
use Livewire\Component;
use Livewire\WithFileUploads;

class Applications extends Component
{
    use WithFileUploads;
    public $app_name;
    public $app_category;
    public $app_path;
    public  $app_parameter;
    public $icon;
    public $poster;
    public  $app_id;
    public $applications = array();


    public function render()
    {
        $this->applications = Application::all();
        // dd($this->applications);
        return view('livewire.applications');
    }

    public function updatedIcon()
    {
        $this->validate([
            'app_icon' => 'image|max:1024'
        ]);
    }
}
