<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Illuminate\Support\Facades\Hash;



class UserChangepasswordComponent extends Component
{
    public $password;
    public $new_password;
    public $password_confirmation;
    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'password'=> 'required',
            'new_password'=>'required|min:8|confirmed:different:password'

        ]);
    }

    public function changePassword()
    {
        $this->validate([
            'password'=> 'required',
            'new_password'=>'required|min:8|confirmed:different:password'

        ]);
        if(Hash::check($this->password,Auth::user()->password))
        {
            $user = User::findOrFail(Auth::user()->id);
            $user->password = Hash::make($this->new_password);
            $user->save();
            session()->flash('message_success','password updated');
        }
        else
        {
            session()->flash('message_error','the password incorrect');
        }
    }

    public function render()
    {
        return view('livewire.user.user-changepassword-component')->layout('layouts.base');
    }
}
