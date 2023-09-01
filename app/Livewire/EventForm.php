<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class EventForm extends Component
{

    use WithFileUploads;

    public $event;

    public $categories;

    public $sub_categories;

    public $image;

    protected $rules = [
        'event.category_id' => 'required',
        'event.name' => 'required',
        'event.description' => 'required',
        'event.address' => 'required',
        'event.city' => 'required',
        'event.country' => 'required',
        'event.zip_code' => 'required',
        'event.latitude' => 'required',
        'event.longitude' => 'required',
        'event.phone' => 'required',
        'event.email' => 'required',
        'event.website' => 'required',
        'event.check_in' => 'required',
        'event.check_out' => 'required',
        'event.price' => 'required',
    ];

    public function mount($event)
    {
        $this->event = $event;

        $this->categories = \App\Models\Category::all();

        $this->sub_categories = $this->event->categories()->pluck('id')->toArray();
    }

    public function submit()
    {
        $this->validate();

        $this->event->save();

        // check if there are any selected sub_categories
        // if so, sync them with the hotel
        if ($this->sub_categories) {
            $this->event->categories()->sync($this->sub_categories);
        }

        // check if there is an image
        // if so, add it to the hotel
        if ($this->image) {

            // clear the media collection
            $this->event->clearMediaCollection('image');

            // add the image to the media collection
            $this->event->addMedia($this->image->getRealPath())->toMediaCollection('image');
        }

        return redirect()->route('admin.events.index');
    }

    public function render()
    {
        return view('livewire.event-form');
    }
}
