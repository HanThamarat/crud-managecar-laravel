<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\cars;
use Livewire\Attributes\Rule;
use Livewire\WithFileUploads;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Auth;



class CreatePost extends Component
{   
    use WithFileUploads;
    use WithPagination;

    #[Rule('required|min:3|max:50')]
    public $car_name;
    public $from_price;
    public $car_detail;
    public $search;
    public $editcar_id;
    public $editcar_name;
    public $editfrom_price;
    public $editcar_detail;

    #[Rule('nullable|sometimes|image|max:2048')]
    public $car_images;

    public function create() {

        $userId = Auth::id();

        $validated = $this->validate([
            'car_name' => 'required|min:3',
            'from_price' => 'required|min:3|numeric',
            'car_detail' => 'required|min:3',
        ]);

        $validated['user_id'] = $userId;
        
        if($this->car_images){
            $validated['car_images']  = $this->car_images->store('uploads', 'public');
        }

        cars::create($validated);

        $this->reset(['car_name', 'from_price', 'car_detail', 'car_images']); 

        session()->flash('success', 'Created.');
    }

    public function closeForm() {
        $this->isActive = false;
    }

    public function delete($car_id) {
        cars::find($car_id)->delete('car_id');
    }

    public $isActive = false;

    public function edit($car_id) {

        $this->isActive = true;

        $this->editcar_id = $car_id;
        $this->editcar_name = cars::find($car_id)->car_name;
        $this->editfrom_price = cars::find($car_id)->from_price;
        $this->editcar_detail = cars::find($car_id)->car_detail;

    }

    public function update() {

        $validated = $this->validate([
            'editcar_name' => 'required|min:3',
            'editfrom_price' => 'required|min:3|numeric',
            'editcar_detail' => 'required|min:3',
        ]);

        cars::find($this->editcar_id)->update([
            'car_name' => $this->editcar_name,
            'from_price' => $this->editfrom_price,
            'car_detail' => $this->editcar_detail,
        ]);

        $this->isActive = false;
    }

    public function render(){

        $userId = Auth::id();

        return view('livewire.create-post', [
            'carLists' => cars::latest()->where('car_name','like',"%{$this->search}%")->paginate(5)
        ]);
    }
}
