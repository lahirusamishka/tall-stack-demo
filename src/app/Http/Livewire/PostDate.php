<?php

namespace App\Http\Livewire;

use Livewire\Component;

class PostDate extends Component
{

    public $date;
    protected $listeners = ['dateSelected' => 'updateDate'];
    public function updatedDate($value)
    {
        $this->emit('dateSelected', $value);
    }

 
    public function updateDate($date){
        // dump($date);
    }

    public function render()
    {
        return view('livewire.post-date');
    }
}
