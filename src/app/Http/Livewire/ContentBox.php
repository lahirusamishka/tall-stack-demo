<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class ContentBox extends Component
{

    public $date;

    public function mount($date)
    {
        $this->date = $date;
        // $from = date('2024-01-01');
        // dump($date);
        // $to = date($date);

        
        // $datalist = Post::whereBetween('created_at', ['2024-08-01', $to])->get();

        // dump($datalist->all());

        $this->loadContentData($date);
    }

    public function loadContentData($date){
        dump($date);
    }

    public function updated(){
       
        $to = date($this->date);

        
        $datalist = Post::whereBetween('created_at', ['2024-08-01', $to])->get();

        dump($datalist->all());
    }

    public function render()
    {
        return view('livewire.content-box');
    }
}
