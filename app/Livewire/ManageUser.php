<?php

namespace App\Livewire;

use Livewire\Component;
use app\Models\User;
use Livewire\Attributes\Rule;
use Illuminate\Support\Facades\Hash;

class ManageUser extends Component
{

    #[Rule('required|min:3|max:50')]
    public $search;
    public $name;
    public $email;
    public $password;

    public $edit_id;
    public $edit_name;
    public $edit_email;
    public $edit_role;
    public $edit_status;



    public $IsActive = false;


    public function createUser() {

        $hashedPassword = Hash::make($this->password);

        $validated = $this->validate([
            'name' => 'required|min:3',
            'email' => 'required|min:3',
            'password' => 'required|min:3',
        ]);

        User::create($validated);

        $this->reset(['name', 'email', 'password']); 

        session()->flash('success', 'Created.');
     
    }

    public function showdatapop($userID) {
        $this->IsActive = true;

        $this->edit_id = $userID;
        $this->edit_name = User::find($userID)->name;
        $this->edit_email = User::find($userID)->email;
        $this->edit_role = User::find($userID)->role;
        $this->edit_status = User::find($userID)->status;
    }

    public function update() {

       
        $role_convert = strval($this->edit_role);
        $status_convert = strval($this->edit_status);

        // dd([
        //     $this->edit_id,
        //     $this->edit_name,
        //     $this->edit_email,
        //     $role_convert,
        //     $status_convert,
        // ]);

        $validated = $this->validate([
            'edit_name' => 'required|min:3',
            'edit_email' => 'required|min:3',
        ]);

        User::find($this->edit_id)->update([
            'name' => $this->edit_name,
            'email' => $this->edit_email,
            'role' => $role_convert,
            'status' => $status_convert,
        ]);

        $this->IsActive = false;
    }

    public function closepop() {
        $this->IsActive = false;
    }

    public function render()
    {
        return view('livewire.manage-user', [
            'userLists' => User::latest()->where('name','like',"%{$this->search}%")->paginate(5)
        ]);
    }
}
