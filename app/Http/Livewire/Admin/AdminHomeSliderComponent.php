<?php

namespace App\Http\Livewire\Admin;

use App\Models\HomeSlider;
use Livewire\Component;

class AdminHomeSliderComponent extends Component
{
    public function deleteSlide($id){
    $slide = HomeSlider::find($id);
    $slide->delete();
    session()->flash('message','slider has been deleted');
}
    public function render()
    {

        $sliders = HomeSlider::all();
        return view('livewire.admin.admin-home-slider-component',compact('sliders'))->layout('layouts.base');
    }
}
