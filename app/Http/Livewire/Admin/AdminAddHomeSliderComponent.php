<?php

namespace App\Http\Livewire\Admin;

use App\Models\HomeSlider;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;

class AdminAddHomeSliderComponent extends Component
{
    public $title;
    public $subtitle;
    public $price;
    public $link;
    public $status;
    public $image;

    public function mount()
    {
        $this->status = 0;

    }
use WithFileUploads;
    public function addSlide()
    {
        $slide = new HomeSlider();
        $slide->title = $this->title;
        $slide->subtitle = $this->subtitle;
        $slide->price = $this->price;
        $slide->link = $this->link;
        $slide->status = $this->status;
        $nameImage = Carbon::now()->timestamp.'.'.$this->image->extension();
        $this->image->storeAs('sliders',$nameImage);
        $slide->image = $nameImage;
        $slide->save();
        session()->flash('message', 'slide has been added');
    }
    public function render()
    {
        return view('livewire.admin.admin-add-home-slider-component')->layout('layouts.base');
    }
}
