<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\cars;
use Livewire\Attributes\Rule;
use Livewire\WithFileUploads;

class CreatePost extends Component
{   
    use WithFileUploads;

    #[Rule('required|min:3|max:50')]
    public $car_name;
    public $from_price;
    public $car_detail;

    #[Rule('nullable|sometimes|image|max:2048')]
    public $car_images;

    public function create() {

        $validated = $this->validate([
            'car_name' => 'required|min:3',
            'from_price' => 'required|min:3',
            'car_detail' => 'required|min:3',
        ]);

        if($this->car_images){
            $validated['car_images']  = $this->car_images->store('uploads', 'public');
        }

        cars::create($validated);

        $this->reset('car_name'); 
        $this->reset('from_price'); 
        $this->reset('car_detail'); 
        $this->reset('car_images'); 

        session()->flash('success', 'Created.');
    }

    // public $modelData = [
    //     'car_name' => 'required|min:3',
    //     'form_price' => 'required|min:3',
    //     'car_detail' => 'required|min:3',
    // ];
    

    public function render()
    {
        return view('livewire.create-post', [
            'carLists' => cars::latest()->get()
        ]);
    }
}
