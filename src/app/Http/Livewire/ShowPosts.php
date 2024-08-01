<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Livewire\Component;

class ShowPosts extends Component
{

    public $date;
    public $posts = [];
    protected $listeners = ['dateSelected' => 'updatePosts'];

    public function updatePosts($date)
    {
        $this->date = $date;
        $this->loadPosts();
    }

    public function loadPosts()
    {
        // $this->posts = Post::whereDate('created_at', $this->date)->get();
        $this->posts = [
            [
                "title" => "a",
                "content" => "lorem text"
            ],
            [
                "title" => "b",
                "content" => "lorem b text"
            ],
            [
                "title" => "c",
                "content" => "lorem b text"
            ],
            [
                "title" => "d",
                "content" => "lorem b text"
            ],
            [
                "title" => "e",
                "content" => "lorem b text"
            ],
            [
                "title" => "f",
                "content" => "lorem b text"
            ]];
    }

    public function render()
    {
        // init posts
        // $this->updatePosts(Carbon::today()->toDateString());
        // return view('livewire.show-posts', compact('iniPosts'));
        return view('livewire.show-posts', ['posts' => $this->posts,'selectDate' => $this->date]);
    }
}
